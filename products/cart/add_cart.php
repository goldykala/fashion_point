<?php
 $eid= $_GET['id'];
	session_start();
	$_SESSION['pid']=$eid;

	//check if product is already in the cart
	if(!in_array($_GET['id'], $_SESSION['cart'])){
		array_push($_SESSION['cart'], $_GET['id']);
		$_SESSION['message'] = 'Product added to cart';
	}
	else{
		$_SESSION['message'] = 'Product already in cart';
	}

	header('location:../detail_page.php?did='.$eid);
?>