<?php

require('include/simple_html_dom.php');

// Configuration values
define('DB_PATH', 'ppcmarket.sqlite3');
define('INFO_EXPIRY', 30); // Seconds before cached data is re-downloaded

// Database schema is one table, as follows:
// CREATE TABLE ppcmarket(
//   price REAL NOT NULL,
//   market_cap REAL NOT NULL,
//   updated DATETIME NOT NULL
// )

// Grab new data from CoinMarketCap if our data is expired
function fetch_market_info() {
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

    // Prepare an array for the data,
    // returned as floats
    $info = array(
        'price' => floatval($ppc_usd),
        'market_cap' => floatval($market_cap),
    );
    
    return $info;
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
        $info = fetch_market_info();
        $db->query("INSERT INTO ppcmarket(price, market_cap, updated) VALUES({$info['price']}, {$info['market_cap']}, {$now})");
    }
    else {
        if ($now - $row['updated'] > INFO_EXPIRY) {
            // Cached data is expired, fetch new data
            $info = fetch_market_info();
            $db->query("UPDATE ppcmarket SET price={$info['price']}, market_cap={$info['market_cap']}, updated={$now}");
            $row = $info;
        }
        // Else, return the cached data
        
        $info = array(
            'price' => $row['price'],
            'market_cap' => $row['market_cap'],
        );
    }
    
    return $info;
}

// Return a JSON array of price and market cap
echo(JSON_encode(market_info()));

?>