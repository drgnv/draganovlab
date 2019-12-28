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

if(isset($_GET['printres'])){
$data=$Basic->getDayResults($_GET['date']);

$a = $Basic->array_group_by($data, 'patient_id');

foreach ($a as $key => $value) {
   
    $b[$key]=$value;

}

    $hospital_data = $Basic->getHospitalInfo();

//print_r($b);
$date = date('d.m.Yг.');
$Smarty->assign('hospital_data', $hospital_data);
$Smarty->assign('date', $date);
$Smarty->assign('results', $b);
}
$Smarty->display('print_day_results.tpl');
