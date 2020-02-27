<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="index.css" />
</head>
<body class="fade">
<div class="form">
    <div class="container">
<h1>Welcome <?php echo $_SESSION['username']; ?>!</p>
<h2>This is a secure area.</p>
<br> <a href="dashboard.php">Dashboard</a></button> <br>
<br><a href="logout.php">Logout</a>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="script/home.js"></script>

</body>
</html>