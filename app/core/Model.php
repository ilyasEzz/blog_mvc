<?php 
/*
 * PDO Model Class
 * Connect to Database
 * Create prepared statement
 * Bind values
 * Returns rows and results 
 */

class Model { 
  private const HOST = DB_HOST;
  private const USER = DB_USER;
  private const PASSWORD = DB_PASS;
  private const NAME = DB_NAME;
  
  private $pdo;
  private $stmt;
  private $error;

  // Connect to the Database with PDO
  public function __construct() {
    // Set DSN
    $dsn = 'mysql:host=' . self::HOST . ';dbname=' . self::NAME;
    $options = [
      PDO::ATTR_PERSISTENT => true, // Persistant connection to the database
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  // to use PDOException
    ];


    // Create PDO Instance
    try{
      $this->pdo = new PDO($dsn, self::USER, self::PASSWORD, $options);
    } 
    catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo $this->error;
    }
  }


  // Prepare Statement with Query
  public function query($sql) {
    $this->stmt = $this->pdo->prepare($sql);
  }
  

  // Bind values
  public function bind($params, $value, $type = null) {
    // Check the type of the value
    if(is_null($type)) {
      switch(true) {
        case is_int($value):
          $type  = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type  = PDO::PARAM_BOOL ;
          break;
        case is_null($value):
          $type  = PDO::PARAM_NULL;
          break;
        default:
          $type  = PDO::PARAM_STR;
      }
    }

    $this->stmt->bindValues($params, $value, $type);
  }

  // Execute the prepared statement
  public function execute() {
    return $this->stmt->execute();
  }

  // Get result as Array of Objects
  public function getAll() {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }

  // Get Single Record as Object
  public function get(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
  }

  // Get Number of Rows
  public function rowCount() {
    return $this->stmt->rowCount() ;
  }
   
} 