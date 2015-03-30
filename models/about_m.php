<?php
class about_m extends connection{

	function get_data($number=""){
		
		if($number!="")
		{
			$limit = "limit $number";
		}

		$sql = "SELECT * FROM mytable  $limit ";

			$result = $this->conn->query($sql);

			if ($result->num_rows > 0) {
			   return $result;
			} else {
			    return false;
			}
	}

	function update($id,$name)
	{
			$sql = "update mytable set
						name ='$name'
						where id='$id' ";

			$result = $this->conn->query($sql);

	}


	function insert($name,$age,$date)
	{


			$sql = "insert into mytable (id,name,age,`date`) 
			values (NULL,'$name', '$age', '$date')
			";

			$result = $this->conn->query($sql);
	
	}


}



?>