<?php

require "vendor/autoload.php";

if (!$_GET['text']) {
    header("location: index.php");
    die();
}

$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($_GET['text'], $Bar::TYPE_CODE_128);
