<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="shortcut icon" href="video/dfhvahsvfajkgfkf.png">
   <link rel="stylesheet" type="text/css" href="css/createstyle.css">
</head>
<img src="images/log.png" class="logo">
<body>
<div class="aa">

   <h1>Sign Up</h1>
   <form action="create.php" method="POST">
           <!-- display validation errors here -->
           <?php include('errors.php');  ?>
          <br><br><input type="textfield" placeholder="username" name="username"><br><br>
           <input type="textfield" placeholder="Email or mobile no" name="email"><br><br>
           <input type="password" placeholder="password" name="password1"><br><br>
           <input type="password" placeholder="confirm-password" name="password2"><br><br>

           <div class="dd">
            <button type="submit" name="signup" class="btn" style=" width: 190px;
              height: 30px;
              float: left;
              margin-right: 80px; 
              margin-top: 15px;        
              border: 1px solid skyblue;
              border-radius: 5px;   
             -webkit-border-radius:15px;
             -o-border-radius:15px;
             -moz-border-radius:15px;
             background-color: rgba(0,0,0,0.5);
             color:skyblue;
             font-size: 16;">Sign Up</button><br><br><br>
             
                     <p class="read" style="color: white">
                     Already a member?<a href="login.php" style="color: green">Login</a>
                     </p>
                      </div>
   </form>
   </div>
</body>
</html>
