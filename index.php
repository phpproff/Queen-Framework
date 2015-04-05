<?php

$page= $_GET['page'];  // for user

$p = $_GET['p'];  // for admin
if($p !="")
{
	$route_to_admin=true;
}
include  ("config/autoload.php");

$smarty = new Smarty;

$route = new routes_c_conf($route_to_admin?$p:$page);



?>