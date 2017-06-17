<?php 
		
	session_start();
	include_once '../model/db.php';
	include_once '../common_files/common_functions.php';	
	$connection = db_connect();
	// echo "<pre>";
	// print_r($_SESSION);
	// print_r($_REQUEST);
	// echo "</pre>";

	$sql = "INSERT INTO `user_resume_details` (`first_name`,`last_name`,`user_email`,`user_address`,`user_mobile_number`,`user_career_obj`,`user_edu_qua`,`user_tech_skills`,`user_area_interest`,`user_project_title`,`user_project_description`,`user_strength`,`user_hobbies`,`user_references_1`,`user_references_2`,`user_references_add`,`customer_id`) VALUES ('".$_REQUEST['first_name']."','".$_REQUEST['last_name']."','".$_REQUEST['user_email']."','".$_REQUEST['user_address']."','".$_REQUEST['user_mobile_number']."','".$_REQUEST['user_career_obj']."','".$_REQUEST['user_edu_qua']."','".$_REQUEST['user_tech_skills']."','".$_REQUEST['user_area_interest']."','".$_REQUEST['user_project_title']."','".$_REQUEST['user_project_description']."','".$_REQUEST['user_strength']."','".$_REQUEST['user_hobbies']."','".$_REQUEST['user_references_1']."','".$_REQUEST['user_references_2']."','".$_REQUEST['user_references_add']."','".$_SESSION['user_data']['id']."')";
	$result = execute_query($connection,$sql);
	if ($result) 
	{
		header('Location:../view/personal_details.php');
	}
	else{
		/*echo $sql;
		echo "<pre>";
		print_r($sql);*/
		header('Location:../view/home.php?status=invalid');
	}
	
 ?>