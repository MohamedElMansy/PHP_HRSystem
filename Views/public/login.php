<?php
if(__ALLOW_ACCESS__ !=1) {
	header("location:../index.php");

}

if (isset($_POST['username']) && isset($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
//		echo "test";
		$db_handler= new LogIn($username,$password);
		$db_result_user=$db_handler->db_check_user();
		$db_result_admin=$db_handler->db_check_admin();
//		print_r($db_result);
		if (isset($db_result_admin) && !empty($db_result_admin) ) {
//			echo "success admin";
			$_SESSION['username']=$username;
			$_SESSION["is_admin"] = true;
//			header("Refresh:0");
			header('location:index.php');

		}
		elseif (empty($db_result_admin) && !empty($db_result_user))
		{
//			echo "yes uesr";
//			print_r($db_result_user);
			$_SESSION['username']=$username;
			$_SESSION["is_admin"] = false;
//			header("Refresh:0");
			header('location:index.php');
		}
		else
		{
			echo "login falied";
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Soft a Human Resource Management Category Bootstrap Responsive Web Template | Login :: w3layouts</title>
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
	<link href="views/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="views/public/css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="views/public/css/font-awesome.css" rel="stylesheet">
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
		<h3>Login</h3>
		

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

<!--
			<ul class="short_w3ls"_w3ls>
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>Login</li>
			</ul>
-->
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle three">LogIn to your Account </h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="signin-form">
					<div class="login-form-rec">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
							<input type="text" name="username" placeholder="Username" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<div class="tp">
								<input type="submit" value="Login">
							</div>
						</form>
					</div>
					
					<p><a href="views/public/register.php"> Don't have an account?</a></p>
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
	<script type="text/javascript" src="views/public/js/bootstrap.js"></script>
</body>

</html>