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


              header('location: confirm.php');
        }
        
    }

?>