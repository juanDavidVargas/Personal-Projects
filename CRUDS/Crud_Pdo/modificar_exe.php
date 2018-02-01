<?php

require 'Class/Database.php';

$data = new Database();

$sth = $data->prepare("UPDATE productos SET nombre = :nombre, descripcion = :descripcion, precio = :precio WHERE id = :id");

$idDato = $_POST['id'];
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
