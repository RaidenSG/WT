<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="assignment";

// Create connection
$conn = new mysqli($servername,$username,$password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // echo 'Yes data submited';



    $user_name = $_POST['email'];
    $password = $_POST['password'];



    if(!empty($user_name)&& !empty($password) && !is_numeric($user_name))
  {
    //read from database
    
    $query = "select * from content where name = '$user_name' limit 1";
    
    $result = mysqli_query($conn,$query);
    if($result)
    {
        if($result)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] == $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
        }
    }


    header("Location: home.php");
  }else
  {
    echo "Please Enter valid information";
	header ('location:index.php');
  }
}

?>