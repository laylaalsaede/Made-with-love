<?php
$db_host = 'localhost:3307';
$db_username = 'root';
$db_password = '';
$db_name = 'learn system';
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

mysqli_set_charset($conn,"utf8")
?>