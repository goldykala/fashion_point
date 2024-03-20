<?php
session_start();
$id = $_SESSION['productid'];
$adr = $_SESSION['ad'];
$ct = $_SESSION['ct'];
$pin = $_SESSION['pin'];
$user = $_SESSION['user'];
$phn = $_SESSION['phone'];

// $user = $_POST['us'];
// $email = $_POST['em'];
include "../connection.php";
$q = "SELECT * from tb_detail WHERE id='$id'";
$q1= mysqli_query($conn,$q);
$q2= mysqli_fetch_array($q1);

$a= implode($_REQUEST);
$id=substr($a,0,20);
$status= "PAYMENT SUCCESSFULL";
$tid= substr($a,26);
// printr($_GET['ei']);

function ddate(){
   $newdate=date('d,F', strtotime("+4 days"));
   echo date('l', strtotime($newdate));
   echo "  ".$newdate;
   
 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
    <title>FASHION POINT- THANKS YOU PAGE</title>
    <style>
        td {
            font-size: 20px;
            width: 200px;
            height: 40px;
        }

        th {
            font-size: 20px;
            width: 200px;
            height: 40px;
        }
        .bg_color{
            background-color:  #e8f4f8;
        }
    </style>
    
    <script> 
        function printDiv() { 
            var divContents = document.getElementById("printnow").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write('<body > <h1 style="margin-left:50%;">fashion point</h1>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        } 
    </script> 
</head>

<body>
    <?php include "navbar.php";?>
    <div class="container">
        <div class="row  bg_color" style='margin-top:90px;'>
            <div class="col-md-2 py-3">
                <img src="../pic/ordericon.png" alt="" style='width:90px; height:90px'>
            </div>
            <div class="col-md-8 pt-4">
                <h2>Order placed for ₹<?php echo $q2['dprice']; ?></h2>
                <h6>Your 1 item will be delivered by <?php  ddate();?></h6>
            </div>
            <div class="col-md-2">
                <a class='btn btn-primary mt-5'href="../index.php">GO TO HOME</a>
            </div>
        </div>

        <div class="row mt-3 bg_color py-5">
            <div class="col-md-6 pl-5">
                <h4>Delivery Adress: </h4>
                <br>
                <h4><?php echo $user; ?></h4>
                <br>
                <h6><?php echo $adr; ?></h6>
                <h6><?php echo $ct; ?></h6>
                <h6><?php echo $pin; ?></h6>
                <h6>phone number : <?php echo $phn; ?></h6>

            </div>
            <div class="col-md-6 " >
                <div id='printnow'>
                <h4>Payment details</h4>
                <table border="1">
                <tr>
                        <th>product name</th>
                        <td><?php echo $q2['name']; ?></td>
                    </tr>
                    <tr>
                        <th>price</th>
                        <td>₹<?php echo $q2['dprice'];?></td>
                    </tr>
                    <tr>
                        <th>payment id</th>
                        <td><?php echo $id;?></td>
                    </tr>
                    <tr>
                        <th>refernce id</th>
                        <td><?php echo $tid;?></td>
                    </tr>
                    <tr>
                        <th>status</th>
                        <td class="text-success">sucess</td>
                    </tr>
                </table>
                </diV>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input class='mt-3 btn btn-primary' type="button" value="DOWNLOAD INVOICE" onclick="printDiv()">
                    </div>
                    <div class="col-md-4"></div>
                </div>
                
            </div>
        </div>
        <div class="row mt-3 bg_color py-5 mb-5 ">
            <div class="col-md-12 pb-3">
                 <h5>PRODUCT DETAIL: </h5>
            </div>
            <div class="col-md-6 pl-5">
                <div class="row">
                    <div class="col-md-3">
                        <img src="../admin/image/<?php echo $q2['pic']; ?>" alt="" srcset="" style="width:100px; height:130px;">
                    </div>
                    <div class="col-md-9">
                        <h5><?php echo $q2['name']; ?></h5>
                        <h5><?php echo $q2['brand']; ?></h5>
                        <h5>Quantity :  1</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-5">
                <h5>Delivery expected by <?php  ddate();?></h5>
                <h5>order price : ₹<?php echo $q2['dprice']; ?></h5>
            </div>
        </div>
    </div>

</body>

</html>