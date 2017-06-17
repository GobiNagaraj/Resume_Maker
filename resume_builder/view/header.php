<?php 

	function html_header($title)
	{
		echo '<!DOCTYPE html>
			<html>
				<head>
					<title>'.$title.'</title>
						<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
						<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
						<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
						<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
				</head>
			<body>';
	}
	function html_footer()
	{
		echo '</body> </html>';
						
	}
 ?>