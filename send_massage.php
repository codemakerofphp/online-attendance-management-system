<?php
   include 'lib/student.php';
  ?>
  <?php
      $stu=new student();
      if ($_SERVER['REQUEST_METHOD']=='POST') {
        $name=$_POST['name'];
         $id=$_POST['s_id'];
          $suject=$_POST['subject'];
         $insertdata=$stu->insertmsg($name,$id,$suject);
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
        <a class="btn btn-success" href="send_massage.php"> Send Messages</a>
        <a class="btn btn-info pull-right" href="st_date.php">Back </a>
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
         <input type="text" class="form-control" name="s_id" id="s_id" >
       </div>
       <div class="form-group">
         <label for="subject">Subject</label>
             <textarea id="subject" name="subject" placeholder="Write something.." style="height: 100px;width: 800px"></textarea>
       </div>
       <div class="form-group">
         
         <input type="submit" class="btn btn-primary" name="submit" value="send">
       </div>
        
      </form>
    </div>
  </div>

     </div>