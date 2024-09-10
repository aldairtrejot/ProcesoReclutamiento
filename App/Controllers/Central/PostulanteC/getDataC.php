<?php

include '../../../Controllers/Hrae/GlobalC/ArrayC.php';
include '../../../../conexion.php';
include 'queryM.php';

$postulantesM = new PostulantesM();
$row = new Row();

$idPostulante = $_POST['id_postulantes'];
$result = $row->returnArrayById($postulantesM->getDataInit($idPostulante));


$var = [
    'result' => $result,
];

echo json_encode($var);