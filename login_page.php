<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cdn/css/bootstrap.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row " style=' background-image:url(PIC/bglogin.jpg); background-size: cover; padding-bottom: 53px;'>
            <div class="col-md-4"></div>
            <div class="col-md-4" style=' background-color: aliceblue; padding:75.5px 80px; margin: 50px 0px; border-radius: 15px;'>
                    <form action="login.php" method="post">

                        <h2 class="text-center mb-5" >LOGIN</h2>
                        <?php if(isset($_GET['error'])) { ?>
                        <p class="error">
                            <?php echo $_GET['error']; ?>
                        </p>
                        <?php } ?>

                        <label>User Name</label><br>
                        <input type="text" name="uname" placeholder="User Name" class='form-control'><br><br>
                        <label>Password</label><br>
                        <input type="password" name="password" placeholder="Password" class='form-control'><br><br>
                        <button type="submit" class='form-control bg-success btn text-white'>Login</button><br><br>
                       
                <div class="row">
					<div class="col-md-6">
						<a href="pregister.php">New User Register</a>
					</div>
					<div class="col-md-6">
						<a href="forget_ps.php">Forget Password</a>
					</div>
				</div>
                    </form>
                </div>
                
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>

</body>

</html>