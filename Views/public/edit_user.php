<?php
//require_once("../../autoload.php");
if (isset($_POST['name'],$_POST['username'],$_POST['password'],$_POST['job'],$_FILES['img'],$_FILES['cv']))
{
    echo "aa1";
    $reg= new Register($_POST['name'],$_POST['username'],$_POST['password'],$_POST['job'],$_FILES['img'],$_FILES['cv']);
    $d=$reg->update_form_data(3);


}
if (isset($_POST['logout']))
{
    session_destroy();
    header("Refresh:0");
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
                            <form action="index.php" method="post">
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
    <h3>Edit</h3>


</div>
<!--//banner -->
<!--/w3_short-->

<div class="container">

    <div class="row">
        <!-- left column -->


        <!-- edit form column -->
        <div class="col-md-9 personal-info">
<!--            <div class="alert alert-info alert-dismissable">-->
<!--                <a class="panel-close close" data-dismiss="alert">×</a>-->
<!--                <i class="fa fa-coffee"></i>-->
<!--                This is an <strong>.alert</strong>. Use this to show important messages to the user.-->
<!--            </div>-->
<!--            <h3>Personal info</h3>-->

            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" role="form" method="POST" enctype="multipart/form-data">
                <div class="col-md-3" style="width: 80%" style="margin-top: 5%" >
                    <div class="text-center">
                        <img src="views/public/images/e1.jpg" width="50%" height="50%" class="avatar img-circle" alt="avatar">
                        <h6>Upload a different photo...</h6>

                        <input type="file" name="img" class="form-control">
                        <br>
                        <br>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Username:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="Jane" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">password</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="password" value="" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Name</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Job</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="" name="job">
                    </div>
                </div>

                <label for="cv" style="background-color: transparent;">Upload your Cv </label>
                <div >
                    <input type="file" id="cv" class="form-control  btn-warning" name="cv">
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="Save Changes">
                        <span></span>
<!--                        <input type="reset" class="btn btn-default" value="Cancel">-->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- js -->
<script type="text/javascript" src="views/public/js/jquery-2.1.4.min.js"></script>
<!-- password-script -->

<!-- //password-script -->
<script type="text/javascript" src="views/public/js/bootstrap.js"></script>
</body>

</html>