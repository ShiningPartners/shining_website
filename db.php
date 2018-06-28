<?php
date_default_timezone_set('Asia/Taipei');
// ini_set('display_errors', 1);
// error_reporting(E_ALL);


$link = mysqli_connect(
	"localhost", 
	"shining_admin", 
	"UBOB6!~On7@?", 
	"shining_productDB"
);

mysqli_set_charset($link, 'utf8');

?>