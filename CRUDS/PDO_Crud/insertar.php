<?php

require 'Conexion/conexion.php';

$db = new Producto("mysql:dbname=crud;host=localhost", "root", "");
$db->conexion();

$cols = "nombre,descripcion,precio";
$datos = array($_POST);

$producto = $db->insertar($cols, "productos", $datos);

header('location: formulario_insercion.php?msj='.$producto);
