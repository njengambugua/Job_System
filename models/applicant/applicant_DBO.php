<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class applicant_DBO
{
  public $query;
  public  $execute;
  private $conn;
  public $lastInsertId;

  public function __construct()
  {
    $db = new DatabaseConnection();
    $this->conn = $db->getConnection();
  }

  function insert($obj)
  {
    try {
      $studentQuery = "INSERT INTO applicant(firstname, lastname, username, email, phone, password) VALUES(:firstname, :lastname, :username, :email, :phone, :password)";
      $stmt = $this->conn->prepare($studentQuery);
      $stmt->bindParam(':firstname', $obj->firstname);
      $stmt->bindParam(':lastname', $obj->lastname);
      $stmt->bindParam(':username', $obj->username);
      $stmt->bindParam(':email', $obj->email);
      $stmt->bindParam(':phone', $obj->phone);
      $stmt->bindParam(':password', $obj->password);

      $stmt->execute();
      $this->lastInsertId = $this->conn->lastInsertId();
      $_SESSION['applicant_id'] = $this->lastInsertId;
      return true;
    } catch (\Throwable $th) {
      return false;
    }
  }
}
