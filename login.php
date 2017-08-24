<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login In or Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
<body>



<div class="container"> 
  <div class="jumbotron">
  <form class="form-horizontal" role="form" action = "login_process2.php" method = "POST">
				<h2>Log-in</h2>
         <div class="form-group">
      <label class="control-label col-sm-2" for="text">Username:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="text" placeholder="Full name" name = "username" required >
      </div>
    </div>

       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name = "email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name = "password" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default" name = "Login">Submit</button>
      </div>
    </div>
  </form>
</div>
</div> 





<div class="container">  
  <div class="jumbotron">
  
  <form class="form-horizontal" role="form" action="signup_process2.php" method ="POST">
			<h2>New over here?</h2>
  <div class="form-group">
      <label class="control-label col-sm-2" for="text">Username:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="text" placeholder="Full name" name = "name"  required>
        
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name = "email" required>
      </div>
    </div>
	
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name = "password" required>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default">Sign up</button>
      </div>
    </div>
  </form>
  
</div>
</div> 

</body>
</html>
