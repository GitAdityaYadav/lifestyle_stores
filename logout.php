<?php
require 'include/common.php';
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Logout</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container" style="margin-bottom: 560px">
            <center>
            <h1>You Have Successfully Logout</h1>
            <h3>
                <a href="index.php">Click Here</a>
            To Shop More..
            </h3>
            </center>
        </div>
        <?php
		include 'include/footer.php';
		?>
    </body>
</html>

