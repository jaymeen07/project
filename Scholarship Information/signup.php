<?php
include("config.php");
include("header.php");
?>
<?php

$form=@$_REQUEST['register'];
$user_name=@$_REQUEST['unm'];
$user_email=@$_REQUEST['umail'];
$user_pass=@$_REQUEST['upass'];
$error=" ";

if( isset($form) )
{
	if ($user_email !=='')
      {
		  
          $data= mysqli_query($con,"SELECT * FROM student WHERE email='$user_email' ;");
		
		 if( mysqli_num_rows($data) != 0 ) 
    
                    { 
						
						
						$error=" email is alredy registered!!!!";
			
						
					}
					
	  
	  
				  else
					{
			
					mysqli_query($con,"INSERT INTO student set name='$user_name',email='$user_email',password='$user_pass' ;")
					or die("Insert Error" .mysqli_error());
					
					}
		
	  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
.content {
	max-width: 500px;
	margin: auto;
	width: 33.33%;
	color: #FFF;
	
}
</style>
<body>
<div class="container">
<form method="post" action="" onsubmit="return validation()">
  <div class="content">
    <h1 style="color:#FFF" align="center">Sign up</h1>
  </div>
 
  <div class="row content" >
    <div class="col-sm-12 " >
      <label>User Name </label>
      <input type="text" placeholder="Enter Your Name.." name="unm" id="user" class="form-control" required>
      <span id="username" class="text-danger" style="color:#F60" > </span>
    </div>
  </div>
  <br>
  <div class="row content">
    <div class="col-sm-12 ">
      <label>E-mail </label>
      <input type="text" placeholder="Enter Your E-mail.." name="umail" id="emails" class="form-control" >
      <span id="emailids" class="text-danger font-weight-bold"> </span>
    </div>
    <p  class="content" style="font-weight:200;color:#F00" align="center">
      <?php  echo $error; ?>
    </p>
  </div>
  <br>
  <div class="row content">
    <div class="col-sm-12 ">
      <label>Password</label>
      <input type="password" placeholder="Enter Your Password.." name="upass" id="pass" class="form-control" >
      <span id="passwords" class="text-danger font-weight-bold"> </span>
    </div>
  </div>
  <br>
  <div class="row content">
    <div class="col-sm-12 ">
      <label>Re-Enter Password</label>
      <input type="password" placeholder="Re-Enter Your Password.." name="rpass" id="conpass" class="form-control">
      <span id="confrmpass" class="text-danger font-weight-bold"> </span>
    </div>
  </div>
  <br>
  <div class="row content">
    <div class="col-sm-12 ">
      <input type="submit" class="btn btn-danger btn-block" type="submit" name="register" value="Sign up">
    </div>
  </div>
  </form>
</div>


<script type="text/javascript">
		

		function validation(){

			var user = document.getElementById('user').value;
			var emails = document.getElementById('emails').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			
			





			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}

			
			if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" ** . Invalid Position";
				return false;
			}






			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;	
			}


			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
				return false;
			}



			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
				return false;
			}




			



			
		}

	</script>



	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>