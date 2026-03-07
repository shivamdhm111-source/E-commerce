<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
include './Assets/DataBase/dbconnect.php';
$email = $_GET['email'];
$password = $_GET['password'];
$sql = "SELECT * FROM `users` WHERE `email` ='$email' AND `password` ='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
    if($num == 1){
        $row = mysqli_fetch_assoc($result);
        $password_hash = $row['password'];
        if(password_verify($password, $password_hash)){
            echo "Login successful!";
            header("Location: /ecommerce-site/ecommerce/home.php");
            exit();
        }
        else{
            echo "Invalid password.";
        }
    }
}
   
?> 
