<?php
$page ="category";
$conn = mysqli_connect('localhost','root','','db_project');
$id=  $_GET['cid'];
  $f="SELECT * FROM tb_category WHERE cat_id='$id'";
//   echo '<pre>'; print_r($f);die;

  $f1= mysqli_query($conn,$f);
  $f2 =mysqli_fetch_array($f1);
// echo '<pre>'; print_r($p);die;
if(isset($_POST['btn'])){
  $n=  $_POST['nm'];
  $ds= $_POST['ds'];
  $q="UPDATE tb_category SET cat_name = '$n' ,description= '$ds' WHERE cat_id ='$id'";  //echo '<pre>'; print_r($q);die;
  $q1= mysqli_query($conn,$q);
  if($q1){
    echo header("location:category_page.php");
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
    <link rel="stylesheet" href="../cdn/css/bootstrap.css"></head>

<body>
<?php include "navbar.php"?></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2"> <?php include "sidebar.php"?></div>
        <div class="col-md-10">
          <div class="row" style='padding-bottom:133px;'>
                    
                    <div class="col-md-10" style='margin:120px 0px 0px 60px; background-color:aliceblue;padding:60px 80px;border-radius:15px;'> 
                    <h2 class="text-center">EDIT PRODUCT CATEGORY</h2>
                        <form method="post">
                            <input type="text" name="nm" placeholder="ENTER CATEGORY NAME"class='form-control mt-5' value='<?php echo $f2['cat_name'];?>'><BR>
                            <input type="text" name="ds"placeholder='ADD DESCRIPTION' class="form-control mt-3" value='<?php echo $f2['description'];?>'><BR>
                            <input type="submit" name="btn" class="btn btn-success form-control mt-3">
                        </form>

                    </div>

                    <div class="col-md-2"></div>

        </div></div>
      </div> 
     
        
    </div>
</body>

</html>