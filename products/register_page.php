<?php
include "../connection.php";
$id = $_GET['id']; 

if(isset($_POST['bt'])){
   
    $ps = $_POST['ps'];
    $em = $_POST['eml'];
    $n = $_POST['uname']; 
    $g = $_POST['gn'];
    $p=$_POST['phone'];
    $q= "INSERT INTO tb_userdata(user_name,email,password,gender,phone_no)VALUES('$n','$em','$ps','$g',$p)";
    // echo"<pre>";print_r($q);die;

    $q1= mysqli_query($conn,$q);
    // $q2 = mysqli_fetch_array($q1);
    
    if($q1){
        echo"<script>alert('you are signup sucessfully!')</script>";
        header("location:login_page.php?id=$id");
    }
    else{
       echo"<script>alert('not inseted');</script>";
       
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <title>FASHION POINT- NEW USER SIGNUP</title>
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
    <link rel="stylesheet" href="home.css">
    <style>
        body{
            scroll-behaviour:smoth;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        
        <div class="row pt-3 " style=' background-image:url(../PIC/bglogin.jpg); background-size: cover; padding-bottom: 20px;'>
            <div class="col-md-4"></div>
            <div class="col-md-4" style=' background-color: aliceblue; padding:20px 80px; border-radius: 15px;'>
                        <div class="row">
                        <div class="col-md-12">
                            <h2 class='text-center'>SIGN UP</h2>
                        </div>
                        
                    </div>
                    <form  method="post">
                        <label>User Name</label><br>
                        <input type="text" name="uname" placeholder="User Name" class='form-control' require><br><br>
                        <label>Password</label><br>
                        <input type="text" name="eml" placeholder="Email" class='form-control' require><br><br>
                        <label>Password</label><br>
                        <input type="password" name="ps" placeholder=" Create Password" class='form-control'><br><br>
                        <label>PHONE NO</label><br>
                        <input type="text" name="phone" placeholder=" Phone no" class='form-control'><br><br>
                        <label >Gender  :</label>
                            <input type ="radio" name ="gn" value ="MALE" class='ml-3 p-3'> Male
                            <input type ="radio" name ="gn" value ="FEMALE" class='ml-3 p-3'> Female
                            <input type ="radio" name ="gn" value ="OTHER" class='ml-3 p-3'> Other<br><br>

                       
                        <button type="submit" class='form-control bg-success btn text-white' name='bt'>SIGN UP</button><br><br>
                       
                
                    </form>
                </div>
                
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>

</body>

</html>