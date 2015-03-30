<?php
class routes_c_conf{
function __construct($page)
{
	return $this->get_routes($page);
}



function get_routes($page)
{
	$model = new routes_m_conf();
	$result = $model->get_routes($page);
	if($result->num_rows > 0 ){
	$row = $result->fetch_assoc();
	$controller = new $row['controller']();
	if($row['method']=="")
		$row['method'] = "index";

	$controller->$row['method']();
	}
	else
	{
		$controller = new error_conf();
		$controller->err_404();
	}


}


}

?>