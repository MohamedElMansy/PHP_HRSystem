<?php

if (isset($_POST['id'],$_POST['name'],$_POST['username'],$_POST['password'],$_POST['job'],$_FILES['img'],$_FILES['cv']))
{
//    echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1";
    $reg= new Register($_POST['name'],$_POST['username'],$_POST['password'],$_POST['job'],$_FILES['img'],$_FILES['cv']);
    $d=$reg->update_form_data($_POST['id']);

    $errors=$reg->getErrors();
}
if (isset($_POST['logout']))
{
    session_destroy();
//    header("Refresh:0");
    header('location:index.php');
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
<!--            <h3>Personal info</h3>-->

            <form class="form-horizontal" action="" role="form" method="POST" enctype="multipart/form-data">
                <div class="col-md-3" style="width: 80%" style="margin-top: 5%" >
                    <div class="text-center" style="padding-top: 5%">
                        <img src="views/public/images/<?php echo $current_user['image']?>" width="50%" height="60%" class="avatar img-circle" alt="avatar">
                        <br>
                        <div style="padding-top: 4%;">
                            <label for="cv" style="background-color: transparent;">Upload your Pic </label>
                            <label class="btn btn-default btn-file">
                                Upload <input type="file" name="img" style="display: none;">
                            </label>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Username:</label>
                    <div class="col-lg-8">

                        <input class="form-control" type="text" value="<?php echo $current_user['username']?>" name="username">
                        <input class="form-control" type="text" style="display: none" value="<?php echo $current_user['id']?>" name="id">
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
                        <input class="form-control" type="text" value="<?php echo $current_user['name']?>" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Job</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="<?php echo $current_user['job']?>" name="job">
                    </div>
                </div>
                <div style="padding-left: 11%;  padding-top: 1%;">
                    <label for="cv" style="background-color: transparent;">Upload your Cv </label>
                    <label class="btn btn-default btn-file">
                        Upload <input type="file" name="cv" style="display: none;">
                    </label>
                </div>
<!--                <input type="file" id="selectedFile" />-->
<!--                <input type="button" value="Browse..." onclick="document.getElementById('selectedFile').click();" />-->
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
<script type="text/javascript" src="views/public/js/bootstrap.js"></script>
</body>

</html>