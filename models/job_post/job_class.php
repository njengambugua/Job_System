<?php
include('job_DBO.php');

class Job
{
  public $data;
  public $obj;
  public $jobObj;
  public $numRows;
  public $error;
  public $lastInsertId;

  function __construct()
  {
    $this->jobObj = new job_DBO;
  }

  function setObj($obj)
  {
    $this->obj = new stdClass;
    $this->obj->title = $obj->title;
    $this->obj->description = $obj->job_desc;
    $this->obj->company_id = $obj->company_id;
    $this->obj->location = $obj->location;
    $this->obj->salary = $obj->salary;
    $this->obj->job_type = $obj->job_type;
    $this->obj->job_category = $obj->job_category;
  }

  function getObj()
  {
    return $this->obj;
  }

  function create($obj)
  {
    $this->setObj($obj);
    $this->getObj();
    if ($this->jobObj->insert($obj)) {
      $this->lastInsertId = $this->jobObj->lastInsertId;
      return true;
    } else {
      $this->error = $this->jobObj->error;
      return false;
    }
  }

  function retrieve()
  {
    if ($this->jobObj->select()) {
      $this->data = $this->jobObj->res;
      $this->numRows = $this->jobObj->numRows;
      return true;
    } else {
      $this->error = $this->jobObj->error;
    }
  }

  function retrievebyTitle($obj)
  {
    if ($this->jobObj->selectbyTitle($obj)) {
      $this->data = $this->jobObj->res;
      $this->numRows = $this->jobObj->numRows;
      return true;
    } else {
      $this->error = $this->jobObj->error;
    }
  }
}
