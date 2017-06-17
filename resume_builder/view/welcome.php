<?php 
	session_start();
	include_once 'header.php';
	html_header("Welcome Page");
	session_destroy();
 ?>
 <h1><marquee>Welcome to Resume Builder</marquee></h1>
 <div class="row">
 <div class="col-md-6">	
		<h1 style="text-align: center;">Login</h1>
		<form method="POST" action="../controller/login-controller.php">
		<img src="../images/LoginRed.jpg" style="margin-left: 150px;width: 350px; height: 250px">
			<input type="email" name="email_id" class="form-control" placeholder="User Email id" required ><br/>
			<input type="password" name="password" class="form-control" placeholder="User Password" required><br/>
			<input type="image" src="../images/login-button.png" name="gobi" alt="Submit" style=" margin-left: 200px; width: 120px; height: 80px" />
		</form>
	</div>
 <div class="col-md-6">
		<h1 style="text-align: center;">Sign Up</h1>
		<img src="../images/SignUp_toLogo.jpg" style="margin-left: 150px; width: 400px; height: 250px">
		<form method="POST" action="../controller/sign-up-controller.php">
			<input type="email" name="email_id" class="form-control" placeholder="User Email id" required ><br/>
			<input type="password" name="password" class="form-control" placeholder="User Password" required><br/>
			<input type="password" name="re_password" class="form-control" placeholder="User Re-Password" required><br/>
			<input type="image" src="../images/sign-up-logo.jpg" name="gobi" alt="Submit" style="margin-left: 200px; width: 80px; height: 80px" />
		</form>
 </div>
 </div>
 <?php html_footer(); ?>