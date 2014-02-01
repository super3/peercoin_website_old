<?php

require('include/simple_html_dom.php');

// Configuration values
define('DB_PATH', 'ppcmarket.sqlite3');
define('INFO_EXPIRY', 90); // Seconds before cached data is re-downloaded

// Database schema is one table, as follows:
// CREATE TABLE ppcmarket(
//   price REAL NOT NULL,
//   market_cap REAL NOT NULL,
//   total_supply INTEGER NOT NULL,
//   updated DATETIME NOT NULL
// )

// Grab new data from CoinMarketCap if our data is expired
function fetch_cmc_market_info() {
    // Grab the CMC homepage
    $html = file_get_html("http://www.coinmarketcap.com/");
    // Get Peercoin's table
    $ppc_data = $html->find('#ppc', 0);

    // Market cap is stored in the "data-usd" tag of a 'td'
    $market_cap_td = $ppc_data->find('td[class=market-cap]', 0);
    if (is_object($market_cap_td)) {
        $market_cap = $market_cap_td->getAttribute('data-usd');
        // Market cap is returned with commas that break floatval()
        $market_cap = str_replace(",", "", $market_cap);
    }
    else {
        $market_cap = null;
    }

    // Individual price is stored in the "data-usd" tag of an 'a'
    $ppc_usd_a = $ppc_data->find('a[class=price]', 0);
    if (is_object($ppc_usd_a)) {
        $ppc_usd = $ppc_usd_a->getAttribute('data-usd');
    }
    else {
        $ppc_usd = null;
    }
    
    // Total supply does not have a marking class,
    // but at the time of writing is the 5th <td>
    $total_supply_td = $ppc_data->find('td', 4);
    if (is_object($total_supply_td)) {
        $total_supply = $total_supply_td->plaintext;
        // Ugly hack because CMC doesn't provide a data tag
        // so we have to strip off the text
        $total_supply = str_replace(",", "", $total_supply);
        $total_supply = str_replace(" PPC", "", $total_supply);
    }
    else {
        $total_supply = null;
    }

    // Prepare an array for the data,
    // returned as floats
    $info = array(
        'price' => floatval($ppc_usd),
        'market_cap' => floatval($market_cap),
        'total_supply' => intval($total_supply),
    );
    
    return $info;
}

// Just return the price from Vircurex
function fetch_vircurex_market_price() {
    $btc_usd_json = file_get_contents('https://vircurex.com/api/get_highest_bid.json?base=BTC&alt=USD');
    $btc_usd = json_decode($btc_usd_json)->value;

    $ppc_btc_json = file_get_contents('https://vircurex.com/api/get_highest_bid.json?base=PPC&alt=BTC');
    $ppc_btc = json_decode($ppc_btc_json)->value;

    $ppc_usd = $btc_usd * $ppc_btc;
    return round($ppc_usd, 2);
}

// Get either cached or new market data
function market_info() {
    $db = new SQLite3(DB_PATH);
    $query = $db->query("SELECT * FROM ppcmarket LIMIT 1");
    $row = $query->fetchArray();

    // To check if cached data has expired
    $now = time();
    
    if (!$row) {
        // SQLite3 database is empty, populate it
        $info = fetch_cmc_market_info();
        $db->query("INSERT INTO ppcmarket(price, market_cap, total_supply, updated) VALUES({$info['price']}, {$info['market_cap']}, {$info['total_supply']}, {$now})");
    }
    else {
        if ($now - $row['updated'] > INFO_EXPIRY) {
            // Cached data is expired, fetch new data
            $info = fetch_cmc_market_info();
            
            if ($info['price'] == 0) { // CMC is freaking out, grab from Vircurex instead
                // "Dumb mode" only updates price and market cap, not total supply (can add later)
                $price = fetch_vircurex_market_price();
                $market_cap = $price * $info['total_supply']; // Calculate a market cap based on Vircurex price and last known supply
                
                $db->query("UPDATE ppcmarket SET price={$info['price']}, market_cap={$market_cap}, updated={$now}");
                $row['price'] = $price;
                $row['market_cap'] = $market_cap;
            }
            else {
                $db->query("UPDATE ppcmarket SET price={$info['price']}, market_cap={$info['market_cap']}, total_supply={$info['total_supply']}, updated={$now}");
                $row = $info;
            }
        }
        // Else, return the cached data
        
        $info = array(
            'price' => $row['price'],
            'market_cap' => $row['market_cap'],
            'total_supply' => $row['total_supply'],
        );
    }
    
    return $info;
}

// Return a JSON array of price / market cap / total supply
echo(JSON_encode(market_info()));

?>