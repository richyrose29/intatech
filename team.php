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
    <link rel="stylesheet" href="teampage.css">
    <script src="https://kit.fontawesome.com/04ffca717e.js" crossorigin="anonymous"></script>
    <title>Team</title>
</head>
<body class="fade">



<div class="topnav">
<a  href="dashboard.php"><i class="fas fa-home"></i>Home</a>
  
  <a class="active" href="search.php"><i class="fas fa-users"></i>Team</a>
  <a href="makeprofile.php"><i class="fas fa-tools"></i>Profile Builder</a>
  <a href="logout.php"><i class="fas fa-key"></i></i>Logout</a>
</div>
  

<div class="header-container">
    <div class="team-img">
    

   

    
    </div> 


    <div class="container">
    
 
   <table>
  <tr>
    <th>Profile</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>NIM</th>
    <th>Vehicle No</th>
    <th>Job Title</th>

  </tr>
  <tr>
    
    <td><img class="employee-image" id="profile" src="images/smile.jpg" alt=""></td>
    <td>Peter</td>
    <td>Smith</td>
    <td>peterSmith@intatech2019.gmail.com</td>
    <td class="hash1">*****</td>
    <td class="address">1 March Avenue Liverpool</td>
    <td class="hash2">*****</td>
    <td class="nim">JM65432</td>
    <td class="hash3">*****</td>
    <td class="carno">73462</td>
    <td>CEO</td>
    
  </tr>
 
  
  <tr>
    
    <td><img class="employee-image" id="profile" src="images/kim.jpg" alt=""></td>
    <td>Kim</td>
    <td>Baker</td>
    <td>kimBaker@intatech2019.gmail.com</td>
    <td class="hash1">*****</td>
    <td class="address">22 Green Avenue Liverpool</td>
    <td class="hash2">*****</td>
    <td class="nim">JM76285</td>
    <td class="hash3">*****</td>
    <td class="carno">09102</td>
    <td>Office Manager</td>
    
  </tr>


  <td><img class="employee-image" id="profile" src="images/chris.jpg" alt=""></td>
    <td>Chris</td>
    <td>Wild</td>
    <td>chrisWild@intatech2019.gmail.com</td>
    <td class="hash1">*****</td>
    <td class="address">4 Smile Close Liverpool</td>
    <td class="hash2">*****</td>
    <td class="nim">JM06271</td>
    <td class="hash3">*****</td>
    <td class="carno">69124</td>
    <td>Tech Support</td>
    
  </tr>

  <td><img class="employee-image" id="profile" src="images/hal.jpg" alt=""></td>
    <td>Holly</td>
    <td>Wood</td>
    <td>hollyWood@intatech2019.gmail.com</td>
    <td class="hash1">*****</td>
    <td class="address">13 Sunset Way Liverpool</td>
    <td class="hash2">*****</td>
    <td class="nim">JM43209</td>
    <td class="hash3">*****</td>
    <td class="carno">00182</td>
    <td>Admin</td>
    
  </tr>












</table>
        

      
</div>


</div> 



<div class="bg-modal">

<div class="modal-content">

<div class="close">+</div>

<img class="employee-image" src="images/smile.jpg" alt="">

<form action="" id="form_id" method="post" name="myform">

<input type="text" placeholder="Admin" name="username" id="username">
<input type="password" class="pass-place" name="password" id="password" placeholder="Password">
<input type = "button" value="Login" class="modal-btn" id="submit" onclick="validate()">
</form>

</div>


</div>












<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="script/makeprofile.js"></script>

<script src="script/team.js"></script>


</body>
</html>






