<?php
    $filepath=realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/session.php';
    session::init();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet"  href="inc/bootstrap.min.css">
	<script src="inc/jquery.min.js"></script>
	<script src="inc/bootstrap.min.js"></script>
</head>

<?php
   if (isset($_GET['action']) && $_GET['action']=="Logout") {
       session::destroy();
   }
?>


<body>
    <div class="container">

    	<nav class="navbar navbar-default">
           <div style="background-color: #02918C; ">
    		<div class="container-fluid">
    			<div class="navbar-header">

    				<a class="Navbar-brand" href="index.php">Login System</a>
    			</div>
    		
    			  <ul class="nav navbar-nav pull-right">
    			                         <?php
                          $id=session::get("id");
                          $userlogin=session::get("login");
                          if ($userlogin==true) {                       
                        ?>
                        <li><a href="index.php"><font color="#fff">Home</font></a></li>
                          <li><a href="profile.php ?id=<?php echo $id; ?>"><font color="#fff">profile</font></a></li>
                    <li><a href="?action=Logout"><font color="#fff">Logout</font></a></li>
                   <?php  }else{   ?> 

    			    <li><a href="login.php"><font color="#fff">Login</font></a></li>
    			    <li><a href="register.php"><font color="#fff">Register</font></a></li>
    			    <?php  }?>
    			  	
    			  </ul>
    			</div>	
    			
    		</nav>