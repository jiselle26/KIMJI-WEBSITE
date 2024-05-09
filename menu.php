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
 

<div class="container">
    <header>
      <h1> MENU </h1>
      <div class="shopping">
        <img src="img/cart.png">
        <span class="quantity">0</span>
      </div>
    </header>

    <div class="list"></div>
  </div>
  <div class="card">
    <h1>Cart</h1>
    <ul class="listCard"></ul>
    <div class="checkOut">
      <button class="buybtn"> Buy Now </button>
      <div class="total">0</div>
      <div class="closeShopping">Close</div>

    </div>


  </div>

  <script src="app.js"></script>


    </body>
</html>