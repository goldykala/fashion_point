<?php
session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

//unset qunatity
unset($_SESSION['qty_array']);
$conn=mysqli_connect('localhost','root','','db_project');
$id=$_GET['did'];
$q="SELECT * FROM  tb_detail  WHERE id='$id' ";
$q1=mysqli_query($conn,$q);
$q2=mysqli_fetch_array($q1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $q2['name'];?></title>
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
    <script src="../cdn/jquery/jquery.min.js"></script>
    <script src="../cdn/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:azure;">

    <?php include "navbar.php";?>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12 mt-3">
        <?php
		//info message
		if(isset($_SESSION['message'])){
			?>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<div class="alert alert-info text-center">
						<?php echo $_SESSION['message']; ?>
					</div>
				</div>
			</div>
			<?php
			unset($_SESSION['message']);
		}?></div>
        </div>
        <div class="row mt-5">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <?php
                            echo'<img class="menc" src="../admin/image/'.$q2["pic"].'" alt="First slide" style="height: 500px;width:430px;" >';
                            ?>
                        </div>
                        <div class="carousel-item ">
                            <?php
                            echo'<img class="menc" src="../admin/image/'.$q2["pic2"].'" alt="First slide"style="height: 500px;width:430px;">';
                            ?>
                        </div> <div class="carousel-item">
                            <?php
                            echo'<img class="menc" src="../admin/image/'.$q2["pic3"].'" alt="First slide"style="height: 500px;width:430px;">';
                            ?>
                        </div>
                        <div class="carousel-item">
                            <?php
                            echo'<img class="menc" src="../admin/image/'.$q2["pic4"].'" alt="First slide"style="height: 500px;width:430px;">';
                            ?>
                        </div>
                    </div>
                    <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class=" carousel-control-prev-icon p-3 pt-4 pb-4" aria-hidden="true"style='border:2px solid blue; background-color: blue;'  ></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon p-3 pt-4 pb-4" style='border:2px solid blue; background-color: blue;' aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row mt-5">
                    <div class="col-md-7">
                        <a class='btn btn-warning ml-3' href="cart/add_cart.php?id=<?php echo $q2['id']?>">
                            <span class='fa fa-shopping-cart' style='font-size:20px; color:white;'><span>
                            <span class='ml-2'>ADD TO CART<span>
                        <a>
                    </div>
                    
                    <div class="col-md-5">
                        <a class='btn btn-primary' href="login_page.php?id=<?php echo $q2['id']?>">
                                <span class='fa fa-bolt' style='font-size:20px; color:white;'><span>
                                <span class='ml-2'>BUY NOW<span>
                        </a>
                    </div>
                    <!-- <div class="col-md-1"></div> -->
                </div>
                
                
                
            </div>
            <div class="col-md-5 ml-5">
                <h2><?php echo $q2['brand'];?></h2>
                <p class="b"><?php echo $q2['name'];?></p>
               <p>Seller: <span><a href="#" style="text-decoration: none; color: orange;"><b><?php echo $q2['seller'];?></b>  </a>
               <span style=" margin-left:8px; padding:3px 6px;" class='btn btn-primary'>4.5 <span class='fa fa-star text-warning'></span> Rating</p> 
                <hr>
                <p style="margin-left: 10px; "><span style="font-weight: 700; font-size: 25px;"> ₹<?php echo $q2['dprice'];?></span>
            <del class="gray"> ₹<?php echo $q2['price'];?></del><span class="off"> 
                (<?php echo $q2['off'];?>% off)</span></p>
                <p style="color:green; margin-left: 10px;">All taxs are included.</p>
                <hr>
                <h6 class="ml-2"><b>DELEVERY OPTION'S</b></h6>
                <p class="mt-1 ml-2">Please enter PIN code to check delivery time & Pay on Delivery Availability</p>

                <p class="ml-2 mt-3">Assuerd Quality</p>
                <p class=" ml-2">We have 100% Orignal Products</p>
                <p class="ml-2">Also Availability of Cash on dilivery</p>
                <p class="ml-2">Easy and Simple Steps of return or Exchange Product</p>

                <h4><b class=''>PRODUCT DETAILS</b></h4>

                <?php echo $q2['description'];?>
               

            </div>
           
            <div class="col-md-1"></div>
           
        </div>
        <hr>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-5">
            <h5>BEST OFFER"S</h5>
                <p>Best Offer : <span style="color: orange;"><b> RS.560</b></span></p>
            <ul>
                 <li class="mt-4"><p>Buy 1 More Product and Get 10% Instant Discount(ONLY ON FIRST 2 ORDERS.)</p></li>
               <li><p>Coupon Code: <b>NEWFPUSER</b></p></li> 
               <li><p>Coupon Discount: Rs. 106 off (check cart for final savings)</p></li> 
            </ul>
            <p><b>Easy EMI</b></p>
            <ul>
                <li>Emi Starts From 100/month.</li>
            </ul>  
                        
            </div>
            <div class="col-md-5">
                <p><b><a href="#" style="text-decoration: none;">View Eligible Products</a></b></p>
                <p><b>10% Instant Discount on ALL Bank Credit Cards</b></p>
                <ul>
                    <li><p>Min Spend ₹3,000, Max Discount ₹1,000.</p></li>
                    
                </ul>
                <p ><b><a href="#" style="text-decoration: none;">Terms & Condition</a></b></p>
                <p><b>10% Instant Discount For New User.</b></p>
                <ul>
                    <li>Mnimim Discount ₹100.</li>
                </ul>
                <p><b><a href="#" style="text-decoration: none;">View EMI Plans</b></a></p>
                
                
            </div>
        </div>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                
            </div>
        
           
        <hr>
    </div>
 

</body>

</html>