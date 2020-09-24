<?php
include("header2.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  margin:0;
 
}

* {
  box-sizing: border-box;
  
}

.bg-img {
  /* The image used */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(pic1.jpg);
   background-attachment:fixed;
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
   
}

/* Add styles to the form container */
.container {
  position: absolute;
  right:35%;
  left:auto;
  margin-top: 100px;
  max-width: 500px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>


<div class="bg-img">
  <form action="/action_page.php" class="container"  >
    <h1>Registration</h1>

    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="email" required>

    <label for="psw"><b>College</b></label>
    <input type="password" placeholder="Enter College" name="psw" required>
    
    <label for="email"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile No" name="email" required>

    <label for="psw"><b>Cast</b></label>
    <input type="password" placeholder="Enter Cast" name="psw" required>
    
    <label for="email"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile No" name="email" required>

    <label for="psw"><b>Cast</b></label>
    <input type="password" placeholder="Enter Cast" name="psw" required>


    <button type="submit" class="btn">Login</button>
  </form>
</div>


</body>
</html>
