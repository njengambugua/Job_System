<?php
include('../../DB.php');
include('../../models/admin/admin_class.php');
if (isset($_SESSION['loginData']) && $_SESSION['loginData']['action'] == 'Login') {
  if ($_SESSION['loginData']['username'] == 'Admin' &&  $_SESSION['loginData']['password'] == 'a') {
    unset($_SESSION['loginData']);
    header("Location: ../../php/admin/navbar.php");
  } else {
    print_r($_SESSION['loginData']);
    // unset($_SESSION['loginData']);
    // header('Location: ../../php/login.php');
  }
}