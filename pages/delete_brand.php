<?php include('dbcon.php'); ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

   $query= "DELETE FROM `brand_form` WHERE `sr_no`= '$id'";
   $result = mysqli_query($con, $query);

   if (!$result) {
    echo "query failed";
   }
   else{
    header('location:brands.php');
   }
}
?>