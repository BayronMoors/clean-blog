<?php  
/**
 * 
 *  ./app/config/params.php
 * 
 */

// DB PARAMS
define("DB_HOST", "localhost");
define("DB_NAME", "cleanblog_2017");
define("DB_USER", "root");
define("DB_PASSWORD", "root");

// UTILITIES
$root = explode('index.php', $_SERVER['PHP_SELF']);
define('ROOT', 'http://'.$_SERVER['HTTP_HOST'].$root[0]);
// VARIABLE INIT
$content = "";
$title ="";

