
<?php
    
    $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
    session_start();
    $sql="SELECT * FROM `user_items`";
    if($con)
    {
        $result=  mysqli_query($con, $sql);
        $rows_count= mysqli_num_rows($result);
        if($rows_count==0)
        {
            echo "Cart Empty";
        }
        else
        {
            header('location:product.php');
        }
    }
    ?>

