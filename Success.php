
<?php
include 'common.php';
session_start();
if (!isset($_SESSION['email']))
{
    echo"Your order is confirmed. Thank you for shopping with you  to purchase any other item. ";
}else{
    header('location:index.php');
}
?>
