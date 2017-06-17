<?php 
	include_once '../model/db.php';
	include_once '../common_files/common_functions.php';
	session_start();
	echo "<pre>";
	print_r($_SESSION);
	print_r($_REQUEST);
	echo "</pre>";
	$user_mail = $_REQUEST['email_id'];
	$user_pass = md5($_REQUEST['password']);
	$connection = db_connect();
	$sql = "SELECT * FROM `users` WHERE `email_id`='".$user_mail."' AND `password`= '".$user_pass."'";
	echo $sql;
	$result = execute_query($connection,$sql);
	$user_data = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if (empty($user_data)) {
		header('Location:../view/sign_up.php?status=User_Does_Not_Exist');
	}
	else
	{
		$_SESSION['user_data'] = $user_data;
		header('Location:../view/home.php');
	}

 ?>