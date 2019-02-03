<?php
require_once("../../autoload.php");
if (isset($_POST['name'],$_POST['username'],$_POST['password'],$_POST['job'],$_FILES['img'],$_FILES['cv']))
{
	echo "aa1";
	$name=$_POST['name'];
	$username=$_POST['username'];
	$job=$_POST['job'];
	$password=$_POST['password'];

	$errors= array();
	$file_name = $_FILES['img']['name'];
	$file_size =$_FILES['img']['size'];
	$file_tmp =$_FILES['img']['tmp_name'];
	$file_type=$_FILES['img']['type'];
	$x=explode('.',$_FILES['img']['name']);
	$file_ext=strtolower(end($x));
	$expensions= array("jpeg","jpg","png");
	if(in_array($file_ext,$expensions)=== false)
	{
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	}
	if($file_size > 1097152)
	{
		$errors[]='File size must be excately 1 MB';
	}

	$file_name2 = $_FILES['cv']['name'];
	$file_size2 =$_FILES['cv']['size'];
	$file_tmp2 =$_FILES['cv']['tmp_name'];
	$file_type2=$_FILES['cv']['type'];
	$x2=explode('.',$_FILES['cv']['name']);
	$file_ext2=strtolower(end($x2));
	$expensions2= array("pdf");
	if(in_array($file_ext2,$expensions2)=== false)
	{
		$errors[]="extension not allowed, please choose a pdf file.";
	}

	if($file_size2 > 2097152)
	{
		$errors[]='File size must be excately 2 MB';
	}


	if(empty($errors)==true)
	{
		echo "aa2";
		move_uploaded_file($file_tmp,"images/".$file_name);
		move_uploaded_file($file_tmp2,"images/cvs/".$file_name2);

		$dbhandler=new MYSQLHandler("users");
		$db_result=$dbhandler->insert_data($username,$password,$name,$job,$file_name,$file_name2);

	}
	else
	{
		print_r($errors);
	}

}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Soft a Human Resource Management Category Bootstrap Responsive Web Template | Register :: w3layouts</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
<!--
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
-->
</head>

<body>
	<!-- header -->
	<div class="header" id="home">
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" >
							<h1><span class="fa fa-signal" aria-hidden="true"></span> Soft <label>Hr Agency</label></h1>
						</a>
					</div>
					<!--/.navbar-header-->

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div class="inner_page_agile">
		<h3>Register</h3>
		

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle three">Register Now </h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="signin-form">
					<div class="login-form-rec">
						<form action="register.php" method="POST" enctype="multipart/form-data">
							<input type="text" name="name" placeholder="Name" required="">
							<input type="text" name="username" placeholder="UserName" required="">
							<input type="password" name="password" id="password1" placeholder="Password" required="">
							<input type="text" name="job" placeholder="Job" required="">
							<br>
							<label for="img" style="background-color: transparent;">Choose a profile picture</label>
<!--							<input  type="file" id="img" name="img" accept="image/png, image/jpeg">-->
							<div class="form-group">
								<input type="file" id="img" onchange="previewImage();" class="form-control  btn-warning" name="img">
							</div>
							<br>
							<br>
							<label for="cv" style="background-color: transparent;">Upload your Cv </label>
							<div >
								<input type="file" id="cv" class="form-control  btn-warning" name="cv">
							</div>
<!--							<input type="file" id="cv" name="cv">-->


							<input type="submit" value="Register">
						</form>
					</div>
					<p class="reg"><a href="#"> By clicking register, I agree to your terms</a></p>

				</div>
			</div>
		</div>
	</div>


	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>