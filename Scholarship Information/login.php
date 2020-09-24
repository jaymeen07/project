<?php
include("config.php");
include("header.php");
?>
<?php
$btn=@$_REQUEST['login'];
$email=@$_REQUEST['ue'];
$pass=@$_REQUEST['pass'];
$error=" ";
if( isset($btn))
  {
	  if ($email !=='' && $pass !=='')
     {
        $data= mysqli_query($con,"SELECT email,password FROM student WHERE email='$email' ;");
		$record = mysqli_fetch_array($data);
        if( mysqli_num_rows($data) != 0 )
			{
				$em=$record['email'];
				$ps=$record['password'];
				
					if($email == $em)
					{
						if($pass == $ps)
						{
							header("location:home.php");
						}
						
						else
						{
							$error="Invalid Password!!!!";
						}
						
					}
					
					
			
			
		
			
			}
      
       		 else 
           {
  			 $error="Invalid email!!!!";
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
  <form method="post" action="" onSubmit="return validation()">
    <div class="content">
      <h1 style="color:#FFF" align="center">Log In</h1>
    </div>
    <div class="row content">
      <div class="col-sm-12 ">
        <label>User Name or e-mail</label>
        <input type="email" placeholder="Enter User Name or e-mail.." class="form-control" name="ue" required>
      </div>
    </div>
    <br>
    <div class="row content">
      <div class="col-sm-12 ">
        <label>Password</label>
        <input type="password" placeholder="Enter Password." class="form-control" name="pass" required>
      </div>
    </div>
    <br>
    <p  class="content" style="font-weight:200;color:#F00" align="center">
      <?php  echo $error; ?>
    </p>
    <div class="row content">
      <div class="col-sm-12 ">
        <input type="submit" class="btn btn-danger btn-block" type="submit" name="login" value="continue">
      </div>
    </div>
    <br>
    <div class="row content">
      <div class="col-sm-12 "> <a href="signup.php" class="btn btn-primary btn-block">New User</a> </div>
    </div>
  </form>
</div>
<script type="text/javascript">
		

		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;





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




			if(mobileNumber == ""){
				document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=10){
				document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
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
		}

	</script> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>