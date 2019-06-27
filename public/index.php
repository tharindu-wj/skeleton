<?php

require "../config.php";
require "../vendor/autoload.php";

use Src\Classes\DB;

$db = new DB();

$db->query("SELECT * FROM products");
$_result = $db->resultSet();


print_r($_result);

