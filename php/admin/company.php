<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/fontawesome.css">
  <link rel="stylesheet" href="../../css/template.css">
  <link rel="stylesheet" href="../../css/owl.css">
  <link rel="stylesheet" href="../../css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
</head>

<body>
  <?php include('navbar.php') ?>
  <main class="main">
    <section class="contact-us-form mb-3">
      <div class="container">
        <div class="col-lg-10 offset-lg-1">
          <form id="contact" action="../../controllers/companies/companies_proc.php" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <label for="comp_name">Company Name:</label><input type="text" name="comp_name" id="comp_name" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="industry">Industry:</label><input type="text" name="industry" id="industry" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="location">Location:</label><input type="text" name="location" id="location" required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="email">Company Email:</label><input type="email" name="email" id="email" required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="website">Company Website:</label><input type="text" name="website" id="website" required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="description">Brief Description:</label><input type="text" name="description" id="description" required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="password">Password:</label><input type="password" name="password" id="password">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="submit" id="form-submit" class="orange-button" name="action" value="Register">
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
</body>

</html>