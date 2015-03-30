<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 09:46:07
         compiled from ".\templates\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2641855166a4f19d980-85559096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2425be28e289268ab8873ee3b51bbd43d30d92e8' => 
    array (
      0 => '.\\templates\\about.tpl',
      1 => 1427280217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2641855166a4f19d980-85559096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'friends' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55166a4f2f55d7_03838489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55166a4f2f55d7_03838489')) {function content_55166a4f2f55d7_03838489($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\native_mvc2\\Smarty\\libs\\plugins\\function.cycle.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DJ</title>
<link type="text/css" href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.8.2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/dj.js"><?php echo '</script'; ?>
>
</head>


<body>
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
<header>
    <nav id="top-nav">
    	<ul>
            <li><a href='index.php' >Home</a></li>
            <li><a href='party.php' >Parties</a></li>
            <li><a href='contact.php' >Contact</a></li>
            <li><a href='about.php' >About</a></li>
            <li><a href='reserve.php' >Reservation</a></li>
            <li><a href='Testimonials.php' >Testimonials</a></li>
        </ul>
    </nav>
    <div id="logo">
    	
    </div>
        
</header>


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

</section><!--- content ends--->

<div class="clear"></div>

<footer>

<div class="btm-foot">
<div class="left"> © 2015 Privacy Policy</div>
<div class="right"> Designed with  <i class="fa fa-heart"></i>  By Ohood</div>
</div>
</footer>


</body>
</html><?php }} ?>
