<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'include/common.php';
if(!isset($_SESSION["email_id"])){
        header("location: login.php");
    }else{
        $user_id = $_SESSION["id"];
        $email = $_SESSION["email_id"];
        $new_password = md5(mysqli_real_escape_string($con, $_POST["new_ password"]));
        $retype_pass = md5(mysqli_real_escape_string($con, $_POST["retype new password"]));

      if($new_password != $retype_pass){
            echo "The passwords do not match. Try again.";
        }else{
            $query = "UPDATE users SET password = '$new_password' WHERE email = '$email' AND id = '$user_id'";

            $result = mysqli_query($con, $query) or die(mysqli_error($con));

            header("location: settings.php");
        }  
    }
?>