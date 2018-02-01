<?php

class Persona
{

  private $cedula;
  private $nombre;
  private $email;
  private $telefono;
  private $db;

  function __construct()
  {
    $this->db = Database::getInstance();
  }

  public function Guardar()
  {
    $sql = "INSERT INTO empleados(Cedula, Nombres, Email, Telefono) VALUES (:cedula, :nombres, :email, :telefono)";
    $stm = $this->db->prepare($sql);
    $stm->execute(array(':cedula' => $this->cedula, ':nombres' => $this->nombre, ':email' => $this->email, ':telefono' => $this->telefono));
    return $stm;
  }

  public function Modificar()
  {
    $sql = "UPDATE empleados SET Nombres = :nombres, Email = :email, Telefono = :telefono WHERE Cedula = :cedula";
    $stm = $this->db->prepare($sql);
    $stm->execute(array(':cedula' => $this->cedula, ':nombres' => $this->nombre, ':email' => $this->email, ':telefono' => $this->telefono));
    return $stm;
  }

  public function Eliminar()
  {
    $sql = "DELETE FROM empleados WHERE Cedula = :cedula";
    $stm = $this->db->prepare($sql);
    $stm->execute(array(':cedula' => $this->cedula));
    return $stm;
  }

  public function Listar()
  {
    $sql = "SELECT * FROM empleados";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function setCedula($cedula)
  {
    $this->cedula = $cedula;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setTelefono($telefono)
  {
    $this->telefono = $telefono;
  }

  public function getCedula()
  {
    return $this->cedula;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getTelefono()
  {
    return $this->telefono;
  }
}


 ?>
