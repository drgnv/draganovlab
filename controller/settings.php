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
//LANGUAGE START
$def_lang = $Settings->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP
$Settings->accessControl($_SESSION['user_info'][0]['lvl']);
$seting_record = $Settings->getHospital();

if(filter_has_var(INPUT_GET, 'from') && filter_has_var(INPUT_GET, 'to') && strlen($_GET['from']) > 2 && strlen($_GET['to']) >2){
$from_date = filter_input(INPUT_GET, 'from');;
    $to_date = filter_input(INPUT_GET, 'to');;
}else{
    $from_date = date('Y-m-d');
    $to_date = date('Y-m-d');
}

$Smarty->assign('from_date', $from_date);
$Smarty->assign('to_date', $to_date);
if(filter_has_var(INPUT_POST, 'save')){
    $hospital = filter_input(INPUT_POST, 'hospital');
    $doctor = filter_input(INPUT_POST, 'doctor');
    $address = filter_input(INPUT_POST, 'address');
    $phone = filter_input(INPUT_POST, 'phone');
    $mail = filter_input(INPUT_POST, 'mail');
    $web = filter_input(INPUT_POST, 'web');
    $note = filter_input(INPUT_POST, 'note');
    $lang = filter_input(INPUT_POST, 'lang');
    $Settings->setBasicSettings($hospital, $doctor, $address, $phone, $mail, $web, $note, $lang);
   header("Location: settings.php?saved=".$language['saved_msg']."");

}
$Smarty->assign('saved', $_GET['saved']);
//------НАСТРОЙКИ ЗА ПАНЕЛ ИЗСЛЕДВАНИЯ (РЕГИСТРАТУРА)--------
$test_panel = $Settings->getTestPanel();
//print_r($test_panel);
if(filter_has_var(INPUT_POST, 'p1')){
    $selected_setting = filter_input(INPUT_POST, 'p1');
    $Settings->setTestPanel($selected_setting);
    header("Location: settings.php");
}
$Smarty->assign('test_panel', $test_panel);


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
$Smarty->display('settings.tpl');
