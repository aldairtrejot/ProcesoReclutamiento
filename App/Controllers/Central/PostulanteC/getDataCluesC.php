<?php

include '../../../Controllers/Hrae/GlobalC/ArrayC.php';
include '../../../../conexion.php';
include 'queryM.php';

$postulantesM = new PostulantesM();
$row = new Row();

$selectedValue = $_POST['selectedValue'];
$result = $row->returnArrayById($postulantesM->getDataForClue($selectedValue));


$var = [
    'result' => $result,
];

echo json_encode($var);