<?php
// $database ='localhost';
// $dbName = 'employee';
// $dbUser = 'root';
// $dbPass = '';
define("DB_HOST", "localhost:3307");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "employee");
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// $mysqli = mysqli_connect($database, $dbUser, $dbPass, $dbName);
?>