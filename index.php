<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require './config.php';
require './smarty/Smarty.class.php';
require './jsonRPCClient.php';


$i = new jsonRPCClient("http://".$conf['rpc_user'].":".$conf['rpc_pass']."@".$conf['rpc_host'].":".$conf['rpc_port']."/");

$data = $i->getinfo();

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = false;

$smarty->assign('data',$data['blocks']);

$smarty->display('index.tpl');
