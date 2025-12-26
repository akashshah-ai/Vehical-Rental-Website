<?php
session_start();
require 'config.php';

$email     = '';
$password1 = '';
$errors    = [];

if (isset($_POST['submit'])) {
    $email     = $_POST['email']     ?? '';
    $password1 = $_POST['password1'] ?? '';

    if (empty($email))     { $errors[] = "Email is required"; }
    if (empty($password1)) { $errors[] = "Password is required"; }

    if (count($errors) == 0) {
        $password = md5($password1);

        $select = $con->prepare(
            "SELECT * FROM users WHERE email = :email AND password = :password"
        );
        $select->execute([
            ':email'    => $email,
            ':password' => $password
        ]);
        $data = $select->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            $_SESSION['username'] = $data['username'];
            $_SESSION['success']  = "You are now logged in";
            header('Location: afterloginhome.php');
            exit();
        } else {
            $errors[] = "Invalid email or password";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="shortcut icon" href="video/dfhvahsvfajkgfkf.png">
    <link rel="stylesheet" type="text/css" href="css/regstyle.css">
</head>
<body>
<div class="header"><h2>Login</h2></div>

<form method="POST" action="login.php">
    <?php
    if (!empty($errors)) {
        echo '<div class="error">';
        foreach ($errors as $e) { echo htmlspecialchars($e) . "<br>"; }
        echo '</div>';
    }
    ?>

    <div class="input-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
    </div>

    <div class="input-group">
        <label>password</label>
        <input type="password" name="password1">
    </div>

    <div class="input-group">
        <input type="submit" name="submit" value="Login" class="btn">
    </div>

    <p>Not yet a member? <a href="register.php">Sign up</a></p>
</form>
</body>
</html>

