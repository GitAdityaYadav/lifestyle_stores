<?php
    require 'include/common.php';
    
    $email=$_POST['email'];
   $email = mysqli_real_escape_string($con, $_POST["email"]);
   $name=$_POST['name'];
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $password=$_POST['password'];
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $contact=$_POST['contact'];
    $contact = mysqli_real_escape_string($con, $_POST["contact"]);
    $city=$_POST['city'];
    $city = mysqli_real_escape_string($con, $_POST["city"]);
    $address=$_POST['address'];
    $address = mysqli_real_escape_string($con, $_POST["address"]);
    
    // hash password
   $encrypt_password = md5($password);
    $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$encrypt_password'";
    $query2 = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$encrypt_password', '$contact', '$city', '$address')";

    // check if already registered user
    $result = mysqli_query($con, $query1);
    if(mysqli_num_rows($result) > 0){
        // email already exists
        echo "Email id already exists. Try another";
    }else{
        // perform query operation
        $result = mysqli_query($con, $query2);
         $user_id = mysqli_insert_id($con);
    $_SESSION['email_id'] = $email;
    $_SESSION['id'] = $user_id;
    header('location: products.php');

        // redirect to products page
        header("location: products.php");
    }
?>