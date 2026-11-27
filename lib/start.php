<?php 
mb_internal_encoding("UTF-8");
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();

define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "landing-order");

require_once "lib/functions.php"

?>