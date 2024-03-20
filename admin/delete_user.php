<?php

$page ="user";
$conn = mysqli_connect('localhost','root','','db_project');
$id=  $_GET['uid'];
  $f="DELETE FROM tb_userdata WHERE id='$id'";
//   echo '<pre>'; print_r($f);die;
  $f1 = mysqli_query($conn,$f);
  if($f1){
    header("location:user_page.php");
  }
  ?>