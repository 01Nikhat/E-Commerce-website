
<!DOCTYPE html>
<html><!
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Product page</title>
        <link rel="stylesheet" href="css/style.css" >
        <style type="text/css">
      
        .btn-primary
        {
            padding-left: 80px;
            padding-right: 80px;
        }
        .foot_elmnt
        {
	background-color: #000; 
	color:#fff; 
	font-size:14px;
	text-align: center;
	height:40px;
	padding-top: 2px;
        margin-top: 800px;
        width: 1349px;
        }

        </style>
    </head>
    <body>
        
        <div class="container">
        <div class="jumbotron img-responsive">
        
            <div class="container">
                <div class="content1">
                    
                    <center>
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
                    </center>
                </div>
            </div>
        </div>
        </div> 
        <table>
            
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        
                        <form method="POST" action="cart.php" >  
                            <img src="images\web_image\camera4.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>Camera</h3>
                                <p>Price:Rs.50000.00</p>
                                 <a href="cart.php">
                                           
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart"  >  </a>
                                </center>
                            </div>
                        </form>
                            </div>
                </div>
                
                                 

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <form method="POST" action="product.php">  
                            <img src="images\web_image\camera2.jpg" alt="cmr2" >
                            <div class="caption">
                                <center> 
                                <h3>Sony DSLR</h3>
                                <p>Price:Rs.40000.00</p>
                                 <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                        </form>
                        </div> 
                    
                    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <form method="POST" action="cart.php"> 
                            <img src="images\web_image\camera3.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>Sony DSLR</h3>
                                <p>Price:Rs.40000.00</p>
                                 <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                        </form>
                        </div>
                    
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <form method="POST" action="cart.php"> 
                            <img src="images\web_image\camera4.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>Camera</h3>
                                <p>Price:Rs.50000.00</p>
                                 <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                        </form>
                        </div> 
                    
                    
                </div>
                
                  </div>
        </div>
        
                <div class="container">
                    <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <form method="POST" action="cart.php"> 
                            <img src="images\web_image\watch1.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>Titan Model#301</h3>
                                <p>Price:Rs.130000.00</p>
                                 <a href="cart.php">
                                     <input type="hidden" value="<?php $id ?>" >
                                              
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                        </form>
                        </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <form method="POST" action="cart.php"> 
                            <img src="images\web_image\watch2.jpg" alt="watch2">
                            <div class="caption">
                                <center> 
                                <h3>Titan Model#201</h3>
                                <p>Price:Rs.80000.00</p>
                                 <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                        </form>
                        </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <form method="POST" action="cart.php"> 
                            <img src="images\web_image\watch3.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>HMT Milon</h3>
                                <p>Price:Rs.60000.00</p>
                                 <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                        </form>
                        </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <form method="POST" action="cart.php"> 
                            <img src="images\web_image\watch4.jpg" alt="">
                            <div class="caption">
                               
                                <center> 
                                <h3>Titan Model#301</h3>
                                <p>Price:Rs.145000.00</p>
                                  <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                        </form>
                        </div>
                    
                </div>
            </div>
        </div>
        <div class="container">
                    <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <form method="POST" action="cart.php"> 
                            <img src="images\web_image\shirt1.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>H&W</h3>
                                <p>Price:Rs.800.00</p>
                                <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                        </form>
                        </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <form method="POST" action="cart.php"> 
                            <img src="images\web_image\shirt2.jpg" alt="">
                            <div class="caption">
                                
                                <center> 
                                <h3>Luis Phill</h3>
                                <p>Price:Rs.1000.00</p>
                                 <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                        </form>
                        </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <form method="POST" action="cart.php"> 
                            <img src="images\web_image\shirt3.jpg" alt="">
                            <div class="caption">
                                
                                <center> 
                                <h3>John Zole</h3>
                                <p>Price:Rs.1500.00</p>
                                <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                       </form>
                        </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <form method="POST" action="cart.php"> 
                            <img src="images\web_image\shirt4.jpg" alt="">
                            <div class="caption">
                                <center> 
                                <h3>Jhalsani</h3>
                                <p>Price:Rs.13300.00</p>
                                 <a href="cart.php">
                               <input  class="btn btn-primary" type="button" name="btn1" value="Add to cart" >  </a>
                                </center>
                            </div>
                       </form>
                        </div>
                    
                </div>
            </div>
        </div>
      </table>

    </body>
    <footer>
	<div class="foot_elmnt">
       
		<p>Copyright © Lifestyle Store. All Rights
                    Reserved|Contact Us: +91 90000 00000 </p>

	</div>
    </footer>
</html>

?>

