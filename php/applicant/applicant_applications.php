<?php
include 'applicant_header.php';
session_start();
$job_data = (object)$_SESSION['application_data'];
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
  <link rel="stylesheet" href="../../css/badge.css">
</head>

<body>
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Applied Jobs</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Applications section start -->
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th> Job </th>
              <th> Company </th>
              <th> Applicant </th>
              <th> Job Type </th>
              <th> Status </th>

            </tr>
          </thead>
          <tbody>
            <form action="" method="post">
              <?php foreach ($job_data as $job) { ?>

                <tr>

                  <td> <?php echo $job->id ?></td>
                  <td> <?php echo $job->title ?></td>
                  <td> <?php echo $job->username ?></td>
                  <td> <?php echo $job->firstname . " " . $job->lastname ?></td>
                  <td> <?php echo $job->job_type ?></td>
                  <td>
                    <?php if ($job->status == 'pending') {
                      echo " <label class='badge badge-gradient-warning'>Pending</label>";
                    } elseif ($job->status == 'rejected') {
                      echo " <label class='badge badge-gradient-danger'>Rejected</label>";
                    } elseif ($job->status == 'hired') {
                      echo " <label class='badge badge-gradient-success'>Rejected</label>";
                    }
                    ?>

                  </td>


                </tr>
              <?php } ?>
            </form>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php include 'applicant_footer.php' ?>
</body>

</html>