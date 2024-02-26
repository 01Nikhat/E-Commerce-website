<!DOCTYPE html>
<?php include("common.php"); ?>
<?php
session_start();
if (isset($_SESSION['email'])) 
    { header('location: products.php'); }

?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle Store</title>
        <style type="text/css">
        .img-responsive
            {
              height: 800px;
              width: 1350px;
              background-size: 100%;
              background: url("images\web_image\intro-bg_1.jpg");
              
              
            }
            .content1
            {
                 color:white;
                max-width: 1000px;
                padding: 50px 80px;
                margin: 200px 200px 200px 300px;
                height: auto;
                background-color: rgba(1,1,1,0.7);
            }
         .button1
        {
	color: white;
	background-color: #c9302c;
	border-color: #ac2925;
	box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
	padding: 8px 10px;
	font-size: 20px;
	border-radius: 6px;


        }
        
            </style>
            <?php include("header.php"); ?>   
    </head>
    
        <body>        
                            
        <div class="jumbotron img-responsive" >        
            <div class="container">
                
               
                <div class="content1">
                    <center>
                        
                <h1>We sell lifestyle</h1>
                <p>Flat 40% OFF on premium brands</p>
                <a href="product.php" class="button1" type="button"> Shop now</a>                
                    </center>
                </div>
                
                
            </div>
        </div>
            
             <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    
                    <a href"#" ><div class="thumbnail">
                            <img src="images\web_image\camera.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>Camers</h3>
                                <p>Choose among the best available in the world.</p>
                                </center>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="#" ><div class="thumbnail">
                            <img src="images\web_image\watch.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>Watches</h3>
                                <p>Original watches from the best brands.</p>
                                </center>
                            </div>
                        </div> 
                    </a>
                    
                </div>

                <div class="col-sm-4">
                    <a href="#" ><div class="thumbnail">
                            <img src="images\web_image\shirt.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>Shirts</h3>
                                <p>Our exquisite collection of shirts.</p>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </body>
    <?php include("footer.php"); ?>
</html>
