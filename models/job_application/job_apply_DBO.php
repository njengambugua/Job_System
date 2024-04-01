<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

class Job_apply_DBO
{
  private $conn;
  public $stmt;
  public $query;
  public $lastInsertId;
  public $res;
  public $error;

  function __construct()
  {
    $db = new DatabaseConnection;
    $this->conn = $db->getConnection();
  }

  function insert($obj)
  {
    try {
      $this->query = "INSERT INTO job_applications(job_id, applicant_id, status, application_date)VALUES(:job_id, :applicant_id, 'pending', NOW())";
      $this->stmt = $this->conn->prepare($this->query);
      $this->stmt->bindParam(':job_id', $obj->job_id);
      $this->stmt->bindParam(':applicant_id', $obj->applicant_id);
      $this->stmt->execute();
      $this->lastInsertId = $this->conn->lastInsertId();
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }
}
