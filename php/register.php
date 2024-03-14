<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body>

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Registration</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="contact-us-form mb-3">
    <div class="container">
      <div class="col-lg-10 offset-lg-1">
        <form id="contact" action="../controllers/user/user_proc.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <label for="firstname">First Name:</label><input type="text" name="firstname" id="firstname" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <label for="lastname">Last Name:</label><input type="text" name="lastname" id="lastname" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <label for="username">Username:</label><input type="text" name="username" id="username" required="">
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <label for="email">Email:</label><input type="email" name="email" id="email" required="">
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <label for="phone">Phone Number:</label><input type="text" name="phone" id="phone" required="">
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

  <?php include 'footer.php' ?>
</body>

</html>