<?php

//Mysql Login

function myinit(){
global $conf;
$conn = new mysqli($conf['sql_host'], $conf['sql_user'], $conf['sql_pass'], $conf['sql_name']);

return $conn;
}
