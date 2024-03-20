<?php
$page="product";
$conn=mysqli_connect('localhost','root','','db_project');

$p= "SELECT * FROM tb_category ";
$p1= mysqli_query($conn,$p);

$d= "SELECT * FROM tb_subcategory ";
//    echo "<pre>";print_r($q);die; 

$d1= mysqli_query($conn,$d);


if(isset($_POST['btn'])){
    $PN=$_POST['nm'];
    $BN=$_POST['br'];
    $PR=$_POST['pr'];
    $DP=$_POST['dpr']; 
    $OF=$PR-$DP;
    $OF1=($OF/$PR)*100;
    $cid = $_POST['cid'];
    $sid = $_POST['sid'];

    $snm = $_POST['snm'];
    $DIS=$_POST['dsp'];
    $Pic1= $_FILES['pic']['name'];
    $Pic2= $_FILES['pic2']['name'];
    $Pic3= $_FILES['pic3']['name'];
    $Pic4= $_FILES['pic4']['name'];

    $url="image/"; 
   // echo "<pre>";print_r($OF1);die; 
    move_uploaded_file($_FILES['pic']['tmp_name'],$url.$Pic1);
    move_uploaded_file($_FILES['pic2']['tmp_name'],$url.$Pic2);
    move_uploaded_file($_FILES['pic3']['tmp_name'],$url.$Pic3);
    move_uploaded_file($_FILES['pic4']['tmp_name'],$url.$Pic4);


   
    $i="INSERT INTO tb_detail(name,brand,price,dprice,description,off,pic,pic2,pic3,pic4,seller,sub_id,cat_id)VALUES('$PN','$BN','$PR','$DP','$DIS','$OF1','$Pic1','$Pic2','$Pic3','$Pic4','$snm','$sid','$cid')";

    // echo"<pre>";print_r($i);die;
    $i1=mysqli_query($conn,$i); 
    
   
    
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
</head>

<body>

    <div class="container-fluid">
    <?php include "navbar.php";?>
        <div class="row mb-5" style="margin-top:120px; ">
            <div class="col-md-2"><?php include "sidebar.php";?></div>
            <div class="col-md-9">
                <form method="post" enctype='multipart/form-data' style="background-color:aliceblue;" class='p-5'>
                    <h1 class='text-center mb-5'>PRODUCT DETAILS</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <h5> Product Name :</h5>
                            <input type="text" name="nm" class='form-control'><br>
                        </div>
                        <div class="col-md-6">
                            <h5>Product Brand :</h5>
                            <input type="text" name="br" class='form-control'><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5>Product Detail :</h5>
                            <textarea name="dsp" class='form-control'></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Price :</h5>
                            <input type="text" name="pr" class='form-control'><br><br>
                        </div>
                        <div class="col-md-4">
                            <h5>Discount Price :</h5>
                            <input type="text" name="dpr" class='form-control'><br><br>
                        </div>
                        <div class="col-md-4">
                            <h5>Seller Name:</h5>
                            <input type="text" name="snm" class='form-control'><br><br>

                        </div>
                    </div>


                    <div class="row">
                    <div class="col-md-6">
                    <h5>CATEGORY :</h5>
                            <select name="cid" class='form-control'>
                                    <?php 
                                        while($r = mysqli_fetch_array($p1)){
                                            echo "<option value='".$r['cat_id']."'>".$r['cat_name']."</option>";
                                        }

                                    ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                        <h5>SUB CATEGORY:</h5>
                            <select name="sid" class='form-control'>
                            <?php 
                                        while($s = mysqli_fetch_array($d1)){
                                            echo "<option value='".$s['sub_id']."'>".$s['sub_name']."</option>";
                                        }

                                    ?>
                            </select>
                        </div>
                       
                    </div>
                    


                    <h5 class='mt-3'>Produt Image :</h5><br><br>
                    <div class="row pb-5">
                        <div class="col-md-3">
                            <input type="file" name="pic">
                        </div>
                        <div class="col-md-3">
                            <input type="file" name="pic2">
                        </div>
                        <div class="col-md-3">
                            <input type="file" name="pic3">
                        </div>
                        <div class="col-md-3">
                            <input type="file" name="pic4">
                        </div>
                    </div><br><br>
                    <input type="submit" name="btn" class='form-control btn btn-primary'>
                </form>


            </div>
            <div class="col-md-1"></div>
            </div>
            </div>
        </div>
        
        
    </div>
</body>

</html>