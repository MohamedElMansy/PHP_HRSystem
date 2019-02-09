<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("__ALLOW_ACCESS__", 1);
require_once("autoload.php");

session_start();
session_regenerate_id();

//session_destroy();
//********************************************//
//Routing


if(!isset($_SESSION['username']))
{
    //public views should be required here
    require_once (__INDEX_ROUTE_LOGIN);
}
elseif (isset($_SESSION['username']) && $_SESSION["is_admin"] === true) {
    //admin views should be required here
    require_once (__INDEX_ROUTE_USERS);

}
elseif (isset($_SESSION['username']) && $_SESSION["is_admin"] === false) {

    //members views should be required here
    require_once (__INDEX_ROUTE_MEMBERROUTING);

}
//********************************************//




