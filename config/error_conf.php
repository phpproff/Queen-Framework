<?php
class error_conf extends config_conf{

		function err_404()
		{

				$this->smarty->display('error_404.tpl');	
		}

}

?>