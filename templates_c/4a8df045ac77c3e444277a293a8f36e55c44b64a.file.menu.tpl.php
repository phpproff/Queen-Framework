<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-04 09:48:51
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3662551f964a27ee07-22854294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8df045ac77c3e444277a293a8f36e55c44b64a' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1428133730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3662551f964a27ee07-22854294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551f964a326da9_41369815',
  'variables' => 
  array (
    'menu' => 0,
    'route' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551f964a326da9_41369815')) {function content_551f964a326da9_41369815($_smarty_tpl) {?>
<header>
    <nav id="top-nav">
    	<ul>
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['route']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
            <li><a href='index.php?page=<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
' ><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></li>
            <?php } ?>     
        </ul>
    </nav>
    <div id="logo">
    	
    </div>
        
</header><?php }} ?>
