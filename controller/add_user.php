<?php
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['user_info'])){
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
$_SESSION['err'] = "";
$_SESSION['color'] = "";

if(isset($_POST['add'])){
   
    $name = filter_input(INPUT_POST, 'new_name');
    $username = filter_input(INPUT_POST, 'new_username');
    $password = filter_input(INPUT_POST, 'new_password');
    $password2 = filter_input(INPUT_POST, 'new_password2');
    $lvl = filter_input(INPUT_POST, 'lvl');
    if($Settings->checkUsername($username) == true){
      if(trim($password) == trim($password2) && strlen($password)>3 &&  strlen($username)>3 && strlen($password)<20 && strlen($username)<20){
          $_SESSION['err'] = "Потребителя бе добавен успешно";
          $_SESSION['color'] = "green";
          //echo $username." - ".$password." - ".$password2." - ".$lvl." - ".$name;
          $Settings->addUser($username, $password, $lvl, $name);
        
      }else{
          $_SESSION['err'] = "Потребителското име и паролата трябва да са с дължина между 4 и 20 символа.";
          $_SESSION['color'] = "red";
      }
    } else {
        $_SESSION['err'] = "Потребителско име ".$username." вече съществува";
          $_SESSION['color'] = "red";
    }
}

$Smarty->assign('err', $_SESSION['err']);
$Smarty->assign('color', $_SESSION['color']);
$Smarty->display('add_user.tpl');