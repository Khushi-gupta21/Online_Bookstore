<?php
include 'myaction.php';

if($_SERVER["REQUEST_METHOD"]=='POST'){
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO login (Username, Password, Phone, Address, Email, Gender) VALUES ('$uname', '$pass', '$phone', '$address', '$email', '$gender');";

    if($conn->query($sql)==true){
        header("location: ./login.html");
    }
}

?>