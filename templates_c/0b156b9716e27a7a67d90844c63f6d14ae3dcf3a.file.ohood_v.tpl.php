<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-05 08:26:52
         compiled from ".\templates\ohood_v.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233905520d5ac454502-43980556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b156b9716e27a7a67d90844c63f6d14ae3dcf3a' => 
    array (
      0 => '.\\templates\\ohood_v.tpl',
      1 => 1428132749,
      2 => 'file',
    ),
    '4e149f95447c3f25057dfc3caac57343b85b7c45' => 
    array (
      0 => '.\\templates\\template.tpl',
      1 => 1427879473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233905520d5ac454502-43980556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5520d5ac6d8e17_08784878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5520d5ac6d8e17_08784878')) {function content_5520d5ac6d8e17_08784878($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\Dropbox\\native_mvc2\\Queen-Framework\\Smarty\\libs\\plugins\\function.cycle.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<hr>
<table style="width: 100%;
border:1px solid #777;">
<tr>
<td> ID </td>
<td> Name </td>
<td> Age </td>
<td> Date </td>
</tr>


<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
<tr style="background:<?php echo smarty_function_cycle(array('values'=>"#888,#eee"),$_smarty_tpl);?>
">
<td> <?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
 </td>
<td> <?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
 </td>
<td> <?php echo $_smarty_tpl->tpl_vars['val']->value['age'];?>
 </td>
<td> <?php echo $_smarty_tpl->tpl_vars['val']->value['date'];?>
 </td>
</tr>
<?php } ?>


</table>
<hr>



<section id="content">

<div class="about">

<div class="overview">
<h3>Overview</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s .
</p></div>
<div class="team-v">
<iframe width="420" height="200"
src="http://www.youtube.com/embed/iP-86de-oUA">
</iframe>
</div>
<div class="clear"></div>


</div>

</section>






<div class="clear"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
