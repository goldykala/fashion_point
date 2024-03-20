<?php
$page ="category";
$conn = mysqli_connect('localhost','root','','db_project');
$p="SELECT * FROM tb_category";
// echo '<pre>'; print_r($p);die;
$p1=mysqli_query($conn,$p);
if(isset($_POST['btn'])){
  $cn=  $_POST['nm'];
  $cds= $_POST['ds'];
  $q= " INSERT INTO tb_category(cat_name,description)VALUES('$cn','$cds')";
//   echo '<pre>'; print_r($q);die;
  $q1= mysqli_query($conn,$q);
  if($q1){
    header("location:category_page.php");
  }
  else{
    echo"not inserted";
  }
 
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cdn/css/bootstrap.css"></head>

<body>
    <div class="container-fluid"> 
    <?php include "navbar.php"?>
      <div class="row">
        <div class="col-md-2"><?php include "sidebar.php"?></div>
        <div class="col-md-10">
        <div class="row " style='padding-bottom:90px;'>
                    <div class="col-md-1">
                     
                    </div>
                    <div class="col-md-10" style='margin-top:120px; background-color:navy;padding:60px 80px;border-radius:15px;'> 
                    <h2 class="text-center text-white">ADD PRODUCT CATEGORY</h2>
                        <form method="post">
                            <input type="text" name="nm" placeholder="ENTER CATEGORY NAME"class='form-control mt-5'><BR>
                            <input type="text" name="ds"placeholder='ADD DESCRIPTION' class="form-control mt-3"><BR>
                            <input type="submit" name="btn" class="btn btn-success form-control mt-3">
                        </form>

                    </div>

                    <div class="col-md-1"></div>

        </div>
        </div>
      </div>
        
    </div>
</body>

</html>