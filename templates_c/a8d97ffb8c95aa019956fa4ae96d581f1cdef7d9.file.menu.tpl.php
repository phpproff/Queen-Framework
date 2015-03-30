<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-30 08:40:14
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316925518efceb0ac32-35307299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8d97ffb8c95aa019956fa4ae96d581f1cdef7d9' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1427534589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316925518efceb0ac32-35307299',
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
  'unifunc' => 'content_5518efceb58e41_30958371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5518efceb58e41_30958371')) {function content_5518efceb58e41_30958371($_smarty_tpl) {?>
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
