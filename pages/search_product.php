<?php
include ('dbcon.php')
?>
<?php
// echo "hello";

if(isset($_POST['input'])){

    $input = $_POST['input'];

    $query = "SELECT * FROM `product_form` WHERE product_name LIKE '%{$input}%'";

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {
        ?>
            
                <!-- Fecth data from database -->
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    
                 ?>
                 <div style= "width:75%; margin-left:120px; margin-top:20px ">
                 <table class="table table-hover table-bordered table-striped table-dark">
                    
                    <!-- display fetched data in browser -->
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo  $row['product_name'];?></td>
                        <td><?php echo  $row['Category']; ?></td>
                        <td><?php echo $row['s_price']; ?></td>
                        <td><?php echo $row['p_price']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><a href="update_product.php?id=<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                        <td><a href="delete_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                    </tr>
                  </table>
                 </div>
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