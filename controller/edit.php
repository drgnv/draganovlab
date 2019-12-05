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
$var = 'test';

$Basic = new Basic();

//LANGUAGE START
$def_lang = $Basic->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP


if(isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id');
    $data = $Basic->getPatientData($id);
   // print_r($data);
    $patient_tests = $Basic->getResultsByPatientId($id);
   // print_r($patient_tests);
    $doctors=$Basic->getAllDoctors();
    $Smarty->assign('doctors', $doctors);
    $Smarty->assign('deltests', $patient_tests);
    $Smarty->assign('data', $data);
}

if(isset($_POST['save'])){
    $patient['number'] = filter_input(INPUT_POST, 'number');
    $patient['name'] = filter_input(INPUT_POST, 'patient');
    $patient['doctor'] = filter_input(INPUT_POST, 'doctor');
    $patient['date'] = substr(filter_input(INPUT_POST, 'date'), 0, 10);
    $patient['over'] = filter_input(INPUT_POST, 'over');
    $patient['comment'] = filter_input(INPUT_POST, 'comment');
    $patient['note'] = filter_input(INPUT_POST, 'note');
    $patient['idn'] = filter_input(INPUT_POST, 'idn');
    $patient['cito'] = filter_input(INPUT_POST, 'cito');

   $patient['id']=$data[0]['patient_id'];
    $x=0;
    foreach ($data as $key => $value) {
        foreach ($value as $key2 => $value2) {
            if($key2 == 'test_code'){
             
            $patient['results'][$value2] = $_POST[str_replace('.', '_', $value2)];
                    $x++;
            }
        }
    }
    
            $Basic->updatePatient($patient);
           header("Location: edit.php?id=".$patient['id']."&itsok=Промените са приложени успешно!");
}
$all_tests = $Basic->getAllTests();
$Smarty->assign('all_tests', $all_tests);


//print_r($data);

if(isset($_POST['add'])){
    $patient_new_tests = $_POST['my-select'];
    $patient_id = filter_input(INPUT_GET, 'id');
    $date = $data[0]['date'];
    $patient_nfo = $Basic->getPatientNfo($patient_id);
    
   $Basic->addTests($patient_new_tests, $patient_id, $date, $patient_nfo[0]['idn']);
   $sql="DELETE FROM `results` WHERE `test_code` = \"01.01\" ";
      $Basic->sqliexecute($sql);
    $sql="DELETE FROM `results` WHERE `test_code` = \"01.40\" ";
      $Basic->sqliexecute($sql);
       $sql="DELETE FROM `results` WHERE `test_code` = \"01.08\" ";
      $Basic->sqliexecute($sql);
   header("Location: edit.php?id=".$patient_id."");
}

if(isset($_POST['remove'])){
    $patient_id = filter_input(INPUT_GET, 'id');
    $tests_for_remove = $_POST['my-selectdel'];
    $Basic->deleteTestsFromPatient($patient_id, $tests_for_remove);
    header("Location: edit.php?id=".$patient_id."");
}

if(isset($_GET['id']) && isset($_GET['ldl'])){
    $id = filter_input(INPUT_GET, 'id');
    $ldl = $Basic->calculateLdl($id);
    $Smarty->assign('ldl', $ldl);
}

if(isset($_GET['id']) && isset($_GET['ag'])){
    $id = filter_input(INPUT_GET, 'id');
    $ldl = $Basic->calculateLdl($id);
    $Smarty->assign('ldl', $ldl);
}
if(isset($_GET['itsok'])){
    $itsok = filter_input(INPUT_GET, 'itsok');
    $Smarty->assign('ok', $itsok);
}
$Smarty->display('edit.tpl');