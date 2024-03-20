<?php
include "connection.php";
if(isset($_POST['btn'])){
   

       $em = $_POST['eml'];
    $q = "SELECT * FROM tb_userdata WHERE email='$em'";
    // echo'<pre>';print_r($q);die;
    $q1 = mysqli_query($conn,$q);
    $q2  = mysqli_fetch_array($q1);

    if($q2['email']==$em){
         header("location:forget_password.php?fid=".$q2['id']);
    }
    else{
        echo '<script>alert("invalid email ! please enter valid email")</script>';
    }

   

    
    
   

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CDN/css/bootstrap.css">
</head>
<body style='background-color:#f1b810;'>
    <div class="container">
        <div class="row" style='box-shadow:10px 10px 10px skyblue; padding-bottom:70px; margin-top:120px; border:2px solid aliceblue; background-color:aliceblue;'>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 class='text-center pt-5 pb-5'>FORGET PASSWORD</h3>
                <form  method="post">
                    <input type="email" name ='eml' class='form-control' placeholder='Enter Register Email'><br>
                    <br>
                    <input type="submit" name='btn'  class='btn bg-primary text-white' style="margin-left:130px; padding:5px 100px; font-size:25px; border-radius:20px;">

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
</body>
</html>