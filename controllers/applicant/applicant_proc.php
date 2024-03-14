<?php
include('../../DB.php');
include('../../models/applicant/applicant_class.php');
$obj = (object)$_POST;
$_SESSION['obj'] = $obj;

$newApplicant = new applicant();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['action'] == 'Register') {
    if ($newApplicant->create($obj)) {
      header('Location: ../../php/applicant/applicant.php');
    } else {
      header('Location: ../../php/register.php');
    }
  }
}
