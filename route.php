<?php
echo "Enter Name of Route , or click enter to skip: ";
class read
{
	public $response;
	function __construct()
	{
		$stdin = fopen('php://stdin', 'r');
		$this->response = trim(fgets(STDIN));	
	
	}
}

$read = new read();
	if ($read->response != '') {
	  echo "Creating a Route:   " .$read->response;
	  
	}



echo "Create Controller ? ";
$read = new read();
	if ($read->response != '') {
	  echo "Creating a Controller:   " .$read->response;
	  create_controller($read->response);
	}


echo "Create a method in controller example:users->add_user ? ";
$read = new read();
	if ($read->response != '') {
	  echo "Creating a method:   " .$read->response;
	  create_method($read->response,$controller);
	}


echo "Create Model ? ";
$read = new read();
	if ($read->response != '') {
	  echo "Creating a Model:   " .$read->response;
	  //create_model($read->response);
	}


echo "Create View ? ";
$read = new read();
	if ($read->response != '') {
	  echo "Creating a View:   " .$read->response;
	  create_view($read->response);
	}




die();


function create_controller($c)
{
$controller = '<?php
class '.$c.'_c extends config_conf{

	function index()
	{
	
	Controller Logic
		

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

function create_route($route,$controller,$method)
{
// Create json file better than DB
}





?>