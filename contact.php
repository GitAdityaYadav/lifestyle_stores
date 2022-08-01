<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store-Contact </title>
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
        require 'include/header.php';
        ?>
        <div class="container">
            <img style="float: right" src="img/contact.png">
            <h1>LIVE SUPPORT</h1>
            <h3>24 hours|7 days a week|365 days a year live technical support</h3>
            <div class="row">
                <div class="col-md-6" style="margin-bottom:240px">
                    <form>
                        <div class="form-group">
                            
                     <input type="text"  class="form-control" placeholder="Name" name="name" required="true" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
                        </div>
                            <div class="form-group">
                            
                                <input type="email"  class="form-control" placeholder="E-mail" name="email" required="true" >
                        </div>
                        <div class="form-group">
                         
                            <input type="text"  class="form-control" name="message" placeholder="Message" required="true" style="height: 100px">
                        </div>
                         <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        
            require 'include/footer.php';
        ?>
    </body>
