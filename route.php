<?php
// Run from Terminal { php route.php }
require("config/routing_conf.php");
echo "01f4" == "001f4";
class read
{
	public $response;
	function __construct()
	{
		$stdin = fopen('php://stdin', 'r');
		$this->response = trim(fgets(STDIN));	
		
	}
}
echo "\nEnter Name of Route , or click enter to skip: ";
$read = new read();
	if ($read->response != '') {
	  echo "Creating a Route:   " .$read->response;
	 $route = $read->response;


	 echo "\nWhat is the title of this Route ? ";
	 $read = new read();
	if ($read->response != '') {
	  echo "Creating a title:   " .$read->response;
	 $route_title = $read->response;
	}


	}



echo "Create Controller ? ";
$read = new read();
	if ($read->response != '') {
	  echo "Creating a Controller:   " .$read->response;
	  create_controller($read->response);
	   $cont = $read->response;

	}


echo "Create a method in controller example:users->add_user ? ";
$read = new read();
	if ($read->response != '') {
	  echo "Creating a method:   " .$read->response;
	  $cont = substr($read->response,0,strpos($read->response,"->"));
	  $controller = $cont;
	  $method =   substr($read->response,strpos($read->response,"->")+2);
	  create_method($method,$controller);
	}

if($route != "")
{
	if($method=="")
		$method="index";
	 create_route($route_title,$route,$cont,$method);
}
echo "Create Model ? ";
$read = new read();
	if ($read->response != '') {
	  echo "Creating a Model:   " .$read->response;
	  create_model($read->response);
	}


echo "Create View ? ";
$read = new read();
	if ($read->response != '') {
	  echo "Creating a View:   " .$read->response;
	  create_view($read->response);
	}







function create_controller($c)
{
$controller = '<?php
class '.$c.'_c extends config_conf{

	function index()
	{
	
	//Controller Logic
		

	// Edit just if require
	$this->smarty->display(\''.$c.'_v.tpl\');	

		
	}



}
?>
';
$path = 'controllers/' . $c.'_c.php';
file_put_contents($path, $controller);
}
function create_model($m){
$model='<?php
class '.$m.'_m extends connection{

	

}



?>';
file_put_contents("models/" . $m."_m.php", $model,LOCK_EX);

}
function create_view($v){
$view='<h1>Here goes HTML </h1>';


file_put_contents("templates/" . $v."_v.php", $view,LOCK_EX);
}

function create_route($route_title="",$route,$controller="index",$method="index")
{


$routes= new routing_conf();
echo "\n";
$array_of_all_routes = $routes->get();
echo "\n";
print_r($array_of_all_routes);
echo "\n";
$array_of_all_routes[$route]=array("title"=>$route_title, "controller"=>$controller,"method"=>$method);

print_r($array_of_all_routes);
$routes->save($array_of_all_routes);






}



function create_method($method,$c)
{
	$controller = file_get_contents("controllers/$c" . "_c.php");
	$method='

	function '.$method.'()
	{
	
	//Controller Logic
		

	// Edit just if require
	//$this->smarty->display(\'THEME.tpl\');	

		
	}

	';
	$controller = str_replace('}//end_of_file?>',"",str_replace('}//end_of_file?>' , $method, $controller )). '}//end_of_file?>';

	file_put_contents("controllers/" . $c."_c.php", $controller,LOCK_EX);

	//}//end_of_file
// Create json file better than DB
}





?>