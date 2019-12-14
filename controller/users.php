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
//LANGUAGE START
$def_lang = $Settings->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP
$users = $Settings->getUsers();

if(isset($_GET['delete_user'])){
    $delete_user = filter_input(INPUT_GET, 'delete_user');
    $Settings->deleteUser($delete_user);
    header("Location: ./users.php");
}
$Settings->checkUsername($username);

//днешна дата
$date=date('Y-m-d');
$Smarty->assign('date', $date);

$over_count = $Settings->overCount();
$total_count = $Settings->totalForDay();
$Smarty->assign('over_count', $over_count);
$Smarty->assign('total_count', $total_count);
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('users', $users);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('users.tpl');