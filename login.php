<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="login.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='message'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>

<h1 class="header"> <img src="images/tech.png" alt="" style="height:30px;">IntaTech</h1>


<h2 class="sub-header">Rescourcing & IT</h2>




<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />




<div class="move-button">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                        result="goo" />
                    <feComposite in="SourceGraphic" in2="goo" />
                </filter>
            </defs>
        </svg>
</div>
        <div> 
            <span class="button--bubble__container">
            <input id="#campaign" name="submit" type="submit" value="Login" class="button button--bubble">
                  
              
                <span class="button--bubble__effect-container">
                    <span class="circle top-left"></span>
                    <span class="circle top-left"></span>
                    <span class="circle top-left"></span>

                    <span class="button effect-button"></span>

                    <span class="circle bottom-right"></span>
                    <span class="circle bottom-right"></span>
                    <span class="circle bottom-right"></span>
                </span>
            </span>

</div>   
         







<div class="sign-up">
<span>
<a href="registration.php">Sign Up</a>
</span>
</div>

<div style="margin-top:20px;">
    <img src="images/scope-design.png" alt="" style="height:120px;">
</div>

<?php } ?>



<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>

    <script src="script/home.js"></script>
<script src="script/script.js"></script>


</body>
</html>






