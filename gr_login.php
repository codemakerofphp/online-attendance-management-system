
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
   	<nav class="navbar navbar-default">
           
    		<div class="container-fluid">
    			<div class="navbar-header">

    				<a class="Navbar-brand" href="index.php"></a>
    			</div>
    		
    			  <ul class="nav navbar-nav pull-right">
    			             
                       
                          <li><a href="gr_login.php"> Guardian Login</a></li>
                    <li><a href=""></a></li>
                   

    			    
              
    			    <li><a href="register.php"></a></li>
    			   
    			  	
    			  </ul>
    			</div>	
    			
    		</nav>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>
        Login
      </h2>
    </div>

    <div class="panel-body">
      

      <form action="gr_mm.php" method="post">
       <div class="form-group">
         <label for="name">User Name</label>
         <input type="text" class="form-control" name="name" id="name" >
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

     </div>