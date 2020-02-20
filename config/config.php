<?php
session_start();
error_reporting(0);

// starting config
$subdir = "eop";

$server = $_SERVER['SERVER_NAME'];
$url = "//".$server."/".$subdir;
$dir = $_SERVER["DOCUMENT_ROOT"];
$root = $dir."/".$subdir;


// Connect Database
$dsn = 'mysql:host=localhost;dbname=eop';
$con = new PDO($dsn, 'root','');

// Dummy User Data
$username= "admin";
$password= "password";

// set $auth
if($_SESSION['auth'])
  $auth = $_SESSION['auth'];
    else $auth = null;

?>