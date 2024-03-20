<?php
$conn = mysqli_connect('localhost','root','','db_project');
$id=$_GET['fid'];
$q= "SELECT * FROM tb_userdata";
$q1= mysqli_query($conn,$q);
$q2= mysqli_fetch_array($q1);
if(isset($_POST['bt'])){
    $nps = $_POST['np'];
    $cps = $_POST['cp'];
   

        if($nps==$cps){
            $u ="UPDATE tb_userdata SET password ='$nps' WHERE id='$id' ";

        //  echo'<pre>';print_r($u);die;

            $u1 = mysqli_query($conn,$u);
            if($u1){
                header('location:index.php');
            }
            else{
              echo"Try Again !";
            }
                }
            else{
                echo "<script>alert('PASSWORD NOT MATCH !');</script>";
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
                    <input type="password" name ="np" class='form-control' placeholder='NEW PASSWORD'><br>

                    <input type="password" name ="cp"  class='form-control' placeholder='CONFIRM PASSWORD'><br>

                    <input type="submit" name='bt'  class='form-control btn bg-primary text-white'>

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
</body>
</html>