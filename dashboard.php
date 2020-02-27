<?php
require('db.php');
include("auth.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="home_style.css">
    <script src="https://kit.fontawesome.com/04ffca717e.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body class="fade">



<div class="topnav">
<a class="active" href="home.php"><i class="fas fa-home"></i>Home</a>
  <a href="team.php"><i class="fas fa-users"></i>Team</a>
  <a href="makeprofile.php"><i class="fas fa-tools"></i>Profile Builder</a>
  <a href="logout.php"><i class="fas fa-key"></i></i>Logout</a>
</div>
  

<div class="header-container">
<div class="team-img">
    

    </div> 
    <h1 class="header"> <img src="images/tech.png" alt="" style="height:30px;">IntaTech</h1>
    <h2>Rescourcing & IT</h2>
  
       



    <div class="welcome">Welcome To The Team Portal
      <p>The Inta Tech Team Portal allows you to keep in contact and view other team members inforamtion.</p>
   

</div> 



<div class="heading-container">
  <div class="header1">Messages</div>
  <div class="header2">Calendar</div>
</div>

<div class="image-container">
  <div class="image image1"></div>
  <div class="image image2"></div>
</div>

<div class="heading-container">
  <div class="header3">Notes</div>
  <div class="header6">Settings</div>
</div>

<div class="image-container">
<div class="image3"></div>
<div class="image6"></div>
</div>




  


  

















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="script/home.js"></script>






</body>
</html>