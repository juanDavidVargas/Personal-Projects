<?php

require 'Class/Database.php';

$data = new Database();

$sth = $data->prepare("DELETE FROM productos WHERE id = :id");

$idDato = $_GET['id'];
$sth->bindParam(':id', $idDato);
$sth->execute();

header('location: index.php');
