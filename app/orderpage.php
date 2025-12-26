<!DOCTYPE html>
<html>
<head>
	<title>order Vehicle</title>
</head>
<body>

</body>
</html>


  elseif(isset($_POST['signin'])) 
             {
                
                $email = $_POST['email'];
                $password_1 = $_POST['password_1'];
                
                $select = $con->prepare("SELECT * FROM users WHERE email='$email' and password_1='$password_1'");
                $select->setFetchMode(POD::FETCH_ASSOC);

                $select->execute();
                $data=$select->fetch();


                if($data['email']!=$email and $data['password_1']!=$password_1)
                {
                    echo "invalid email or password";
                }

                elseif ($data['email']==$email and $data['password_1']==$password_1) 
                {
                    $_SESSION['email']=$data['email'];
                    $_SESSION['name']=$data['name'];
                 header("location:firstpage.php");

                }
