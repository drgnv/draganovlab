<?php
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['user_info'])){
    header("Location: ../index.php");
}
include '../libs/Smarty.class.php';
include_once '../model/Basic.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';
$Basic = new Basic();
//LANGUAGE START
$def_lang = $Basic->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP
if(isset($_GET['send'])){
$start = $_GET['start'];
$end = $_GET['end'];

$patients = $Basic->searchByDate($start, $end);
$Smarty->assign('start', $start);
    $Smarty->assign('end', $end);
$Smarty->assign('patients', $patients);

if(isset($_GET['delete'])){
    $patient_id = filter_input(INPUT_GET, 'delete');
    $Basic->deleteById($patient_id);
    header("Location: search_by_date.php?start=".$start."&end=".$end."&send=Търси");
}

}

if(isset($_GET['from']) && isset($_GET['to']) && strlen($_GET['from']) > 2 && strlen($_GET['to']) >2){
    $from_date = filter_input(INPUT_GET, 'from');
    $to_date = filter_input(INPUT_GET, 'to');
    $status = filter_input(INPUT_GET, 'status');
}else{
    $from_date = date('Y-m-d');
    $to_date = date('Y-m-d');
    $status = "all";
}
$Smarty->assign('status', $status);

$Smarty->assign('from_date', $from_date);
$Smarty->assign('to_date', $to_date);
//днешна дата
$date=date('Y-m-d');
$dayList = $Basic->getDayPatientList();
$Smarty->assign('dayList', $dayList);
$Smarty->assign('date', $date);
$over_count = $Basic->overCount();
$total_count = $Basic->totalForDay();
$Smarty->assign('over_count', $over_count);
$Smarty->assign('total_count', $total_count);
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('search_by_date.tpl');