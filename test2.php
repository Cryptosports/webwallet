<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

//require('class.bitcoind.php');
require('config.php');
require('class.users.php');

$i = new users($conf);
//$i->login();


if(isset($_SESSION['user_session'])){

if(isset($_GET['logout'])) $i->logout();
echo "Welcome ".$_SESSION['user_session']." <br><br><a href=?logout=true>Logout</a>";
}else{

if(isset($_GET['login'])) { 
$i->login();
}else{
echo 'login please: <form action="test2.php" method="GET"><input type="hidden" name="login" value="true"><input name="user" type="text" ><input type="text" name="pass"><input type="submit" value="Submit"></form>';
}
}


//$bitcoin = new Bitcoin('bitcoinrpc','123');

//print_r($bitcoin->getblock('000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f'));
