<?php

   
    $conn = mysqli_connect('localhost', 'root', '','assignment');


$name = $_POST['name'];
$DOB = $_POST['DOB'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql="INSERT INTO `content` ( `name`, `date`, `email`, `password`) VALUES ('$name', '$DOB',' $email',' $password')";

mysqli_query($conn, $sql);

header("Location:register.php");

     ?>