<?php
$conn = mysqli_connect('localhost','root','','db_project');
$p="SELECT * FROM tb_userdata";
$p1= mysqli_query($conn,$p);
$page ="user";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="../pic/logo1.png">
    <title>ADMIN-USERS</title>
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
            background-color: #D3D3D3;
            color:navy;
        }

        th {
            text-align: center;
            font-size: 23px;
            height: 50px;
        }
        .mtop{
            margin-top:20px;

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
        }
    </style>
</head>
<body>
    <?php include"navbar.php";?>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-2">
                <?php include'sidebar.php';?>
            </div>
            <div class="col-md-10">
            <div class="row my-3">
                    <div class="col-md-9 mt-5">
                        <h3>USER DATA</h3>
                    </div>
                    
                </div>


                <div class="row mr-3">
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
                            echo"<td>".$p2['user_name']."</td>";
                            echo"<td>".$p2['email']."</td>";
                            echo"<td>".$p2['phone_no']."</td>";
                            echo"<td><a class='btn btn-danger' href='delete_user.php?uid=".$p2['id']."'>delete</a></td>";
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