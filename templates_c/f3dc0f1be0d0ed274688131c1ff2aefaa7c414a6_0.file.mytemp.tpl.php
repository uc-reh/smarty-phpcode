<?php
/* Smarty version 3.1.47, created on 2022-11-10 06:41:15
  from 'C:\xampp\htdocs\smarty-3.1.47\mysmarty\templates\mytemp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_636c8efb77def6_37606819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3dc0f1be0d0ed274688131c1ff2aefaa7c414a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.47\\mysmarty\\templates\\mytemp.tpl',
      1 => 1668058869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636c8efb77def6_37606819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'myfunc' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty-3.1.47\\mysmarty\\templates_c\\f3dc0f1be0d0ed274688131c1ff2aefaa7c414a6_0.file.mytemp.tpl.php',
    'uid' => 'f3dc0f1be0d0ed274688131c1ff2aefaa7c414a6',
    'call_name' => 'smarty_template_function_myfunc_989590973636c8ef9994bd4_54683987',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.fetch.php','function'=>'smarty_function_fetch',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),7=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),8=>array('file'=>'C:\\xampp\\htdocs\\smarty-3.1.47\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'myconfig.conf', null, 0);
?>

<html>

<head>
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>
</title>

    <style>
        ul li {
            list-style: none;
        }
    </style>
</head>

<body>

    <pre>
        
    <?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'info');?>


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







<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'myfunc', array(), true);?>



<p>This is the Math example : </p>
<p><?php echo $_smarty_tpl->tpl_vars['newmath']->value+7;?>
</p>


<p >Phone Number : <?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
</p>


<p>Using array variabeles : </p>
<p>Below are my complete details : </p>
<?php echo $_smarty_tpl->tpl_vars['details']->value['name'];?>

<?php echo $_smarty_tpl->tpl_vars['details']->value['mobile'];?>

<?php echo $_smarty_tpl->tpl_vars['details']->value['company'];?>

<?php echo $_smarty_tpl->tpl_vars['details']->value['college'];?>

<p>Home:</p><?php echo $_smarty_tpl->tpl_vars['details']->value['address']['Home'];?>

<p>Office:</p><?php echo $_smarty_tpl->tpl_vars['details']->value['address']['office'];?>


<button onclick="newalert()">Clicke me</button>
<p>reserved variable</p>

<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>


<p>Orignal Srting : <?php echo $_smarty_tpl->tpl_vars['article']->value;?>
</p>

<p>Use of Cat is </p>
<?php echo ($_smarty_tpl->tpl_vars['article']->value).(' yesterday.');?>

<p>The character count is :</p>
<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['article']->value, $tmp);?>

<p>The character count with sapces is :</p>
<?php echo mb_strlen($_smarty_tpl->tpl_vars['article']->value, 'UTF-8');?>


<p>Escapes : </p>
<p>Orginal string : </p>
<?php echo $_smarty_tpl->tpl_vars['weescape']->value;?>


<p>Using escape html : </p>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['weescape']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


<p>Use of indent : </p>
<p>Simple:</p>
<?php echo $_smarty_tpl->tpl_vars['useindent']->value;?>

<p>using indent:</p>
<?php echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['useindent']->value);?>

<p>using indent :10 =></p>
<?php echo preg_replace('!^!m',str_repeat(' ',30),$_smarty_tpl->tpl_vars['useindent']->value);?>


<p>This is just fr combining upper and replace tag : </p>

<?php echo smarty_modifier_replace(mb_strtoupper($_smarty_tpl->tpl_vars['multiplefunc']->value, 'UTF-8'),'X','n');?>



<p>Assigning a variable in tpl and calling it here : </p>
<?php $_smarty_tpl->_assignInScope('myName', 'Abdul Rehman');?>
<p>This is my Name : </p>
<?php echo $_smarty_tpl->tpl_vars['myName']->value;?>



<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['myName1']) ? $_smarty_tpl->tpl_vars['myName1']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['first'] = 'Abdul';
$_smarty_tpl->_assignInScope('myName1', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['myName1']) ? $_smarty_tpl->tpl_vars['myName1']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['last'] = 'Rehman';
$_smarty_tpl->_assignInScope('myName1', $_tmp_array);?>

<p>Printing my first and last name using append</p>

<p>My name is <?php echo $_smarty_tpl->tpl_vars['myName1']->value['first'];?>
  <?php echo $_smarty_tpl->tpl_vars['myName1']->value['last'];?>
 </p>



<?php $_smarty_tpl->_assignInScope('newVar', 'This is the value of new variable');
$_smarty_tpl->_assignInScope('newVar1', 'Another way to assign a new variable');?>

<p>Printing variables made using assign function</p>
<?php echo $_smarty_tpl->tpl_vars['newVar']->value;?>
  <br>  <?php echo $_smarty_tpl->tpl_vars['newVar1']->value;?>



<p>This is the use of capture : </p>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, 'cap1');?>Hello<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, 'cap1');?>World<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cap1']->value, 'text');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
?>
                        <p>This is printed using capture : <?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



<p>We are printing the list using loops</p>
<?php
$_smarty_tpl->tpl_vars['liItem'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['liItem']->step = 1;$_smarty_tpl->tpl_vars['liItem']->total = (int) ceil(($_smarty_tpl->tpl_vars['liItem']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['liItem']->step));
if ($_smarty_tpl->tpl_vars['liItem']->total > 0) {
for ($_smarty_tpl->tpl_vars['liItem']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['liItem']->iteration = 1;$_smarty_tpl->tpl_vars['liItem']->iteration <= $_smarty_tpl->tpl_vars['liItem']->total;$_smarty_tpl->tpl_vars['liItem']->value += $_smarty_tpl->tpl_vars['liItem']->step, $_smarty_tpl->tpl_vars['liItem']->iteration++) {
$_smarty_tpl->tpl_vars['liItem']->first = $_smarty_tpl->tpl_vars['liItem']->iteration === 1;$_smarty_tpl->tpl_vars['liItem']->last = $_smarty_tpl->tpl_vars['liItem']->iteration === $_smarty_tpl->tpl_vars['liItem']->total;?>
                        <li>List Item : <?php echo $_smarty_tpl->tpl_vars['liItem']->value;?>
</li>
                        <?php }} else { ?>
                        No iteration
<?php }
?>


<?php if ($_smarty_tpl->tpl_vars['conditions']->value%2 == 0) {?>
                        <p>The Number <?php echo $_smarty_tpl->tpl_vars['conditions']->value;?>
 is even</p>
<?php } else { ?>
                        <p>The Number is oddd</p>
<?php }?>


<p>Today's date is : </p>

<?php echo smarty_modifier_date_format(time());?>



<?php 
echo "Hello PHP<br>";
echo "The above and this is writeen using echo in php";
?>


<?php
$__section_customer_0_loop = (is_array(@$_loop='$cid') ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>

    <li>id : <?php echo $_smarty_tpl->tpl_vars['cid']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)];?>
</li>

<?php
}
}
?>


<p>This is the use of fetch : </p>
<?php echo smarty_function_fetch(array('file'=>'https://google.com'),$_smarty_tpl);?>


<p>This is the use of HTML checkboxes function :   </p>

<?php echo smarty_function_html_checkboxes(array('name'=>'emid','options'=>$_smarty_tpl->tpl_vars['epids']->value,'selected'=>$_smarty_tpl->tpl_vars['epids1']->value,'speretaor'=>'<br/>'),$_smarty_tpl);?>


<p> use of html image function : </p>

<?php echo smarty_function_html_image(array('file'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Elon_Musk_Royal_Society_%28crop2%29.jpg/330px-Elon_Musk_Royal_Society_%28crop2%29.jpg'),$_smarty_tpl);?>



<p> Use of html_select function : </p>

<?php echo smarty_function_html_options(array('name'=>'myselect','options'=>$_smarty_tpl->tpl_vars['epids']->value,'slected'=>$_smarty_tpl->tpl_vars['epids1']->value),$_smarty_tpl);?>


<p> use of html select date function : </p>

<?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>



<p> use of math equation functin : </p>

<?php echo smarty_function_math(array('equation'=>"x*y",'x'=>55,'y'=>2),$_smarty_tpl);?>



<p> using class assignbyref : </p>
<?php echo $_smarty_tpl->tpl_vars['refasn']->value;?>

        </pre>

    </body>
    <?php echo '<script'; ?>
>
        function newalert() {
            alert("Hello");
        }
    <?php echo '</script'; ?>
>

    </html><?php }
/* smarty_template_function_myfunc_989590973636c8ef9994bd4_54683987 */
if (!function_exists('smarty_template_function_myfunc_989590973636c8ef9994bd4_54683987')) {
function smarty_template_function_myfunc_989590973636c8ef9994bd4_54683987(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                        <ul>
                            <li class="items1">FUnciton Called</li>
                            <li class="items2">FUnciton Called</li>
                            <li class="items3">FUnciton Called</li>
                            <li class="items4">FUnciton Called</li>
                            <li class="items5">FUnciton Called</li>
                        </ul>
<?php
}}
/*/ smarty_template_function_myfunc_989590973636c8ef9994bd4_54683987 */
}
