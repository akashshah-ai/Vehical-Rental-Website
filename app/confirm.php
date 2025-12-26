<?php
      session_start();
          // connect to database
    $db = mysqli_connect('db', 'root', 'root', 'comment');


    if (isset($_POST['submit'])) {
        // receive all input values from the form
    
    $views =$_POST['views'];

            
            if(!empty($views)) {
        
            $query = mysqli_query($db,"INSERT INTO comm (`views`) 
                      VALUES('$views')");

            mysqli_query($db, $query);


              header('location: firstpage.php');
        }
        
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form </title>  
    <link rel="stylesheet" type="text/css" href="css/confirmstyle.css">
    <link rel="shortcut icon" href="video/dfhvahsvfajkgfkf.png">
</head>

<body>
     
<form method="POST" action="" class="top">
<div class="wrapper">
<nav> 
    <div class="backgro" style="height: 200px">
     <img src="images/log.png" class="logo" >
                <ul class="main-nav " id="ckeck-class">
                <li><a href="firstpage.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="policy.php">Policy</a></li>
                <li><a href="register.php">Sign up</a></li>
                <li><a href="login.php">Login</a></li>
                </ul>
     </div>
 </nav>


  <div class="payment">

    <span class="colorchange " style="font-size: 30px;">YOUR ORDER HAVE BEEN CONFIRM...</span>
<div>

     <br style="font-size: 25px;">Comment:   <br>
    <label class="label"> </label>
          <textarea name="views" rows="6" cols="50" style="font-size: 16px; " placeholder="How was your experience with us ?"></textarea>
        
        </div>
            <button  type="submit" class="submit" name="submit">
              <a href="" style="text-decoration: none;color: white;font:bolder;">Submit</a>
            </button>
        </div>
</div>

 </div>
 </body>
 </html>