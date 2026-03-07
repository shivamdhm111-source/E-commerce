<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../Assets/DataBase/dbconnect.php';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Validate password and confirm password
    if ($password !== $cpassword) {
        die("Passwords do not match.");
    }
    else {
        // Hash the password before storing
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashed_password')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: /ecommerce-site/ecommerce/login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }}

?>