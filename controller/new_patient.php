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


if(filter_has_var(INPUT_POST, 'record')){
    
    $pname = filter_input(INPUT_POST, 'names');
    $num = filter_input(INPUT_POST, 'num');
    $doctor = filter_input(INPUT_POST, 'doctor');
    $results = $_POST['tests'];
    $pay = filter_input(INPUT_POST, 'pay');
    $idn = filter_input(INPUT_POST, 'idn');
    $cito = filter_input(INPUT_POST, 'cito');
    $comment = filter_input(INPUT_POST, 'comment');
    $note = filter_input(INPUT_POST, 'note');
    if($Basic->checkCBC($results)){
        $counter = 1;
        $cbc_count = $Basic->getCbcCount()+1;
        while ($counter <$cbc_count) {
            $results[]='99.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '01.01'){
             unset($results[$key]);
            }
        }
        
    }
    
    if($Basic->checkEle($results)){
        $counter = 1;
        $ele_count = $Basic->getEleCount()+1;
        while ($counter <$ele_count) {
            $results[]='15.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '15.00'){
             unset($results[$key]);
            }
        }
        
    }
    
    if($Basic->checkUrin($results)){
        $counter = 1;
        $urin_count = $Basic->getUrineCount()+1;
        while ($counter <$urin_count) {
            $results[]='88.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '01.08'){
             unset($results[$key]);
            }
        }
    }
    if($Basic->checkAkr($results)){
        $counter = 1;
        $akr_count = $Basic->getAkrCount()+1;
        while ($counter <$akr_count) {
            $results[]='66.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '66.00'){
                unset($results[$key]);
            }
        }
    }
    
    if($Basic->checkDif($results)){
        $counter = 1;
        $dif_count = $Basic->getDifCount()+1;
        while ($counter <$dif_count) {
            $results[]='44.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '01.40'){
                unset($results[$key]);
            }
        }
    }

    if($Basic->checkKzp($results)){
        $counter = 1;
        $dif_count = $Basic->getKzpCount()+1;
        while ($counter <$dif_count) {
            $results[]='62.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '62.00'){
                unset($results[$key]);
            }
        }
        foreach ($results as $key => $value) {
            if($value == '01.40'){
                unset($results[$key]);
            }
        }
    }

    
   // print_r($results);
    $date = $_POST['date'];
    //print_r($results);
    $_SESSION['num'] = $_POST['num'];
     $_SESSION['lr'] = $results;
     $_SESSION['pn'] = $pname;
     $_SESSION['num'] = $num;
     $_SESSION['doc'] = $doctor;
     $_SESSION['date'] = $date;
    if($Basic->egn_valid($idn)){
        $Basic->newPatient($pname, $num, $doctor, $results, $date,$pay, $idn, $cito, $comment, $note);
    }else{
        $Smarty->assign('not_valid_idn',"Невалиден ЕГН");
    }
   
 
}

$dayList = $Basic->getDayPatientList();

$doctors=$Basic->getAllDoctors();
//$dayResults = $Basic->getDayResults();
if(isset($_SESSION['num'])){
    $ln = $_SESSION['num']+1;
    $Smarty->assign('lastnum', $ln);
}else{
    $ln = "";
    $Smarty->assign('lastnum', $ln);
}

if (filter_has_var(INPUT_GET, 'delete')) {
    $id = filter_input(INPUT_GET, 'delete');
    $Basic->deleteById($id);
    header('Location: new_patient.php');
}
$date=date('Y-m-d');
$tests = $Basic->getAllTests();

if(isset($_SESSION['patient_id'])){
    $Smarty->assign('patient_id', $_SESSION['patient_id'][0]['MAX(id)']);
}

$max_id = $Basic->maxPatientId();
$a2 = $max_id[0]['MAX(number)']+1;
$Smarty->assign('pid', $a2);

if(filter_has_var(INPUT_GET, 'from') && filter_has_var(INPUT_GET, 'to') && strlen($_GET['from']) > 2 && strlen($_GET['to']) >2){
    $from_date = filter_input(INPUT_GET, 'from');
    $to_date = filter_input(INPUT_GET, 'to');
    $status = filter_input(INPUT_GET, 'status');
}else{
    $from_date = date('Y-m-d');
    $to_date = date('Y-m-d');
    $status = "all";
}
$Smarty->assign('status', $status);

//===========Take test panel============
include_once '../model/Settings.php';
$Settings = new Settings();
$panel = $Settings->getTestPanel();
$Smarty->assign('panel', $panel[0]['setting_selected']);

$over_count = $Basic->overCount();
$total_count = $Basic->totalForDay();
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('over_count', $over_count);
$Smarty->assign('total_count', $total_count);
$Smarty->assign('tests', $tests);
$Smarty->assign('dayList', $dayList);
$Smarty->assign('doctors', $doctors);
$Smarty->assign('dayr', $dayResults);
$Smarty->assign('date', $date);
$Smarty->assign('from_date', $from_date);
$Smarty->assign('to_date', $to_date);
$Smarty->assign('day', $day);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('new_patient.tpl');