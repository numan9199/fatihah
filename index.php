<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    
<div class="bar">
    <div class="container bg">
        
        <div class="menu">
            <div class="logo">
                <a href=""><i></i></a>

            </div>
            <ul>
            <li><a href="#">Home</a><a href="homepage.php"></a></li>
            <li><a href="#">Healthy Food</a><a href="food.php"></a></li>
            <li><a href="#">Healthy Exercise</a><a href="exercise.php"></a></li>
            <li><a href="#">Healthy Rest</a><a href="rest.php"></a></li>
            <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <div class="header"></div>
        
            <div class="-grid-card"></div>
            
        </div>
        
    </div>
</div>


</body>
</html>