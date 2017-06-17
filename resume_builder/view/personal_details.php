<?php 
	session_start();
	include_once 'header.php';
	html_header("Personal_Details_Page");
 ?>
 <nav class="navbar navbar-inverse">
 	<div class="container-fluid">
	 	<div class="navbar-header">
	 		<a href="#" class="navbar-brand w3-hover-red">Resume Builder</a>
	 	</div>
 		<ul class="nav navbar-nav">
 			<li><a class="w3-hover-blue" href="home.php">My Data</a></li>
 			<li class="active"><a class="w3-hover-blue" href="personal_details.php">Personal Details</a></li>
 			<li><a class="w3-hover-blue" href="resume_generate.php">Templates</a></li>
 			<li><a class="w3-hover-blue" href="download_resume.php">Download</a></li>
 		</ul>
 		<ul class="nav navbar-nav navbar-right">
      		<li>
      			<a class="w3-hover-red" id="cmd" href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
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
	<form method="POST" action="../controller/personal_details_controller.php" enctype="multipart/form-data" accept="image/*">
	<h1 style="text-align: center;">Your Personal Details</h1>
	 	<table width="100%">
	 		<tr>
	 			<td>
	 				<input type="date" name="dob" placeholder="D.O.B" class="form-control" required>
	 			</td>
	 			<td>&nbsp;</td>
	 			<td>
	 				<input type="text" name="age" placeholder="Age" class="form-control" required>		
	 			</td>
	 		</tr>
 		</table><br/>
 		<table width="100%">
 			<tr>
	 			<td>
	 				<input type="text" name="gender" placeholder="Gender" class="form-control" required>
	 			</td>
	 			<td>&nbsp;</td>
	 			<td>
	 				<input type="text" name="nationality" placeholder="Nationality" class="form-control" required>
	 			</td>
	 		</tr>
 		</table><br/>
 		<table width="100%">
 			<tr>
	 			<td>
	 				<input type="text" name="father_name" placeholder="Father's Name" class="form-control" required>
	 			</td>
	 			<td>&nbsp;</td>
	 			<td>
	 				<input type="text" name="mother_name" placeholder="Mother's Name" class="form-control" required>
	 			</td>
	 		</tr>
 		</table><br/>
 		<table width="100%">
 			<tr>
 				<td>
 					<input type="text" name="user_place" placeholder="Now Your Place" class="form-control" required>
	 			</td>
	 			<td>&nbsp;</td>
	 			<td>
	 				<input type="date" name="location_date" placeholder="Now Your Date" class="form-control" required>		
	 			</td>
 				</td>
 			</tr>
 		</table><br/>
		 		<input type="text" name="languages_known" placeholder="Language's Known(Tamil,English,Hindi,..)" class="form-control" required><br/>
		 		<h3><i><b>Academic Details:</b></i></h3>
		 		<table class="table table-stripped" style="text-align: center; width="100%" ">
								<tr>
									<td><b>Course</b></td>
									<td><b>University</b></td>
									<td><b>Passing Year</b></td>
									<td><b>Percentage/CGPA</b></td>
								</tr>
								<tr>
									<td><input type="text" name="course_clg" class="form-control" placeholder="Enter Course Name"></td>
									<td><input type="text" name="university_clg" class="form-control" placeholder="Enter University Name"></td>
									<td><input type="text" name="passing_year_clg" class="form-control" placeholder="Enter Passing Year"></td>
									<td><input type="text" name="percentage_clg" class="form-control" placeholder="Enter Percentage details"></td>
								</tr>
								<tr>
									<td><input type="text" name="course_hsc" class="form-control" placeholder="Enter HSC Details"></td>
									<td><input type="text" name="university_hsc" class="form-control" placeholder="Enter HSC schooling Name"></td>
									<td><input type="text" name="passing_year_hsc" class="form-control" placeholder="Enter HSC passing year"></td>
									<td><input type="text" name="percentage_hsc" class="form-control" placeholder="Enter HSC percentage %"></td>
								</tr>
								<tr>
									<td><input type="text" name="course_sslc" class="form-control" placeholder="Enter SSLC Details"></td>
									<td><input type="text" name="university_sslc" class="form-control" placeholder="Enter SSLC schooling Name"></td>
									<td><input type="text" name="passing_year_sslc" class="form-control" placeholder="Enter SSLC passing year"></td>
									<td><input type="text" name="percentage_sslc" class="form-control" placeholder="Enter SSLC percentage %"></td>
								</tr>
							</table>
		 		<div class="form-group">
		 			<label>Upload image</label>
			 		<input type="file" name="fileToUpload" class="form-control" placeholder="file_upload" required><br>
			 	</div>
		 		<input type="submit" name="submit" class="btn btn-info form-control" value="Save & Next Step"><br/>
	</form>
</div>
<?php html_footer();?>