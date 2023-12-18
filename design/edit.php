<?php
// session_start();
// require_once "./connect.php";

// $q = "SELECT * FROM `tasks`";
// $res = mysqli_query($conn , $q);
// var_dump($_GET);
$id = $_GET['id'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>

    <style>
        .insert , .delete{
            background-color: rgb(0,200,0);
            color: white;
            padding: 10px;
            margin: 10px;
            border-radius: 20px;
            animation: move 3s 1;

            opacity: 0;
        }

        .delete{
            background-color: rgb(220,0,0);
        }


        @keyframes move {

            0%{
                opacity: 1;
            }

            100%{
                opacity: 0;
            }
            
        }


    

        
    </style>
</head>

<body>


  <?php

if(isset($_SESSION['insert'])){
    echo "<div class = 'insert'> Data Inserted Successfully </div>";
    unset($_SESSION['insert']);
  }

  if(isset($_SESSION['delete'])){
    echo "<div class = 'delete'> Data Deleted Successfully </div>";
    unset($_SESSION['delete']);
  }

  if(isset($_SESSION['undelete'])){
    echo "<div class = 'delete'> User NOT Found!! </div>";
    unset($_SESSION['undelete']);
  }
  
  
  
  ?>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="./handelers/update.php?id=<?php echo $id ?>" method="POST" class="form border p-2 my-5">
                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="Edit todo">
                    <input type="submit" value="Edit" class="form-control btn btn-primary my-3 " placeholder="Edit todo">
                </form>
            </div>
           
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>