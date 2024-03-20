<?php
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

//unset qunatity
unset($_SESSION['qty_array']);

$conn = mysqli_connect('localhost','root','','db_project');
$m="SELECT * FROM tb_subcategory where cat_id ='1'";
$w="SELECT * FROM tb_subcategory where cat_id ='2'";
$k="SELECT * FROM tb_subcategory where cat_id ='3'";

$m1=mysqli_query($conn,$m);
$w1=mysqli_query($conn,$w);
$k1=mysqli_query($conn,$k);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
  <style>
 a{
	font-size:15px;
 }
 .navbg{
  background-color:navy;
 }
  </style>

</head>
<body>
<section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top pl-5 navbg">
      <a href='../index.php'><img src='../pic/logo.png' style='height:40px;width:80px;'></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto pl-5">
          <li class="nav-item dropdown active">
            <a class="nav-link text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              MEN
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
                while($m2= mysqli_fetch_array($m1)){

               echo'<a class="dropdown-item" href="pro_show.php?eid='.$m2['sub_id'].'">'.$m2['sub_name'].'</a>';
               }
               ?>
              </div>
          </li>

          <li class="nav-item dropdown active ">
            <a class="nav-link text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              WOMEN
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php
                while($w2= mysqli_fetch_array($w1)){

               echo'<a class="dropdown-item" href="pro_show.php?eid='.$w2['sub_id'].'">'.$w2['sub_name'].'</a>';
               }
               ?>

            </div>
          </li>


          <li class="nav-item dropdown active ">
            <a class="nav-link text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              KIDS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
                while($k2= mysqli_fetch_array($k1)){

               echo'<a class="dropdown-item" href="pro_show.php?eid='.$k2['sub_id'].'">'.$k2['sub_name'].'</a>';
               }
               ?>

            </div>

          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 pl-5" style='margin-left:130px;'>
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav mr-auto pl-5">
          
       
         
          <li class="nav-item pt-1">
          <a href="cart/view_cart.php"><span class="badge"><?php echo count($_SESSION['cart']); ?></span> <i class="fa fa-shopping-cart" aria-hidden="true" class="icon" style="font-size:30px; color:white;";></i></a>
          </li>

          <li class="nav-item pt-2 pl-5">
        <button type="button" class="btn btn-light active" ><a href="../login_page.php" style='text-decoration:none;'>LOGIN</a></button>
          </li>
        </ul>
      </div>
    </nav>


  </section>
</body>
</html>