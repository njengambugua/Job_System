<?php
include("../../DB.php");
include("../../models/user/user_class.php");

$user = new User;
$obj = (object)$_POST;
$_SESSION['userdata'] = $obj;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // $id = $obj->id;
  if ($_POST['action'] == 'Register') {
    if ($user->create($obj)) {
      $_SESSION['lastId'] = $user->lastInsertId;
      header("Location: ../applicant/applicant_proc.php?user_id=" . $_SESSION['lastId']);
    } else {
      $_SESSION['error'] = $user->error;
      header("Location: ../../php/register.php?error=" . $_SESSION['error']);
    }
  }

  if ($_POST['action'] == 'Create Company') {
    if ($user->create($obj)) {
      $_SESSION['lastId'] = $user->lastInsertId;
      header("Location: ../companies/companies_proc.php?user_id=" . $_SESSION['lastId']);
    } else {
      $_SESSION['error'] = $user->error;
      header("Location: ../../php/register.php?error=" . $_SESSION['error']);
    }
  }
}

if (isset($_SESSION['loginData']) && $_SESSION['loginData']['action'] == 'Login') {
  $obj = (object)$_SESSION['loginData'];
  if ($user->retrieve($obj)) {
    if ($user->numRows) {
      $_SESSION['userdata'] = $user->data;
      unset($_SESSION['loginData']);
      header('Location: ../../php/applicant/applicant.php');
    } else {
      unset($_SESSION['loginData']);
      header("Location: ../../php/login.php");
    }
  } else {
    $_SESSION['error'] = $user->error;
  }
}
