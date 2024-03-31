<?php
include('companies_header.php');
session_start();
$company = (object)$_SESSION['company_data'];
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
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
</head>

<body>
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Job Post</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="contact-us-form mb-3">
    <div class="container">
      <div class="col-lg-10 offset-lg-1">
        <form id="contact" action="../../controllers/job_post/job_proc.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <label for="title">Job Title:</label><input type="text" name="title" id="title" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <label for="salary">Salary:</label><input type="text" name="salary" id="salary" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <label for="job_type">Job Type:</label><input type="text" name="job_type" id="job_type" required="">
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <label for="job_category">Job Category:</label><input type="text" name="job_category" id="job_category" required="">
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <label for="job_desc">Job Description:</label><input type="text" name="job_desc" id="job_desc" required="">
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="hidden" name="location" id="location" value="<?php echo $company->location ?>" required="">
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="hidden" name="company_id" id="company_id" value="<?php echo $company->id ?>" required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="submit" id="form-submit" class="orange-button" name="action" value="Add Post">
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php include('companies_footer.php') ?>
</body>

</html>