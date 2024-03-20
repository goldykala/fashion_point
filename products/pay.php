<?php
$product = $_POST['pname'];
$price = $_POST['price'];
$phone = $_POST['phone'];
$user = $_POST['cname'];
$adress = $_POST['adress'];
$city = $_POST['city'];
$pin = $_POST['pincode'];
$email = $_POST['email'];
$pdid = $_POST['pdid'];
session_start();
$_SESSION['productid']=$pdid;
$_SESSION['ad']=$adress;
$_SESSION['ct']=$city;
$_SESSION['pin']=$pin;
$_SESSION['user']=$user;
$_SESSION['phone']=$phone;


$key= "test_a13a97b163357764e520420a958";
$token="test_67c03f6a073ee69000859753835";
$mojourl="https://test.instamojo.com/api/1.1/";

//
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:$key",
                  "X-Auth-Token:$token"));
$payload = Array(
    'purpose' => $product,
    'amount' => $price,
    'phone' => $phone,
    'buyer_name' => $user,
    'redirect_url' => 'http://localhost/fashion_point/products/thanks.php?ei=45',
    'send_email' => false,
    // 'webhook' => 'http://localhost/project/products/webhook.php',
    'send_sms' => false,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
// print_r($ch);
$response = curl_exec($ch);
curl_close($ch);
$decode = json_decode($response);
$sucess= $decode->success;
if($sucess== true){
    include "../connection.php";
    $paymenturl = $decode->payment_request->longurl;
    $refid = $decode->payment_request->id;
    // $orderId= date('y','m','d','H','s');
    $data = "INSERT INTO tb_order(product_name,price,name,email,phone,pid,status)VALUES('$product','$price','$user','$email','$phone','$refid','pending')";
    $conn = mysqli_query($conn,$data);

}
$paymenturl = $decode->payment_request->longurl;
header("location:$paymenturl");
exit();
?>
