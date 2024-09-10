<?php

include("conexion.php");

$nick = $_POST["nick"];
$pass = md5($_POST["password"]);
$bool = false;

$authnQuery = pg_query($connectionDBsPro, "SELECT * FROM postulante.postulantes WHERE curp='$nick' AND password='$pass'");

if (pg_num_rows($authnQuery) > 0) {
    $row = pg_fetch_array($authnQuery);
    $id_postulantes = $row["id_postulantes"];
    $curp = $row["curp"];
    $postulante = $row["postulante"];
    $id_estatus = $row["id_estatus"];

    if ($id_estatus) {
        session_start();
        $_SESSION["id_postulantes"] = $row["id_postulantes"];
        $_SESSION["curp"] = $row["curp"];
        $_SESSION["postulante"] = $row["postulante"];
        $_SESSION["id_estatus"] = $row["id_estatus"];
        $bool = true;
    }
}

echo $bool;
/*
    $authnQuery = pg_query($connectionDBsPro, "SELECT * FROM postulante.postulantes WHERE curp='$nick' AND password='$pass'");

    if ($authnQuery) {
        $row = pg_fetch_array($authnQuery);
        $id_postulantes = $row["id_postulantes"];
        $curp = $row["curp"];
        $postulante = $row["postulante"];
        $id_estatus = $row["id_estatus"];

        if ($id_estatus){
            if (strcmp($status, 'f') !== 0){
                session_start();
                $_SESSION["id_postulantes"] = $id_postulantes;
                $_SESSION["curp"] = $curp;
                $_SESSION["postulante"] = $postulante;
                $_SESSION["id_estatus"] = $id_estatus;
                echo 'acceso';
            } 
        } 
      } 
*/
