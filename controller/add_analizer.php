<?php
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['user_info']) && $_SESSION['user_info'][0]['level']>2){
    header("Location: ../index.php");
}
include '../libs/Smarty.class.php';
include_once '../model/Settings.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';


$Settings = new Settings();
$Settings->accessControl($_SESSION['user_info'][0]['lvl']);

if (isset($_POST['add'])) {
   // echo 1;
    $analizer['name'] = filter_input(INPUT_POST, 'analizer-name');
    $analizer['category'] = filter_input(INPUT_POST, 'category');
    $analizer['date'] = date('Y-m-d');
    if ($Settings->setAnalizer($analizer) == true) {
        $_SESSION['msg'] = "<p style=\"color: green;\">Анализатора е добавен успешно!</p>";
    }else{
                $_SESSION['msg'] = "<p style=\"color: red;\">Не успяхме да добавим анализатора!</p>";

    }
    $Smarty->assign('msg', $_SESSION['msg']);
}

$Smarty->display('add_analizer.tpl');