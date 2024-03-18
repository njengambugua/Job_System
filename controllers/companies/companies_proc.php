<?php
include('../../DB.php');
include('../../models/companies/companies_class.php');

$company = new Company();
$obj = (object)$_POST;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['action'] == 'Register') {
    if ($company->create($obj)) {
      $_SESSION['lastId'] = $user->lastInsertId;
      header('Location: ../../php/admin/company.php');
    } else{
      $_SESSION['error'] = $company->error;
      print_r($_SESSION['error']);
    }
  }
}