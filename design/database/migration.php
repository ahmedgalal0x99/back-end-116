<?php 

$host = "localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($host,$user,$pass, "todoapp");

// $q = "CREATE DATABASE IF NOT EXISTS todoapp";
$q = "CREATE TABLE IF NOT EXISTS tasks(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(200) NOT NULL 
)";
$res = mysqli_query($conn,$q);

var_dump($res);



?>