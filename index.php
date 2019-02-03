<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("autoload.php");
define("_ALLOW_ACCESS", 1);
session_start();
session_regenerate_id();

//session_destroy();
//********************************************//
//Routing


if(!isset($_SESSION['username']))
{
    //public views should be required here
    require_once ("views/public/login.php");
}
elseif (isset($_SESSION['username']) && $_SESSION["is_admin"] === true) {
    //admin views should be required here
    require_once ("views/public/register.php");

}
elseif (isset($_SESSION['username']) && $_SESSION["is_admin"] === false) {
    //members views should be required here
    require_once ("views/public/jobs.php");

}
//********************************************//




