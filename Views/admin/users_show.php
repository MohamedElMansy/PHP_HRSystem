<?php
if(__ALLOW_ACCESS__ !=1) {
    header("location:../../index.php");

}
$next=$current_index+__RECORDS_PER_PAGE__;
$prev=($current_index - __RECORDS_PER_PAGE__);
if($prev>0)
{
    $previous=$prev;
}
else
{
    $previous=0;
}

if (isset($_POST['logout']))
{
    session_destroy();
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
                    <a class="navbar-brand" href="index.html">
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
    <h3>Users</h3>
    <!--		<p>Add Some Short Description</p>-->

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
        <div class="col-md-4 job_info_right">


        </div>
        <div class="tittle_head_w3ls">
            <h3 class="tittle" style="margin-right: 75%;">Users</h3>


        </div>
        <div class="inner_sec_grids_info_w3ls">
            <div class="col-md-8 job_info_left">
                <div class="but_list">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                            <!--
                                                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Top Locations</a></li>
                                                            <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Show Descriptions</a></li>
                            -->
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <?php
//                                var_dump($Users);
                                if(empty($Users))
                                {?>
                                <div class="col-md-9 personal-info">
                                    <div class="alert alert-info alert-primary">
                                        <h3 >No More Data</h3>


                                    </div>
                                    <?php } ?>

                                <?php foreach($Users as $user): ?>
                                    <div class="tab_grid">
                                        <div class="col-sm-3 loc_1">
                                            <img src="Views\public\images/<?= $user["image"]?>" alt="">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="location_box1">
                                                <h6><a><?= $user['name'] ?> </a></h6>
                                                <p><?= $user['username'] ?></p>

                                                <ul class="links_bottom">


                                                    <li><a> <span class="icon_text"><?= $user['job'] ?></span></a></li>
                                                    <li class="last"><a href="<?php echo $_SERVER['PHP_SELF'];?>/?id=<?= $user['id'] ?>"><span class="icon_text">More <i class="fa fa-caret-right icon_1"> </i></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>
<div  style=" margin-left: 15%;"  >

<a class="btn btn-primary btn-lg " href="<?php echo $_SERVER['PHP_SELF']."?next=".$previous ?>" role="button">Previous</a>
    <?php if(!empty($Users)){?>
<a class="btn btn-success btn-lg" href="<?php echo $_SERVER['PHP_SELF']."?next=".$next ?>" role="button">Next</a>
<?php } ?>


</div>
<!-- //inner_content -->


<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="views/public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="views/public/js/bootstrap.js"></script>
</body>

</html>