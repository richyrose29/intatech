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
    <link rel="stylesheet" href="make-profile.css">
    <script src="https://kit.fontawesome.com/04ffca717e.js" crossorigin="anonymous"></script>
    <title>Profile Builder</title>
</head>
<body class="fade">



<div class="topnav">
  <a href="dashboard.php"><i class="fas fa-home"></i>Home</a>
  <a href="team.php"><i class="fas fa-users"></i>Team</a>
  <a class="active" href="makeprofile.php"><i class="fas fa-tools"></i>Profile Builder</a>
  <a href="logout.php"><i class="fas fa-key"></i></i>Logout</a>
  
</div>
  

<div class="header-container">
<div class="team-img">
    

    </div> 
  <h1 class="header"> Create Your Profile </h1> 
    
  
       


      <form action="makeprofile.php" method="post" enctype="multipart/form-data">

      <?php if(!empty($msg)): ?> 
        <?php echo $msg; ?> 
      <?php endif; ?> 

        <div class="form-group">
            <label for="profileImage">Upload Your Profile Image Here</label>
                
                <img src="images/profile.svg" alt="placeholder" id="profileDisplay" onclick="triggerClick()">
                
                <input type="file" name="profileImage" id="profileImage" class="form-control" style="display:none;" onchange="displayImage(this)">
                </form>  
        </div>



                
        <div class="table-div">
     

     <table class="table">
       
       
       <tr>
         <td>First Name</td>
         <td><textarea name="firstname" id="bio" class="form-control"></textarea></td>
       </tr>
      
       <tr>
         <td>Last Name</td>
         <td><textarea name="lastname" id="bio" class="form-control"></textarea></td>
       </tr>
     
     
       <tr>
         <td>Date Of Birth</td>
         <td><textarea name="dob" id="bio" class="form-control"></textarea></td>
       </tr>
     
     
       <tr>
         <td>Address</td>
         <td><textarea name="address" id="bio" class="form-control"></textarea></td>
       </tr>
     
       <tr>
         <td>Phone Number</td>
         <td><textarea name="phone" id="bio" class="form-control"></textarea></td>
       </tr>
     
       <tr>
         <td>Job Title</td>
         <td><textarea name="jobtitle" id="bio" class="form-control"></textarea></td>
       </tr>
     
     
     </table>
     


     <div class="form-group">
                    <button type="submit" name="save-user" class="profile-btn">Save User</button>
     </div>
       





              


      
 </div>  


   

    
</div> 
</div> 
























<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="script/makeprofile.js"></script>


</body>
</html>