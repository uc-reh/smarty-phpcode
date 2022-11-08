<?php
include('../libs/Smarty.class.php');

// create object
$smarty = new Smarty;

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->assign('name', 'Abdul Rehman');
$smarty->assign('College', 'Mangalmay Institute Of Management and Technology');
$smarty->assign('lists', array('Abdul','Rehman','Is','In','Web Application Development','team'));
$smarty->assign('bar',"This is the bar variable");
$smarty->assign('newvar1',"This is the newvar1 variable value");

// $smarty->assign('currenttime',time());
// display it
$smarty->display('templates/mytemp.tpl');
?>