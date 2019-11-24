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

if(isset($_GET['editid'])){
    $id = $_GET['editid'];
    $analizer = $Settings->getAnalizerById($id);
    $Smarty->assign('analizer', $analizer);
    
    if (isset($_POST['edit'])) {
        $name = $_POST['analizer-name'];
        $category = $_POST['category'];
        $Settings->editAnalizerById($name, $category, $id);
    }
}
//днешна дата
$date=date('Y-m-d');
$Smarty->assign('date', $date);

$Smarty->display('edit_analizer.tpl');
