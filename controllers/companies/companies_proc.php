<?php
include('../../DB.php');
include('../../models/companies/companies_class.php');

$company = new Company();
$obj = (object)$_SESSION['userdata'];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['user_id'])) {
    $obj->user_id =  $_GET["user_id"];
    if ($company->create($obj)) {
      $_SESSION['lastId'] = $company->lastInsertId;
      header('Location: ../../php/admin/company.php');
    } else {
      $_SESSION['error'] = $company->error;
      print_r($_SESSION['error']);
    }
  }
}

if (isset($_SESSION['loginData']) && $_SESSION['loginData']['action'] == 'Login') {
  $obj = (object)$_SESSION['loginData'];
  if ($company->retrieve($obj)) {
    if ($company->numRows) {
      $_SESSION['company_data'] = $company->data;
      unset($_SESSION['loginData']);
      header('Location: ../../php/employer/companies_job_post.php');
    } else {
      unset($_SESSION['loginData']);
      header('Location: ../../php/login.php');
    }
  } else {
    $_SESSION['error'] = $company->error;
  }
}
