<?php
//include "config.php";
//
////--------------------------sign in--------------------------
//$form=@$_REQUEST['Register'];
//$user_name=@$_REQUEST['unm'];
//$user_email=@$_REQUEST['umail'];
//$user_pass=@$_REQUEST['upass'];
//$user_no=@$_REQUEST['uno'];
//if( isset($form) )
//{
//	if ($user_email !=='')
//      {
//		  
//        $data= mysqli_query($con,"SELECT * FROM user WHERE u_email='$user_email' ;");
//		
//		 if( mysqli_num_rows($data) != 0 ) 
//    
//                    { 
//						echo " Email id is Registred";
//					}
//	  }
//	  
//	  else
//	  {
//
//		mysqli_query($con,"INSERT INTO user set u_name='$user_name',u_email='$user_email',u_pass='$user_pass',u_no='$user_no'")
//		or die("Insert Error" .mysqli_error());
//		}
//}
//
//
//
//
//
//
//
//
////--------------------------log in---------------------------
//$btn=@$_REQUEST['login'];
//$unm=@$_REQUEST['un'];
//$pass=@$_REQUEST['pass'];
//if( isset($btn))
//  {
//      if ($unm !=='' && $pass !=='')
//      {
//        $data= mysqli_query($con,"SELECT * FROM user WHERE u_name='$unm' and u_pass='$pass';");
//		$record = mysqli_fetch_array($data);
//        if( mysqli_num_rows($data) != 0 )
//			{
//			$_SESSION['login'] = true;
//			 
//			$_SESSION['email']= $record['u_email'];
//			$_SESSION['id']= $record['u_id'];
//			$_SESSION['name']= $record['u_name'];
//			$_SESSION['pass']= $record['u_pass'];
//			$_SESSION['no']= $record['u_no'];
//			
//			
//			header("location:index.php");
//			//echo @$_SESSION['login'];
//			}
//      
//       else 
//         {
//       echo 'Enter correct user name & Password';
//         }
//    
//	
//	
//   
//	
//      
//    }
//  }
//?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Scholarship Information</title>
	
    <!-- Bootstrap -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
  <body style="background-color:#E4E4E4">
<div class="navbar navbar-inverse">
 <div class="container">
 	<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#a1">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
		 <span class="icon-bar"></span>	
    </button>
    <a href="" class="navbar-brand"></a>
    </div>
    <div class="collapse navbar-collapse pull-right" id="a1"> 
    	<ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="contect.php">Contact</a></li>
        <li><a href="">Gellary</a></li>
        <li><a href="">Help</a></li>
        <li><a href="faq.php">Faq</a></li>
        </ul>
        
        
        
        
        
    <?php  
	
	// echo "<td><a href='ex1.php?id=".$record['id']."' >Edit</a></td>";
	
	if(isset($_SESSION['login'])){
    echo "<a href='view_profile.php' class='btn btn-warning navbar-btn pull-right' > ".@$_SESSION['email']."</a>";
    
   
    
    

 ?>
    

  <a href="logout.php" class="btn btn-warning navbar-btn pull-right" >Log Out</a>
  
  
 
  	
  
  
     
     
 
     <?php   }
	else 
	 { ?>
        <a href="" class="btn btn-warning navbar-btn pull-right" data-toggle="modal" 
        data-target="#m1">Log in</a>
        <?php  } ?>
        
        
        
           <div class="modal fade" id="m1">
        	<div class="modal-dialog modal-sm">
            	<div class="modal-content">
                	<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3>Log In</h3>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="">
                    <input type="text" placeholder="Enter User name...." name="un" required class="form-control" autofocus>
            		<br>
            		<input type="password" placeholder="Enter password..." name="pass" required class="form-control">
                   
                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-default pull-left"  data-toggle="modal" 
                    data-target="#m2">
            		New user.?</button>
                    <input type="submit" class="btn btn-default" name="login" value="Log in" >
                    <input type="reset" class="btn btn-default" name="reset" value="Reset" >
                    </form>
                    
                    </div>
                </div>
            </div>
         </div>
    </div>
    </div>
 				<div class="modal fade" id="m2">
                	<div class="modal-dialog modal-md">
                    	<div class="modal-content">
                        	<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;
                            </button>
                    		<h3>Log In</h3>
                            </div>
                            <div class="modal-body">
                            <form method="get" action="">
                            <input type="text" name="unm" placeholder="User name...." 
                            class= "form-control" required>
            				<br>
            				<input type="email" name="umail" placeholder="Enter email..." 
                            class="form-control" required>
                            <br>
                            <input type="password" name="upass" placeholder="password.."
                            class="form-control" required>
                            <br>
                            <input type="text" name="uno" placeholder="Contat No.."
                            class="form-control" required	>
                            <br>
                            <div class="modal-footer">
                            <a href="" class="btn btn-default pull-left">cencel</a>
                            <input type="submit" class="btn btn-danger" name="Register" value="
                            Register">
                            <a href="" class="btn btn-default">Reset</a>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>  
                
                
                 
    
    			
 </div>
 

  
     	
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>