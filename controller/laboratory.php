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
//днешна дата
$date=date('Y-m-d');
if(isset($_GET['patient_id'])){
    $patient_data = $Basic->getPatientData($_GET['patient_id']);
   // print_r($patient_data);
    $data = $Basic->getPatientData($_GET['patient_id']);
    $Smarty->assign('data', $patient_data);
}


//ЗАПИС НА ПРОМЕНИТЕ
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
//print_r($data);
  //  echo 1;
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
    header("Location: laboratory.php?patient_id=".$patient['id']."&itsok=Промените са приложени успешно!&from=".$date."&to=".$date);
}



//ВЗЕМИ ВСИЧКИ ЛЕКАРИ
$doctors=$Basic->getAllDoctors();


//пациенти по дата
$start = $_GET['from'];
$end = $_GET['to'];
$dayList = $Basic->searchByDate($start, $end);

//ИЗТРИВАНЕ НА ПАЦИЕНТ ПО ИД
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $Basic->deleteById($id);
    header('Location: laboratory.php');
}




$tests = $Basic->getAllTests();

if(isset($_SESSION['patient_id'])){
    $Smarty->assign('patient_id', $_SESSION['patient_id'][0]['MAX(id)']);
}
if(isset($_GET['itsok'])){
    $Smarty->assign('ok', $_GET['itsok']);
}
$over_count = $Basic->overCount();
$total_count = $Basic->totalForDay();
$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('over_count', $over_count);
$Smarty->assign('total_count', $total_count);
$Smarty->assign('tests', $tests);
$Smarty->assign('dayList', $dayList);
$Smarty->assign('doctors', $doctors);
$Smarty->assign('dayr', $dayResults);
$Smarty->assign('date', $date);
$Smarty->assign('day', $day);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->display('laboratory.tpl');