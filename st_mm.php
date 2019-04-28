<?php
$sv="localhost";
$us="root";
$ps="";
$d="db_sams";
   $db = mysqli_connect($sv,$us,$ps,$d);
$us=$_POST['name'];
$psw=$_POST['password'];
   $qr="SELECT * FROM user where password='".$us."' AND '".$psw."'	";
   $res=mysqli_query($db,$qr);

   if($res){
   	header("Location:st_date.php");
   }
   else{
   	echo "No";
   }
?>