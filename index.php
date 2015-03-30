<?php
include  ("config/autoload.php");
$page= $_GET['page'];

$smarty = new Smarty;
$route = new routes_c_conf($page);


?>