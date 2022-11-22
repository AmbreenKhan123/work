<?php include('dbcon.php');?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

$query = "DELETE FROM `hold_cart` WHERE `id`=$id";
$result= mysqli_query($con, $query);

if(!$result){
    echo "query failed";
}
else{
    header('location:hold_cart.php');
}
}
?>