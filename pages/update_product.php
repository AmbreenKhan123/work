<?php include('dbcon.php'); ?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM `product_form` WHERE `id`=' $id'";
    $output = mysqli_query($con,$query);
    if (!$output) {
        echo "query failed";
    }
    else{
        $row = mysqli_fetch_assoc($output);
        // print_r($row);
    }

}
?>
<?php
if(isset($_POST['update_btn'])){

    if (isset($_GET['id_new'])) {
        $new_id = $_GET['id_new'];
    }
    $prodcut_name = $_POST['p-name'];
    $category = $_POST['category'];
    $s_price = $_POST['s-price'];
    $p_price = $_POST['p-price'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];

    $query = "UPDATE `product_form` SET `product_name`='$prodcut_name ',`Category`='$category',
    `s_price`='$s_price',`p_price`='$p_price',`quantity`='$quantity',`date`='$date ' WHERE `id`='$new_id'";

    $result = mysqli_query($con,$query);

    if (!$result) {
        echo "query failed";
    }
    else{
        header('location:products.php');
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update product</title>
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!--  CSS files-->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
      <!-- Nucleo Icons -->
      <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
</head>
<body>
<div class="box1">        
    <h4 style="padding-left:530px ; padding-top: 50px;" >UPDATE PRODUCT</h4>
</div> 
<div class="pl-5 pr-5" >
    <center>
        <form style="width:50%;" method="POST" action="update_product.php?id_new=<?php echo $id; ?>" >
                          
            <p>
            <input type="text" class="form-control col lg-auto" placeholder="Product Name" name="p-name" value=" <?php echo $row['product_name']?>">  
            </p>    
            <p>
            <input type="text" class="form-control col lg-auto" placeholder="Category" name="category" value=" <?php echo $row['Category']?>">  
            </p>  
            <p>
            <input type="text" class="form-control col lg-auto" placeholder="Sale Price" name="s-price" value=" <?php echo $row['s_price']?>">  
            </p>  
            <p>
            <input type="text" class="form-control col lg-auto" placeholder="Purchase Price" name="p-price" value="<?php echo $row['p_price'] ?>">  
            </p> 
            <p>
            <input type="text" class="form-control col lg-auto" placeholder="Quantity" name="quantity" value="<?php echo $row['quantity'] ?>">  
            </p>
            <p>
            <input type="date" class="form-control col lg-auto" placeholder="Date" name="date">  
            </p>  
            <p>
            <input type="submit" value="UPDATE PRODUCT"  name="update_btn" class="btn btn-primary">
            </p>     
                        
        </form>
    </center>
</div>
</body>
</html>
