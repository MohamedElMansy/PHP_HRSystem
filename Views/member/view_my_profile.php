<?php
if(__ALLOW_ACCESS__ !=1) {
    header("location:../../index.php");

}

if (isset($_POST['logout']))
{
    session_destroy();
//  header("Refresh:0");
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Soft a Human Resource Management Category Bootstrap Responsive Web Template | Jobs :: w3layouts</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style>

        body{
            background: linear-gradient(90deg, #e8e8e8 50%, #3d009e 50%);
        }
        .portfolio{
            padding:6%;
            text-align:center;
        }
        .heading{
            background: #fff;
            padding: 1%;
            text-align: left;
            box-shadow: 0px 0px 4px 0px #545b62;
        }
        .heading img{
            width: 10%;
        }
        .bio-info{
            padding: 5%;
            background:#fff;
            box-shadow: 0px 0px 4px 0px #b0b3b7;
        }
        .name{
            font-family: 'Charmonman', cursive;
            font-weight:600;
        }
        .bio-image{
            text-align:center;
        }
        .bio-image img{
            border-radius:50%;
        }
        .bio-content{
            text-align:left;
        }
        .bio-content p{
            font-weight:600;
            font-size:30px;
        }
    </style>
    <!--//tags -->
    <link href="views/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="views/public/css/style.css" rel="stylesheet" type="text/css" media="all" />

    <link href="views/public/css/font-awesome.css" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
          rel='stylesheet' type='text/css'>
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
                            <!--								<li><a href="index.html" class="effect-3">Home</a></li>-->
                            <form action="" method="post">
                                <button type="submit" name="logout" class="btn btn-success float-right" style="display: inline-block">LogOut</button>
                            </form>
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
    <h3>My Profile</h3>

    <!--		<p>Add Some Short Description</p>-->

</div>
<!--//banner -->
<!--/w3_short-->
<div class="services-breadcrumb_w3layouts">
    <div class="inner_breadcrumb">

    </div>
</div>

<div class="container portfolio">
    <div class="row">
        <div class="col-md-12">
            <div class="heading">
                <img src="https://image.ibb.co/cbCMvA/logo.png" />
            </div>
        </div>
    </div>
    <div class="bio-info">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bio-image">

                            <img src="<?php echo "views/public/images/".$user['image'] ?>" alt="image"  width="70%" height="100%"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bio-content">
                    <h1>Name :<?php
                        echo $user["name"];?></h1>
                    <br>
                    <br>

                    <h3>UserName :<?php echo $user["username"] ?></h3>
                    <br>
                    <h4>Job :<?php echo $user["job"]?></h4>
                    <?php $cv =$cvpath_user."/".$user["cv"]  ?>
                    <?php echo "<br><h3><a href=$cv target='_blank'><span>View CV</span></a></h3>";?>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?= $user['id'] ?>"  style="margin-top: 4%" class="btn btn-primary">Edit My Profile</a>
</div>
<!--<a href="" type="button" class="btn btn-primary">Edit</a>-->

<!-- //inner_content -->


<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="views/public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="views/public/js/bootstrap.js"></script>
</body>

</html>