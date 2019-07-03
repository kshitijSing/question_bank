<?php

define("PRIVATE_PATH",dirname(__FILE__));
define("PROJECT_PATH",dirname(PRIVATE_PATH));
define("PUBLIC_PATH",PROJECT_PATH.'/public');
include('database.php');

$db=db_connect();
$errors=[];
include('query_functions.php');

  ?>