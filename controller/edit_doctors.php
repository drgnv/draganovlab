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
$doctors = $Settings->getAllDoctors();

//LANGUAGE START
$def_lang = $Settings->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP

if(filter_has_var(INPUT_GET, 'deletedoc')){
    $doctor_id = filter_input(INPUT_GET, 'deletedoc');
    $Settings->deleteDoctor($doctor_id);
    header("Location: edit_doctors.php");
}
//днешна дата
$date=date('Y-m-d');

$over_count = $Settings->overCount();
$total_count = $Settings->totalForDay();
$Smarty->assign('over_count', $over_count);
$Smarty->assign('total_count', $total_count);
$Smarty->assign('date', $date);
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('doctors', $doctors);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('edit_doctors.tpl');
