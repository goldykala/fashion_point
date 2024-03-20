<?php
include('../connection.php');
$page= "dashboard";

$ct = "SELECT * FROM tb_category";
$ct1 = mysqli_query($conn, $ct);
$ct2 = mysqli_num_rows($ct1);

$at = "SELECT * FROM tb_subcategory";
$at1 = mysqli_query($conn, $at);
$at2 = mysqli_num_rows($at1);


$bt = "SELECT * FROM tb_userdata";
$bt1 = mysqli_query($conn, $bt);
$bt2 = mysqli_num_rows($bt1);

$dt = "SELECT * FROM tb_detail";
$dt1 = mysqli_query($conn, $dt);
$dt2 = mysqli_num_rows($dt1);





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/icon" href="../pic/logo1.png">
  <title>ADMIN-DASHBOARD</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../cdn/css/bootstrap.css">
  <style>
    h5 {
      font-size: 16px;
      text-align: center;
      color: white;
    }

    h4 {
      text-align: center;
      color: white;
    }
    h6{
      color:white;
      text-align:center;
    }
    .cd{
      text-align:center;
    }
    @media screen and (max-width: 850px) {
    .crd{
      width:300px;
      color:red;

    }}
  </style>
</head>

<body>
<?php include"navbar.php";?>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
      <?php include"sidebar.php";?>
      </div>
      <div class="col-md-10 mt-5">
        <h2 class="my-5">ORDERS</h2>
        <div class="row">

          <div class="card-deck">
            <div class="card bg-success crd">
              <div class="card-body">
                <img src='pic/fafa.png' style='height:30px; width:30px; margin-left:60px;margin-bottom:20px;'>
                <h6>TODAY ORDERS</h6>
                <h4 class="mt-5">10+</h5>
                  <h5>₹5000</h5>
              </div>
            </div>
            <div class="card">
              <div class="card-body bg-success crd">
              <img src='pic/fafa.png' style='height:30px; width:30px; margin-left:60px;margin-bottom:20px;'>
                <h6>YESTERDAY ORDERS</h6>
                <h4 class='mt-4'>20+</h4>
                <h5>₹8000</h5>
              </div>
            </div>
            <div class="card bg-danger  crd">
              <div class="card-body">
                <h5 class="fa fa-shopping-cart" style='font-size:30px; margin-left: 60px; margin-bottom: 20px;'></h5>
                <h6>THIS MONTH ORDERS</h6>
                <h4 class='mt-4'>400+</h5>
                  <h5>₹80000</h5>
              </div>
            </div>
            <div class="card bg-primary crd">
              <div class="card-body">
                <h5 class="	fa fa-credit-card" style='font-size:30px; margin-left: 60px; margin-bottom: 20px;'></h5>
                <h6>LAST MONTH SALE</h6>
                <h4 class='mt-4'>₹80000</h5>

              </div>
            </div>

            <div class="card bg-primary crd">
              <div class="card-body">
              <h5 class="	fa fa-credit-card" style='font-size:30px; margin-left: 60px; margin-bottom: 20px;'></h5>
                <h6>ALL TIME SALE</h6>
                <h4 class='mt-4'>₹2004000</h5>

              </div>
            </div>
          </div>
        </div>

        <h2 class="my-5">DETAILS</h2>
        <div class="row mb-5">
        <div class="card-deck">
            <div class="card bg-primary cd" >
              <div class="card-body">
                <h5 class="fa fa-user" style='font-size:80px; margin-bottom: 20px;'></h5>
                <h5>USERS</h5>
                <h4 class="mt-4"><?php echo $bt2;?></h5>
              </div>
            </div>

            <div class="card bg-danger  cd ml-4" >
              <div class="card-body">
                <h5 class="fa fa-list-alt" style='font-size:80px; margin-bottom: 20px;'></h5>
                <h5>CATEGORY</h5>
                <h4 class="mt-4"><?php echo $ct2;?></h5>
              </div>
            </div>

            <div class="card bg-danger  cd ml-4" >
              <div class="card-body">
                <h5 class="fa fa-trello" style='font-size:80px; margin-bottom: 20px;'></h5>
                <h5>SUB-CATEGORY</h5>
                <h5 class="mt-4"><?php echo $at2;?></h5>
              </div>
            </div>

            <div class="card bg-primary  cd ml-4" >
              <div class="card-body">
                <h5 class="fa fa-shopping-bag " style='font-size:70px; margin-bottom: 20px;'></h5>
                <h5 class='mt-2'>PRODUCTS</h5>
                <h4 class="mt-4"><?php echo $dt2;?></h5>
              </div>
            </div> 
          
          
          </div>
        </div>
      </div>
    </div>
</body>

</html>