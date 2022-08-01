<?php
require 'include/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign up</title>
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
         <?php
           include 'include/header.php';
           ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-bottom:150px">
            <h1>SIGN UP</h1>
            <form method="POST" action="signup_script.php">
                 <div class="form-group">
                            
                     <input type="text"  class="form-control" placeholder="Name" name="name" required="true" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
                        </div>
                            <div class="form-group">
                            
                                <input type="email"  class="form-control" placeholder="E-mail" name="email" required="true" >
                        </div>
                        <div class="form-group">
                         
                            <input type="password"  class="form-control" name="password" placeholder="password" required="true" pattern=".{6,}">
                        </div>
                <div class="form-group">
                            
                    <input type="text"  class="form-control" placeholder="Contact" name="contact" required="true">
                </div>
                <div class="form-group">
                            
                                     <input type="text"  class="form-control" placeholder="City" name="city" required="true">
                        </div>
                <div class="form-group">
                            
                                     <input type="text"  class="form-control" placeholder="Address" name="address" required="true">
                        </div>
                            
                <button type="submit" name="submit" value="registration_submit" class="btn btn-primary">Submit</button>
            </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br> 
         <?php
           include 'include/footer.php';
           ?> 
    </body>
</html>

