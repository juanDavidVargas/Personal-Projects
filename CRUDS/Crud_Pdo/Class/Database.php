<?php

class Database extends PDO
{
  public function __construct()
  {
    try {
      parent::__construct('mysql:host=localhost;dbname=crud', 'root', '');
      parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Error conectando con la base de datos');
    }

  }
}

 ?>
