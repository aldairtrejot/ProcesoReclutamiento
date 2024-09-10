<?php

include '../../../../conexion.php';
include 'queryM.php';

$postulantesM = new PostulantesM();

$condicion = [
    'id_postulantes' => $_POST['id_postulantes']
];

$datos = [
    'desc_cedula_sep' => $_POST['desc_cedula_sep'],
    'cedula_sep' => $_POST['cedula_sep'],
    'nombre' => $_POST['nombre'],
    'primer_apellido' => $_POST['primer_apellido'],
    'segundo_apellido' => $_POST['segundo_apellido'],
    'curp' => $_POST['curp'],
    'email' => $_POST['email'],
    'telefono' => $_POST['telefono'],
    'id_cat_entidad_nacimiento' => $_POST['id_cat_entidad_nacimiento'],
    'id_clues' => $_POST['id_clues'],
];



if ($postulantesM->editarByArray($connectionDBsPro, $datos, $condicion)) {
    echo true;
} else {
    echo false;
}

