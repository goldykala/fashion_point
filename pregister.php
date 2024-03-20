    <?php
    $conn=mysqli_connect('localhost','root','','db_project');
    if(isset($_POST['btn'])){
        $N=$_POST['nm'];
        $E=$_POST['eml'];
        $G=$_POST['gn'];
        $PN=$_POST['ph'];
        $CP=$_POST['cp'];
        $CMP=$_POST['cmp'];
        //echo "<pre>";print_r($PN);die;
        $q="INSERT INTO tb_userdata(user_name,email,gender,phone_no,password) VALUES('$N','$E','$G','$PN','$CP')";
        $q1= mysqli_query($conn,$q);
        if($q1){
         header('location:index.php');
        }
        else{
            echo 'not register';
        }


    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="login.css">
		<link rel="stylesheet" href="CDN/css/bootstrap.css">
        <script src="CDN/jquery/jquery.min.js"></script>
        <script src="CDN/js/bootstrap.js"></script>
        
    </head> 
    <body style='background-image:url(PIC/bg1.jpg); background-size:cover;'>
        <div class="container-fluid">
            <div class="row">
            
                <div class="col-md-4 pt-5 ml-4">   
                <div id="carouselExampleControls2" class="carousel slide w-100" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block cr-img" src="pic/rg1.jpg " alt="First slide" style="height:570px; width:100%;border-radius:20px;">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block cr-img" src="pic/rg2.jpg" alt="Second slide"style="height:570px; width:100% ;border-radius:20px;">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block cr-img" src="pic/rg3.jpg" alt="Third slide" style="height:570px; width:100% ;border-radius:20px;">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block cr-img" src="pic/rg4.jpg" alt="Third slide" style="height:570px; width:100% ;border-radius:20px;">
                    </div>
                   </div>
                </div>
                </div>
                <div class="col-md-2"></div>
                
                <div class="col-md-5 pt-3">
                    <h1 class="text-center text-primary">REGISTER</h1>
                <form method='post'>
                    <input type="text" name='nm' placeholder='Enter your name' class='form-control'><br><br>
                    <input type="email" name='eml' placeholder='Enter your email'class='form-control' ><br><br>
                    <label class=" text-white h3">Gender :</label>
                    <input type="radio" name='gn' value="Male"class="ml-3"><span class='h5 ml-2 text-primary'>Male</span> 
                    <input type="radio" name='gn' value="Female"class="ml-3"><span class='h5 ml-2 text-primary'>Female</span> 
                    <input type="radio" name='gn' value="Other"class="ml-3"> <span class='h5 ml-2 text-primary'>Other</span> <br><br>
                    
                    <input type="text" name='ph' class='form-control' placeholder='Enter your mobile no.'><br><br>
                    <input type="password" name='cp'class='form-control' placeholder='Create Password'><br><br>
                    <input type="password" name='cmp'class='form-control' placeholder='Confirm Password'><br><br>
                    <input type="submit" name='btn'class='btn  form-control bg-primary text-white'>
                </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </body>
</html>