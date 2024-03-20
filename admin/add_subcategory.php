<?php
$page ="sub_category";
$conn = mysqli_connect('localhost','root','','db_project');
$p="SELECT * FROM tb_category";
// echo '<pre>'; print_r($p);die;
$p1=mysqli_query($conn,$p);
if(isset($_POST['btn'])){
  $cn=  $_POST['sbc'];
  $cds= $_POST['sbd'];
  $cid = $_POST['cid'];
  $q= " INSERT INTO tb_subcategory(sub_name,description,cat_id)VALUES('$cn','$cds',$cid)";
//   echo '<pre>'; print_r($q);die;
  $q1= mysqli_query($conn,$q);
  if($q1){
    header("location:sub_categorypage.php");
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
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
    <?php include "navbar.php"?>
      <div class="row">
        <div class="col-md-2"><?php include "sidebar.php"?></div>
        <div class="col-md-10">
        <div class="row" style='padding-bottom:90px;'>
                    <div class="col-md-10" style='margin:120px 0px 0px 50px; background-color:aliceblue;padding:60px 80px;border-radius:15px;'> 
                    <h2 class="text-center">ADD SUB-PRODUCT CATEGORY</h2>
                        <form method="post">
                            <input type="text" name="sbc" placeholder="ENTER SUB-CATEGORY NAME"class='form-control mt-5'><BR>
                            <select name="cid" class="form-control">
                                <?php
                                while($p2=mysqli_fetch_array($p1)){
                                  echo  '<option value='.$p2['cat_id'].'>'.$p2['cat_name'].'</option>';

                                }

                                ?>
                                
                            </select>
                            <input type="text" name="sbd"placeholder='ADD DESCRIPTION' class="form-control mt-3"><BR>
                            <input type="submit" name="btn" class="btn btn-success form-control mt-3">
                        </form>

                    </div>

                    <div class="col-md-2"></div>

        </div>
        </div>
      </div>
        
    </div>
</body>

</html>