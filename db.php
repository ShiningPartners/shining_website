<?php
date_default_timezone_set('Asia/Taipei');
ini_set('display_errors', 1);
error_reporting(E_ALL);


$link = mysqli_connect(
	"localhost", 
	"chienhao_user", 
	"RLUI6b.3y^Bm", 
	"chienhao_db"
);

mysqli_set_charset($link, 'utf8');

?>