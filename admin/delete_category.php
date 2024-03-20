<?php

$page ="category";
$conn = mysqli_connect('localhost','root','','db_project');
$id=  $_GET['cid'];
  $f="DELETE FROM tb_category WHERE cat_id='$id'";
//   echo '<pre>'; print_r($f);die;
  $f1 = mysqli_query($conn,$f);
  if($f1){
    header("location:category_page.php");
  }
  ?>