<?php
class config_conf extends connection{

	protected $smarty;
	function __construct()
	{

	global $smarty;
	$this->smarty = $smarty;
	$model=new config_m_conf();

	$result = $model->get_routes();
		while ($row = $result->fetch_assoc())
			$menu[] =  $row;
	$this->smarty->assign('menu',$menu);
	}
}
?>