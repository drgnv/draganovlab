<?php
error_reporting(E_ERROR);
session_start();
include '../libs/Smarty.class.php';
include_once '../model/Settings.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';

$Settings = new Settings();
$Settings->accessControl($_SESSION['user_info'][0]['lvl']);
if(isset($_GET['user_id'])){
    $user_id = filter_input(INPUT_GET, 'user_id');
    $user = $Settings->getUser($user_id);
    $Smarty->assign('user', $user);

    if(isset($_POST['save'])){

        $name = filter_input(INPUT_POST, 'name');
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $lvl = filter_input(INPUT_POST, 'lvl');
        $mail = filter_input(INPUT_POST, 'mail');
        if($Settings->editUser($name, $username, $password, $user_id, $lvl, $mail) == 1){
            $_SESSION['wp'] = "<p style=\"color: green;\">Промените са приложени успешно!</p>";
            header("Location: edit_user.php?user_id=".$user_id."");
        }else{
           $_SESSION['wp'] = "<p style=\"color: red;\">Грешна парола!</p>";
            header("Location: edit_user.php?user_id=".$user_id."");
        }
        
    }
}
$Smarty->assign('wp', $_SESSION['wp']);
$Smarty->display('edit_user.tpl');