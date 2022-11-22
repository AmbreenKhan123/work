<?php  include('dbcon.php') ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM `employee_form` WHERE `id` = '$id'";
    $result = mysqli_query($con, $query);

    if (!$result){
        echo "query failed";
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
}
?>
<?php
if(isset($_POST['update_employee'])){
    if (isset($_GET['id_new'])) {
        $new_id = $_GET['id_new'];
    }

    $empName = $_POST['e-name'];
    $userName = $_POST['u-name'];
    $password = $_POST['pass'];
    $cell_no = $_POST['cell-no'];
    $comm = $_POST['comm'];

    $query = "UPDATE `employee_form` SET `emp_name`='$empName',`user_name`='$userName ',
    `password`='$password',`cell_num`='$cell_no',`commision`='$comm' WHERE `id`='$new_id'";
    $result = mysqli_query($con, $query);

    if (!$result) { 
        echo "query failed";
    }
    else{
        header('location:employees.php');
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
    <title>update employee</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="box1">        
    <h4 style="padding-left:530px ; padding-top: 50px;" >UPDATE EMPLOYEE</h4>
    </div> 
            <!-- Modal -->
            
                <div class="pl-5 pr-5" >
                <center>
                 <form style="width:50%;" method="POST" action="update_employee.php?id_new=<?php echo $id; ?>">
                          
                          <p>
                          <input type="text" class="form-control col lg-auto" placeholder="Employee Name" name="e-name" value="<?php echo $row['emp_name']; ?>">  
                          </p>
                          <p>
                          <input type="text" class="form-control col lg-auto" placeholder="User Name" name="u-name" value="<?php echo $row['user_name']; ?>">  
                          </p>    
                          <p>
                          <input type="password" class="form-control col lg-auto" placeholder="Password" name="pass" value="<?php echo $row['password']; ?>">  
                          </p>  
                          <p>
                          <input type="number" class="form-control col lg-auto" placeholder="Cell Number" name="cell-no" value="<?php echo $row['cell_num']; ?>">  
                          </p> 
                          <p>
                          <input type="number" class="form-control col lg-auto" placeholder="Commission" name="comm" value="<?php echo $row['commision']; ?>">  
                          </p>
                          <p>
                          <input type="submit" value="UPDATE EMPLOYEE"  name="update_employee" class="btn btn-primary">
                          </p>     
                        
                          </form>
                 </center>
                </div>
  </body>
</html>