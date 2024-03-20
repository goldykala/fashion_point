<?php

$page ="product";
$conn = mysqli_connect('localhost','root','','db_project');
$id=  $_GET['pid'];
  $f="DELETE FROM tb_detail WHERE id='$id'";
// echo '<pre>'; print_r($f);die;
  $f1 = mysqli_query($conn,$f);
  if($f1){
    header("location:product.php");
  }
  ?>