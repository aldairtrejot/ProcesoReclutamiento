<?php

$password = "sirh2024";
$username = "postgres";
$dbname = "procesoreclutamiento_delete";
$host = "localhost";
$port = "5432";
$options = "--client_encoding=UTF8";
$connectionDB = "host=$host port=$port dbname=$dbname user=$username password=$password options=$options";
$connectionDBsPro = pg_pconnect($connectionDB);


include '../../../Controllers/Hrae/GlobalC/ArrayC.php';
//include '../../../../conexion.php';
include 'queryM.php';

$postulantesM = new PostulantesM();
$row = new Row();

$selectedValue = $_POST['selectedValue'];
$result = $row->returnArrayById($postulantesM->getDataForClue($selectedValue));


$var = [
    'result' => $result,
];

echo json_encode($var);