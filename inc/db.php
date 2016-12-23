<?php
define ("HOST","localhost");
define ("USER","root");
define ("PASSWORD","");
define ("DBNAME","websitew");

function Connect_db($host,$user,$password,$dbname,$options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"))
{
    $db=new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$password,$options);
    return $db;
}
