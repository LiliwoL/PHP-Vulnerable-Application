<?php
# Attention à bien faire correspondre avec le .env.docker
$connection = 'mysql-vulnerable-app';
$username = 'phpgoof';
$password = 'password';
$database = 'phpgoof';

session_start();

$conn = mysqli_connect($connection, $username, $password, $database);

?>