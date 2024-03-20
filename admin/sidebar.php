
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  margin-top:72px;
  height: 100%;
  width: 180px;
  position:fixed;
  top: 0;
  left: 0;
  background-color: aliceblue;
  overflow-x: hidden;
  padding-top: 60px; 

  
}

.sidenav a {
  padding: 20px 10px 10px 15px;
  text-decoration: none;
  font-size: 19px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color:white;
  background-color:navy;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}
.active{
  background-color:#0d6efd;
}

@media screen and (max-width: 850px) {
  .sidenav {
  width: 100px;
margin-top:55px;}
  .sidenav a {font-size: 12px;
    font-weight:bold;
    padding-right: 10px;
  }
  }
}
</style>
</head>
<body>
<div class="sidenav ">

  <a href="dashboard.php" class="<?= $page == "dashboard"?'active':''; ?>">DASHBOARD</a>
  <a  class= "<?= $page == "category"?'active':''; ?>" href="category_page.php">CATEGORY</a>
  <a href="sub_categorypage.php" class= "<?= $page == "sub_category"?'active':''; ?>">SUB-CATEGORY</a>
  <a href="order.php" class="<?= $page == "order"?'active':''; ?>">ORDER</a>
  <a href="product.php" class="<?= $page == "product"?'active':''; ?>">PRODUCTS</a>
  <a href="user_page.php" class= "<?= $page == "user"?'active':''; ?>">USERS</a>
</div>

<div class="main">
  
</div>
   
</body>
</html> 
 


