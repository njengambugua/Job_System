<?php
include('applicant_header.php');
session_start();
$job_data = (object)$_SESSION['job_data'];
foreach ($job_data as $job) {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/fontawesome.css">
  <link rel="stylesheet" href="../../css/temp.css">
  <link rel="stylesheet" href="../../css/owl.css">
  <link rel="stylesheet" href="../../css/animate.css">
  <link rel="stylesheet" href="../../css/applicant/owl.carousel.min.css">
  <link rel="stylesheet" href="../../css/applicant/flaticon.css">
  <link rel="stylesheet" href="../../css/applicant/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/applicant/slicknav.css">
  <link rel="stylesheet" href="../../css/applicant/price_rangs.css">
  <link rel="stylesheet" href="../../css/applicant/animate.min.css">
  <link rel="stylesheet" href="../../css/applicant/magnific-popup.css">
  <link rel="stylesheet" href="../../css/applicant/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../css/applicant/themify-icons.css">
  <link rel="stylesheet" href="../../css/applicant/slick.css">
  <link rel="stylesheet" href="../../css/applicant/nice-select.css">
  <link rel="stylesheet" href="../../css/applicant/style.css">
</head>

<body>
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Job Details</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="job-post-company pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-between">
        <!-- Left Content -->
        <div class="col-xl-7 col-lg-8">
          <!-- job single -->
          <div class="single-job-items mb-50">
            <div class="job-items">
              <div class="company-img company-img-details">
                <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
              </div>
              <div class="job-tittle">
                <a href="#">
                  <h4><?php echo $job->title ?></h4>
                </a>
                <ul>
                  <li><?php echo $job->username ?></li>
                  <li><i class="fas fa-map-marker-alt"></i><?php echo $job->location ?></li>
                  <li>$<?php echo $job->salary ?></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- job single End -->

          <div class="job-post-details">
            <div class="post-details1 mb-50">
              <!-- Small Section Tittle -->
              <div class="small-section-tittle">
                <h4>Job Description</h4>
              </div>
              <p><?php echo $job->description ?></p>
            </div>

            <div class="post-details4  mb-50">
              <!-- Small Section Tittle -->
              <div class="small-section-tittle">
                <h4>Company Information</h4>
              </div>
              <span><?php echo $job->username ?></span>
              <p><?php echo $job->desc ?></p>
              <ul>
                <li>Name: <span><?php echo $job->username ?></span></li>
                <li>Web : <span><?php echo $job->website ?></span></li>
                <li>Email: <span><?php echo $job->company_email ?></span></li>
              </ul>
            </div>

          </div>

        </div>
        <!-- Right Content -->
        <div class="col-xl-4 col-lg-4">
          <div class="post-details3  mb-50">
            <!-- Small Section Tittle -->
            <div class="small-section-tittle">
              <h4>Job Overview</h4>
            </div>
            <ul>
              <li>Posted date : <span><?php echo $job->posted_date ?></span></li>
              <li>Location : <span><?php echo $job->location ?></span></li>
              <li>Job nature : <span><?php echo $job->job_type ?></span></li>
              <li>Salary : <span>$<?php echo $job->salary ?></span></li>
            </ul>
            <div class="apply-btn2">
              <button href="#" class="btn">Apply Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('applicant_footer.php') ?>
</body>

</html>