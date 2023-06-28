<?php

$connection = mysqli_connect('localhost', 'root', '', 'bookingweb');
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $apmc = $_POST['apmc'];
    $date = $_POST['date'];
    $goods = $_POST['goods'];

    $request = "INSERT INTO book_form(name,mobile,email,state,district,apmc,date,goods) VALUES ('$name','$mobile','$email','$state','$district','$apmc','$date','$goods')";

    mysqli_query($connection, $request);
    header('location:book.php');
} else {
    // echo 'something went wrong try again';
}
