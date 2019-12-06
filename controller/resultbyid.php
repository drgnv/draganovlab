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
$var = 'test';

$Basic = new Basic();
$hospital = $Basic->getHospitalInfo();
if(isset($_GET['id'])){
    $patient_id = filter_input(INPUT_GET, 'id');
    $patient = $Basic->getPatientData($patient_id);
   
$Smarty->assign('patient', $patient);

 //BARCODE START
require "../vendor/autoload.php";
$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($patient_id, $Bar::TYPE_CODE_128);
$Smarty->assign('codenumber', $patient_id);
$Smarty->assign('code', $code);
//BARCODE END

}
//днешна дата
$date=date('Y-m-d');
$Smarty->assign('date', $date);
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$dd = date('d-m-Yг. h:i:sч.');
$Smarty->assign('dd', $dd);
$Smarty->assign('hospital', $hospital);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('resultbyid.tpl');