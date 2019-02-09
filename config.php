<?php
if(__ALLOW_ACCESS__ !=1) {
    header("location:index.php");

}


define("__HOST__","localhost");
define("__USER__","root");
define("__PASS__","");
define("__DB__","hrsystem");

define("__PASSWORDMAXLENGTH__",16);
define("__PASSWORDMINLENGTH__",8);
define("__MAXSIZE__",1 * 1024 * 1024);
define("__RECORDS_PER_PAGE__",5);
define("__Debug_Mode__",0);

define("__CV_PATH_USER","views/public/images/cvs");
define("__CV_PATH_ADMIN","../views/public/images/cvs");
define("__AUTOLOAD_PATH_FROM_PUBLIC","../../autoload.php");
define("__REGISTERATION_PAGE__","views/public/register.php");
define("__INDEX_ROUTE_LOGIN","views/public/login.php");
define("__INDEX_ROUTE_USERS","views/admin/users.php");
define("__INDEX_ROUTE_MEMBERROUTING","views/member/member_routing.php");
define("__MEMBERROUTING_ROUTE_EDITUSER","views/member/edit_user.php");
define("__MEMBERROUTING_ROUTE_VIEWMYPROFILE","views/member/view_my_profile.php");
define("__IMAGE_PATH_EDIT","views/public/images/");
define("__USERS_ROUTE_ONEUSER","views/admin/one_user.php");
define("__USERS_ROUTE_USERS_SHOW","views/admin/users_show.php");




