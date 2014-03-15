<?php
//file to print out tab info as own single page
$page =$_GET['doc'];
$body=''; //will store tab contents if valid tab id passed
switch($page)
{
//community
case 'forum':
$body = file_get_contents('page_content/community/tab_community_forum.php');
$body = "<h1>Community forums</h1>".$body;
break;

case 'overview':
$body = file_get_contents('page_content/community/tab_community_overview.php');
$body = "<h1>Community Overview</h1>".$body;
break;

case 'socialmedia':
$body = file_get_contents('page_content/community/tab_community_socialmedia.php');
$body = "<h1>Social Media</h1>".$body;
break;

//use
case 'mine':
$body = file_get_contents('page_content/use/tab_use_mining_tutorial.php');
$body = "<h1>Mine</h1>".$body;
break;

case 'mint':
$body = file_get_contents('page_content/use/tab_use_minting_tutorial.php');
$body = "<h1>Mint</h1>".$body;
break;

case 'spend':
$body = file_get_contents('page_content/use/tab_use_spending_tutorial.php');
$body = "<h1>Spend</h1>".$body;
break;

case 'tools':
$body = file_get_contents('page_content/use/tab_use_tools_tutorial.php');
$body = "<h1>Tools</h1>".$body;
break;

//understand
case 'about_mining':
$body = file_get_contents('page_content/understand/tab_about_mining.php');
$body = "<h1>About Mining</h1>".$body;
break;

case 'about_minting':
$body = file_get_contents('page_content/understand/tab_about_minting.php');
$body = "<h1>About Minting</h1>".$body;
break;

case 'about_spending':
$body = file_get_contents('page_content/understand/tab_about_spending.php');
$body = "<h1>About Spending</h1>".$body;
break;

case 'about_peercoin':
$body = file_get_contents('page_content/understand/tab_about_peercoin.php');
$body = "<h1>About Peercoin</h1>".$body;
break;

//support
case 'participate':
$body = file_get_contents('page_content/support/tab_support_participate.php');
$body = "<h1>Participate</h1>".$body;
break;

case 'volunteer':
$body = file_get_contents('page_content/support/tab_support_participate.php');
$body = "<h1>Volunteer</h1>".$body;
break;

default:
header('location: http://peercoin.net/404.php');//relative path messed up by rewrite 
}
include('header.php');
echo $body;
include ('footer.php');
?>