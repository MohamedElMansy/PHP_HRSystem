<?php
if(isset($_GET["next"])&&is_numeric($_GET["next"])){
	$current_index=($_GET["next"]);
}else{
	$current_index=0;
}

$db=new MySQLHandler("users");

if($db){
	if(isset($_GET["id"])&&!empty($_GET["id"])){
		$id=$_GET["id"];
		$current_user=$db->get_record_by_id($id,"id")[0];
		require_once("views/admin/one_user.php");
	}else{
		$Users=$db->get_data(["Name","username","Job","image","id"],$current_index);
//
		require_once("views/admin/users_show.php");

	}
}

?>