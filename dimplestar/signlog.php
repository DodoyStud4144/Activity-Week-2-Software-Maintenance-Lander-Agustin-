<?php
$con = mysqli_connect("localhost","root","","dimplestar");

$errors = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(preg_match("/\S+/", $_POST['fname']) === 0){
        $errors['fname'] = "* First Name is required.";
    }
    if(preg_match("/\S+/", $_POST['lname']) === 0){
        $errors['lname'] = "* Last Name is required.";
    }
    if(preg_match("/.+@.+\..+/", $_POST['email']) === 0){
        $errors['email'] = "* Not a valid e-mail address.";
    }
    if(preg_match("/.{8,}/", $_POST['password']) === 0){
        $errors['password'] = "* Password must contain at least 8 characters.";
    }
    if(strcmp($_POST['password'], $_POST['confirm_password'])){
        $errors['confirm_password'] = "* Passwords do not match.";
    }

    if(count($errors) === 0){
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        
        $password = hash('sha256', $_POST['password']);
        function createSalt(){
            $string = md5(uniqid(rand(), true));
            return substr($string, 0, 3);
        }
        $salt = createSalt();
        $password = hash('sha256', $salt . $password);

        $search_query = mysqli_query($con, "SELECT * FROM members WHERE email = '$email'");
        $num_row = mysqli_num_rows($search_query);
        if($num_row >= 1){
            $errors['email'] = "Email address is unavailable.";
        }else{
            $sql = "INSERT INTO members(`fname`, `lname`, `email`, `salt`, `password`) 
                    VALUES ('$fname', '$lname', '$email', '$salt', '$password')";
            mysqli_query($con, $sql);
            $_POST = array(); // clear form
            $successful = "✅ You are successfully registered.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dimple Star Transport - Login / Signup</title>
<link rel="stylesheet" href="style/style.css">
<link rel="icon" href="images/icon.ico" type="image/x-icon">
</head>
<body>
<div id="wrapper">

    <!-- NAVIGATION -->
    <?php include("commons/navbar.php"); ?>

    <div id="content">
        <div class="auth-container">

            <!-- LOGIN FORM -->
            <div class="auth-card">
                <h2>Login</h2>
                <form method="post" action="login.php">
                    <label for="login_email">E-mail</label>
                    <input type="email" name="login_email" id="login_email" required>

                    <label for="login_password">Password</label>
                    <input type="password" name="login_password" id="login_password" required>

                    <input type="submit" class="submit" value="Login">

                    <?php if(isset($_GET['message'])){ echo "<p class='error-msg'>" .$_GET['message']. "</p>"; } ?>
                </form>
            </div>

            <!-- SIGNUP FORM -->
            <div class="auth-card">
                <h2>Sign Up</h2>
                <form method="post" action="signlog.php">

                    <?php if(isset($successful)){ echo "<p class='success-msg'>$successful</p>"; } ?>

                    <div class="form-group">
                        <input type="text" name="fname" placeholder="First Name"
                            value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>">
                        <input type="text" name="lname" placeholder="Last Name"
                            value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>">
                    </div>
                    <?php if(isset($errors['fname'])) echo "<p class='error-msg'>{$errors['fname']}</p>"; ?>
                    <?php if(isset($errors['lname'])) echo "<p class='error-msg'>{$errors['lname']}</p>"; ?>

                    <input type="email" name="email" placeholder="E-mail Address"
                        value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                    <?php if(isset($errors['email'])) echo "<p class='error-msg'>{$errors['email']}</p>"; ?>

                    <input type="password" name="password" placeholder="Password">
                    <?php if(isset($errors['password'])) echo "<p class='error-msg'>{$errors['password']}</p>"; ?>

                    <input type="password" name="confirm_password" placeholder="Confirm Password">
                    <?php if(isset($errors['confirm_password'])) echo "<p class='error-msg'>{$errors['confirm_password']}</p>"; ?>

                    <input type="submit" class="submit" value="Sign Up">
                </form>
            </div>

        </div>
    </div>

    <!-- FOOTER -->
    <?php include("commons/footer.php"); ?>

</div>
</body>
</html>
