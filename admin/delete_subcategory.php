<?php

$page ="subcategory";
$conn = mysqli_connect('localhost','root','','db_project');
$id=  $_GET['sid'];
  $f="DELETE FROM tb_subcategory WHERE sub_id='$id'";
//   echo '<pre>'; print_r($f);die;
  $f1 = mysqli_query($conn,$f);
  if($f1){
    header("location:sub_categorypage.php");
  }
  ?>