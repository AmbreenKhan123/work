<?php include ('dbcon.php')?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Invoice
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
 <!-- jquery cdn -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
 <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
   
</head>
<body>
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
   
  

   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Bill</h4>
                    </div>
                    <div class="card-body">
                                <table class="table table-dark table-responsive">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <!-- <th>Date</th> -->
                                            <th>Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $total=0;
                                        if(isset($_SESSION['cart'])){
                                        foreach ($_SESSION['cart'] as $key=>$value) {
               
                                        ?>
                                        <tr>
                                        <td><?php echo $value['id']; ?></td>
                                        <td><?php echo $value['product_name']; ?></td>
                                        <td><?php echo $value['s_price']; ?></td>
                                        <td><?php echo $value['qty']; ?></td>
              
                                        <td>
                                        <?php
                                        $value['s_price']*$value['qty'];
                                        $prod=$value['s_price']*$value['qty'];
                                        echo $prod;
                                        ?>
                                        </td>
                                        </tr>
                                        <!-- Grand total calculation -->
                                        <?php
                                        $total=$total+$prod;
                                        //   echo $total;
                                        ?>
             
                                        <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                    </table>
                        
                                    </div>
            <div>
            <a class="btn btn-primary" style="margin-left:20px ; width:40%; height:60px; font-size:20px">
            Total Rs:<?php echo $total; ?></a>
            </div>
                            </div>
                            </div>
                        
                    </div>
                </div>

</main>
</body>
</html>