<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="img/scholarship.png">
<title>Scholarship Information</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
body, html {
	height: 100%;
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
}
.hero-image {
	background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/pic1.jpg);
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
}
.hero-text {
	text-align: center;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: white;
}
.hero-text button {
	border: none;
	outline: 0;
	display: inline-block;
	padding: 10px 25px;
	color: black;
	background-color: #ddd;
	text-align: center;
	cursor: pointer;
}
.hero-text button:hover {
	background-color: #555;
	color: white;
}
.header {
	overflow: hidden;
 background-color:;
	padding: 20px 10px;
}
.header a {
	float: left;
	color: #FFF;
	text-align: center;
	padding: 12px;
	text-decoration: none;
	font-size: 18px;
	line-height: 25px;
	border-radius: 4px;
}
.header a.logo {
	font-size: 25px;
	font-weight: bold;
}
.header a:hover {
	background-color: #ddd;
	color: black;
}
.header a.active {
	background-color: dodgerblue;
	color: white;
}
.header-right {
	float: right;
}
 @media screen and (max-width: 500px) {
.header a {
	float: none;
	display: block;
	text-align: left;
}
.header-right {
	float: none;
}
}
</style>
</head>
<body>

<div class="hero-image">
  <div class="header"> <a href="#default" class="logo"><img src="img/scholarship.png" style="height:25px; width:25px;">Scholarship Information</a>
    <div class="header-right"> 
    <a href="index.php">Home</a> 
    <a href="contact.php">Contact</a> 
    <a href="about.php">About</a>
    
     <a href="login.php">
        
      
      <button class="btn btn-danger">Log in</button>
      </a>
      
     </div>
  </div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
