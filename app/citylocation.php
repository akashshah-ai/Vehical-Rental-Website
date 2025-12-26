<?php
      session_start();


    // connect to database
    $db = mysqli_connect('db', 'root', 'root', 'city');
    
    if (isset($_POST['search'])) {
        // receive all input values from the form
    
    $city =$_POST['city'];
    $starts =$_POST['starts'];
    $ends=$_POST['ends'];
    $hdCheckbox =$_POST['hdCheckbox'];




    
    if(!empty($city)) {
        
            $query = mysqli_query($db,"INSERT INTO selection (`city`,`starts`,`ends`,`hdCheckbox`) 
                      VALUES('$city', '$starts', '$ends', '$hdCheckbox')");
            mysqli_query($db, $query);

            header('location: afterloginhome.php');
        }
        else{


        }
    }

?>



<!DOCTYPE html>
<html>
<head><link rel="shortcut icon" href="video/dfhvahsvfajkgfkf.png">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/citylocationstyle.css">
    <link rel="shortcut icon" href="video/dfhvahsvfajkgfkf.png">
</head>

<body>
<div class="aa">
<h1><span class="colorchange">SELECT YOUR GOLDEN CITY</span></h1>
 </div>
 <img src="images/log.png" class="logo">
<div class="container">
        <div class="row">
            <div class="overlay" style="margin-top: 157px;">
                <div class="searchPanel">
                    <div class="contentSection">
                        <ul class="nav nav-tabs tabsButton" role="tablist">
                             

                                <a  class="selfdrive">
                                    <img src="images/serfDrive.png" height="50" width="50"> Drive cars
                                </a>
                            
                            
                                <a  class="bikeicon">
                                    <img src="images/bike-icon.png" height="50" width="50"> Drive Bikes 
                                </a>
                            
                        </ul>
                                               
    <form action="" id="searchBike" method="post">                   
    <ul class="searchCar" id="search_div_bikes">

                                        <li>
                                            <label>City</label>
                                            <select name="city" class="form-control ddlselect ddlCity ddlBikeCity" onchange="var Id = $(this).find('option:selected').val(); if (Id != '0' &amp;&amp; Id != null &amp;&amp; Id != undefined) { document.location.href=     



                                                ($(this).find('option:selected').text()).toLowerCase() }" value="GO"><option value="0">Select</option><option value="Agra">Agra</option><option value="Ahmedabad">Ahmedabad</option><option value="Bangalore">Bangalore</option><option value="Aurangabad">Aurangabad</option><option value="Chandigarh">Chandigarh</option><option value="Chennai">Chennai</option><option value="Delhi">Delhi</option><option value="Dharamshala">Dharamshala</option><option value="Goa">Goa</option><option value="Guwahati">Guwahati</option><option value="Hyderabad">Hyderabad</option><option value="Jaipur">Jaipur</option><option value="Kota">Kota</option><option value="Manali">Manali</option><option value="MountAbu">MountAbu</option><option value="Mumbai">Mumbai</option><option value="Mysore">Mysore</option><option value="Pondicherry">Pondicherry</option><option value="Pune">Pune</option><option value="Shimla">Shimla</option><option value="Udaipur">Udaipur</option></select>
                                        </li>

                                        <li>
                                            <label>Start Date and Time</label>
                                            <input type="date" id="StartDateValBikes" name="starts" date-format="dd/mm/yyyy" class="form_datetime cp">
                                        </li>
                                        <li>
                                            <label>End Date and Time</label>
                                           <input type="date" id="EndDateValBikes" name="ends"  value="start date of" date-format="dd/mm/yyyy" class="form_datetime  cp">
                                        </li>                                       
                                        <li>
                                            <label>Home Delivery</label>
                                        <input type="Checkbox" class="homedelivery" id="hdCheckbox" name="hdCheckbox" value="homedelivery">
                         
                                        </li>


                                        <li>
                                            <label>&nbsp;</label>
                                            <input type="submit" class="buttonSubmit SearchBikePartial" name="search" id="btnbikesrch" value="Search">
                                        </li>
                                    </ul>
</form>                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="base">
        <object data=""></object>
    </div>

</body>
</html>



