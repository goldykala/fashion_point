<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','db_project');

	$m="SELECT * FROM tb_subcategory where cat_id ='1'";
	$w="SELECT * FROM tb_subcategory where cat_id ='2'";
	$k="SELECT * FROM tb_subcategory where cat_id ='3'";

	$m1=mysqli_query($conn,$m);
	$w1=mysqli_query($conn,$w);
	$k1=mysqli_query($conn,$k);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FASHION POINT - Shopping Cart</title>
	<link rel="icon" type="image/icon" href="../../pic/logo1.png">
	<link rel="stylesheet" href="../../CDN/css/bootstrap.css">
  <script src="../../CDN/jquery/jquery.min.js"></script>
  <script src="../../CDN/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark  nav-all  pl-5 " style =' background-color:navy;'>
      <a href='../../index.php'><img src="../../pic/logo.png" alt="" style="height:40px; width:80px;"></a>
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

               echo'<a class="dropdown-item" href="../pro_show.php?eid='.$m2['sub_id'].'">'.$m2['sub_name'].'</a>';
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

               echo'<a class="dropdown-item" href="../pro_show.php?eid='.$w2['sub_id'].'">'.$w2['sub_name'].'</a>';
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

               echo'<a class="dropdown-item" href="../pro_show.php?eid='.$k2['sub_id'].'">'.$k2['sub_name'].'</a>';
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
		  <a href="view_cart.php"><span class="badge">
        <?php count($_SESSION['cart']); ?></span> <i class="fa fa-shopping-cart" aria-hidden="true" class="icon" style="font-size:30px; color:white;";></i></a>
          </li>

          <li class="nav-item pt-2 pl-5">
        <button type="button" class="btn btn-light active" ><a href="../../login_page.php" style='text-decoration:none;'>LOGIN</a></button>
          </li>
        </ul>
      </div>
	</nav>
<div class="container-fluid">
	
	<h1 class="page-header text-center">Cart Details</h1>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10 col-sm-offset-2">
			<?php 
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-info text-center">
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>
			<form method="POST" action="save_cart.php">
			<table class="table table-bordered table-striped">
				<thead>
					<th></th>
					<th>pic</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</thead>
				<tbody>
					<?php
						//initialize total
						$total = 0;
						if(!empty($_SESSION['cart'])){
						//connection
						$conn = new mysqli('localhost', 'root', '', 'db_project');
						//create array of initail qty which is 1
 						$index = 0;
 						if(!isset($_SESSION['qty_array'])){
 							$_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
 						}
						$sql = "SELECT * FROM tb_detail WHERE id IN (".implode(',',$_SESSION['cart']).")";
						$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								?>
								<tr>
								    <td>
										<a href="delete_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
									</td>
									<td><img src="../../admin/image/<?php echo $row['pic']; ?>" alt="" srcset="" style='height:80px; width:80px;'></td>
									
									<td><?php echo $row['name']; ?></td>
									<td><?php echo number_format($row['dprice'], 2); ?></td>
									<input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
									<td><input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>
									<td><?php echo number_format($_SESSION['qty_array'][$index]*$row['dprice'], 2); ?></td>
									<?php $total += $_SESSION['qty_array'][$index]*$row['dprice']; ?>
								</tr>
								<?php
								$index ++;
							}
						}
						else{
							?>
							<tr>
								<td colspan="4" class="text-center">No Item in Cart</td>
							</tr>
							<?php
						}

					?>
					<tr>
						<td colspan="4" align="right"><b>Total</b></td>
						<td><b><?php echo number_format($total, 2); ?></b></td>
					</tr>
				</tbody>
			</table>
			<a href="../../index.php" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Back</a>
			<button type="submit" class="btn btn-success" name="save">Save Changes</button>
			<a href="clear_cart.php" class="btn btn-danger"><span class="fa fa-trash"></span> Clear Cart</a>
			<a href="checkout.php" class="btn btn-success"><span class="fa fa-check"></span> Checkout</a>
			</form>
		</div>
	</div>
</div>
</body>
</html>