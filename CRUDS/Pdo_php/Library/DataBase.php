<?php

  Class DataBase
  {
    private static $_driver = DRIVER;
    private static $_server = SERVER;
    private static $_port = PORT;
    private static $_dbname = DBNAME;
    private static $_user = USER;
    private static $_pass = PASSWORD;
    private static $_connect;

    private function DataBase(){}

    public function getInstance()
    {
      $dsn = self::$_driver.":host=".self::$_server.":".self::$_port.";dbname=".self::$_dbname;

      if(!isset(self::$_connect))
      {
            self::$_connect = new PDO($dsn, self::$_user, self::$_pass, array(PDO::ATTR_PERSISTENT => TRUE));
            self::$_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      return self::$_connect;
    }

    public function __clone()
    {
      trigger_error("No se puede clonar ", E_USER_ERROR);
    }
  }




 ?>
