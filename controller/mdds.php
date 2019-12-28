<?php
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['user_info'])){
    header("Location: ../index.php");
}
include '../libs/Smarty.class.php';
include_once '../model/Mdds.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';


$Mdds = new Mdds();
//LANGUAGE START
$def_lang = $Mdds->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP

if(isset($_GET['from']) && isset($_GET['to']) && strlen($_GET['from']) > 2 && strlen($_GET['to']) >2){
    $from_date = filter_input(INPUT_GET, 'from');
    $to_date = filter_input(INPUT_GET, 'to');
    $status = "all";
}else{
    $from_date = date('Y-m-d');
    $to_date = date('Y-m-d');
    $status = "all";
}
$Smarty->assign('status', $status);



//вземи направление по пациентско ID
if(isset($_GET['patient_id'])){
    $_SESSION['patient_id12'] = $_GET['patient_id'];
    $mdds = $Mdds->getMddByPatient($_GET['patient_id']);
    
    $Smarty->assign('mdds', $mdds);

}


//днешна дата
if(isset($_GET['from']) && isset($_GET['to']) && strlen($_GET['from']) > 2 && strlen($_GET['to']) >2){
    $from_date = filter_input(INPUT_GET, 'from');
    $to_date = filter_input(INPUT_GET, 'to');
}else{
    $from_date = date('Y-m-d');
    $to_date = date('Y-m-d');
}

//-----------СЪБМИТНАТ ПАЦИЕНТ-----------
if(filter_has_var(INPUT_GET, 'patient_id')){
    $patient_id = filter_input(INPUT_GET, 'patient_id');
    $patient_data = $Mdds->getPatientData($patient_id);
    // print_r($patient_data);
    $data = $Mdds->getPatientData($patient_id);
    $Smarty->assign('data', $patient_data);
}

//---------СЪБМИТНАТО НАПРАВЛЕНИЕ-----------
if(isset($_GET['mdd_id'])){
    $Smarty->assign('mdd_is_set', true);
    $mdd_id = $_GET['mdd_id'];
    $_SESSION['mdd_id'] = $_GET['mdd_id'];
    
    $mdd = $Mdds->getMddById($mdd_id);
    $Smarty->assign('mdd', $mdd);
     $Smarty->assign('mddid', $_SESSION['mdd_id']);
}




//ВЗЕМИ ВСИЧКИ ЛЕКАРИ
$doctors=$Mdds->getAllDoctors();


//пациенти по дата
$start = $_GET['from'];
$end = $_GET['to'];
$dayList = $Mdds->searchByDateNoPay($start, $end);

//ИЗТРИВАНЕ НА ПАЦИЕНТ ПО ИД
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $Mdds->deleteById($id);
    header('Location: laboratory.php');
}

$tests = $Mdds->getAllTests();



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
    $patient_idn = $_POST['idn'];
    $patient_names = $_POST['names'];
    $patient_id = $_GET['patient_id'];
    
     $Mdds->updateMdd($_SESSION['mdd_id'], $out_date, $complete_date, $num_mdd, $al_num, $doctor_id,
            $rzc_code, $mkb, $mkb2, $mdd_type, $paket, $code1t, $code2t, $code3t, 
            $code4t, $code5t, $code6t, $code1, $code2, $nzok, $patient_idn, $patient_names, $patient_id);
    header('Location: mdds.php?updated='.$language['saved_msg'].'&mdd_id='.$_SESSION['mdd_id'].'&patient_id='.$_GET['patient_id'].'&from='.$from_date.'&to='.$to_date.'&searchbydate=Търси...');
    
}

$all_tests = $Mdds->getAllTests();
$Smarty->assign('all_tests', $all_tests);
$over_count = $Mdds->overCount();
$total_count = $Mdds->totalForDay();
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('over_count', $over_count);
$Smarty->assign('total_count', $total_count);
$Smarty->assign('tests', $tests);
$Smarty->assign('dayList', $dayList);
$Smarty->assign('doctors', $doctors);
$Smarty->assign('dayr', $dayResults);
$Smarty->assign('date', $date);
$Smarty->assign('updated', $_GET['updated']);

$Smarty->assign('from_date', $from_date);
$Smarty->assign('to_date', $to_date);
$Smarty->assign('day', $day);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('mdds.tpl');