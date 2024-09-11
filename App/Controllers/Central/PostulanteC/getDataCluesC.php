<?php

include '../../../Controllers/Hrae/GlobalC/ArrayC.php';
//include '../../../../conexion.php';
include 'queryM.php';

$password = "pg2024";
$username = "postgres";
$dbname = "procesoreclutamiento_test";
$host = "localhost";
$port = "5432";
$options = "--client_encoding=UTF8";

$postulantesM = new PostulantesM();
$row = new Row();

$selectedValue = $_POST['selectedValue'];
$result = $row->returnArrayById($postulantesM->getDataForClue($selectedValue));


$var = [
    'result' => $result,
];

echo json_encode($var);