<?php include ('dbcon.php'); ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM `check_out` WHERE `id`=$id";
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo "query failed";
    }
    else{
        header('location:manage_sales.php');
    }
}
?>