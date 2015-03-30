<?php
class index_c extends config_conf{



	function index()
	{
		

	// Edit just if require
	$this->smarty->display('index_v.tpl');	

		
	}

	function test()
	{
		echo "TEST";
		$this->smarty->display('index_v.tpl');	
	}



}
?>