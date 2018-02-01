<?php

class Database
{
  private static $_driver = DRIVER;
  private static $_port = PORT;
  private static $_server = SERVER;
  private static $_dbname = DBNAME;
  private static $_user = USER;
  private static $_password = PASSWORD;
  private static $_connect;

  private function DataBase(){}

    public function getInstance()
    {
      $dsn = self::$_driver.":host=".self::$_server.":".self::$_port.";dbname=".self::$_dbname;

      if (!isset(self::$_connect)) {
        self::$_connect = new PDO($dsn, self::$_user, self::$_password, array(PDO::ATTR_PERSISTENT => FALSE));
        self::$_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      return self::$_connect;
    }

    public function __clone()
    {
      trigger_error("Could not be repeat", E_USER_ERROR);
    }
}


 ?>
