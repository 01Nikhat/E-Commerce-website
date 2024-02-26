<?php

//include 'common.php';
session_start();
 
/*if (!isset($_SESSION['email']))
{
  header('location:index.php');
 
}*/

$con = mysqli_connect("localhost", "root");
mysqli_select_db($con, 'store');
if(isset($_POST['Submit']))
{
        $useremail = mysqli_real_escape_string($con,$_POST['email']);
        $oldpassword =md5( $_POST['oldpassword']);
        $newpassword = md5($_POST['newpassword']);
        $re_password = md5($_POST['confirmnewpassword']);
        $result = mysqli_query($con,"SELECT PASSWORD FROM users WHERE EMAIL='$useremail'");
        echo $result;
        
        		$chg_pwd1=mysqli_fetch_array($result);
		$data_pwd=$chg_pwd1['PASSWORD'];
                echo $data_pwd;
		if($data_pwd==$oldpassword){
		if($newpassword==$re_pass){
			$update_pwd=mysqli_query("update users set PASSWORD='$newpassword' where EMAIL='$useremail'");
			echo "<script>alert('Update Sucessfully'); "
                        . "window.location='login.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); "
                    . "window.location='setting.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong');"
                    . " window.location='setting.php'</script>";
		}}
        
       //$row = $result->fetch_assoc();
        //echo htmlentities($row['_message']);
        //if(!$result){
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
        /*$sql=mysqli_query("UPDATE signup SET password='$newpassword' where user_id='$userid'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
            }*/
            
            
   
?>