<?php
include 'applicant_header.php';
session_start();
if (!isset($_SESSION['userdata']->id)) {
  header("Location: ../login.php");
  exit();
}
$job_data = (object)$_SESSION['job_data'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/fontawesome.css">
  <link rel="stylesheet" href="../../css/temp.css">
  <link rel="stylesheet" href="../../css/owl.css">
  <link rel="stylesheet" href="../../css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <link rel="stylesheet" href="../../css/applicant/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/applicant/owl.carousel.min.css">
  <link rel="stylesheet" href="../../css/applicant/price_rangs.css">
  <link rel="stylesheet" href="../../css/applicant/flaticon.css">
  <link rel="stylesheet" href="../../css/applicant/slicknav.css">
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
            <h2>Available Jobs</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="job_postings">
    <main>
      <!-- Job List Area Start -->
      <div class="job-listing-area pt-120 pb-120">
        <div class="container">
          <div class="row">
            <!-- Left content -->
            <div class="col-xl-3 col-lg-3 col-md-4">
              <div class="row">
                <div class="col-12">
                  <div class="small-section-tittle2 mb-45">
                    <div class="ion"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                        <path fill-rule="evenodd" fill="rgb(27, 207, 107)" d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z" />
                      </svg>
                    </div>
                    <h4>Filter Jobs</h4>
                  </div>
                </div>
              </div>
              <!-- Job Category Listing start -->
              <div class="job-category-listing mb-50">
                <!-- single one -->
                <div class="single-listing">
                  <div class="small-section-tittle2">
                    <h4>Job Category</h4>
                  </div>
                  <!-- Select job items start -->
                  <div class="select-job-items2">
                    <select name="select">
                      <option value="">All Category</option>
                      <option value="">Category 1</option>
                      <option value="">Category 2</option>
                      <option value="">Category 3</option>
                      <option value="">Category 4</option>
                    </select>
                  </div>
                  <!--  Select job items End-->
                  <!-- select-Categories start -->
                  <div class="select-Categories pt-80 pb-50">
                    <div class="small-section-tittle2">
                      <h4>Job Type</h4>
                    </div>
                    <label class="container">Full Time
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="container">Part Time
                      <input type="checkbox" checked="checked active">
                      <span class="checkmark"></span>
                    </label>
                    <label class="container">Remote
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="container">Freelance
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <!-- select-Categories End -->
                </div>
                <!-- single two -->
                <div class="single-listing">
                  <div class="small-section-tittle2">
                    <h4>Job Location</h4>
                  </div>
                  <!-- Select job items start -->
                  <div class="select-job-items2">
                    <select name="select">
                      <option value="">Anywhere</option>
                      <option value="">Category 1</option>
                      <option value="">Category 2</option>
                      <option value="">Category 3</option>
                      <option value="">Category 4</option>
                    </select>
                  </div>
                  <!--  Select job items End-->
                </div>
                <!-- single three -->
                <div class="single-listing">
                  <!-- select-Categories start -->
                  <div class="select-Categories pb-50">
                    <div class="small-section-tittle2">
                      <h4>Posted Within</h4>
                    </div>
                    <label class="container">Any
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="container">Today
                      <input type="checkbox" checked="checked active">
                      <span class="checkmark"></span>
                    </label>
                    <label class="container">Last 2 days
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="container">Last 3 days
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="container">Last 5 days
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="container">Last 10 days
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <!-- select-Categories End -->
                </div>
              </div>
              <!-- Job Category Listing End -->
            </div>
            <!-- Right content -->
            <div class="col-xl-9 col-lg-9 col-md-8">
              <!-- Featured_job_start -->
              <section class="featured-job-area">
                <div class="container">
                  <!-- Count of Job list Start -->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="count-job mb-35">
                        <span>2 Jobs found</span>
                        <!-- Select job items start -->
                        <div class="select-job-items">
                          <span>Sort by</span>
                          <select name="select">
                            <option value="">None</option>
                            <option value="">job list</option>
                            <option value="">job list</option>
                            <option value="">job list</option>
                          </select>
                        </div>
                        <!--  Select job items End-->
                      </div>
                    </div>
                  </div>
                  <!-- Count of Job list End -->
                  <!-- single-job-content -->
                  <?php foreach ($job_data as $job) { ?>


                    <div class="single-job-items mb-30">
                      <div class="job-items">
                        <div class="company-img">
                          <a href="#"><img src="../../images/job-list1.png" alt=""></a>
                        </div>
                        <div class="job-tittle job-tittle2">
                          <a href="../../controllers/job_post/job_proc.php?title=<?php echo $job->title; ?>">
                            <h4><?php echo $job->title ?></h4>
                          </a>
                          <ul>
                            <li><?php echo $job->username ?></li>
                            <li><i class="fas fa-map-marker-alt"></i><?php echo $job->location ?></li>
                            <li>$<?php echo $job->salary ?></li>
                          </ul>
                        </div>
                      </div>
                      <div class="items-link items-link2 f-right">
                        <a href="applicant_job_details.html"><?php echo $job->job_type ?></a>
                        <span>
                          <?php
                          $createdAt = new DateTime($job->posted_date);
                          $currentDateTime = new DateTime();
                          $interval = $createdAt->diff($currentDateTime);

                          if ($interval->y > 0) {
                            $diffForHumans = $interval->y . " year";
                          } elseif ($interval->m > 0) {
                            $diffForHumans = $interval->m . " month";
                          } elseif ($interval->d > 0) {
                            $diffForHumans = $interval->d . " day";
                          } elseif ($interval->h > 0) {
                            $diffForHumans = $interval->h . " hour";
                          } elseif ($interval->i > 0) {
                            $diffForHumans = $interval->i . " minute";
                          } elseif ($interval->s > 0) {
                            $diffForHumans = $interval->s . " second";
                          } else {
                            $diffForHumans = "Just now";
                          }

                          $diffForHumans .= ($diffForHumans != "Just now" && $diffForHumans != "1 second") ? "s ago" : " ago";
                          echo $diffForHumans;
                          ?>
                        </span>
                      </div>
                    </div>
                  <?php } ?>
                  <!-- single-job-content -->
                </div>
              </section>
              <!-- Featured_job_end -->
            </div>
          </div>
        </div>
      </div>
      <!-- Job List Area End -->
      <!--Pagination Start  -->
      <!-- <div class="pagination-area pb-115 text-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="single-wrap d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-start">
                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!--Pagination End  -->

    </main>
  </div>
  <?php include 'applicant_footer.php' ?>
</body>

</html>