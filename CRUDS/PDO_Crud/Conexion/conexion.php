<?php


class Producto
{
  private $datos = "";
  private $usuario = "";
  private $passsword = "";
  private $conexion = "";

  function __construct($info, $user, $pass)
  {
    $this->datos = $info;
    $this->usuario = $user;
    $this->password = $pass;
  }

  function conexion()
  {
    try {
      $this->conexion = new PDO($this->datos, $this->usuario, $this->password);
      //echo "Conexión exitosa";
    } catch (PDOException $e) {
        echo "Error " .$e->getMessage();
    }
  }

  function insertar($fields, $table, $args)
  {
    $sql = "";
    foreach ($args as $key => $value)
    {
        $sql = "INSERT INTO $table ($fields) VALUES ('".$value['nombre']."', '".$value['descripcion']."', ".$value['precio'].")";
    }
    try {
      $this->conexion->query($sql);
      return "<div style='color:green;'>Datos guardados correctamente</div>";
    } catch (Exception $e) {
      print_r($e);
    }
  }

  function listado($fields, $table)
  {
    $query = "SELECT $fields FROM $table";
    $consulta = $this->conexion->query($query);
    $consulta = $consulta->fetchAll();

    $columnas = explode(",", $fields);
    $numero_filas = count($columnas);

    $impresion = "<tbody>";
    foreach ($consulta as $con) {
      $impresion .= "<tr>";
      for($i = 0; $i < $numero_filas; $i++)
      {
          $impresion .= "<td>".utf8_encode($con[$columnas[$i]])."</td>";
      }
      $impresion .= "</tr>";
    }
    $impresion .= "</tbody>";

    try {
        echo $impresion;
    } catch (PDOException $e) {
      print_r($e);
    }
  }
}
