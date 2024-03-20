<?php
$page="category";
$conn = mysqli_connect('localhost','root','','db_project');
$id = $_GET['cid'];
$p = "SELECT * FROM tb_subcategory WHERE cat_id='$id'";
$p1= mysqli_query($conn,$p);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cdn/css/bootstrap.css">
    <style>
        td{
            height: 50px;
            width:250px;
            font-size: 18px;
            text-align:center;
        }
        table{
            border-collapse: collapse;
        }
        tr:nth-child(odd){
            background-color:#D3D3D3;
            color:navy;
        }
        th{
            text-align:center;
            font-size:23px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php include'navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php include'sidebar.php';?>
            </div>
            <div class="col-md-10 pr-5">
                <div class="row" style='margin-top:90px';>
                    <div class="col-md-9">
                        <h3>SUB CATEGORY</h3>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-primary" href='add_subcategory.php'> Add New Category</a>
                    </div>
                </div>

            <div class="row mt-2">
                <table>
                     <tr>
                        <td>SR NO.</td>
                        <td>CATEGORY NAME</td>
                        <td>CATEGORY ID</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
            </div>


            <div class="row">
                    <?php
                    $i=1;
                    while($p2=mysqli_fetch_array($p1)){ 
                    echo"<tr>";
                        echo"<td>".$i."</td>";
                        echo"<td>".$p2['sub_name']."</td>";
                        echo"<td>".$p2['sub_id']."</td>";
                        echo"<td><a class='btn btn-success' href='edit_subcategory.php?sid=".$p2['sub_id']."'>edit</a></td>";
                        echo"<td><a class='btn btn-danger' href='delete_subcategory.php?sid=".$p2['sub_id']."'>delete</a></td>";
                        echo"</tr>";
                        $i++;
                    }?>
                </tr>
                </div>
                </table>
        </div>
    </div>
        
</body>
</html>