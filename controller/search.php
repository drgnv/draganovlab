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

if(filter_has_var(INPUT_GET, 'send')){
    $type = filter_input(INPUT_GET, 'type');
    $search = filter_input(INPUT_GET, 'search');
   $results = $Basic->searchNameId($search, $type);
   $Smarty->assign('results', $results);
   $Smarty->assign('search', $search);
   $Smarty->assign('type', $type);
}

if (filter_has_var(INPUT_GET, 'delete')) {
    $id = filter_input(INPUT_GET, 'delete');
    $Basic->deleteById($id);
    header('Location: search.php?type='.$_GET['type'].'&search='.$_GET['search'].'&send=Търси');
}
//днешна дата
$date=date('Y-m-d');
$Smarty->assign('date', $date);
$dayList = $Basic->getDayPatientList();
$Smarty->assign('dayList', $dayList);
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('search.tpl');