<?php
error_reporting(E_ERROR);
session_start();
if(isset($_SESSION['user_info'])){
    header("Location: ./controller/new_patient.php");
}
include './libs/Smarty.class.php';
include_once './model/Settings.php';
$Smarty = new Smarty();
$Smarty->template_dir='./view/';
$Smarty->compile_dir='./template_c/';

$Settings = new Settings();
//LANGUAGE START
$def_lang = $Settings->getLanguage();
include_once "./languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP
if(isset($_POST['password'])){

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if($Settings->logIn($username, $password) == true){
        $_SESSION['login'] = true;
        header("Location: ./controller/new_patient.php");
    }else{
        $wrong_msg = "Грешно име/парола!";
        session_destroy();
        $Smarty->assign('wrong_msg', $wrong_msg);
    }



}
//$Smarty->assign('doctors', $doctors);
$Smarty->display('index.tpl');
