<?php
include('companies_DBO.php');

class Company
{
  public $industry;
  public $location;
  public $website;
  public $description;
  public $email;
  public $user_id;
  public $lastInsertId;
  public $error;
  public $compObject;
  public $obj;
  public $data;
  public $numRows;

  public function __construct()
  {
    $this->compObject = new companyDBO;
    $this->lastInsertId = $this->compObject->lastInsertId;
    $this->error = $this->compObject->error;
  }

  function setObj($obj)
  {
    $this->obj = new stdClass;
    // $this->obj->id = $obj->id;
    $this->obj->industry = $obj->industry;
    $this->obj->location = $obj->location;
    $this->obj->website = $obj->website;
    $this->obj->description = $obj->description;
    $this->obj->email = $obj->email;
    $this->obj->user_id = $obj->user_id;
  }

  function getObj()
  {
    return $this->obj;
  }

  function create($obj)
  {
    $this->setObj($obj);
    $this->getObj();
    if ($this->compObject->insert($obj)) {
      $this->lastInsertId = $this->compObject->lastInsertId;
      return true;
    } else {
      $this->error = $this->compObject->error;
      return false;
    }
  }

  function retrieve($obj)
  {
    if ($this->compObject->select($obj)) {
      $this->data = $this->compObject->res;
      $this->numRows = $this->compObject->numRows;
      return true;
    } else {
      $this->error = $this->compObject->error;
      return false;
    }
  }
}
