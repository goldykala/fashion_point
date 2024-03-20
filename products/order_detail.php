<?php
include"../connection.php";
$pid= $_GET['id'];

$q ="SELECT * FROM tb_detail WHERE id='$pid'";
// echo'<pre>';print_r($q);die;
$q1 = mysqli_query($conn,$q);
$q2 = mysqli_fetch_array($q1);
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASHION POINT - order page</title>
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
    <script src="../cdn/jquery/jquery.min.js"></script>
    <script src="../cdn/js/bootstrap.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-5">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top pl-5 bg-primary">
      <a href='../index.php'><img src='../pic/logo.png' style='height:40px;width:80px;'></a>
          </nav>
        </div>
        <div class="row">
            
            <div class="col-md-7  ml-5 mt-5" style='background-color:aliceblue;'>
                <div class="row pt-4">
                    <div class="col-md-4">
                        <img src="../admin/image/<?php echo $q2['pic'];?>" alt="" style="height: 200px;width:170px;">
                    </div>
                    <div class="col-md-8">
                        <h4>
                            <?php
                            echo $q2['name'];
                            ?>
                        </h4>
                        <h4>seller : <?php
                            echo $q2['seller'];
                            ?></h4>
                        <h5 class='d-inline'> ₹<?php echo $q2['dprice'];?> </h5>
                        <h5 class='text-danger d-inline' style='text-decoration:line-through;'>  ₹<?php echo $q2['price'];?></h65>
                        <h5 class='text-success d-inline'> <?php echo $q2['off'];?>%off</Sh5><br>


                        
                    </div>

                </div>
                <div class="row pb-5">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                    <button class="btn btn-primary float-center mt-5 form-control" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="form">
                    CONTINUE</button>
                    </div>
                </div>
            </div>
            


            <div class="col-md-4  ml-3 mt-5" style='background-color:aliceblue;'>
                <BR>
                <h5>PRICE DETAILS : </h5>
                <BR>
                <h5>PRICE DETAILS: ₹<?php echo $q2['dprice'];?></h5>
                <h5 class='d-inline'>DELIVERY  : <h5 class='text-success d-inline'>
                <?php if ($q2['dprice']>500){
                    echo"FREE";
                }
                else {
                  echo ' ₹ 40';
                }?>
                </h5> </h5>
                
                <h5>TOTAL :   ₹<?php if ($q2['dprice']>500){
                    echo $q2['dprice'];
                }
                else{
                    echo $q2['dprice']+40;}
                    ?>
                <br>
                <hr>
                <h6>YOU WILL SAVED  ₹<?php  echo $q2['price'] - $q2['dprice']?> ON THE ORDER</h6>

            </div>
            <div class="col-md-1"></div>
        </div>

        
    </div>


    <div class="container mt-5">
        <div class="row bg-primary">
            <h5 class='text-white ml-5 pt-1'>Adress Details</h5>
        </div>
   
      <div class="row mt-3">
    
        <div class="col">
          <div class="collapse multi-collapse" id="form">
            <div class="card card-body">
            <section>

            <form method='post' action='pay.php'>
            <input type="hidden" name='pdid' value='<?php echo $pid?>'>
            <input type="hidden" name='pname' value='<?php echo $q2['name']?>'>
            <input type="hidden" name='price' value='<?php if ($q2['dprice']>500){
                    echo $q2['dprice'];
                }
                else{
                    echo $q2['dprice']+40;}
                    ?>'>
            

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name='cname'>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Phone no.</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Phone No." name='phone' >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputAddress">Email</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="fashionpoint@gmail.com" name='email'>
                    </div>
                    <div class="form-group col-md-7">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name='adress'>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity" >City</label>
                    <input type="text" class="form-control" id="inputCity"name='city'>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>PUNJAB</option>
                        <option>HIMACHAL PRADESH</option>
                        <option>JAMMU</option>
                        <option>CHANDIGARH</option>
                        <option>HARYANA</option>
                        <option>DELHI</option>
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip"  >PIN CODE</label>
                    <input type="text" class="form-control" id="inputZip"name='pincode'>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"> <button type="submit"name='submit' class="btn btn-primary form-control">PLACE ORDER</button></div>
                    <div class="col-md-4"></div>
                </div>
                
               
            </form>


            </section>    


        
            </div>
        </div>
        </div>
    </div>

</body>

</html>