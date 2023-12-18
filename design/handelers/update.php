<?php
session_start();
require_once "./../connect.php";

if(isset($_GET['id'])){
   $id = $_GET['id'];
   $title = $_POST['title'];

   $q1 = "SELECT * FROM `tasks` WHERE `id` = '$id'";
   $res1 = mysqli_query($conn, $q1);
   $check = mysqli_fetch_row($res1);
   if(!$check){
       $_SESSION['undelete'] = 1;
       header("Location:./../index.php");     
       }

       $q = "UPDATE `tasks` SET `title` = '$title' WHERE `id` = '$id' ";
       $res = mysqli_query($conn , $q);
       
       if(mysqli_affected_rows($conn) == 1){
        $_SESSION['update'] = 1;

        header("Location:./../index.php");
       }
    
}else{
    header("Location:./../index.php");
    
}




?>