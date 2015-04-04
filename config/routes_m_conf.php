<?php
class routes_m_conf extends connection{

	function get_routes($page)
	{
		$array = (array)json_decode(file_get_contents("config/routing.json"));
		$selected_route = $array[$page];
			
			if (sizeof($selected_route) > 0) {
			   return (array)$selected_route;
			} else {
			    return array();
			}

	}

}

?>