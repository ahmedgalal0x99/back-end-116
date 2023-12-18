<?php
require_once "./../connect.php";
session_start();

if(isset($_POST['title'])){
    $title = $_POST['title'];
    $title = sanitize($title);
    
    $q = "INSERT INTO `tasks`(`title`) VALUES('$title')";
    $res = mysqli_query($conn,$q);
    // echo mysqli_affected_rows($conn);
    if(mysqli_affected_rows($conn) == 1){
        $_SESSION['insert'] = 1;
        
        header("Location:./../index.php");
    }
    
}
else{
    header("Location:./../index.php");
}


function sanitize($str){
    
    return htmlspecialchars(htmlentities(trim($str)));
}

?>