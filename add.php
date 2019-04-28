<?php
   include 'lib/student.php';
  ?>
  <?php
      $stu=new student();
      if ($_SERVER['REQUEST_METHOD']=='POST') {
        $name=$_POST['name'];
         $roll=$_POST['roll'];
         $insertdata=$stu->insertstudent($name,$roll);
      }
  ?>
  <?php
   if (isset($insertdata)) {
     echo $insertdata;
   }

  ?>


<!DOCTYPE html>
<html>
<head>
	<title>attendance system</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<script type="text/javascript" src="inc/jquery.min.js"></script>
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>

</head>
<body>
   

      
      	
      
      <div class="container">
   
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>
        
        <a class="btn btn-info pull-right" href="2ndpage.php">Back </a>
      </h2>
    </div>

    <div class="panel-body">
      

      <form action="" method="post">
       <div class="form-group">
         <label for="name">Student Name</label>
         <input type="text" class="form-control" name="name" id="name" >
       </div>
       <div class="form-group">
         <label for="roll">Student ID</label>
         <input type="text" class="form-control" name="roll" id="roll" >
       </div>
       <div class="form-group">
         
         <input type="submit" class="btn btn-primary"  value="add Student">
       </div>
        
      </form>
    </div>
  </div>

     </div>