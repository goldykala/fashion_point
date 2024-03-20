<?php
include "../connection.php";
$id = $_GET['id']; 

if(isset($_POST['bt'])){
   
    $ps = $_POST['password'];
    
    $n = $_POST['uname']; 
    $q= "SELECT * FROM tb_userdata WHERE user_name='$n'";
    // echo"<pre>";print_r($q);die;

    $q1= mysqli_query($conn,$q);
    $q2 = mysqli_fetch_array($q1);
    
    if($q2['user_name']==$n && $q2['password']==$ps){
        header("location:order_detail.php?id=$id");
    }
    else{
        echo"<h5>user name password not found<h5>";
        header("location:login_page.php?id=$id");
       
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <title>FASHION POINT- LOGIN</title>
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row pt-5 " style=' background-image:url(../PIC/bglogin.jpg); background-size: cover; padding-bottom: 126px;'>
       
         <div class="col-md-4"></div>
            <div class="col-md-4" style=' background-color: aliceblue; padding:50px 80px; margin: 13px 0px; border-radius: 15px;'>
                <div class="row">
                        <div class="col-md-12 mb-5">
                                        <h2 class='text-center'>LOG IN</h2>
                        </div>    
                </div>
                    <form  method="post">
                        <label>User Name</label><br>
                        <input type="text" name="uname" placeholder="User Name" class='form-control'><br><br>
                        <label>Password</label><br>
                        <input type="password" name="password" placeholder="Password" class='form-control'><br><br>
                        <button type="submit" class='form-control bg-success btn text-white' name='bt'>Login</button><br><br>
                    </form>
                   <a href='register_page.php?id=<?php echo $id?>' class='ml-5 pl-5 h5'>New user signup</a>
                </div>
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>

</body>

</html>