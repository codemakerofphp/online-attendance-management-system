<?php

 include 'lib/student.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>attendance system</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<script type="text/javascript" src="inc/jquery.min.js"></script>
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>
	<style >



		.head{background: rgba(5,5,4,.3);
			height: 50px;
			color: #fff;
			text-align: center;
			font-family: 
		}
		.head h2{
			color: white;
    text-shadow: 2px 3px 4px #fff;
		}
		
	</style>
</head>
<body>
   

      
      	
      
      <div class="container">
   	
  <div class="panel panel-default">
     <div class="panel-heading">
      <h2>
        
        <a class="btn btn-info pull-right" href="index.php">Home </a>
        
      </h2>
    </div>
    

    <div class="panel-body">
       

      <form action="" method="post">
       <table class="table table-striped">
         <tr>
           <th width="30%">serial</th>
           <th width="50%">Attendance Date</th>
           <th width="20%">Action</th>
           
         </tr>
         <?php
         $stu =new student();
          $get_date=$stu->getdatelist();
          if ($get_date) {
          	$i=0;
          	while ($value=$get_date->fetch_assoc()) {
          		$i++;
          
         ?>
         <tr>
           <td><?php echo $i ;?></td>
          
           <td><?php echo $value['att_time']; ?></td>
           <td>
            <a class="btn btn-primary" href="gr_view.php?dt=<?php echo $value['att_time']; ?>">View</a>
           </td>
         </tr>
        <?php }
                } ?>
        
         
       </table>
        
      </form>
    </div>
  </div>

     </div>