<?php
class routing_conf{
	

	function get()
	{
		$array = (array)json_decode(file_get_contents("config/routing.json"));

		return $array;
	}

	function save($new_route)
	{
		if(is_array($new_route))
		{
			$new_route=json_encode($new_route,JSON_PRETTY_PRINT);
			$array = file_put_contents("config/routing.json",$new_route,LOCK_EX);
			return true;
		}
		else
		return false;
	}



}




?>