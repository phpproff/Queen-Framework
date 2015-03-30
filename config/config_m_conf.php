<?php
class config_m_conf  extends connection{
	function get_routes(){
			
			$result = $this->conn->query("select route,title from routes
					where route!=''
				");

			return $result;



		}
}

?>