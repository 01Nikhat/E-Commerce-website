
<?php include 'common.php';?>

<!DOCTYPE html>
<html>
    <head>
        <title>Password Change</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>

    <body>
       
    <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Change Your Password</div>
                    <div class="panel-body">
                        <form method="POST" action="setting_script.php ">
                            <div class="form-group">
                                <label for="email">Enter your Email</label>
                                <input type="email" class="form-control" id="user_id" name="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Enter your old password:</label>
                                <input type="password" class="form-control" id="pwd" name="oldpassword" placeholder="password">
                            </div>
                            <div class="form-group">
                                <label for="newpassword">Enter your new password:</label>
                                <input type="password" class="form-control" id="pwd" name="newpassword" placeholder="password">
                            </div>
                            <div class="form-group">
                                <label>Re-type your new password:</label>
                                <input type="confirmnewpassword" class="form-control" id="pwd" name="confirmnewpassword" placeholder="password">
                            </div>
                             <button type="submit" class="btn btn-primary" name="Submit" value=”registration_submit”>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>                   
   </body>
    </html>  