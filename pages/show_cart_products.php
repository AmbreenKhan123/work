<?php
include ('dbcon.php')
?>

<table class="table table-dark">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
           <?php

           $query = "SELECT * FROM `product_form`";
           $result = mysqli_query($con,$query);
           if(!$con){
            echo "query failed";
           }
           else{
            // echo "successful";
           }
           while ($row= mysqli_fetch_assoc($result)) {
            ?>
            <form action="" method="post">
            <tr>
              <td><?php echo $row['product_name']; ?></td>
              <td><?php echo $row['s_price']; ?></td>
              <td><input type="number" id="quantity<?php echo $row['id']; ?>" name="quantity" style="width:50px" min="0" max="<?php echo $row['quantity']; ?>" required></td>
            
              
                <input type="hidden" id="id" placeholder="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" id="product_name" placeholder="name" value="<?php echo $row['product_name']; ?>" >
                <input type="hidden" id="s_price" placeholder="sales price" value="<?php echo $row['s_price']; ?>" >
                <td><input type="submit" id="<?php echo $row['id']; ?>" class="btn btn-success" value="ADD CART" name="add_to_cart"></input></td>
                </form>
            </tr>
            <?php
           }

           ?>
</tbody>
</table>