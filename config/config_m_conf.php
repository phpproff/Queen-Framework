<?php
class config_m_conf  extends connection{
	function get_routes(){

	$array = json_decode(file_get_contents("config/routing.json"), true);
		
			return $array;



		}
}

?>