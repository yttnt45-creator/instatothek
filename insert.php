<?php

$username = $_POST["username"];
$password = $_POST["password"]; 

$conn = new mysqli ("localhost", "root", "", "insta");

$insert = "INSERT INTO users (username, password) 
VALUES ('$username', '$password')";

$qury = $conn->query($insert); 

if ($qury === TRUE) {
    header("Location: log.php");
} else {
    echo "خطأ في تسجيل الدخول: " . $conn->error;
}

if($qury){
    header("Location: index.php");
}