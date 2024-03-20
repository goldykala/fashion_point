<?php
$conn = mysqli_connect('localhost','root','','db_project');
$p="SELECT * FROM tb_detail";
$p1= mysqli_query($conn,$p);
$page ="product";





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">

    <title>ADMIN -PRODUCT</title>
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
    <style>
        td {
            height: 50px;
            width: 200px;
            font-size: 18px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
        }

        tr:nth-child(odd) {
            background-color: #D3D3D3;
            color:navy;
        }

        td {
            text-align: center;
            font-size: 15px;
            height: 50px;
        }
        @media screen and (max-width: 950px) {

            th {
            text-align: center;
            font-size: 20px;
            height: 30px;
            }
            td {
            height: 35px;
            width: 180px;
            font-size: 15px;
            text-align: center;
            }
            img{
                height:40px; 
                width:40px;

            }
        }
        </style>
</head>

<body>
    
        <?php include "navbar.php"?>
    </div>
    <div class="container-fluid">
        <div class="row bg-light">
            <div class="col-md-2">
                <?php include'sidebar.php';?>
            </div>
            <div class="col-md-10 "style="margin-top:100px;">

                <div class="row" >
                    <div class="col-md-9">
                        <h3>PRODUCTS</h3>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-primary" href="add_product_detail.php"> Add Product Detail</a>
                    </div>
                </div>

                <div class="row mr-3 mt-3">
                    <table>
                        <tr >
                            <td>SR NO.</td>
                            <td>PIC</td>
                            <td>NAME</td>
                            <td>BRAND</td>
                            <td>PRICE</td>
                            <td>CATEGORY</td>
                            <td>SUB_CATEGORY</td>
                            <td>DELETE</td>
                        </tr>
                </div>



                <div class="row mr-2">
                    <?php
                        $i=1;
                        while($p2=mysqli_fetch_array($p1)){ 
                        echo"<tr>";
                            echo"<td>".$i."</td>";
                            echo "<td><img src='image/".$p2['pic']."' style='height:70px; width:70px;'></td>";

                            echo"<td>".$p2['name']."</td>";
                            echo"<td>".$p2['brand']."</td>";
                            echo"<td>".$p2['price']."</td>";
                            echo"<td>".$p2['cat_id']."</td>";
                            echo"<td>".$p2['cat_id']."</td>";
                            echo"<td><a class='btn btn-danger' href='delete_product.php?pid=".$p2['id']."'>delete</a></td>";
                            echo"</tr>";
                            $i++;
                        }
                    ?>
                    </tr>
                </div>
                </table>
            </div>


        </div>
    </div>
    </div>



    <div class="container-fluid">

</body>

</html>
