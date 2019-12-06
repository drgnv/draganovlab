<?php
//error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['user_info'])){
    header("Location: ../index.php");
}
include '../libs/Smarty.class.php';
include_once '../model/Mdds.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';
$var = 'test';

$Mdds = new Mdds();
if(isset($_GET['from']) && isset($_GET['to']) && strlen($_GET['from']) > 2 && strlen($_GET['to']) >2){
    $from_date = $_GET['from'];
    $to_date = $_GET['to'];
}else{
    $from_date = date('Y-m-d');
    $to_date = date('Y-m-d');
}



//вземи на информация за пациента
if(isset($_GET['patient_id'])){

    $patient_info = $Mdds->getPatientNfo($_GET['patient_id']);
   $Smarty->assign('patient_info', $patient_info);

}


//днешна дата
if(isset($_GET['from']) && isset($_GET['to']) && strlen($_GET['from']) > 2 && strlen($_GET['to']) >2){
    $from_date = $_GET['from'];
    $to_date = $_GET['to'];
}else{
    $from_date = date('Y-m-d');
    $to_date = date('Y-m-d');
}







//ВЗЕМИ ВСИЧКИ ЛЕКАРИ
$doctors=$Mdds->getAllDoctors();



$tests = $Mdds->getAllTests();

if(isset($_SESSION['patient_id'])){
    $Smarty->assign('patient_id', $_SESSION['patient_id'][0]['MAX(id)']);
}
if(isset($_GET['itsok'])){
    $Smarty->assign('ok', $_GET['itsok']);
}

if(isset($_GET['from']) && isset($_GET['to']) && strlen($_GET['from']) > 2 && strlen($_GET['to']) >2){
    $from_date = $_GET['from'];
    $to_date = $_GET['to'];
}else{
    $from_date = date('Y-m-d');
    $to_date = date('Y-m-d');
}

$mdd_types = $Mdds->getMddTypes();
$Smarty->assign('mdd_types', $mdd_types);

//запиши промените по мдд
if(isset($_POST['save'])){
    $out_date = $_POST['out_date'];
    $complete_date = $_POST['complete_date'];
    $num_mdd = $_POST['nmdd'];
    $al_num = $_POST['alnum'];
    $doctor_id = $_POST['doctor_id'];
   // $doctor_uin_zam = $_POST[''];
    $rzc_code = $_POST['rzc_code'];
    $uin_zam_naet = $_POST['uin_zam_naet'];
    $mkb = $_POST['mkb'];
    $mkb2 = $_POST['mkb2'];
    $mdd_type = $_POST['mdd_type'];
    $nzok = $_POST['nzok'];
    $paket = $_POST['paket'];
    $code1 = $_POST['code1']; 
    $code2 = $_POST['code2'];
    $code1t = $_POST['code1t'];
    $code2t = $_POST['code2t'];
    $code3t = $_POST['code3t'];
    $code4t = $_POST['code4t'];
    $code5t = $_POST['code5t'];
    $code6t = $_POST['code6t'];
    $zam_naet = $_POST['zam_naet'];
    $no_money = $_POST['no_money'];
     $Mdds->setMdd($no_money, $out_date, $complete_date, $num_mdd, $al_num, $doctor_id, $rzc_code, $zam_naet,
             $mkb, $mkb2, $mdd_type, $paket, $code1t, $code2t, $code3t, $code4t, $code5t, $code6t, $code1, $code2, $nzok, $_GET['patient_id']);
     header('Location: add_mdd.php?patient_id='.$_GET['patient_id']);
    
}

$all_tests = $Mdds->getAllTests();
$Smarty->assign('all_tests', $all_tests);
$over_count = $Mdds->overCount();
$total_count = $Mdds->totalForDay();
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('over_count', $over_count);
$Smarty->assign('total_count', $total_count);
$Smarty->assign('tests', $tests);
$Smarty->assign('doctors', $doctors);
$Smarty->assign('from_date', $from_date);
$Smarty->assign('to_date', $to_date);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('add_mdd.tpl');