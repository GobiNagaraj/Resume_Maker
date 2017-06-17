<?php 
	
	function db_connect()
	{
		$hostname = "localhost";
		$username = "root";
		$password = "palaniM@67";
		$conn = mysqli_connect($hostname, $username, $password,"resume_builder");
		return $conn;
	}

	function execute_query($conn,$query)
	{
		return mysqli_query($conn,$query);
	}

?>