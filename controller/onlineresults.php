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
if (isset($_GET['id'])) {
    $datas = $Basic->getOnlineData($_GET['id']);
   // print_r($datas);
    $Smarty->assign('datas', $datas);
}

$Smarty->display('onlineresults.tpl');