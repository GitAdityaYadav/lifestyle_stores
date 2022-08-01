<?php
require 'include/common.php';
if (isset($_SESSION['email_id'])) {
 header('location: products.php');
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
        <title>Lifestyle Store</title>
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
        <div id="banner_image">
            <center>
            <div class="container">
                <div id="banner-content">
                    <h1>We sell lifestyle</h1>
                    <p>Flat 40% OFF</p>
                    <link><a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a> 
                </div>
            </div> 
            </center>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="#" class="thumbnail"><img src="img/1.jpg">
                    <div class="caption">
                        <center>
                            <h3>Cameras</h3>
                            <p>Choose among the best available in the world</p>
                        </center>
                    </div>
                    </a>    
                </div>
                <div class="col-md-4">
                    <a href="#" class="thumbnail"><img src="img/watch.jpg">
                    <div class="caption">
                        <center>
                            <h3>watches</h3>
                            <p>Choose among the best available in the world</p>
                        </center>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="thumbnail"><img src="img/shirt.jpg">
                    <div class="caption">
                        <center>
                            <h3>Shirts</h3>
                            <p>Choose among the best available in the world</p>
                        </center>
                    </div>
                    </a>
                        
                </div>
            </div>
                
                
        </div>
      <?php 
      include 'include/footer.php';
      ?>
        
    </body>
</html>