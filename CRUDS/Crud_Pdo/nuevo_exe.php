<?php

require 'Class/Database.php';

$data = new Database();

$sth = $data->prepare("INSERT INTO productos (id, nombre, descripcion, precio) VALUES (:id, :nombre, :descripcion, :precio)")
                       or die("Error insertando los datos ");

$idDato = '';
$nombre = utf8_decode($_POST['nombre']);
$desc = utf8_decode($_POST['desc']);
$precio = $_POST['precio'];
$sth->bindParam(':id', $idDato);
$sth->bindParam(':nombre', $nombre);
$sth->bindParam(':descripcion', $desc);
$sth->bindParam(':precio', $precio);

$sth->execute();
header('location: index.php');

 ?>
