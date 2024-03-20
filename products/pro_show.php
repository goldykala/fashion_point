<?php
$conn = mysqli_connect('localhost','root','','db_project');
$a=$_GET['eid'];
$q = "SELECT * FROM tb_detail where sub_id='$a'";
$d = "SELECT * FROM tb_subcategory where sub_id='$a'";
$d1 =mysqli_query($conn,$d);
//    echo "<pre>";print_r($q);die; 

$q1 =mysqli_query($conn,$q);
$d2=mysqli_fetch_array($d1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASHION POINT-<?php  echo $d2['sub_name']?></title>
	<link rel="stylesheet" href="../CDN/css/bootstrap.css">
  <script src="../CDN/jquery/jquery.min.js"></script>
  <script src="../CDN/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
 a{
	text-decoration: none;
    color:black;
 }
 .crd{
    width:250px; 
    margin-left:45px;
     margin-top:20px;

 }
 a:hover{
    text-decoration: none;
 }
 .crd:hover{
    border:2px solid aliceblue;
    text-decoration: none;
 }
  </style>

</head>
<body>
    <?php
    include "navbar.php";
    ?>
	<div class="container-fluid">
        <div class="row ml-5 pl-5" style='margin-top:90px;'>
        <h3 class='ml-5'><?php  echo $d2['sub_name']?></h3>
         
        </div>
        <div class="row" style='padding:0px 110px;' >
            <?php
            while($q2=mysqli_fetch_array($q1)){
                echo'
                <div class="card crd">
                <a href="detail_page.php?did='.$q2['id'].'">
                <img class="card-img-top" src="../admin/image/'.$q2["pic"].'" alt="Card image cap" style="height:249px; width:248px;">
                <div class="card-body">';
                echo $q2['brand'];
                echo'<br>';
                echo $q2['name'];
                echo'<br>';
                echo"<span>₹".$q2['dprice']."</span>";
                echo "<span style='text-decoration: line-through;margin-left:10px; color:grey'>₹".$q2['price']."</span>";
                echo"<span class='text-success ml-2'>".$q2['off']."%</span>";
                 echo'</div>
                </div>
                </a>';
            }
            ?>
            
        </div>
    </div>



    <?php include "footer.php";?>
    
</body>
</html>


