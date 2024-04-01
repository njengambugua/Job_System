<?php
include('job_apply_DBO.php');

class Job_apply
{
  public $lastInsertId;
  public $data;
  public $error;
  public $applicationObj;
  public $obj;
  public $numRows;

  function __construct()
  {
    $this->applicationObj = new Job_apply_DBO;
  }

  function setObj($obj)
  {
    $this->obj = new stdClass;
    $this->obj->job_id = $obj->job_id;
    $this->obj->applicant_id = $obj->applicant_id;
  }

  function getObj()
  {
    return $this->obj;
  }

  function create($obj)
  {
    $this->setObj($obj);
    $this->getObj();
    if ($this->applicationObj->insert($obj)) {
      $this->lastInsertId = $this->applicationObj->lastInsertId;
      return true;
    } else {
      $this->error = $this->applicationObj->error;
      return false;
    }
  }
}
