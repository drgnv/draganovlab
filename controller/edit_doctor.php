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
$Settings->accessControl($_SESSION['user_info'][0]['lvl']);
//LANGUAGE START
$def_lang = $Settings->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP
if(isset($_GET['editdoc'])){

    $doc_info = $Settings->getDoctor($_GET['editdoc']);

    if(isset($_POST['submit'])){
        $doctor_id = filter_input(INPUT_GET, 'editdoc');
        $name = filter_input(INPUT_POST, 'name');
        $phone = filter_input(INPUT_POST, 'phone');
        $phone2 = filter_input(INPUT_POST, 'phone2');
        $uin = filter_input(INPUT_POST, 'uin');
        $Settings->editDoctor($name, $phone, $phone2, $uin, $doctor_id);
        header("Location: edit_doctor.php?editdoc=".$doctor_id."&saved=".$language['saved_msg']);
        $Smarty->assign('saved_msg', $_GET['saved']);
    }



}
$Smarty->assign('saved_msg', $_GET['saved']);
$Smarty->assign('doc_info', $doc_info);
$Smarty->display('edit_doctor.tpl');
