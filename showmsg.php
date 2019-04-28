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
  
</head>
<body>
   

      
        
      
      <div class="container">
    
  <div class="panel panel-default">
   

    <div class="panel-body">
       

      <form action="" method="post">
       <table class="table table-striped">
         
         <?php
         $stu =new student();
          $get_msg=$stu->getmsg();
          if ($get_msg) {
            
            while ($value=$get_msg->fetch_assoc()) {
              
          
         ?>
         <tr>
           
         </tr>
         <tr>
          <td width="25%"> Student Name :</td>
           <td width="75%"><?php echo $value['name'] ;?></td>
           </tr>
           
            
          <tr>
          <td width="25%"> Student ID :</td>
           <td width="75%"><?php echo $value['id']; ?></td>
           </tr>
          
         <tr>
         <td height="100px"> Messages :</td>
           <td height="100px"><?php echo $value['msg']; ?></td>
           </tr>
        <?php }
                } ?>
        
         
       </table>
        
      </form>
      <div class="panel-heading">
      <h2>
        
        <a class="btn btn-info pull-right" href="2ndpage.php">Back </a>
      </h2>
    </div>
    </div>
  </div>

     </div>