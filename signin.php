<?php
session_start();
include("fuctions.php");

$connection = mysqli_connect('localhost', 'root', '', 'bookingweb');

/*if (isset($_POST['send'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];

    $request = "SELECT * FROM `userdetails` WHERE email=$email ";
    $result = mysqli_query($connection, $request);

    $user_data = mysqli_fetch_assoc($result);
    if ($user_data['password'] === $password) {
        $_SESSION['name'] = $user_data['name'];
        header('location:home.php');
    }
}
*/



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform your login validation here
    // Replace the following code with your actual login logic

    // Example login validation
    $request = "SELECT * FROM `userdetails` WHERE email=$email ";
    $result = mysqli_query($connection, $request);

    $user_data = mysqli_fetch_assoc($result);
    if ($email === $email && $password === $password) {
        // Successful login
        echo "Login successful!";
        header('location:home.php');
    } else {
        // Invalid login
        echo "Invalid email or password.";
    }
}







?>





<!DOCTYPE html>
<html>

<head>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style3.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign In</h1>
            <form action="signin.php" method="post">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <!-- <i class="fa-solif fa-user"></i> -->
                        <!-- <i class="fa-solid fa-user"></i> -->

                    </div>
                    <div class="input-field">
                        <!-- <i class="fa-solif fa-envelope"></i> -->
                        <!-- <i class="fa-solid fa-envelope"></i> -->
                        <i style="font-size:24px" class="fa">&#xf0e0;</i>
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-field">
                        <!-- <i class="fa-solif fa-lock"></i> -->
                        <i style="font-size:24px" class="fa">&#xf13e;</i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div class="input-field">
                        <!-- <i class="fa-solif fa-lock"></i> -->

                        <input type="submit" name="send" class="submit" value="login">
                    </div>

                </div>
                <div class="btn-field">
                    <pre><button type="button" id="signupBtn"><a href="signup.php">Sign up</a></button>      <button type="button" id="signinBtn" class="disable"><a href="signin.php">Sign in</a></button></pre>
                </div>
            </form>
        </div>
    </div>
    <!-- <script type="text/javascript">
        let signupBtn = document.getElementById("signupBtn");
        let signinBtn = document.getElementById("signinBtn");
        let nameField = document.getElementById("nameField");
        let title = document.getElementById("title");

        signinBtn.onclick = function() {
            nameField.style.maxHeight = "0";
            title.innerHTML = "Sign In"
            signupBtn.classList.add("disable");
            signinBtn.classList.remove("disable");
        }
        signupBtn.onclick = function() {
            nameField.style.maxHeight = "60px";
            title.innerHTML = "Sign Up"
            signupBtn.classList.remove("disable");
            signinBtn.classList.add("disable");
        }
    </script> -->
</body>

</html>