<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="style.css">
  
  <script src="bar.js" defer></script>
  <script src="script.js"></script>


</head>

<body>
  <nav>
    
        <div class="signUp">
            <a href="register.php">Sign Up</a>

        <div class="home"> 
            <a href="home.php"> Home </a>

        <div class="about">
            <a href="about.php">About </a>

        <div class="menu">
            <a href="menu.php">Menu </a>

            <div class="search-container">
              <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search fa-search"></i></button>
              </form>

            </div>
  </nav>
  <div class="abouto">
  <img src="img/des1.png" >
</div>



  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="img/11.png" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="img/22.png" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img/33.png" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>


    <div class="aboutoa">
      <img src="img/des2.png" alt="">
    </div>

 






    </body>
</html>