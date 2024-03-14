<?php
include('applicant_DBO.php');

class applicant
{
  public $obj;
  public $applicant;
  public $lastInsertId;
  public $data;
  public $numRows;
  public $error;

  function __construct()
  {
    $this->applicant = new applicant_DBO();
  }

  function setObj($obj)
  {
    $this->obj = new stdClass;
    $this->obj->firstname = $obj->firstname;
    $this->obj->lastname = $obj->lastname;
    $this->obj->email = $obj->email;
    $this->obj->phone = $obj->phone;
    $this->obj->user_id = $obj->user_id;
  }

  function getObj()
  {
    return $this->obj;
  }

  // function validate($obj)
  // {
  //   // check for empty fields
  //   foreach ($obj as $key => $value) {
  //     if ($key == 'Name') {
  //       if (empty($value)) {
  //         throw new Exception("Error Key Name is empty", 1);
  //       }
  //       if (preg_match('/[0-9]/', $value)) {
  //         throw new Exception("Error key Name has a number", 1);
  //       }
  //     }
  //     if ($key == 'Age') {
  //       if (empty($value)) {
  //         throw new Exception("Error Key Age is empty", 1);
  //       }
  //     }
  //   }
  // }

  function create($obj)
  {
    $this->setObj($obj);
    $this->getObj();
    if ($this->applicant->insert($obj)) {
      $this->lastInsertId = $this->applicant->lastInsertId;
      return true;
    } else {
      return false;
    }
  }

  function retrieve($obj)
  {
    // $this->setObj($obj);
    // $this->getObj();
    if ($this->applicant->select($obj)) {
      $this->numRows = $this->applicant->numRows;
      $this->data = $this->applicant->res;
      return true;
    } else {
      $this->error = $this->applicant->error;
      return false;
    }
  }
}
