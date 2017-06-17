<?php 
	session_start();
	include_once 'header.php';
	html_header("Download Page");
 ?>
 <nav class="navbar navbar-inverse">
 	<div class="container-fluid">
	 	<div class="navbar-header">
	 		<a href="#" class="navbar-brand w3-hover-red">Resume Builder</a>
	 	</div>
 		<ul class="nav navbar-nav">
 			<li><a class="w3-hover-blue" href="home.php">My Data</a></li>
 			<li><a class="w3-hover-blue" href="personal_details.php">Personal Details</a></li>
 			<li><a class="w3-hover-blue" href="resume_generate.php">Templates</a></li>
 			<li class="active"><a class="w3-hover-blue" href="download_resume.php">Download</a></li>
 		</ul>
 		<ul class="nav navbar-nav navbar-right">
      		<li>
      			<a class="w3-hover-red" href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
      		</li>
    	</ul>
 	</div>
</nav>
<div class="container">
	<form method="POST" action="">
		<h1><center><b>Download Your Resume Here</b></center></h1>
	</form>
</div>

<?php html_footer();?>