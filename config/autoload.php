<?php
function autoload($class)
{
global $route_to_admin;
if($route_to_admin)
{
	if($_SESSION['is_admin'])
		$folder= "admin/";
	else
		header("location: index.php?page=cmslogin&err=1");
}

// model : file_m.php
// controller: file_c.php
// view : file_v.php
// config
$class .= ".php";
if(stristr($class,"_c.php"))
	include("controllers/". $folder ."$class");
elseif(stristr($class,"_m.php"))
	include("models/". $folder ."$class");
elseif(stristr($class,"smarty.php"))
	include("Smarty/libs/Smarty.class.php");

elseif(stristr($class,"_conf.php"))
	include("config/$class");

elseif(stristr($class,"connection.php"))
	include("config/$class");



}



spl_autoload_register('autoload');
?>