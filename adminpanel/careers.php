<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include 'database.php';

$sql = "SELECT 
            careers.*
        FROM careers
        ORDER BY careers.posted_date DESC";

$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THESAY Pharma Admin Panel - Careers</title>

    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/logo.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />

    <style>
        .blog-table img {
            max-width: 80px;
        }
        .fade-alert {
            transition: opacity .6s ease, transform .6s ease;
        }
        .fade-alert.hide {
            opacity: 0;
            transform: translateY(-10px);
        }
        .status.published {
            background: #e6fff1;
            color: #0f9d58;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .status.draft {
            background: #fff3e0;
            color: #ff9800;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .actions .delete {
            background: #ffe6e6;
            color: #d32f2f;
            padding: 5px 12px;
            border-radius: 4px;
            text-decoration: none;
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
                    <img src="assets/images/logos/logo.png" alt="" />
                </a>
            </div>

             <!-- Sidebar navigation-->
        <?php include('nav.php');?>
        <!-- End Sidebar navigation -->
        </div>
    </aside>
    <!-- END SIDEBAR -->

    <div class="body-wrapper">
        <!-- HEADER -->
        <?php include('header.php');?>
        <!-- END HEADER -->

        <div class="body-wrapper-inner">
            <div class="container-fluid" style="max-width:1600px;padding-top:120px;">

                <!-- SUCCESS / ERROR MESSAGES -->
                <?php if (!empty($_SESSION['success'])) { ?>
                    <div class="alert alert-success text-success fade-alert">
                        <?= $_SESSION['success']; ?>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php } ?>

                <?php if (!empty($_SESSION['error'])) { ?>
                    <div class="alert alert-danger text-danger fade-alert">
                        <?= $_SESSION['error']; ?>
                    </div>
                    <?php unset($_SESSION['error']); ?>
                <?php } ?>

                <!-- PAGE HEADER -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Careers</h3>
                    <a href="add-career.php" class="btn btn-primary">
                        <i class="ti ti-plus"></i> Add New
                    </a>
                </div>

                <!-- TABLE -->
                <div class="table-container">
                    <table class="blog-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Position</th>
                            <th>Job Type</th>
                            <th>Location</th>
                            <th>Posted Date</th>
                            <th>Last Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            $i = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?= ++$i ?></td>
                                <td><?= htmlspecialchars($row['position']); ?></td>
                                <td><?= htmlspecialchars($row['job_type']); ?></td>
                                <td><?= htmlspecialchars($row['location']); ?></td>
                                <td><?= $row['posted_date']; ?></td>
                                <td><?= $row['last_date_to_apply']; ?></td>
                                <td>
                                    <span class="status <?= $row['status'] == 'active' ? 'published' : 'draft'; ?>">
                                        <?= ucfirst($row['status']); ?>
                                    </span>
                                </td>
                                <td class="actions">
                                    <a href="delete-career.php?id=<?= $row['id']; ?>"
                                       class="delete"
                                       onclick="return confirm('Are you sure you want to delete this job?');">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }
                        } else {
                            echo '<tr><td colspan="9" class="text-center">No careers found</td></tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
<script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/sidebarmenu.js"></script>
<script src="./assets/js/app.min.js"></script>

<script>
    setTimeout(function () {
        document.querySelectorAll('.fade-alert').forEach(function (el) {
            el.classList.add('hide');
            setTimeout(() => el.remove(), 600);
        });
    }, 3000);
</script>

</body>
</html>
