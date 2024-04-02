<?php
include('../../DB.php');
include('../../models/job_application/job_apply_class.php');

$application = new Job_apply;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['user_id']) && isset($_GET['job_id'])) {
    $obj = new stdClass;
    $obj->applicant_id = $_GET['user_id'];
    $obj->job_id = $_GET['job_id'];
    if ($application->create($obj)) {
      header('Location: ../../php/applicant/applicant_job_details.php');
    }
    else{
      echo $application->error;
    }
  }

  if (isset($_GET['applicant_id'])) {
    $id = $_GET['applicant_id'];
    if ($application->retrieve($id)) {
      if ($application->numRows) {
        $_SESSION['application_data'] = $application->data;
        header('Location: ../../php/applicant/applicant_applications.php');
      }
    } else{
      $_SESSION['error'] = $application->error;
    }
  }

  if (isset($_GET['company_id'])) {
    $id = $_GET['company_id'];
    if ($application->retrievebyCompany($id)) {
      if ($application->numRows) {
        $_SESSION['application_data'] = $application->data;
        header('Location: ../../php/employer/companies_view_applications.php');
      }
    } else{
      $_SESSION['error'] = $application->error;
    }
  }
}
