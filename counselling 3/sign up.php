<?php
require("connect.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$address= $_POST['address'];
;
if (isset($_POST['sign up'])) {
    

    $sgl = "INSERT INTO patient(Name,lastname,address,gender,password,Email,phone) values('$fname','$phone','$address','$lastname','$gender','$password','$email')";
    $result = mysqli_query($connect,$sgl);
    header("location:patientdashboard.html")
    

    
    }
}

