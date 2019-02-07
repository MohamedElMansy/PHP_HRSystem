<?php
require_once("../../autoload.php");
if (isset($_POST['name'],$_POST['username'],$_POST['password'],$_POST['job'],$_FILES['img'],$_FILES['cv']))
{
	$err=array();
	$username_check=new MYSQLHandler("users");
	if($username_check->get_record_by_username($_POST['username'],"username"))
	{

			$err[]= "Username already exist , Please Choose Another one";
	}
	$reg= new Register($_POST['name'],$_POST['username'],$_POST['password'],$_POST['job'],$_FILES['img'],$_FILES['cv']);
	$d=$reg->insert_form_data();
	$errors=$reg->getErrors();
	$errors=array_merge($err,$errors);

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
	<?php if (!empty($errors))
	{?>
	<div class="col-md-9 personal-info">
		<div class="alert alert-info alert-danger">
			<a class="panel-close close" data-dismiss="alert">×</a>
			<?php
			foreach ($errors as $error)
				echo $error."<br>";

			?>

		</div>
		<?php } ?>
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

							<label class="btn btn-default btn-file">
								Upload <input type="file" name="img" style="display: none;">
							</label>

							<br>
							<br>
							<label for="cv" style="background-color: transparent;">Upload your Cv </label>
							<label class="btn btn-default btn-file">
								Upload <input type="file" name="cv" style="display: none;">
							</label>


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