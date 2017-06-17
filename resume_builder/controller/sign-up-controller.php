<?php 
		include_once '../model/db.php';
		include_once '../common_files/common_functions.php';
		session_start();
	$connection = db_connect();
	echo "<pre>";
	sanitize_all_values($_REQUEST, $connection);
	echo "</pre>";
	if ($_REQUEST['password'] == $_REQUEST['re_password']) {
		$encrypted_password = md5($_REQUEST['password']);
		$sql = "INSERT INTO `users` (`email_id`, `password`) VALUES ('".$_REQUEST['email_id']."', '".$encrypted_password."')";
		if($result = execute_query($connection,$sql)){
			$sql = "SELECT * FROM `users` WHERE `email_id`='".$_REQUEST['email_id']."' AND `password`= '".$encrypted_password."'";
			$result = execute_query($connection,$sql);
			$user_data = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$_SESSION['user_data'] = $user_data;
			header('Location:../view/home.php');
		}
		else
		{
			header('Location:../view/login.php?status=User_Exist');
		}
	}
	else
	{
		header('Location:../view/sign_up.php?status=Incorrect_Password');
	}

 ?>