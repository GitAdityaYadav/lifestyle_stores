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
        <title>Login</title>
        <!-- Latest compiled and minified CSS -->
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
                
                <div class="col-md-6" style="margin-bottom:250px">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>LOGIN</h1>
                    </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                            <div class="form-group">
                            
                                <input type="email"  class="form-control" placeholder="E-mail" name="email" required="true">
                        </div>
                        <div class="form-group">
                         
                            <input type="password"  class="form-control" name="password" placeholder="password" required="true">
                        </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form>
                                 
                        </div>
                        <div class="panel-footer">
                            <p>Don't have a account?<a href="signup.php">Register</a></p>
                            
                        </div>
                </div>
        </div>
                
            </div>
            
    </div>
             <?php
           include 'include/footer.php';
           ?>    
    
    </body>
</html>


