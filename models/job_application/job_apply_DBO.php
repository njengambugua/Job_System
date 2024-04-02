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
  public $numRows;

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

  function select($id)
  {
    try {
      $this->query = "SELECT * FROM job_applications AS ja JOIN job_postings AS j ON j.id=ja.job_id JOIN applicant AS a ON a.id=ja.applicant_id JOIN companies c ON c.id=j.company_id JOIN users u ON u.id=c.user_id WHERE a.id=:id";
      $this->stmt = $this->conn->prepare($this->query);
      $this->stmt->bindParam(':id', $id);
      $this->stmt->execute();
      $this->numRows = $this->stmt->rowCount();
      $this->res = $this->stmt->fetchAll(PDO::FETCH_OBJ);
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }

  function selectbyCompany($id)
  {
    try {
      $this->query = "SELECT * FROM job_applications AS ja JOIN job_postings AS j ON j.id=ja.job_id JOIN applicant AS a ON a.id=ja.applicant_id JOIN companies c ON c.id=j.company_id JOIN users u ON u.id=c.user_id WHERE c.id=:id";
      $this->stmt = $this->conn->prepare($this->query);
      $this->stmt->bindParam(':id', $id);
      $this->stmt->execute();
      $this->numRows = $this->stmt->rowCount();
      $this->res = $this->stmt->fetchAll(PDO::FETCH_OBJ);
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }
}
