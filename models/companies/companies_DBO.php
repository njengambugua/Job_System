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
      $this->query = "INSERT INTO companies(name, industry, location, website, description, company_email, password)VALUES(:comp_name, :industry, :location, :website, :description, :email, :password)";
      $this->stmt = $this->conn->prepare($this->query);
      $this->stmt->bindParam(':comp_name', $obj->comp_name);
      $this->stmt->bindParam(':industry', $obj->industry);
      $this->stmt->bindParam(':location', $obj->location);
      $this->stmt->bindParam(':website', $obj->website);
      $this->stmt->bindParam(':description', $obj->description);
      $this->stmt->bindParam(':email', $obj->email);
      $this->stmt->bindParam(':password', $obj->password);
      $this->stmt->execute();
      $this->lastInsertId = $this->conn->lastInsertId();
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }
}
