<?php
class config_conf extends connection{

	protected $smarty;
	function __construct()
	{

	global $smarty;
	$this->smarty = $smarty;
	$model=new config_m_conf();

	$menu = $model->get_routes();
	$this->smarty->assign('menu',$menu);
	}
}
?>