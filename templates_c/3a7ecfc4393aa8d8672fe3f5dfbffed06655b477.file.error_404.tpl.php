<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-02 08:35:04
         compiled from ".\templates\error_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2324551ce318ce3f22-57708995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a7ecfc4393aa8d8672fe3f5dfbffed06655b477' => 
    array (
      0 => '.\\templates\\error_404.tpl',
      1 => 1427701794,
      2 => 'file',
    ),
    '4e149f95447c3f25057dfc3caac57343b85b7c45' => 
    array (
      0 => '.\\templates\\template.tpl',
      1 => 1427879473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2324551ce318ce3f22-57708995',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551ce319189c13_32899051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551ce319189c13_32899051')) {function content_551ce319189c13_32899051($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<h1 style="color:red;font-size:250px;font-weight: bold">Error 404</h1>





<div class="clear"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
