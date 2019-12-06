<?php
include_once '../model/Host.php';
$host = new Host();
$mkbs = file_get_contents('a.txt');

$mkb = explode("\n", $mkbs);
foreach($mkb as $mkb_complect){
    echo $mkb_complect;
}
