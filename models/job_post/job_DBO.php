<?php
error_reporting(E_ALL);
ini_set('display_errors',  1);
session_start();

class job_DBO
{
  private $conn;
  public $res;
  public $query;
  public $stmt;
  public $lastInsertId;
  public $numRows;
  public $error;

  function __construct()
  {
    $db = new DatabaseConnection;
    $this->conn = $db->getConnection();
  }

  function insert($obj)
  {
    try {
      $this->query = "INSERT INTO job_postings(title, description, company_id, posted_date, location, salary, job_type, job_category)VALUES(:title, :description, :company_id, NOW(), :location, :salary, :job_type, :job_category)";
      $this->stmt = $this->conn->prepare($this->query);
      $this->stmt->bindParam(':title', $obj->title);
      $this->stmt->bindParam(':description', $obj->job_desc);
      $this->stmt->bindParam(':company_id', $obj->company_id);
      $this->stmt->bindParam(':location', $obj->location);
      $this->stmt->bindParam(':salary', $obj->salary);
      $this->stmt->bindParam(':job_type', $obj->job_type);
      $this->stmt->bindParam(':job_category', $obj->job_category);
      $this->stmt->execute();
      $this->lastInsertId = $this->conn->lastInsertId();
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }

  function select()
  {
    try {
      $this->query = "SELECT COUNT(*) AS total, jp.title, jp.posted_date, jp.location, jp.salary, jp.job_type, u.username
        FROM job_postings AS jp
        JOIN companies AS c ON c.id = jp.company_id
        JOIN users AS u ON u.id = c.user_id
        GROUP BY jp.title, jp.posted_date, jp.location, jp.salary, jp.job_type, u.username;`";
      $this->stmt = $this->conn->query($this->query);
      $this->res = $this->stmt->fetchAll(PDO::FETCH_OBJ);
      $this->numRows = $this->stmt->rowCount();
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }

  function selectbyTitle($obj)
  {
    try {
      $this->query = "SELECT jp.title, jp.posted_date, jp.location, jp.salary, jp.job_type, u.username, jp.description, c.description AS `desc`, c.website, c.company_email
        FROM job_postings AS jp
        JOIN companies AS c ON c.id = jp.company_id
        JOIN users AS u ON u.id = c.user_id WHERE jp.title=:title";
      $this->stmt = $this->conn->prepare($this->query);
      $this->stmt->bindParam(':title', $obj);
      $this->stmt->execute();
      $this->res = $this->stmt->fetchAll(PDO::FETCH_OBJ);
      $this->numRows = $this->stmt->rowCount();
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }
}
