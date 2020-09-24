<?php
include("header.php");
 $filename = "scholarship.json";
          $data = file_get_contents($filename); //Read the JSON file in PHP
          $array = json_decode($data, true); //Convert JSON String into PHP Array
?>

<div class="container">
	<div>
  			<h3 align="center" style="color:#FFF">Scholarships For Medical And Engineering Students</h3>
            <br>
             <table class="table table-responsive table-bordered table-hover bg-success">
        <tr>
		 <th>No</th>
         <th >Scholarship Name</th>
         <th >Cast</th>
         <th >Income</th>
		 <th >Education</th>
         <th >Stream</th>
         <th >Percentage</th>
        </tr>
        <?php
         foreach($array as $row) //Extract the Array Values by using Foreach Loop
          {
			 ?>
        <tr>
		<td><?php echo $row["s_id"] ; ?></td>
       <td><?php echo $row["s_name"]; ?></td>
	   <td><?php echo $row["s_cast"]; ?></td>
	   <td><?php echo $row["s_income"]; ?></td>
	   <td><?php echo $row["s_edu"] ; ?></td>
       <td><?php echo $row["s_stream"]; ?></td>
       <td><?php echo $row["s_percentage"]; ?></td>
       </tr>
       
        <?php
		  }
		  ?>
          </table>
  	</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>

</body>
</html>

