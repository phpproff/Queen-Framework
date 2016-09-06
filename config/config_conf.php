<?php
class config_conf extends connection{

	protected $smarty;
	function __construct()
	{

	global $smarty;
	$this->smarty = $smarty;
	$model=new config_m_conf();

	$menu = $model->get_routes();
	$menu = $menu['user'];
	foreach($menu as $val)
	{
		if($val['visible'] === true)
			$final_menu[]=$val;
	}
	
	$this->smarty->assign('menu',$final_menu);
	}
}
?>
