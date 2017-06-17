<?php 
session_start();
	include_once 'header.php';
	html_header("Login_Page");
	session_destroy();
 ?>
	<div class="container">
	<?php 
		if(isset($_GET['status']))
		{
			switch ($_GET['status']) 
			{
				case 'User_Does_Not_Exist':
					echo "<div class='alert alert-danger'>User mail_id or Password is incorrect</div>";
					break;
				case 'User_Exist':
					echo "<div class='alert alert-danger'>You are Already have an Account</div>";
					break;
					
			}
		}		
	 ?>
		<h1 style="text-align: center;">Login</h1>
		<form method="POST" action="../controller/login-controller.php">
		<img src="../images/LoginRed.jpg" style="margin-left: 390px; width: 350px; height: 250px">
			<input type="email" name="email_id" class="form-control" placeholder="User Email id" required ><br/>
			<input type="password" name="password" class="form-control" placeholder="User Password" required><br/>
			<input type="image" src="../images/login-button.png" name="gobi" alt="Submit" style="margin-left: 500px; width: 120px; height: 80px" />
			<!-- <input type="submit" name="submit" class="btn btn-success form-control" value="Login"> -->
		</form>
		<div class="right-container" style="text-align: right;">
				<a href="sign_up.php">Need an Account?</a>
		</div>
	</div>
<?php html_footer();?>