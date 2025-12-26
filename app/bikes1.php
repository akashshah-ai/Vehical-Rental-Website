<!DOCTYPE html>
<html>
<head>
    <title>order bikes</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="video/dfhvahsvfajkgfkf.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/
   css?family=Abril+Fatface|Dancing+Script">
        <link rel="stylesheet" type="text/css" href="css/bikestyle.css">

</head>
<body>   
<nav> 
    <div class="backgro" style="height: 200px">
     <img src="images/log.png" class="logo" >
                <ul class="main-nav " id="ckeck-class" style="font:bolder;">
                <li><a href="cars1.php">Cars</a></li>
                <li><a href="afterloginhome.php">Home</a></li>
                <li><a href="aboutus1.php">About Us</a></li>
                <li><a href="policy1.php">Policy</a></li>
                
                </ul>
     </div>
 </nav>
 <br><br><br>
<div class="container" style="background-color: grey" >
              <h1 class="text-center mb-5" style="color: white" ><br>
              Order Bikes From Vehicle Rentals</h1>
              <br><br>
            <div class="row">
          <?PHP

            $con = mysqli_connect('db','root');
            mysqli_select_db($con,'car rentals');
            $query ="SELECT `id`, `name`, `image`, `price`, `discount` FROM `bikespage` order by id ASC";
            $queryfire = mysqli_query($con, $query);
            $num = mysqli_num_rows($queryfire);
            if($num > 0){
                while ($product = mysqli_fetch_array($queryfire)){
                   ?>
                 
                 <div class="col-lg-3 col-md-3 col-sm-12 mb-5">
                 <form method="POST" action="book.php">
                     <div class="card">
                         <h6 class="card-title bg-info text-white p-2"> <?php echo
                          $product['name'];  ?> </h6>
                         <div class="card-body">
                             <img src="<?php echo $product['image'];  ?>" alt="cars" class="img-fluid mb-2">
                             <h6> &#8377; <?php echo
                          $product['price'];  ?> 
                          <span> (<?php echo $product['discount'];  ?>% off)</span></h6>
                          <h6 class="badge badge-success"> 4.4 <i class="fa fa-star"></i></h6>
                            <div class=""><a href="book.php">
                                <button class="btn btn-success flex-fill">Order Now </button></a>
                            </div>

                         </div>
                     </div>
                 </form>
                    
                     
                 </div>





                   <?php
                        }
                    }
                    ?>

       </div>     
       </div>   
       <br><br> 
        <div class="contac">
        
            Contact For any Queries please contact<br>
            Phone : +91 9028718415<br>
            Email: VehicleRentals242@.com<br><br><br><br><br><br>
        
            </div>    
</body>
</html>