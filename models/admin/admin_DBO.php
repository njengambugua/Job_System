<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

class adminDBO{
  private $conn;

  public function __construct()
  {
    $db = new DatabaseConnection();
    $this->conn = $db->getConnection();
  }
}