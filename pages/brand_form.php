<?php include ('dbcon.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <title>Brand form</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <div class="box1">        
    <h4 style="padding-left:530px ; padding-top: 50px;" >ADD NEW BRAND</h4>
  </div> 
        
            
                <div class="pl-5 pr-5" >
                <center>
                 <form style="width:50%;" method="POST">
                          
                          <p>
                          <input type="number" class="form-control col lg-auto" placeholder="Serial Number" name="sr_no">  
                          </p>    
                          <p>
                          <input type="text" class="form-control col lg-auto" placeholder="Brand" name="brand_name">  
                          </p>  
                          <p>
                          <input type="submit" value="ADD BRAND"  name="add_brand" class="btn btn-primary">
                          </p>     
                  </form>
                 </center>
                </div>
               <?php
               if(isset($_POST['add_brand'])){
                $sr_no = $_POST['sr_no'];
                $brand_name = $_POST['brand_name'];

                $query = "INSERT INTO `brand_form`(`sr_no`, `brand_name`) VALUES ('$sr_no','$brand_name')";
                $result = mysqli_query($con, $query);

                if (!$result) {
                    echo "query failed";
                }
                else{
                    header('location:brands.php');
                }
               }
               
               ?>
  </body>
</html>