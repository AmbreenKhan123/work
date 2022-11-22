<?php
session_start();

include ('dbcon.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    </head>
    <body>
  
<table class="table table-dark table-responsive">
    
<tbody>
				<?php 

				$total_price = 0;

				if (!empty($_SESSION['cart'])) {
					
					foreach ($_SESSION['cart'] as $key => $value) { ?>
						<tr>
                            <td><?php echo $value['id']; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['price']; ?></td>
							<td><?php echo $value['quantity']; ?></td>
              <td>
               <?php
               $value['price'] * $value['quantity'];
               $prod=$value['price'] * $value['quantity'];
               echo $prod;
               ?>
              </td>
              <td>
              <button class="btn btn-danger remove" id="<?php echo $value['id']; ?>">Delete</button>
              </td>
						</tr>

						 

						
						
					<?php }
				}
        ?>
        </tbody>
			</table>

  
  
</body>

</html>
