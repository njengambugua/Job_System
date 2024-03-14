<?php
include("../../DB.php");
include("../../models/applicant/applicant_class.php");
$newApplicant = new applicant();
$obj = (object)$_SESSION['userdata'];

print_r($_SESSION['userdata']);

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  if (isset($_GET['user_id'])) {
    $obj->user_id =  $_GET["user_id"];
    if ($newApplicant->create($obj)) {
      header('Location: ../../php/applicant/applicant.php');
    } else{
      header('Location: ../../php/register.php');
    }
  }
}
?>