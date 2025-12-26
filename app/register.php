<?php include('server1.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>registerion</title>
    <link rel="shortcut icon" href="video/dfhvahsvfajkgfkf.png">
	<link rel="stylesheet" type="text/css" href="css/regstyle.css">
</head>
<body>
    <div class="header">
    	<h2>Register</h2>
    </div>
    <form method="POST" action="register.php">
    	<!-- display validation error here -->
    	<?php include('errors.php');  ?>
    	<div class="input-group">
    		<label>Username</label>
            <input type="text" name="username">
    	</div>
    		<div class="input-group">
    		<label>email</label>
            <input type="text" name="email">
    	</div>
    		<div class="input-group">
    		<label>password</label>
            <input type="password" name="password_1">
            </div>
            	<div class="input-group">
    		<label>confirm-password</label>
            <input type="password" name="password_2">
    	</div>
    		<div class="input-group">
    		<div class="btn">
    		 <input type="submit" name="signup" value="Register">
    	    </div>
    	    </div>
    	<p>
    		Already a member?<a href="login.php">Sign in</a>
    	</p>
    </form>
</body>
</html>