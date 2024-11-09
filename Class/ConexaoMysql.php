<?php

@session_start();
require_once 'Config.php';

class ConexaoMysql {

  protected $pdo;

  public function __construct() {
    try {
      // Configuração de conexão com o charset utf8
      $dsn = 'mysql:host=' . DB_HOUST . ';dbname=' . DB_NAME . ';charset=utf8';
      $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $_SESSION['conect'] = "Exito";      
    } catch (PDOException $e) {
      $_SESSION['conect'] = "Falha";
    }
  }
}

?>
