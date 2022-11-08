<?php
/* Smarty version 3.1.47, created on 2022-11-08 13:17:15
  from 'C:\xampp\htdocs\smarty-3.1.47\mysmarty\templates\mytemp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_636a48cba2c2c2_22139855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3dc0f1be0d0ed274688131c1ff2aefaa7c414a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.47\\mysmarty\\templates\\mytemp.tpl',
      1 => 1667909765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a48cba2c2c2_22139855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>
<html>
<head>
<title>Info</title>
<style>
    ul li{
        list-style: none;
    }
</style>

</head>
<body>

<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

College: <?php echo $_smarty_tpl->tpl_vars['College']->value;?>

Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>

<!-- Time : <?php echo $_smarty_tpl->tpl_vars['currenttime']->value;?>
 --> 
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?><ul><li>List : <?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</li></ul><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<p>Third Element of an Array is : <?php echo $_smarty_tpl->tpl_vars['lists']->value[3];?>
</p>
<p>This is a message <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
<p>This is another message <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
<p>"<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
+9"</p>

<!-- <p>Server info is : <?php echo $_smarty_tpl->tpl_vars['samrty']->value['server']['SERVER_NAME'];?>
</p> -->

<p><?php $_smarty_tpl->_assignInScope('foo', array(16,26,36));?></p>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
<p>The value of Foo is : <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<p><?php $_smarty_tpl->_assignInScope('foo1', substr($_smarty_tpl->tpl_vars['bar']->value,1,8));?></p>
<p><?php echo $_smarty_tpl->tpl_vars['foo1']->value;?>
</p>


<?php $_smarty_tpl->_assignInScope('newvar', strlen($_smarty_tpl->tpl_vars['newvar1']->value));?>

<p>This is the lenght of the string : <?php echo $_smarty_tpl->tpl_vars['newvar']->value;?>
</p>

<p>This is the date selector :</p>
<?php echo smarty_function_html_select_date(array('display_days'=>true),$_smarty_tpl);?>




<!-- <p><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, );?>
</p> -->


</pre>
</body>
</html><?php }
}
