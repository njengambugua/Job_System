<?php
include('../../DB.php');
include('../../models/job_post/job_class.php');
$job = new Job;
$obj = (object)$_POST;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['action'] == 'Add Post') {
    if ($job->create($obj)) {
      header('Location: ../../index.php');
    } else {
      $_SESSION['error'] = $job->error;
      header('Location: ../../php/employer/companies_job_post.php');
    }
  }
}


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['user_id'])) {
    if ($job->retrieve()) {
      $_SESSION['job_data'] = $job->data;
      $_SESSION['user_id'] = $_GET['user_id'];
      header('Location: ../../php/applicant/applicant.php');
    }
  }

  if (isset($_GET['title'])) {
    $obj = $_GET['title'];
    if ($job->retrievebyTitle($obj)) {
      if ($job->numRows) {
        $_SESSION['job_data'] = $job->data;
        header('Location: ../../php/applicant/applicant_job_details.php');        
      }
    } else{
      echo $job->error;
    }
  }
}
