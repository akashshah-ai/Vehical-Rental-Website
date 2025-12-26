<?php
session_start();
require 'config.php';

$emailTop     = '';
$passwordTop  = '';
$topErrors    = [];

if (isset($_POST['submit'])) {
    $emailTop    = $_POST['email']     ?? '';
    $passwordTop = $_POST['password1'] ?? '';

    if (empty($emailTop))    { $topErrors[] = "Email is required"; }
    if (empty($passwordTop)) { $topErrors[] = "Password is required"; }

    if (count($topErrors) == 0) {
        $passwordHash = md5($passwordTop);

        $select = $con->prepare(
            "SELECT * FROM users WHERE email = :email AND password = :password"
        );
        $select->execute([
            ':email'    => $emailTop,
            ':password' => $passwordHash
        ]);
        $data = $select->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            $_SESSION['username'] = $data['username'];
            $_SESSION['success']  = "You are now logged in";
            header('Location: afterloginhome.php');
            exit();
        } else {
            $topErrors[] = "Invalid email or password";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="video/dfhvahsvfajkgfkf.png">
  <link rel="stylesheet" type="text/css" href="css/firststyle.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: rgba(0,0,0,0.8);
  color: 
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: black;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: black;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
      <ul style="display: flex;list-style-type: none;">
                <li><a href="firstpage.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="policy.php">Policy</a></li>
                <li><a href="register.php">Sign up</a></li>
                
                

  <div class="login-container">
    <form action="" method="POST" style="padding: 0 0 0 800px;">
      <input type="text" placeholder="Email" name="email">
      <input type="password" placeholder="Password" name="password1" style="width: 120px; height: 34px;font-size: 16px; margin-right: 4px;">
      <button type="submit" name="submit" >Login</button>
    </form>
  </div></ul>
</div>

<div >
  

<header>
              <div class="row clearfix">
                <img src="images/log.png" class="logo" style="margin-left: -300px;
  margin-top: 20px;height: 300px; ">
           <div class="main-content-header" style="padding: 140px 0px 0px 92px;">
       <h1>WELCOME TO <span class="colorchange ">VEHICLE RENTALS</span>.<br>
           HOUSE OF TRAVELING LOVERS. </h1>
       <a href="option.php" class="btn btn-full animated jello">click to order</a>
       <a href="map.php" class="btn btn-nav animated jello">select location</a>
        </div>

        
   </header>

   <section>
      <div>
        <p>  </p>
         </div>
    <article>
      <div class="quote">
      <h1><span class="colorstyle">Travel makes one modest, you see what a tiny place you occupy in the world.One's destination is never a place, but a new way of seeing things.</span></h1>
      </div>
    </article>
   </section>
     <div>
     <footer>

   <div class="banner animated tada">
    <div class="big-text">50% OFF</div>
    <div>The entire store</div>
    <a href="option.php">Go to Store</a>
   </div>
     <div class="step3">
      - - - - 3 SIMPLE STEPS - - - -
     </div>
      
       <div class="container">
               <ul>
                  <li>
                    <div class="tittle">Book</div>
                    <div class="ob1">
                  <img src="images/book-bike-icon.png">
                  <h6 class="text">Pick your favourite Bike, time and place</h6>
                    </div>
                  </li>
                  <li>
                      <div class="tittle">Pick from The Hub</div>
                      <div class="ob2">       
                      <img src="images/enjoye-drive-bike.png">
                      <h6 class="text">Upload your driver's license, pay the small security deposit</h6> 
                      </div>
                  </li>
                  <li>
                     <div class="tittle">Enjoy DRIVE</div>  
                      <div class="ob3">
                      <img src="images/door-step-bike.png" >
                      <h6 class="text">Fill the checklist on the our app or by calling us. Enjoy your self drive</h6>
                     </div>

                  </li>
               </ul>
          </div>

      <div class="container">
            <div>
               <ul>
                   <div class="bestplace">
                   PLACES TO VISIT
                   </div>

                  <li>
                    <div class="tittle">Delhi</div>
                    <div class="place">
                  <img src="images/visit-place1.jpg" height="120" width="160">
                    </div>
                  </li>
                  <li>
                      <div class="tittle">Agra</div>
                      <div class="place">       
                      <img src="images/visit-place2.jpg" height="120" width="160">
                      </div>
                  </li>
                  <li>
                     <div class="tittle">Rishikesh</div>  
                      <div class="place">
                      <img src="images/visit-place3.jpg" height="120" width="160">
                     </div>
                  </li>
                  <li>
                    <div class="tittle">Mysore</div>
                    <div class="place">
                  <img src="images/Mysore.jpg" height="120" width="160">
                    </div>
                  </li>
                  <li>
                    <div class="tittle">Banglore</div>
                    <div class="place">
                  <img src="images/banglores.jpg" height="120" width="160">
                    </div>
                  </li>
                  <li>
                    <div class="tittle">Hyderabad</div>
                    <div class="place">
                  <img src="images/hyderabda.jpg" height="120" width="160">
                    </div>
                  </li>
                  <li>
                    <div class="tittle">Mumbai</div>
                    <div class="place">
                  <img src="images/mumbai.jpg" height="120" width="160">
                    </div>
                  </li>
                  <li>
                    <div class="tittle">Goa</div>
                    <div class="place">
                  <img src="images/Goa-10.jpg" height="120" width="160">
                    </div>
                  </li>
                  <li>
                    <div class="tittle">Pune</div>
                    <div class="place">
                  <img src="images/Somanathapura_Keshava_temple_altered.jpg" height="120" width="160">
                    </div>
                  </li>
                  <li>
                    <div class="tittle">Aurangabad</div>
                    <div class="place">
                  <img src="images/Ellora_cave16_003.jpg.jpg" height="120" width="160">
                    </div>
                  </li>
               </ul>
          </div>
          </div>
          <div class="vrii">
            Vehicle Rental in India
          </div>
          <div class="last-block">
            
India, known as the biggest tourist destination consisting of Munnar in Kerala,beach shacks and dolphin spotting cruise in Goa, Taj Mahal and Agra Fort in Agra,Humayun's Tomb in Delhi,, and of course India Gate . You can enjoy it all via boarding a flight, train or bus to the place but there is no experience such as wandering on a bike or car. The fun gets multiplied. If we have your affirmation on this then vehicle rental in India service is here for you. So, hire bike or car in India and the experience it all from a new perspective.
<br><br>
As soon as you set the foot in India, you come across a number of tourist cruising away on bikes and cars. Cutting through the coastal breeze along the horizon of the Arabian sea gives you a grand feeling and this is what lures people to rent a bike or car in India. When you rent a bike, you don’t only hire that but also the freedom of where you go and when you go. A liberty that you get only when you self drive bike or car in India. There is no nagging, you just get the keys to your favourite bike or car and begin your ride to conquer a land which is a bit distinctive from rest of the country.
<br><br>
With Vehicle Rentals, you have the widest range of bike or car to choose from starting with iconic bike Royal Enfield Classic 350, Royal Enfield Thunderbird 350, moving to cruiser-Bajaj Avenger Street 220, commuter-Yamaha FZ, Yamaha R15, Yamaha Fascino, naked motorcycle-Benelli 600i TnT, one of the best 200cc bikes-Bajaj Pulsar RS 200.
<br><br>
The Vehicle Rentals also proffers its customers to rent Harley in India. A trip to India on dream bike or car is no less than a fantasy. You have options to select from Harley Davidson Iron 883, Harley Davidson Street 750, and Harley Davidson Roadster for a full-throttled experience. Similarly, hire KTM in India for a splendid experience. You have multiple options for this design and feature-rich bike- KTM Duke 200, KTM Duke 390, KTM RC 200. And when it comes to our service of sports bike or car rental in India, we become speechless as you make the most of your trip on those wheels!
<br><br>
You must have seen in movies or heard from friends and family that exploring India on scooty has its own charm. Book scooty on rent in India for local commute. Choose between trendy Honda Activa or Honda Dio and commence your tour in the morning. Marvel at the beauty of some famous beaches- Colva beach, Palolem beach, Baga beach, followed by visiting the remains of St. Francis Xavier, watching breathtaking convergence of rivers, Mandovi and Zuari, into the Arabian Sea in Goa.
<br><br>
One of the best features of renting a bike or car is that you can do so on monthly, weekly and even hourly basis. Why empty your pockets when you need a motorcycle only for few hours. Or if you are in India only for a long weekend then Vehicle Rentals  gives you the service of renting gear & gearless bike(s) only for that duration as well.
<br><br>
With Vehicle Rentals, it’s time to explore India on two wheels!
          </div><br><br>
     
      <div class="container">
          <h4><div class="contac">
        
          Contact For any Queries please contact<br>
            Phone : +91 9028718415<br>
            Email: VehicleRentals242@.com<br><br><br><br><br><br>
        
            </div></h4>
          </div>

     </footer>
</div>

</body>
</html>
