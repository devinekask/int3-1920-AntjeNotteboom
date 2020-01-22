<?php

class DAO {

  // Properties
  // private static $sharedPDO;
  // protected $pdo;

  // no wifi
  // private static $dbHost = "localhost";
  // private static $dbName = "humo";
  // private static $dbUser = "humo";
  // private static $dbPass = "humo123";
  // private static $sharedPDO;
  // protected $pdo;


  // Constructor
  function __construct() {

    if(empty(self::$sharedPDO)) {
      $dbHost = getenv('PHP_DB_HOST') ?: " localhost";
      $dbName = getenv('PHP_DB_DATABASE') ?: "humo";
      $dbUser = getenv('PHP_DB_USERNAME') ?: "humo";
      $dbPass = getenv('PHP_DB_PASSWORD') ?: "humo123";

      self::$sharedPDO = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
      self::$sharedPDO->exec("SET CHARACTER SET utf8");
      self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    $this->pdo =& self::$sharedPDO;

  }

  // Methods

}
?>
