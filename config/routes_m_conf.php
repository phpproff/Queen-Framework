<?php
class routes_m_conf extends connection{

	function get_routes($page)
	{
		$sql = "select * from routes where route='$page'";
			//SQL INJECTION

		
			$result = $this->conn->query($sql);

			if ($result->num_rows > 0) {
			   return $result;
			} else {
			    return false;
			}

	}

}

?>