<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-30 09:49:56
         compiled from ".\templates\error_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167275518ffaf30dbe2-44075041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4b52b44d1c9d2175527b4f52593f6f98ef56f85' => 
    array (
      0 => '.\\templates\\error_404.tpl',
      1 => 1427701794,
      2 => 'file',
    ),
    'f6050cbdf0fa010da58d635d9589b5e5ca74bfca' => 
    array (
      0 => '.\\templates\\template.tpl',
      1 => 1427532869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167275518ffaf30dbe2-44075041',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5518ffaf36b7f3_72103868',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5518ffaf36b7f3_72103868')) {function content_5518ffaf36b7f3_72103868($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1 style="color:red;font-size:250px;font-weight: bold">Error 404</h1>





<div class="clear"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
