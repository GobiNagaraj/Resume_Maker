<?php 
	include_once 'header.php';
	html_header("SignUp_Page");
 ?>
	<div class="container">
	<?php 
		if(isset($_GET['status']))
		{
			switch ($_GET['status']) {
				case 'User_Exist':
					echo "<div class='alert alert-danger'>User Already Exist...</div>";
					break;
				case 'Incorrect_Password':
					echo "<div class='alert alert-danger'>Please Check Your Re-enter Password</div>";
					break;
				case 'User_Does_Not_Exist':
					echo "<div class='alert alert-success'>Please Sign Up Your Account</div>";
					break;
					}
		}		
	 ?>
		<h1 style="text-align: center;">Sign Up</h1>
		<img src="../images/SignUp_toLogo.jpg" style="margin-left: 380px; width: 400px; height: 250px">
		<form method="POST" action="../controller/sign-up-controller.php">
			<input type="email" name="email_id" class="form-control" placeholder="User Email id" required ><br/>
			<input type="password" name="password" class="form-control" placeholder="User Password" required><br/>
			<input type="password" name="re_password" class="form-control" placeholder="User Re-Password" required><br/>
			<input type="image" src="../images/sign-up-logo.jpg" name="gobi" alt="Submit" style="margin-left: 500px; width: 80px; height: 80px" />
			<!-- <input type="submit" name="signup" class="btn btn-info form-control" value="Sign Up">	 -->
		</form>
			<div class="right-container" style="text-align: right;">
				<a href="login.php">Already have an Account?</a>
			</div>
	</div>
<?php html_footer();?>