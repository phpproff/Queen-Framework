<?php

$page= $_GET['page'];

$p = $_GET['p'];
if($p !="")
{
	$route_to_admin=true;
}
include  ("config/autoload.php");

$smarty = new Smarty;

$route = new routes_c_conf($route_to_admin?$p:$page);



?>