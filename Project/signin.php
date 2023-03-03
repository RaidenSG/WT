<?php

if(isset($_POST['submit'])){
    // echo 'Yes data submited';


    $userName = $_POST['name'];
    $Password = $_POST['password'];



    $sql = "SELECT * FROM content WHERE username = '$userName' and passwords = '$Password'";


    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if($count ==1){
        $_SESSION['loginMessage'] = '<span class="success">Welcome' .$username.' </span>';
        header('location:' .SITEURL. 'home.php');
        exit();

    }
    else{
        $_SESSION['noAdmin'] = '<span class="fail">Account' .$username.' is not registered! </span>';
        header('location:' .SITEURL. 'index.php');
        exit();
    }

}

?>
