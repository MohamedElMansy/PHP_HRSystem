<?php
if(__ALLOW_ACCESS__ !=1) {
    header("location:../../index.php");

}
$db=new MySQLHandler("users");

if($db){
    if(isset($_GET["id"])&&!empty($_GET["id"])){
        $id=$_GET["id"];
        $current_user=$db->get_record_by_id($id,"id")[0];
        require_once(__MEMBERROUTING_ROUTE_EDITUSER);
    }else{
        $user=$db->get_record_by_username($_SESSION['username'],"username");
        $user=$user[0];
//        print_r($user);

        require_once(__MEMBERROUTING_ROUTE_VIEWMYPROFILE);

    }
}

?>