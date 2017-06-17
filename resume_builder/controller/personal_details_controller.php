<?php 
	session_start();
	include_once '../model/db.php';
	include_once '../common_files/common_functions.php';
	$connection = db_connect();
	// echo "<pre>";
	// print_r($_SESSION);
	// print_r($_REQUEST);
	// echo "</pre>";
	$target_dir = "../images/pic/";
	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$filename = $_FILES["fileToUpload"]["name"];
		echo "file upload";
		$sql = "INSERT INTO `user_personal_details` (`dob`,`age`,`gender`,`nationality`,`father_name`,`mother_name`,`languages_known`,`course_clg`,`university_clg`,`passing_year_clg`,`percentage_clg`,`course_hsc`,`university_hsc`,`passing_year_hsc`,`percentage_hsc`,`course_sslc`,`university_sslc`,`passing_year_sslc`,`percentage_sslc`,`user_place`, `location_date`,`customer_id`,`fileToUpload`) VALUES ('".$_REQUEST['dob']."','".$_REQUEST['age']."','".$_REQUEST['gender']."','".$_REQUEST['nationality']."','".$_REQUEST['father_name']."','".$_REQUEST['mother_name']."','".$_REQUEST['languages_known']."','".$_REQUEST['course_clg']."','".$_REQUEST['university_clg']."','".$_REQUEST['passing_year_clg']."','".$_REQUEST['percentage_clg']."','".$_REQUEST['course_hsc']."','".$_REQUEST['university_hsc']."','".$_REQUEST['passing_year_hsc']."','".$_REQUEST['percentage_hsc']."','".$_REQUEST['course_sslc']."','".$_REQUEST['university_sslc']."','".$_REQUEST['passing_year_sslc']."','".$_REQUEST['percentage_sslc']."','".$_REQUEST['user_place']."','".$_REQUEST['location_date']."','".$_SESSION['user_data']['id']."','".$filename."')";
		$result = execute_query($connection,$sql);
		if ($result) {
			header('Location:../view/resume_generate.php');
		}
	}
	else {
		header('Location:../view/personal_details.php?status=Error');
	}
	
 ?>