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
	if(is_array($result))
	{
		

		if(sizeof($result) > 0 ){
		$controller = new $result['controller']();
		if($result['method']=="")
			$result['method'] = "index";
		$controller->{$result['method']}();
		
		
		}

			else
			{
				$controller = new error_conf();
				$controller->err_404();
			}
	}
	else
	{
		$controller = new index_c();
		$controller->index();
	}


}


}

?>