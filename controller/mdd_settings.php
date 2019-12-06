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
$seting_record = $Settings->getHospital();




//днешна дата
$date=date('Y-m-d');
$dayList = $Settings->getDayPatientList();
$Smarty->assign('dayList', $dayList);
$over_count = $Settings->overCount();
$total_count = $Settings->totalForDay();
$Smarty->assign('over_count', $over_count);
$Smarty->assign('total_count', $total_count);
$Smarty->assign('date', $date);
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('hospital', $seting_record);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('mdd_settings.tpl');
