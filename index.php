<?php 
session_start();
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
  <link rel="icon" type="image/icon" href="pic/logo1.png">
  <link rel="stylesheet" href="CDN/css/bootstrap.css">
  <link rel="stylesheet" href="home.css">
  <script src="CDN/jquery/jquery.min.js"></script>
  <script src="CDN/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>FASHION POINT - latest fashion here</title>
</head>

<body>
  <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg_nav fixed-top pl-5">
      <img src="pic/logo.png" alt="" style="height:40px; width:80px;">
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

               echo'<a class="dropdown-item" href="products/pro_show.php?eid='.$m2['sub_id'].'">'.$m2['sub_name'].'</a>';
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

               echo'<a class="dropdown-item" href="products/pro_show.php?eid='.$w2['sub_id'].'">'.$w2['sub_name'].'</a>';
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

               echo'<a class="dropdown-item" href="products/pro_show.php?eid='.$k2['sub_id'].'">'.$k2['sub_name'].'</a>';
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
          <a href="products/cart/view_cart.php"><span class="badge"><?php echo count($_SESSION['cart']); ?></span> <i class="fa fa-shopping-cart" aria-hidden="true" class="icon" style="font-size:30px; color:white;";></i></a>
          </li>

          <li class="nav-item pt-2 pl-5">
        <button type="button" class="btn btn-light active" ><a href="login_page.php" style='text-decoration:none;'>LOGIN</a></button>
          </li>
        </ul>
      </div>
    </nav>


  </section>


  <section id="top_corousel" style="margin-top:62px;">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 cr-img" src="pic/cr1.jpg" alt="First slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100 cr-img" src="pic/cr2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 cr-img" src="pic/cr3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100 cr-img" src="pic/cr4.jpg" alt="four slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 cr-img" src="pic/cr5.jpg" alt="five slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  </section>

  <section>
    <h1 class="st1 mb-5 mt-5">WHAT'S YOUR VIBE</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-3 ml-2">
          <div class="card cr_dgn">
          <?php echo '<a  href="products/pro_show.php?eid=13">'; ?>
          <img class="card-img-top box-img" src="pic/kurtas.png" alt="Card image cap"></a>
          </div>
          <h4 class="st2 mt-3">Shop Kurtas</h4>
          <h3 class="st1">Look Elegent</h3>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3 pt-5 ml-2">
          <div class="card cr_dgn">
          <?php echo '<a  href="products/pro_show.php?eid=5">'; ?>
            <img class="card-img-top box-img" src="pic/lehanga.png" alt="Card image cap"></a>
          </div>
          <h4 class="st2 mt-3">Shop Lehenga</h4>
          <h3 class="st1">Look Divine</h3>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3 ml-2">
          <div class="card cr_dgn">
          <?php echo '<a  href="products/pro_show.php?eid=9">'; ?>
            <img class="card-img-top box-img" src="pic/kid.png" alt="Card image cap"></a>
          </div>
          <h4 class="st2 mt-4">SHOP KURTAS</h4>
          <h3 class="st1">Look Adorable</h3>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>

    </div>
    </div>
  </section>
  <section id="mens-collection">
    <h1 class="st1 mt-5 mb-5">MEN'S FASHION</h1>
    <div class="container">
      <div class="row">
        <div class="card-deck">
          <div class="card ml-3">
          <?php echo '<a  href="products/detail_page.php?did=37">'; ?>
            <img class="cr_all" src="pic/traditional.png" alt="Card image cap" style='width:100%'>
          </a>

          </div>
          <div class="card ml-5">
          <?php echo '<a  href="products/detail_page.php?did=51">'; ?>
            <img class="cr_all" src="pic/pentcoat.png" alt="Card image cap"></a>
          </div>
          <div class="card ml-5">
          <?php echo '<a  href="products/detail_page.php?did=34">'; ?>
            <img class="cr_all" src="pic/winter.png" alt="Card image cap"></a>
          </div>
          <div class="card ml-5">
          <?php echo '<a  href="products/detail_page.php?did=35">'; ?>
            <img class="cr_all" src="pic/latest.jpg" alt="Card image cap"></a>

          </div>
        </div>
      </div>
    </div>


  </section>

  <section id="women-collection">
    <h1 class="st1 mt-5 mb-5">WOMEN FASHION</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card-deck">
            <div class="card ml-3">
            <?php echo '<a  href="products/detail_page.php?did=63">'; ?>
              <img class="cr_all" src="pic/indo_western.png" alt="Card image cap" style='width:100%'></a>

            </div>
            <div class="card ml-5">
            <?php echo '<a  href="products/detail_page.php?did=62">'; ?>
              <img class="cr_all" src="pic/suit.jpg" alt="Card image cap"></a>

            </div>
            <div class="card ml-5">
            <?php echo '<a  href="products/detail_page.php?did=64">'; ?>
              <img class="cr_all" src="pic/sare.png" alt="Card image cap"style='width:100%'></a>
            </div>
            <div class="card ml-5">
            <?php echo '<a  href="products/detail_page.php?did=66">'; ?>
              <img class="cr_all" src="pic/west (1).jpg" alt="Card image cap" style='width:100%'></a>

            </div>
          </div>
        </div>
      </div>

  </section>

  <section id="kids-collection">
    <h1 class="st1 mt-5 mb-5">KID'S FASHION</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card-deck">
            <div class="card ml-3">
            <?php echo '<a  href="products/detail_page.php?did=102">'; ?>
              <img class="cr_all" src="pic/kid (1).jpg" alt="Card image cap"style='width:100%'></a>

            </div>
            <div class="card ml-5">
            <?php echo '<a  href="products/detail_page.php?did=104">'; ?>
              <img class="cr_all" src="pic/kid (2).jpg" alt="Card image cap" style='width:100%'></a>
            </div>
            <div class="card ml-5">
            <?php echo '<a  href="products/detail_page.php?did=91">'; ?>
              <img class="cr_all" src="pic/kid (3).jpg" alt="Card image cap"></a>
            </div>
            <div class="card ml-5">
            <?php echo '<a  href="products/detail_page.php?did=85">'; ?>
              <img class="cr_all" src="pic/kid4.jpg" alt="Card image cap"></a>

            </div>
          </div>
        </div>
      </div>

  </section>


  <section id="footwear">
    <h1 class="st1 mt-5 mb-5">FOOTWEAR'S</h1>
    <div class="container">
      <div class="row">
          <div class="col-md-2">
          <?php echo '<a  href="products/detail_page.php?did=13">'; ?>
            <img src="pic/shoe1.jpg"class='cr_shoes' alt=""></a></div>

          <div class="col-md-2">
          <?php echo '<a  href="products/detail_page.php?did=75">'; ?><img src="pic/gshoe2.jpg"class='cr_shoes' alt=""></a>
        </div>

          <div class="col-md-2">
          <?php echo '<a  href="products/detail_page.php?did=76">'; ?>
            <img src="pic/gshoe1.jpg"class='cr_shoes' alt=""></a></div>

          <div class="col-md-2"><?php echo '<a  href="products/detail_page.php?did=110">'; ?>
          <img src="pic/shoe2.jpg"class='cr_shoes' alt=""></a></div>

          <div class="col-md-2"><?php echo '<a  href="products/detail_page.php?did=77">'; ?>
            <img src="pic/gsho4.jpg"class='cr_shoes' alt=""></a></div>

          <div class="col-md-2"><?php echo '<a  href="products/detail_page.php?did=17">'; ?>
            <img src="pic/shoe4.jpg"class='cr_shoes' alt=""></a></div>
      </div>
  </div>
  <div class="row mt-3">
      <div class="col-md-4"></div>
      <div class="col-md-4">
      <div class="row">
          <div class="col-md-1"></div>
         
          <div class="col-md-5 ml-4"> <?php echo '<a  href="products/detail_page.php?did=81">'; ?><img src="pic/gshoe3.jpg"class='cr_shoes' alt=""></a></div>
          <div class="col-md-5 "> <?php echo '<a  href="products/detail_page.php?did=111">'; ?><img src="pic/shoe3.jpg"class='cr_shoes' alt=""></a></div>
          <div class="col-md-1"></div>
        </div>
              </div>
      <div class="col-md-4"></div>
  </div>
   </div>
   
  </section>

  <?php include"products/footer.php"?>
  

</body>
</html>