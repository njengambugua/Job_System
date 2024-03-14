<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

class applicant_DBO
{
  public $query;
  public  $execute;
  private $conn;
  public $lastInsertId;
  public $error;
  public $res;
  public $stmt;
  public $numRows;

  public function __construct()
  {
    $db = new DatabaseConnection();
    $this->conn = $db->getConnection();
  }

  function insert($obj)
  {
    try {
      $this->query = "INSERT INTO applicant(firstname, lastname, email, phone, user_id) VALUES(:firstname, :lastname, :email, :phone, :user_id)";
      $this->stmt = $this->conn->prepare($this->query);
      $this->stmt->bindParam(':firstname', $obj->firstname);
      $this->stmt->bindParam(':lastname', $obj->lastname);
      $this->stmt->bindParam(':email', $obj->email);
      $this->stmt->bindParam(':phone', $obj->phone);
      $this->stmt->bindParam(':user_id', $obj->user_id);

      $this->stmt->execute();
      $this->lastInsertId = $this->conn->lastInsertId();
      $_SESSION['applicant_id'] = $this->lastInsertId;
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }

  function select($obj)
  {
    try {
      if (isset($obj)) {
        $this->query = "SELECT * FROM applicant WHERE username = :username AND password = :password";
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->bindParam(':username', $obj->username);
        $this->stmt->bindParam(':password', $obj->password);
        $this->stmt->execute();
        $this->res = $this->stmt->fetchAll(PDO::FETCH_OBJ);
        $this->numRows = $this->stmt->rowCount();
      } else {
        $this->query = "SELECT * FROM applicant";
        $this->res = $this->conn->query($this->query);
      }
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }
}
