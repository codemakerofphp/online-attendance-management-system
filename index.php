<!DOCTYPE html>
<html>
<head>
	<title>attendance system</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="inc/jquery.min.js"></script>
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>
	<style >

#home-section{
  background: url('./img/laptop-2559795_1920.jpg') no-repeat center top;
  background-size: cover;
  background-attachment: fixed;
  max-height: 500px;
  
  
}
  .a{
    background-color: rgba(0,0,0,0.7);
    min-height: 500px;
  }
  .home-inner{
    padding-top: 40px;
    padding-bottom: 30px;
  }
  .col1{
    color: #fff;
    float: right;
    padding-left: 20px;

    }









		
	</style>
</head>
<body>
  

   	<nav class="navbar navbar-default fixed-top">
           
    		<div class="container-fluid">
    			<div class="navbar-header">

    				<a class="Navbar-brand" href="index.php"> Attendance System</a>
    			</div>
    		
    			  <ul class="nav navbar-nav pull-right">
    			             
                        <li><a href="login.php">Faculty login</a></li>
                          <li><a href="st_login.php">Student Login</a></li>
                    <li><a href="gr_login.php">Guardian Login</a></li>			  	
    			  </ul>
    			</div>	
    			
    		</nav>

<section id="home-section">

  <div class="dark-overlay a ">
    <div class="home-inner">
      <div class="container">
        <div class="row">
          <div class="col1 ">
            <div class="panel-body">
      

      <form action="mm.php" method="post">
         <h3>Create an Account</h3>
       <div class="form-group">

         <label for="name">User Name</label>
         <input type="text" class="form-control" name="name" id="name" >
       </div>
       <div class="form-group">

         <label for="name">ID Number</label>
         <input type="Number" class="form-control" name="name" id="name" >
       </div>
       <div class="form-group">

         <label for="name">Email</label>
         <input type="Email" class="form-control" name="name" id="name" >
       </div>
       <div class="form-group">
         <label for="roll">Password</label>
         <input type="password" class="form-control" name="password" id="password" >
       </div>
       <div class="form-group">
         
         <input type="submit" class="btn btn-primary" name="submit" value="Submit">
       </div>
        
      </form>
    </div>
          </div>
          <div class="col2">
            
          </div>
         
        </div>

      </div>

    </div>

  </div>

</section>  
<br><br> 
<section>
  <div class="container">
    <p>
      This Application is built for automating the processing of attendance.The intention of developing Attendance Management System is to computerized thetradition way of taking attendance.A Faculty has to login to the system & then in the attendance option they have to select appropriate class, semester and subject.
      This Application is built for automating the processing of attendance.The intention of developing Attendance Management System is to computerized thetradition way of taking attendance.A Faculty has to login to the system & then in the attendance option they have to select appropriate class, semester and subject.
    </p>

  </div>
  </section>
	
  		
        
</body>
</html>