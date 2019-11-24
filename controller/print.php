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

if(isset($_GET['id'])){
    $datas = $Basic->printRequestById($_GET['id']);
  // print_r($datas);
  $pd = $Basic->getPatientData($_GET['id']);
 //BARCODE START
require "../vendor/autoload.php";
$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($_GET['id'], $Bar::TYPE_CODE_128);
//BARCODE END
$Smarty->assign('code', $code);
$Smarty->assign('cito', $pd[0]['cito']);
    $Smarty->assign('patient_info', $datas);
    $Smarty->assign('tests', $datas['patient']['tests']);
    $d = date('G:i:s ч. d.m.Yг.');
     $Smarty->assign('d', $d);
}

$Smarty->display('print.tpl');