<?php
          
          $filename = "scholarship.json";
          $data = file_get_contents($filename); //Read the JSON file in PHP
          $array = json_decode($data, true); //Convert JSON String into PHP Array
		  echo ' <div class="container">
		  
		  
		<div>
  			<h3 align="center">Scholarships For Medical And Engineering Students</h3>
  		</div>		  
		  
      <table class="table table-responsive table-condensed table-bordered table-hover">
        <tr>
		 <th>No</th>
         <th >Scholarship Name</th>
         <th >Cast</th>
         <th >Income</th>
		 <th >Education</th>
         <th >Stream</th>
         <th >Percentage</th>
        </tr>
     ';
		  
          foreach($array as $row) //Extract the Array Values by using Foreach Loop
          {
			   echo '
            <tr>
		<td>'.$row["s_id"].'</td>
       <td>'.$row["s_name"].'</td>
	   <td>'.$row["s_cast"].'</td>
	   <td>'.$row["s_income"].'</td>
	   <td>'.$row["s_edu"].'</td>
       <td>'.$row["s_stream"].'</td>
       <td>'.$row["s_percentage"].'</td></tr>'; //Data for display on Web page
          }
         
    {
		echo '</table> </div>';
          }
		  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<link rel="icon" type="image/png" href="scholarship.png">
<title>Scholarship Information</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container"> </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>