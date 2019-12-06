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

if (isset($_POST['add-category'])) {
  $category_name =   filter_input(INPUT_POST, 'category-name');
  $category_code = filter_input(INPUT_POST, 'category-code');
  
  
  if($Settings->checkUniqueCategoty($category_code)){
      $Settings->setCategory($category_name, $category_code);
      $msg = "Категорията е добавена успешно!";
      header("Location: ./add_category.php?msg=".$msg."");
      
  }else{
      $msg = "Този код вече се използва!";
       header("Location: ./add_category.php?msg=".$msg."");
      
  }
}


$Smarty->assign('msg', $_GET['msg']);
$Smarty->display('add_category.tpl');