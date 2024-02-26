 <?php

include 'common.php';
session_start();
 
/*if (!isset($_SESSION['email']))
{
  header('location:index.php');
 
}*/

$con = mysqli_connect("localhost", "root");
mysqli_select_db($con, 'loginpage');
        $userid = mysqli_real_escape_string($con,$_POST['username']);
        $password =md5( $_POST['password']);
        $newpassword = md5($_POST['newpassword']);
        $confirmnewpassword = md5($_POST['confirmnewpassword']);
        $result = mysqli_query($con,"SELECT password FROM signup WHERE user_id='$userid'");
        //$row = $result->fetch_assoc();
        //echo htmlentities($row['_message']);
        if(!$result){
        /*{
        echo "The username you entered does not exist";
        }
        else if($password!= mysqli_free_result($result))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        {  
            if (strlen($newpassword) > 25 || strlen($newpassword) < 6)
            {*/     
        $sql=mysqli_query("UPDATE signup SET password='$newpassword' where user_id='$userid'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
            }
   
?>
