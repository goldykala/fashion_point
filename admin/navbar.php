<?php
session_start();
$conn = mysqli_connect('localhost','root','','db_project');
$q=$_SESSION['user_name'];
$q1 = "SELECT * FROM tb_userdata  WHERE user_name ='$q'";


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cdn/bootstrap/css/bootstrap.css">
    <script src="../cdn/jquery/jquery.min.js"></script>
    <script src="../cdn/bootstrap/js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container-fluid">
    <img src="../pic/logo.png" alt="" srcset="" style="width: 80px;height: 40px;">

      
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-left:300px ;">
        <span class="navbar-toggler-icon"></span>
      </button>
      
        <div class="col-md-8">
        </div>
        <div class="col-md-4 ">
          <div class="offcanvas offcanvas-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-link d-inline">
                    <h5 class='pt-2'>Hello,<span class='text-light'><?php echo $_SESSION['user_name']; ?></span></h5>
                </li>
                <li class="nav-link d-inline">
                  <a  class ="btn btn-danger" href="../logout.php">Logout</a>
                </li>
          </ul>
         
        </div>
      </div>
    </div>
  </nav>
     
      
    </div>
    
  </div>
</nav>



 
</body>
</html>
<?php
}else{

header("Location: index.php");

exit();

}
?>
