<?php include ('dbcon.php')?>

<?php
if(isset($_GET['id'])){
    $id= $_GET['id'];

    $query = "SELECT * FROM `expense_form` WHERE `id`='$id'";
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
        $id_new=$_GET['id_new'];
    }
    $id = $_POST['id'];
    $exp_type = $_POST['exp_type'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    $update = "UPDATE `expense_form` SET `id`='$id',`exp_type`='$exp_type',`amount`='$amount',`exp_date`='$date' WHERE `id`='$id_new'";
    $output = mysqli_query($con,$update);

    if (!$output) {
        echo "query failed";
    }
    else{
        header('location:manage_expenses.php');
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
    <title>Update Expense form</title>
</head>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="box1">        
    <h4 style="padding-left:530px ; padding-top: 50px;" >UPDATE EXPENSE</h4>
    </div> 
        
            
                <div class="pl-5 pr-5" >
                <center>
                 <form style="width:50%;" method="POST" action="update_expense.php?id_new=<?php echo $id; ?>">
                          
                          <p>
                          <input type="number" class="form-control col lg-auto" placeholder="ID" name="id" value="<?php echo  $row['id'];?>">  
                          </p>    
                          <p>
                          <input type="text" class="form-control col lg-auto" placeholder="Expense Type" name="exp_type" value="<?php echo  $row['exp_type'];?>">  
                          </p>
                          <p>
                          <input type="text" class="form-control col lg-auto" placeholder="Amount" name="amount"value="<?php echo  $row['amount'];?>">  
                          </p> 
                          <p>
                          <input type="date" class="form-control col lg-auto" placeholder="Expense Date" name="date" value="<?php echo $row['exp_date'];?>">  
                          </p>  
                          <p>
                          <input type="submit" value="UPDATE EXPENSE"  name="update_btn" class="btn btn-primary">
                          </p>     
                        
                          </form>
                 </center>
                </div>

  </body>
</html>