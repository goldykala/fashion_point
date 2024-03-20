<?php
$conn = mysqli_connect('localhost','root','','db_project');
$p="SELECT * FROM tb_order";
$p1= mysqli_query($conn,$p);
$page ="order";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <title>ADMIN -ORDER</title>
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
    <style>
        td {
            height: 50px;
            width: 250px;
            font-size: 15px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
        }

        tr:nth-child(odd) {
            background-color: #D3D3D3;
            color:navy;
        }

        th {
            text-align: center;
            font-size: 23px;
            height: 50px;
        }
       
        @media screen and (max-width: 950px) {

            
            td {
            height: 35px;
            width: 180px;
            font-size: 10px;
            /* text-align: center; */
            }
            .mrt{
                margin-top:100px;
            }
         }
    </style>
</head>
<body>
    <?php include"navbar.php";?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php include'sidebar.php';?>
            </div>
            <div class="col-md-10">
            <div class="row" style='margin-top:90px;'>
                    <div class="col-md-9">
                        <h3 class='my-3'>ORDER DETAIL</h3>
                    </div>
                    
                </div>


                <div class="row mr-2">
                    <table>
                        <tr>
                            <td>SR NO.</td>
                            <td>refernce id</td>
                            <td>product name</td>
                            <td>buyer name</td>
                            <td>email</td>
                            <td>price</td>
                            <td>phone no.</td>
                            <td>status</td>
                        </tr>
                </div>
                <div class="row">
                    <?php
                        $i=1;
                        while($p2=mysqli_fetch_array($p1)){ 
                        echo"<tr>";
                            echo"<td>".$i."</td>";
                            echo"<td>".$p2['pid']."</td>";
                            echo"<td>".$p2['product_name']."</td>";
                            echo"<td>".$p2['name']."</td>";
                            echo"<td>".$p2['email']."</td>";
                            echo"<td>".$p2['price']."</td>";
                            echo"<td>".$p2['phone']."</td>";
                        echo"<td>"; if($p2['status']=='complete'){
                            echo "<h6 class='text-success'>Complete</h6>";
                        }else{
                            echo "<h6 class='text-danger'>Pending</h6>";
                        }
                        echo"</td>";
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
    
</body>
</html>