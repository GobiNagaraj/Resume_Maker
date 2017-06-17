<?php 
	include_once '../model/db.php';
	include_once '../common_files/common_functions.php';
	include_once 'header.php';
	html_header("Resume_Generate_Page");
	session_start();
	$connection = db_connect();
	$sel = "SELECT * FROM `user_resume_details` WHERE `customer_id`='".$_SESSION['user_data']['id']."'";
	$result = execute_query($connection,$sel);
	$user_info = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$sele = "SELECT * FROM `user_personal_details` WHERE `customer_id`='".$_SESSION['user_data']['id']."'";
	$res = execute_query($connection,$sele);
	$user_personal = mysqli_fetch_array($res,MYSQLI_ASSOC);
 ?>
<nav class="navbar navbar-inverse">
 	<div class="container-fluid">
	 	<div class="navbar-header">
	 		<a href="#" class="navbar-brand w3-hover-red">Resume Builder</a>
	 	</div>
 		<ul class="nav navbar-nav">
 			<li><a class="w3-hover-blue" href="home.php">My Data</a></li>
 			<li><a class="w3-hover-blue" href="personal_details.php">Personal Details</a></li>
 			<li class="active"><a class="w3-hover-blue" href="resume_generate.php">Templates</a></li>
 			<li><a class="w3-hover-blue" id="cmd" href="#">Download</a></li>
 		</ul>
 		<ul class="nav navbar-nav navbar-right">
      		<li>
      			<a class="w3-hover-red" href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
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
 	<h4 align="center"> Your Resume Almost Ready</h4>
 	<hr>
 	<div id="content">
<div class="container header">
	<h1 align="center"><?php echo $user_info['first_name']; ?>_Resume</h1>
	<hr>
</div>

