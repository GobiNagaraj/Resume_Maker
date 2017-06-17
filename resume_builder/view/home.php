<?php 
	session_start();
	include_once 'header.php';
	html_header("Home_Page");
 ?>
 <nav class="navbar navbar-inverse">
 	<div class="container-fluid">
	 	<div class="navbar-header">
	 		<a href="#" class="navbar-brand w3-hover-red">Resume Builder</a>
	 	</div>
 		<ul class="nav navbar-nav">
 			<li class="active"><a class="w3-hover-blue" href="home.php">My Data</a></li>
 			<li><a class="w3-hover-blue" href="personal_details.php">Personal Details</a></li>
 			<li><a class="w3-hover-blue" href="resume_generate.php">Templates</a></li>
 			<li><a class="w3-hover-blue" href="download_resume.php">Download</a></li>
 		</ul>
 		<ul class="nav navbar-nav navbar-right">
      		<li>
      			<a class="w3-hover-red" id="cmd" href="welcome.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
      		</li>
    	</ul>
 	</div>
</nav>
<script type="text/javascript">
		$(document).ready(function(){
		$('#cmd').click(function () {
		var prtContent = document.getElementById("content");
		var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prtContent.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
		});	
});
	</script>
<div class="container">
	<form method="POST" action="../controller/save_users_data.php">
	 	<table width="100%">
	 		 <h1 style="text-align: center;">Add Your Details</h1>
	 		<tr>
	 			<td>
	 				<input type="text" name="first_name" placeholder="First Name" class="form-control" required>
	 			</td>
	 			<td>&nbsp;</td>
	 			<td>
	 				<input type="text" name="last_name" placeholder="Last Name" class="form-control" required>		
	 			</td>
	 		</tr>
 		</table><br/>
 		<table width="100%">
 			<tr>
	 			<td>
	 				<input type="email" name="user_email" placeholder="Email_id" class="form-control" required>
	 			</td>
	 			<td>&nbsp;</td>
	 			<td>
	 				<input type="number" name="user_mobile_number" placeholder="Mobile Number" class="form-control" required>
	 			</td>
	 		</tr>
 		</table><br/>
	 		<textarea rows="5" name="user_address" placeholder="Address" class="form-control" required></textarea><br/>
	 		<textarea rows="4" name="user_career_obj" placeholder="Career Objectives" class="form-control" required></textarea><br/>
	 		<!-- <p><b>Educational Qualification Split course with ',' and '|' between the course</b></p> -->
	 		<input type="number" name="user_edu_qua" placeholder="Education Qualification" class="form-control" required><br/>
 		<table width="100%">
 		<tr style="text-align: center;"><blockquote>Differenciate '-' with each field</blockquote></tr>
 			<tr>
 				<td>
 					<input type="text" name="user_tech_skills" placeholder="Technical Skills" class="form-control" required>
 				</td>
 				<td>&nbsp;</td>
  				<td>
 					<input type="text" name="user_area_interest" placeholder="Area of Interest" class="form-control" required>
 				</td>
 			</tr>
 		</table><br/>
 		<!-- <p><b>Project Details Split Description with ',' and '|' between the title</b></p> -->
	 		<input type="text" name="user_project_title" placeholder="Project Titles" class="form-control" required><br/>
	 		<textarea rows="5" name="user_project_description" placeholder="Project Description" class="form-control" required></textarea><br/>
 		<table width="100%">
 		<tr style="text-align: center;"><blockquote>Differenciate '-' with each field</blockquote></tr>
 			<tr>
 				<td>
 					<textarea rows="3" name="user_strength" placeholder="Strength and Weakness" class="form-control" required></textarea>
 				</td>
 				<td>&nbsp;</td>
 				<td>	
 					<textarea rows="3" name="user_hobbies" placeholder="Hobbies" class="form-control" required></textarea>
 				</td>
 			</tr>
 		</table></br>
 		<table width="100%">
 			<tr>
 				<td>
 					<input type="text" name="user_references_1" placeholder="Referencer Name 1" class="form-control" required>
 				</td>
 				<td>&nbsp;</td>
 				<td>
 					<input type="text" name="user_references_2" placeholder="Referencer Name 2" class="form-control" required></td>
 				</td>
 			</tr>
 		</table><br/>
 		<textarea rows="5" name="user_references_add" placeholder="References" class="form-control" required></textarea><br/>
 		<input type="submit" name="submit" class="btn btn-success" value="Save & Next Step"><br/>
	</form>
</div>
<?php html_footer();?>