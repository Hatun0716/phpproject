<?php include('database.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Project</title>
    <style>
 * { margin: 0px; padding: 0px; }
  body {font-size: 120%;background: #F8F8FF; }
  
  .header {width: 30%;margin: 50px auto 0px;color: white;background: #5F9EA0;text-align: center;border: 1px solid #B0C4DE;border-bottom: none;
    border-radius: 10px 10px 0px 0px; padding: 20px; }
  form, .content { width: 30%;margin: 0px auto;padding: 20px;border: 1px solid #B0C4DE;background: white;border-radius: 0px 0px 10px 10px;}
  .input-group { margin: 10px 0px 10px 0px;}
  .input-group label { display: block; text-align: left; margin: 3px;}
  .input-group input {height: 30px;width: 93%;padding: 5px 10px;font-size: 16px;border-radius: 5px;border: 1px solid gray; }
  .btn { padding: 10px; font-size: 15px; color: white; background: #5F9EA0; border: none; border-radius: 5px;}


    </style>
</head>

<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="name" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="signup.php">Sign up</a>
  	</p>
  </form>
</body>
</html>