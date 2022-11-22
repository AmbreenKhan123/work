<?php include ('dbcon.php'); ?>


<?php
session_start();
 if(isset($_GET['id']))
 {
    $id=$_GET['id'];
    foreach($_SESSION['cart'] as $k=>$value)
    {
     if($id==$value['id'])
     {
        unset($_SESSION['cart'][$k]);
     }
    }
 }
header("location:billing.php");


?>





