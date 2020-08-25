<?php
$conn = mysqli_connect('localhost', 'root', '', 'learn system');




$user_check=$_SESSION['btn-login'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT username FROM MANAGER WHERE username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];


?>