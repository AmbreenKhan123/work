<?php include ('dbcon.php'); ?>


<?php
session_start();
 if(isset($_SESSION['cart']))
 {
    foreach($_SESSION['cart'] as $k=>$value)
    {
     {
        unset($_SESSION['cart'][$k]);
     }
    }
 }
header("location:billing.php");
?>
