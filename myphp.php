<?php
include('../libs/Smarty.class.php');
include('../libs/SmartyBC.class.php');

// create object
$smarty = new Smarty;
$smarty = new SmartyBC;

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->debugging=false;
$smarty->auto_literal =true;


$smarty->assign('name', 'Abdul Rehman');
$smarty->assign('College', 'Mangalmay Institute Of Management and Technology');
$smarty->assign('lists', array('Abdul','Rehman','Is','In','Web Application Development','team'));
$smarty->assign('bar',"This is the bar variable");
$smarty->assign('newvar1',"This is the newvar1 variable value");
$smarty->assign('newmath',55);
$smarty->assign('contact',8376811124);
$smarty->assign('details',array('name'=>'Abdul Rehman',
                                 'mobile'=>'8376811124',
                                   'company'=> 'ucertify',
                                   'college'=>'Mangalmay',
                                   'address'=>array('office'=>'Noida', 'Home'=>'New delhi')));
// $smarty->assign('currenttime',time());
// display it
$smarty->assign('page','http://www.example.com/index.php?page=foo');
$smarty->assign('article', "Psychics predict world didn't end");
$smarty->assign('weescape','<h1>Helllo ABdul</h1>');
$smarty->assign('useindent','lorem ispum donor amet sit dummy text here im entrting it for only the purpose of learning');
$smarty->assign('multiplefunc','This string have x numbers of words.');
$smarty->assign('start',1);
$smarty->assign('end',10);
$smarty->assign('conditions',30);
$smarty->assign('customarray',array(1800,233,434,233,555));
$smarty->assign('cid',$customarray);
$smarty->assign('evanstring','Hello this is a string to test eval');
$smarty->assign('epids',array(10=>'Abdul Rehman', 11=>'Prince Sinha', 12=>'Surya Pratam Singh'));
$smarty->assign('epids1',10);
$smarty->assignByRef('refasn',$evanstring);
$smarty->testInstall();
//$smarty->clearCompiledTemplate('index.tpl');


$smarty->display('templates/mytemp.tpl');
?>