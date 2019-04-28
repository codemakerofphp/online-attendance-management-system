<?php

 include 'lib/student.php';
?>
<script type="text/javascript">
  $(document).ready(function(){
       $("form").submit(function(){
        var roll=true;
        $(':radio').each(function(){

          name=$(this).attr('name');
          if (roll && !$(':radio[name="'+name+'"]:checked').length) {
            //alert(name+ "roll Missing !");

            $('.alert').show();
            roll=false;
          }

        });
        return roll;

       })


  });

</script>
<?php
  // error_reporting(0);
  $stu=new student();
  $dt=$_GET['dt'];
   if ($_SERVER['REQUEST_METHOD']=='POST') {
        $attend=$_POST['attend'];
         
         $att_update=$stu->updateattendence($dt,$attend);
      }

  ?>

 <?php
   if (isset($att_update)) {
     echo $att_update;
   }
?>

<div class='alert alert-danger' style="display: none;" ><strong>Error !</strong>Student roll missing</div>
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
        
        <a class="btn btn-info pull-right" href="gr_date.php">Back</a>
      </h2>
    </div>

    <div class="panel-body">
       <div class="well text-center" style="font-size:20px">
         <strong> Date:</strong><?php   echo $dt;?>
       </div>

      <form action="" method="post">
       <table class="table table-striped">
          <tr>
           <th width="25%">serial</th>
           <th width="25%">Name</th>
           <th width="25%">Student ID</th>
           <th width="25%">Attendance</th>
         </tr>
         <?php
         //$stu =new student();
          $get_student=$stu->getalldata($dt);
          if ($get_student) {
          	$i=0;
          	while ($value=$get_student->fetch_assoc()) {
          		$i++;
          
         ?>
       <tr>
           <td><?php echo $i ;?></td>
           <td><?php echo $value['name']; ?></td>
           <td><?php echo $value['roll']; ?></td>
           <td>
             <input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present
             " <?php if($value['attend']=="present"){echo "checked";}  ?>>P
              <input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent" <?php if($value['attend']=="absent"){echo "checked";}  ?>>A
           </td>
         </tr>
        <?php }
                } ?>

           
        
         
       </table>
        
      </form>
    </div>
  </div>

     </div>