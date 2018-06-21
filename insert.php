<?php

ini_set('display_errors', 1);

$title = $_POST['title'];
$content = $_POST['content'];

include "db.php";

$sql =
    " INSERT INTO news_list " .
    " (creat_time, title, content) " .
    " VALUES (NOW(), '$title', '$content') ";

$res = mysqli_query($link, $sql);

header('Location: form.php');
