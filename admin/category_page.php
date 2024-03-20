<?php
$conn = mysqli_connect('localhost','root','','db_project');
$p="SELECT * FROM tb_category";
$p1= mysqli_query($conn,$p);
$page ="category";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <title>ADMIN -CATEGORY</title>
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
    <style>
        td {
            height: 50px;
            width: 250px;
            font-size: 18px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
        }

        tr:nth-child(odd) {
            background-color:#D3D3D3;
            color:navy;

        }

        th {
            text-align: center;
            font-size: 23px;
            height: 50px;
        }
    </style>
</head>

<body>
<?php include "navbar.php"?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"><?php include "sidebar.php"?></div>
            <div class="col-md-10 "style="margin-top:50px;">

                <div class="row my-5">
                    <div class="col-md-9">
                        <h3>CATEGORY</h3>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-primary" href="add_category.php"> Add New Category</a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <table>
                            <tr>
                                <td>SR NO.</td>
                                <td>CATEGORY NAME</td>
                                <td>CATEGORY ID</td>
                                <td>SUB CATEGORY</td>
                                <td>EDIT</td>
                                <td>DELETE</td>
                            </tr>
                    </div>
                </div>
                    <div class="row">
                        
                        <div class="col-md-12">
                            <?php
                            $i=1;
                            while($p2=mysqli_fetch_array($p1)){ 
                            echo"<tr>";
                                echo"<td>".$i."</td>";
                                echo"<td>".$p2['cat_name']."</td>";
                                echo"<td>".$p2['cat_id']."</td>";
                                echo"<td><a class='btn btn-warning' href='sub_catbycat.php?cid=".$p2['cat_id']."'>sub category</a></td>";
                                echo"<td><a class='btn btn-success' href='edit_category.php?cid=".$p2['cat_id']."'>edit</a></td>";
                                echo"<td><a class='btn btn-danger' href='delete_category.php?cid=".$p2['cat_id']."'>delete</a></td>";
                                echo"</tr>";
                                $i++;
                            }?>
                            </tr>
                        </div>
                    </div>


                    </table>
                </div>
</body>

</html>