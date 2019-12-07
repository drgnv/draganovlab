<?php
error_reporting(E_ERROR);
session_start();
include '../libs/Smarty.class.php';
include_once '../model/Settings.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';
$Settings = new Settings();

//LANGUAGE START
$def_lang = $Settings->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP

$Settings->accessControl($_SESSION['user_info'][0]['lvl']);

if (isset($_POST['name'])) {
    $name = filter_input(INPUT_POST, 'name');
    $phone = filter_input(INPUT_POST, 'phone');
    $phone2 = filter_input(INPUT_POST, 'phone2');
    $uin = filter_input(INPUT_POST, 'uin');
    $Settings->setDoctor($name, $phone, $phone2, $uin);
}

//$Smarty->assign('doctors', $doctors);
$Smarty->display('add_doctor.tpl');