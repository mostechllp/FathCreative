<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

include('database.php');

// COUNTS
$totalBlogs    = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as c FROM blogs"))['c'] ?? 0;
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fath Creative Admin Panel</title>

  <link rel="shortcut icon" type="image/png" href="../../assets/img/logo/logo-black.webp" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Dashboard Custom Styles -->
  <style>
    .stat-card {
      border-radius: 18px;
      color: #000;
      transition: all 0.3s ease;
    }

    .stat-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
    }

    .stat-title {
      font-size: 15px;
      opacity: 0.85;
    }

    .stat-count {
      font-size: 34px;
      font-weight: 700;
    }

    .stat-icon {
      font-size: 42px;
      opacity: 0.9;
    }

    .chart-card {
      border-radius: 20px;
    }
  </style>
</head>

<body>

  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
    data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

    <!-- SIDEBAR -->
    <aside class="left-sidebar top-0">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <img src="../../assets/img/logo/logo-black.webp" alt="" style="width:150px;"/>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer">
            <i class="ti ti-x fs-6"></i>
          </div>
        </div>
        <?php include('nav.php'); ?>
      </div>
    </aside>

    <!-- MAIN -->
    <div class="body-wrapper">
      <?php include('header.php'); ?>

      <div class="body-wrapper-inner">
        <div class="container-fluid" style="max-width:1600px;padding-top:120px;">

          <!-- STATS -->
          <div class="row">

            <div class="col-md-4">
              <div class="card stat-card bg-blog">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <div class="stat-title">Projects</div>
                    <div class="stat-count"><?= $totalBlogs ?></div>
                  </div>
                  <div class="stat-icon">
                    <i class="fa-solid fa-blog"></i>
                  </div>
                </div>
              </div>
            </div>

            

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>


</body>

</html>