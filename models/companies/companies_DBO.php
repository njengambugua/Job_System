<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

class companyDBO
{
  private $conn;
  public $res;
  public $stmt;
  public $lastInsertId;
  public $query;
  public $numRows;
  public $error;

  function __construct()
  {
    $db = new DatabaseConnection();
    $this->conn = $db->getConnection();
  }

  function insert($obj)
  {
    try {
      $this->query = "INSERT INTO companies(industry, location, website, description, company_email, user_id)VALUES(:industry, :location, :website, :description, :email, :user_id)";
      $this->stmt = $this->conn->prepare($this->query);
      $this->stmt->bindParam(':industry', $obj->industry);
      $this->stmt->bindParam(':location', $obj->location);
      $this->stmt->bindParam(':website', $obj->website);
      $this->stmt->bindParam(':description', $obj->description);
      $this->stmt->bindParam(':email', $obj->email);
      $this->stmt->bindParam(':user_id', $obj->user_id);
      $this->stmt->execute();
      $this->lastInsertId = $this->conn->lastInsertId();
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
        $this->query = "SELECT * FROM companies JOIN users ON users.id = companies.user_id WHERE users.username = :username AND users.password = :password";
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->bindParam(':username', $obj->username);
        $this->stmt->bindParam(':password', $obj->password);
        $this->stmt->execute();
        $this->numRows = $this->stmt->rowCount();
        $this->res = $this->stmt->fetch(PDO::FETCH_OBJ);
        if (!$this->res) {
          $_SESSION['error'] = 'This account does not exist';
        } else {
          $_SESSION['error'] = 'Login success';
        }
      } else {
        $this->query = "SELECT * FROM companies JOIN users ON users.id = companies.user_id";
        $this->res = $this->conn->query($this->query);
      }
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }
}
