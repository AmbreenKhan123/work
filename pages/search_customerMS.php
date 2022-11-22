<?php
include ('dbcon.php')
?>
<?php
// echo "hello";

if(isset($_POST['input'])){

    $input = $_POST['input'];

    $query = "SELECT * FROM `check_out` WHERE customer_name LIKE '%{$input}%'";

    $output = mysqli_query($con,$query);

    if (mysqli_num_rows($output) > 0) {
        ?>
            
                <!-- Fecth data from database -->
                <?php
                while ($row = mysqli_fetch_assoc($output)) {
                    
                 ?>
                 <div style= "width:75%; margin-left:120px; margin-top:20px ">
                 <table class="table table-hover table-bordered table-striped table-dark">
                    
                 <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['customer_name']; ?></td>
                    <td><?php echo $row['cell_number']; ?></td>
                    <td><?php echo $row['salesman']; ?></td>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td><a href="dlt_salesRecord.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>

                </tr>
                    <?php
                }
                
                ?>
            
   

    <?php
        }
        else{
            echo "<h6 class='text-danger text-center mt3'>No data found</h6>";
        }
    
}
?>