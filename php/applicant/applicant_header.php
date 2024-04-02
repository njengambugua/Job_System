<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
</head>

<body>
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="../../index.php" class="logo">
              <img src="../../images/logo.png" alt="">
            </a>
            <ul class="nav">
              <li class="scroll-to-section"><a href="applicant.php">Home</a></li>
              <li class="scroll-to-section"><a href="../about.php">Career Tips</a></li>
              <li class="scroll-to-section"><a href="../../controllers/job_application/job_apply_proc.php?applicant_id=<?php echo $_SESSION['userdata']->id ?>">My Applications</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">
                  <div class="top-nav">
                    <div class="avatar-holder">
                      <img src="../../images/yellow_grt.jpg" alt="profile image" />
                    </div>
                  </div>
                </a>
                <ul class="sub-menu">
                  <li><a href="applicant_profile.php">Profile</a></li>
                  <li><a href="../logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>
</body>

</html>