<div class="container">
	<div class="container-fluid">
		<div class="col-md-3" style="background-color:#dcdcdc;">	
				<td>
					<?php echo '<img src="../images/pic/'.$user_personal['fileToUpload'].'" style=" width: 150px; height: 180px; margin-left: 40px">'; ?><hr>
				</td>
				<td>
					<h3><b><?php echo $user_info['first_name']; ?></b></h3>
				</td>
				<td>
					<h5><b>Contact Information</b></h5>
				</td>
				<td>
					<h5><b>Email-id:</b></h5>
				</td>		
				<td>
					<a href="#"><?php echo $user_info['user_email']; ?></a>
				</td>	
				<td>
					<h5><b>Address for Communication:</b></h5>
				</td>
				<td>
					<p><?php echo resume_generate_comma($user_info['user_address']); ?></p>
				</td>		
				<td>
					<h5><b>Personal Details:</b></h5>
				</td>
			<table>
					<tr>
						<td>D.O.B</td>
						<td>:</td>
						<td><?php echo $user_personal['dob']; ?></td>
					</tr>
					<tr>
						<td>Age</td>
						<td>:</td>
						<td><?php echo $user_personal['age']; ?></td>
					</tr>
					<tr>
						<td>Sex</td>
						<td>:</td>
						<td><?php echo $user_personal['gender']; ?></td>
					</tr>
					<tr>
						<td>Nationality</td>
						<td>:</td>
						<td><?php echo $user_personal['nationality']; ?></td>
					</tr>
					<tr>
						<td>Father's Name</td>
						<td>:</td>
						<td><?php echo $user_personal['father_name']; ?></td>
					</tr>
					<tr>
						<td>Mother's Name</td>
						<td>:</td>
						<td><?php echo $user_personal['mother_name']; ?></td>
					</tr>
					<tr>
						<td>Mobile Number</td>
						<td>:</td>
						<td><?php echo $user_info['user_mobile_number']; ?></td>
					</tr>
					<tr>
						<td>Languages known</td>
						<td>:</td>
						<td><?php echo resume_generate_comma($user_personal['languages_known']); ?></td>
					</tr>
			</table>
		</div>
	<div class="right">
		<div class="col-md-9">
				<table style="width:70%">
						<tr>
							<td>
								<h4><b>Career Objectives:</b></h4><hr>
							</td>
						</tr>
						<tr>
							<td>
								<p><?php echo $user_info['user_career_obj']; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<h4><b>Education Qualification:</b></h4>
							</td>
						</tr>
						<tr>
							<table class="table table-stripped" style="text-align: center;">
								<tr>
									<td><b>Course</b></td>
									<td><b>University</b></td>
									<td><b>Passing Year</b></td>
									<td><b>Percentage/CGPA</b></td>
								</tr>
								<tr>
									<td><?php echo $user_personal['course_clg']; ?></td>
									<td><?php echo $user_personal['university_clg']; ?></td>
									<td><?php echo $user_personal['passing_year_clg']; ?></td>
									<td><?php echo $user_personal['percentage_clg']; ?></td>
								</tr>
								<tr>
									<td><?php echo $user_personal['course_hsc']; ?></td>
									<td><?php echo $user_personal['university_hsc']; ?></td>
									<td><?php echo $user_personal['passing_year_hsc']; ?></td>
									<td><?php echo $user_personal['percentage_hsc']; ?></td>
								</tr>
								<tr>
									<td><?php echo $user_personal['course_sslc']; ?></td>
									<td><?php echo $user_personal['university_sslc']; ?></td>
									<td><?php echo $user_personal['passing_year_sslc']; ?></td>
									<td><?php echo $user_personal['percentage_sslc']; ?></td>
								</tr>
							</table>
						</tr>
						<tr>
							<td>
								<h4><b>Technical Skills:</b></h4><hr>
							</td>
						</tr>
						<tr>
							<td>
								<ul>
									<li><?php echo resume_generate_minus($user_info['user_tech_skills']); ?>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>
								<h4><b>Area of Interest</b></h4><hr>
							</td>
						</tr>
						<tr>
							<td>
								<ul>
									<li><?php echo resume_generate_minus($user_info['user_area_interest']); ?>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>
								<h4><b>Project Title:</b></h4><hr>
							</td>
						</tr>
						<tr>
							<td>
								<ul>
									<li><?php echo $user_info['user_project_title']; ?></li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>
								<h4><b>Project Description:</b></h4><hr>
							</td>
						</tr>
						<tr>
							<td>
								<p><?php echo $user_info['user_project_description']; ?></p>
							</td>
						</tr>
				</table>
			</div>
		</div>
	</div>
	<table>
			<tr>
				<td>
					<h4><b>Strength and Weakness:</b></h4><hr>
				</td>
			</tr>
			<tr>
				<td>
					<ul>
						<li><?php echo resume_generate_minus($user_info['user_strength']); ?></li>
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<h4><b>Hobbies:</b></h4><hr>
				</td>
			</tr>
			<tr>
				<td>
					<ul>
						<li><?php echo resume_generate_minus($user_info['user_hobbies']); ?></li>
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<h4><b>References:</b></h4><hr>
				</td>
			</tr>
	</table>
<div class="container">
	<div class="container-fluid">
		<div class="col-md-6">
				<td>
						<h4><b><?php echo $user_info['user_references_1']; ?></b></h4>
								<p><?php echo resume_generate_reference($user_info['user_references_add']); ?></p>
				</td>
		</div>
		<div class="col-md-6">
				<td>
						<tr>
							<td>
								<h4><b><?php echo $user_info['user_references_2']; ?></b></h4>
								<p><?php echo resume_generate_reference($user_info['user_references_add']); ?></p>
							</td>
						</tr>
			    </td>
		</div>		
	</div><br>
	<div class="footer" style="margin-bottom: 50px">
			<h5><b>Place: </b> <?php echo $user_personal['user_place']; ?></h5><h5 style="margin-left: 900px"><b>Signature</b></h5>
			<h5><b>Date: </b> <?php echo resume_generate_date($user_personal['location_date']); ?></h5><h5 style="margin-left: 900px"><b>(<?php echo $user_info['first_name']; ?>)</b></h5>	
	</div>	
	</div>
</div>
<?php html_footer();?>

