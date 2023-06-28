<?php

session_start();
include("fuctions.php");







$connection = mysqli_connect('localhost', 'root', '', 'bookingweb');

if (isset($_POST['send'])) {
    $name = $_POST['name'];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $request = "INSERT INTO userdetails(name,email,password) VALUES ('$name','$email','$password')";

    mysqli_query($connection, $request);
    header('location:signin.php');
} else {
    // echo 'something went wrong try again';
}



?>

<!DOCTYPE html>
<html>

<head>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In and Sign Up From - Easy Tutorials</title>
    <link rel="stylesheet" href="style3.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form action="signup.php" method="post">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <!-- <i class="fa-solif fa-user"></i> -->
                        <!-- <i class="fa-solid fa-user"></i> -->
                        <i style="font-size:24px" class="fa">&#xf007;</i>
                        <input type="text" placeholder="Username" name="name">
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

                        <input type="submit" name="send" class="submit" value="sign up">
                    </div>

                </div>
                <div class="btn-field">
                    <pre><button type="button" id="signupBtn"><a href="signup.php">Sign up</a></button>    <button type="button" id="signinBtn" class="disable"><a href="signin.php">Sign in</a></button></pre>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
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
    </script>
</body>

</html>