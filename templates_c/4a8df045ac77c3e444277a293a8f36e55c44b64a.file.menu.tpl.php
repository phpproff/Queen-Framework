<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-02 08:34:51
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267551ce30b1e4612-92646737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8df045ac77c3e444277a293a8f36e55c44b64a' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1427534589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267551ce30b1e4612-92646737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551ce30b2366a5_82739709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551ce30b2366a5_82739709')) {function content_551ce30b2366a5_82739709($_smarty_tpl) {?>
<header>
    <nav id="top-nav">
    	<ul>
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
            <li><a href='index.php?page=<?php echo $_smarty_tpl->tpl_vars['val']->value['route'];?>
' ><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></li>
            <?php } ?>     
        </ul>
    </nav>
    <div id="logo">
    	
    </div>
        
</header><?php }} ?>
