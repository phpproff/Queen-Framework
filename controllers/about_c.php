<?php


class about_c extends config_conf{

	function index()
	{
		$about_m=new about_m();
		$about_m->insert("Ohood","160",date("Y-m-d H:i:s"));
		$result = $about_m->get_data(5);
		$about_m->update(3,"HHHH");


		while($row = $result->fetch_assoc())
		{
				switch ($row['age']) {
					case  $row['age']<25:
						$old = "young";
						break;
					
					default:
						$old = "old";
						break;
				}
				$date = date("d/m/Y h:i a",strtotime($row['date']));
				$friends[] = array("name"=>$row['name'],
					"age"=>$row['age'],
					"old"=>$old,
					"date"=>$date,
					"id"=>$row['id']
					);


				
		}
	$this->smarty->assign('friends',$friends);
	$this->smarty->display('about_v.tpl');	

		
	}



}


?>