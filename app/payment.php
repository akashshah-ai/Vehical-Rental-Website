<!DOCTYPE html>
<html>
<head>
	
	<title>Payment Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	 <link rel="stylesheet" type="text/css" href="css/paystyle.css">
    <link rel="shortcut icon" href="video/dfhvahsvfajkgfkf.png">

</head>
<body class="top" style="">
	
<form method="POST" action="">
<nav> 
    <div class="backgro" style="height: 100vh; background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('../images/348112.jpg');
         background-size: cover;
         background-repeat: no-repeat; 
         background-position: center;
         height: 100vh;
         padding-top: 0px;
         margin: 0px -15px 0px -10px;">
            <div>
                <img src="images/log.png" class="logo" style="  height: 300px;
                                                                width: auto;
                                                                float: left;
                                                                margin-left: -166px;
                                                                margin-top: -70px;" >
                <ul class="main-nav " id="ckeck-class" style="padding-right: 30px; float: right;
  margin-top: 30px;">
                <li style=" display: inline-block;
  list-style: none;
  margin-left: 40px;
  padding-top: 0px;">
                <a href="afterloginhome.php" style="color: #fff;
     text-decoration:none;
     text-transform: uppercase;
     font-size: 130%;
     font-weight: 100;">Home</a></li>
                <li style=" display: inline-block;
  list-style: none;
  margin-left: 40px;
  padding-top: 0px;">

                <a href="aboutus1.php" style="color: #fff;
     text-decoration:none;
     text-transform: uppercase;
     font-size: 130%;
     font-weight: 100;">About Us</a></li>
                <li style=" display: inline-block;
  list-style: none;
  margin-left: 40px;
  padding-top: 0px;">

                <a href="policy1.php" style="color: #fff;
     text-decoration:none;
     text-transform: uppercase;
     font-size: 130%;
     font-weight: 100;">Policy</a></li>
                </ul>
            </div>

<div class="wrapper" style="padding: 10px;">
  <div class="payment">
    <div class="payment-logo">
      <p style="font-family: cursive;">P</p>
    </div>
    
    
    <h2>Payment Gateway</h2>
    
    <div class="">
      <div class="card space icon-relative">
        <label class="label">Card holder:</label>
        

        <input type="text" class="input" name="cardholder" placeholder="Card holder" required="">
        

        <i class="fas fa-user"></i>
      </div>
      <div class="card space icon-relative">
        <label class="label">Card number:</label>
        <input type="text" class="input" name="cardnumber" data-mask="0000 0000 0000 0000" placeholder="Card Number" required="">
        <i class="far fa-credit-card"></i>
      </div>
      <div class="card-grp space">
        <div class="card-item icon-relative">
          <label class="label">Expiry date:</label>
          <input type="text" name="expirydate" class="input" data-mask="00 / 00"  placeholder="00 / 00">
          <i class="far fa-calendar-alt"></i>
        </div>
        <div class="card-item icon-relative">
          <label class="label">CVC:</label>
          <input type="text" name="cvv" class="input" data-mask="000" placeholder="000">
          <i class="fas fa-lock"></i>
        </div>
      </div>
      <div class="btn">
     
  <a href="confirm.php" style="text-decoration: none;color: white;font:bolder;font-size: 20px; color: black;">Pay</a>
     </div>
        </div>
      </div> 
      
    </div>
    
  </div>
</div></nav>
</form>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>