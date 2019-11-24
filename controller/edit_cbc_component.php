<?php
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['user_info']) && $_SESSION['user_info'][0]['level']>2){
    header("Location: ../index.php");
}
include '../libs/Smarty.class.php';
include_once '../model/Settings.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';


$Settings = new Settings();
$Settings->accessControl($_SESSION['user_info'][0]['lvl']);
if(isset($_GET['id'])){
    $test = $Settings->getTest($_GET['id']);
    
    $Smarty->assign('test', $test);
}

if(isset($_POST['save'])){
    $test['name'] = filter_input(INPUT_POST, 'name');
    $test['button'] = filter_input(INPUT_POST, 'button');
    $test['code'] = filter_input(INPUT_POST, 'code');
    $test['unit'] = filter_input(INPUT_POST, 'unit');
    $test['flag'] = filter_input(INPUT_POST, 'flag');
    $test['up'] = filter_input(INPUT_POST, 'up');
    $test['down'] = filter_input(INPUT_POST, 'down');
    $test['id'] = filter_input(INPUT_GET, 'id');
    $test['price'] = filter_input(INPUT_POST, 'price');
    $Settings->updateTest($test);
    header("Location: edit_cbc_component.php?id=".$test['id']);
}


$Smarty->display('edit_cbc_component.tpl');
