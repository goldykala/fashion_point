<?php
	session_start();
	$id = $_SESSION['pid'];
	//user needs to login to checkout
	$_SESSION['message'] = 'You need to login to checkout';
	header("location:../login_page.php?id=$id");
?>