<?php
require 'include/common.php';
if(!isset($_SESSION["email_id"])){
        header("location: login.php");
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
        <title>Settings</title>
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
                <div class="col-md-6" style="margin-bottom:360px">
                    <h1>Settings</h1>
                    <form method="POST" action="settings_script.php">
                 <div class="form-group">
                            
                     <input type="password"  class="form-control" placeholder="Old Password" name="old password" required="true">
                        </div>
                            <div class="form-group">
                            
                                <input type="password"  class="form-control" placeholder="new Password" name="new password" required="true">
                        </div>
                         <div class="form-group">
                            
                             <input type="password"  class="form-control" placeholder="retype New password" name="retype new password" required="true">
                        </div>
                        <button class="btn btn-primary">change</button>
                    </form>
                </div>
            </div>
        </div>
          
         <?php
           include 'include/footer.php';
           ?>      
    </body>
</html>

