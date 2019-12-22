<?php
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['user_info'])  && $_SESSION['user_info'][0]['level']>2){
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
$doctors = $Settings->getAllDoctors();
$Smarty->assign('doctors', $doctors);

if(isset($_POST['patient'])){

$patient_idn = filter_input(INPUT_POST, 'patient_idn');
$mode = filter_input(INPUT_POST, 'mode');
$type = filter_input(INPUT_POST, 'patient');
$start_date = filter_input(INPUT_POST, 'start_date');
$end_date = filter_input(INPUT_POST, 'end_date');
    $data = $Settings->printOuts('patient', $mode, $start_date, $end_date, '', $patient_idn);

    $a = $Settings->array_group_by($data, 'date');

    foreach ($a as $key => $value) {

        $b[$key]=$value;

    }
    $Smarty->assign('results', $b);
    $Smarty->display('printouts_results.tpl');
exit;
}

if(isset($_POST['doctor'])){

    $mode = filter_input(INPUT_POST, 'mode');
    $type = filter_input(INPUT_POST, 'patient');
    $start_date = filter_input(INPUT_POST, 'start_date');
    $end_date = filter_input(INPUT_POST, 'end_date');
    $doctor_id = filter_input(INPUT_POST, 'doctor_id');
    $data = $Settings->printOuts('doctor', $mode, $start_date, $end_date, $doctor_id, '');

    $a = $Settings->array_group_by($data, 'date');

    foreach ($a as $key => $value) {

        $b[$key]=$value;

    }
    $Smarty->assign('results', $b);
    $Smarty->display('printouts_results.tpl');
    exit;

}

if(isset($_POST['tests'])){
    $mode = filter_input(INPUT_POST, 'mode');
    $type = filter_input(INPUT_POST, 'tests');
    $start_date = filter_input(INPUT_POST, 'start_date');
    $end_date = filter_input(INPUT_POST, 'end_date');
    $data = $Settings->printOuts('tests', $mode, $start_date, $end_date, '', '');

    $a = $Settings->array_group_by($data, 'date');

    foreach ($a as $key => $value) {

        $b[$key]=$value;

    }
    $Smarty->assign('results', $b);
    $Smarty->display('printouts_results.tpl');
    exit;
}



//днешна дата
$date=date('Y-m-d');
$Smarty->assign('date', $date);
$over_count = $Settings->overCount();
$total_count = $Settings->totalForDay();
$Smarty->assign('over_count', $over_count);
$Smarty->assign('total_count', $total_count);
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('printouts.tpl');
