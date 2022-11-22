<?php include ('dbcon.php'); ?>
<?php
 if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM `admin_form`  `id`=' $id'";
    $result = mysqli_query($con,$query);
    if (!$result) {
        echo "query failed";
    }
    else {
        $row = mysqli_fetch_assoc($result);
    }
 }
?>
<?php
    if (isset($_POST['update_admin'])) {

        if (isset($_GET['id_new'])) {
            $id_new = $_GET['id_new'];
        }
        
        $username = $_POST['u-name'];
        $password = $_POST['pass'];
        $image = $_FILES['img']['name'];
        $tempname = $_FILES['img']['tmp_name'];
        $folder = "images/".$image;
        
        echo "<img src='$folder' height='100px'; width='100px';>";

        $query = "UPDATE `admin_form` SET `username`='$username',`password`='$password',`image`='$folder' WHERE `id`= '$id_new'";
        $result = mysqli_query($con,$query);

        move_uploaded_file($tempname, $folder);

        if (!$result) {
            echo "query failed";
        }
        else{
            header('location:admins.php');
        }
    }
?>



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
    <title>admin form</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="box1">        
    <h4 style="padding-left:530px ; padding-top: 50px;" >UPDATE ADMIN</h4>
    </div> 
            <!-- Modal -->
            
                <div class="pl-5 pr-5" >
                <center>
                 <form style="width:50%;" method="POST" enctype="multipart/form-data" action="update_admin.php?id_new=<?php echo $id; ?>">
                          
                          <p>
                          <input type="text" class="form-control col lg-auto" placeholder="User Name" name="u-name" value="<?php echo $row['username']; ?>">  
                          </p>    
                          <p>
                          <input type="password" class="form-control col lg-auto" placeholder="Password" name="pass" value="<?php echo $row['password']; ?>">  
                          </p>  
                          <p>
                          <input type="file" class="form-control col lg-auto" placeholder="Image" name="img" value="<?php echo $row['image']; ?>">  
                          </p>  
                          <p>
                          <input type="submit" value="UPDATE ADMIN"  name="update_admin" class="btn btn-primary">
                          </p>     
                        
                          </form>
                 </center>
                </div>
  </body>
</html>