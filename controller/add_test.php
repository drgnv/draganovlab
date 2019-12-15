<?php
error_reporting(E_ERROR);
session_start();
include '../libs/Smarty.class.php';
include_once '../model/Settings.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';


$Settings = new Settings();
$Settings->accessControl($_SESSION['user_info'][0]['lvl']);
//LANGUAGE START
$def_lang = $Settings->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP
if(isset($_POST['save'])){
    $test['name'] = filter_input(INPUT_POST, 'name');
    $test['button'] = filter_input(INPUT_POST, 'button');
    $test['code'] = filter_input(INPUT_POST, 'code');
    $test['unit'] = filter_input(INPUT_POST, 'unit');
    $test['flag'] = filter_input(INPUT_POST, 'flag');
    $test['up'] = filter_input(INPUT_POST, 'us');
    $test['down'] = filter_input(INPUT_POST, 'down');
    $test['price'] = filter_input(INPUT_POST, 'price');
  
 //   echo $test['name'];
    $Settings->addTest($test['name'], $test['button'], $test['unit'], $test['code'],  $test['flag'],  $test['up'], $test['down'], $test['price']);
    //header("Location: edit_test.php?id=".$test['id']);
}

//$Smarty->assign('doctors', $doctors);
$Smarty->display('add_test.tpl');