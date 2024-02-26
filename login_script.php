<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();

//mysqli_select_db($con, $store);
$uname = $_POST['name'];
$email = $_POST['email'];
$password =  $_POST['password'];

$data= "select * from users where Email = '$email' && PASSWORD = '$password'";
$result=mysqli_query($con,$data)or die(mysqli_erro($con));
$count= mysqli_num_rows($result);
//echo $count;
if($count==1)
  {
       $_SESSION['user_name']=$uname;
       header('location:product.php');
  }
  else
  {
       header('location:login.php');
  }
  ?>
 

