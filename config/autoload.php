<?php
function autoload($class)
{


// model : file_m.php
// controller: file_c.php
// view : file_v.php
// config
$class .= ".php";
if(stristr($class,"_c.php"))
	include("controllers/$class");
elseif(stristr($class,"_m.php"))
	include("models/$class");
elseif(stristr($class,"_v.php"))
	include("templates/$class");
elseif(stristr($class,"smarty.php"))
	include("Smarty/libs/Smarty.class.php");

elseif(stristr($class,"_conf.php"))
	include("config/$class");

elseif(stristr($class,"connection.php"))
	include("config/$class");



}



spl_autoload_register('autoload');
?>