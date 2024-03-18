<?php
include('companies_DBO.php');

class Company
{
  public $comp_name;
  public $industry;
  public $location;
  public $website;
  public $description;
  public $email;
  public $password;
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
    $this->obj->comp_name = $obj->comp_name;
    $this->obj->industry = $obj->industry;
    $this->obj->location = $obj->location;
    $this->obj->website = $obj->website;
    $this->obj->description = $obj->description;
    $this->obj->email = $obj->email;
    $this->obj->password = $obj->password;
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
}
