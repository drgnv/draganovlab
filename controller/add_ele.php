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

if(isset($_POST['save'])){
    $test['name'] = filter_input(INPUT_POST, 'name');
    $test['button'] = filter_input(INPUT_POST, 'name');
    $c = $Settings->getEleCount()+1;
    $test['code'] = '15.0'.$c;
    $test['unit'] = filter_input(INPUT_POST, 'unit');
    $test['flag'] = 'ele';
    $test['up'] = filter_input(INPUT_POST, 'up');
    $test['down'] = filter_input(INPUT_POST, 'down');
    $test['price'] = 0;
  
    $Settings->addTest($test['name'], $test['button'], $test['unit'], $test['code'],  $test['flag'],  $test['up'], $test['down'], $test['price']);

}

//$Smarty->assign('doctors', $doctors);
$Smarty->display('add_ele.tpl');