

<!DOCTYPE html>

<html>
 
		   <head>
     		
			   <title>login </title>
   
			     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
			     <!--jQuery library--> 
       	
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	
		      <!--Latest compiled and minified JavaScript--> 
       
			 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
		       <meta name="viewport" content="width=device-width, initial-scale=1">
       
		 <style>
        
			    .top_margin{
                margin-top:20px;
            }
    
		    </style>
 
		   </head>
</head>
		
<body>
    	
			<div class="container">
    
			    <div class="row top_margin">
         
			   <div class="col-xs-6 col-xs-offset-3">
          
			      <div class="panel panel-primary">
                 
			   <div class="panel-heading">LOGIN</div>
             
			       <div class="panel-body">
                       
			 <form method="POST" action="login_script.php">
   
		                         <div class="form-group">
                        
			       
                             <div class="form-group">
                             <label for="email">EMAIL</label>
                 
			               <input type="email" class="form-control" id="email" name="email">
   
		                         </div>
                             <div class="form-group">
                             <label for="password">PASSWORD</label>
                 
			               <input type="password" class="form-control" id="password" name="password">
   
		                         </div>
                            
	                          
      
                      <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
 
                       </form>
  
                  </div>
      
          </div>
    
        </div>
   
     </div>

    </div>
</body>
<footer>
    <?php include("footer.php"); ?>
</footer>
</html>

