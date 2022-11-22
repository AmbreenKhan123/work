<?php include('dbcon.php'); ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

   $query= "DELETE FROM `category_form` WHERE `sr_no`= '$id'";
   $result = mysqli_query($con, $query);

   if (!$result) {
    echo "query failed";
   }
   else{
    header('location:categories.php');
   }
}
?>