<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 10:23:10
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189655166b2b0e0741-07782711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53eba3527a4936050457c58ae4dae1aa1e45ad71' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1427534589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189655166b2b0e0741-07782711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55166b2b0e8445_15878708',
  'variables' => 
  array (
    'menu' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55166b2b0e8445_15878708')) {function content_55166b2b0e8445_15878708($_smarty_tpl) {?>
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
