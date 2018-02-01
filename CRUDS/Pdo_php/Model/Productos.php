<?php

class Productos
{
  private $id;
  private $nombre;
  private $precio;
  private $descripcion;
  private $db;

  function __construct()
  {
      $this->db = DataBase::getInstance();
  }

  public function guardar()
  {
    $sql = 'INSERT INTO products_2 (nombre, precio, descripcion) VALUES(:nombre, :precio, :descripcion)';
    $stm = $this->db->prepare($sql);
    $stm->execute(array(':nombre' => $this->nombre, ':precio' => $this->precio, ':descripcion' => $this->descripcion));
    return $stm;
  }

  public function modificar()
  {
    $sql = 'UPDATE products_2 SET nombre = :nombre, precio = :precio, descripcion = :descripcion WHERE id = :id';
    $stm = $this->db->prepare($sql);
    $stm->execute(array(':id' => $this->id, ':nombre' => $this->nombre, ':precio' => $this->precio, ':descripcion' => $this->descripcion));
    return $stm;
  }

  public function eliminar()
  {
    $sql = 'DELETE FROM products_2 WHERE id = :id';
    $stm = $this->db->prepare($sql);
    $stm->execute(array(':id' => $this->id));
    return $stm;
  }

  public function listar()
  {
    $sql = 'SELECT id, nombre, precio, descripcion FROM products_2';
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function editar($id)
  {
    $sql = "SELECT id, nombre, precio, descripcion FROM products_2 WHERE id = '$id'";
    $stm = $this->db->prepare($sql);
    $stm->execute(array($id => $this->id));
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function setPrecio($precio)
  {
    $this->precio = $precio;
  }

  public function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }

  public function getId()
  {
    return $this->descripcion;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }
}




 ?>
