<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'include/common.php';
$email=$_POST['email'];
$email = mysqli_real_escape_string($con, $_POST['email']);
$password=$_POST['password'];
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $encrypt_password= md5($password);
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$encrypt_password'";
    $query_result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($query_result) == 0){
        echo "User account does not exists.";
    }else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION['email_id'] = $email;
        $_SESSION['id'] = $row['id'];
         header("location: products.php");
    }
?>