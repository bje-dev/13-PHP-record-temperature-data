<?php

require('conexion.php');

$temperatura = $_GET['temperatura'];
$progresiva = $_GET['progresiva'];
$fecha = date("Y-m-d");
$hora = date("H:i:s");

// Prepare
$stmt = $dbcon->prepare("INSERT INTO temperaturas (temp_grados, temp_progresiva, temp_fecha, temp_hora) VALUES (?, ?, ?, ?)");
// Bind
$stmt->bindParam(1, $temperatura);
$stmt->bindParam(2, $progresiva);
$stmt->bindParam(3, $fecha);
$stmt->bindParam(4, $hora);
// Excecute
$stmt->execute();


?>