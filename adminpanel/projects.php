<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include 'database.php';

$sql = "SELECT 
        blogs.*
        FROM blogs
        ORDER BY blogs.id DESC";

$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fath Creative Admin Panel</title>
    <link rel="shortcut icon" type="image/png" href="../../assets/img/logo/logo-black.webp" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar top-0">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="index.php" class="text-nowrap logo-img">
                        <img src="../../assets/img/logo/logo-black.webp" alt="" style="width:150px;"/>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-6"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                 <!-- Sidebar navigation-->
        <?php include('nav.php');?>
        <!-- End Sidebar navigation -->
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php include('header.php');?>
            <!--  Header End -->
            <div class="body-wrapper-inner">
                <div class="container-fluid" style="max-width:1600px!important;padding-top:120px;">

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


                    <!--  Row 1 -->
                    <div class="row">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>Projects</h3>
                            <a href="add-project.php" class="btn btn-primary m-1"><i class="ti ti-plus"></i> Add New</a>
                        </div>
                        <div class="table-container mt-2">
                             <?php
                                    if (mysqli_num_rows($result) > 0) {
                                      ?>
                            <table class="blog-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th width="10%">Date</th>
                                        <th>Location</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                     $a = 0;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>
                                                <td><?= ++$a ?></td>
                                                <td><?php if($row['blog_date']!='0000-00-00'){ echo date('d-m-Y', strtotime($row['blog_date'])); } ?> - <?php if($row['end_date']!='0000-00-00'){ echo date('d-m-Y', strtotime($row['end_date'])); } ?></td>
                                                <td><?php echo $row['blog_location']; ?></td>
                                                <td>
                                                    <img src="uploads/projects/<?php echo $row['blog_image']; ?>" alt="Blog Image" style="width:100px;height:100px;">
                                                </td>
                                                <td><?php echo $row['blog_title']; ?></td>
                                                <td><?php echo $row['blog_description']; ?></td>
                                                <td class="actions">
                                                    <a href="edit-project.php?id=<?= $row['id']; ?>" class="btn btn-primary" style="margin-right: 5px;">Edit</a>
                                                    <a href="delete-blog.php?id=<?= $row['id']; ?>"
                                                        class="btn delete"
                                                        onclick="return confirm('Are you sure you want to delete this project?');">
                                                        Delete
                                                    </a>
                                                </td>

                                            </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php } else {?>
                                <p class="text-center p-4">No records found...</p>
                           <?php  }?>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/sidebarmenu.js"></script>
    <script src="./assets/js/app.min.js"></script>
    <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="./assets/js/dashboard.js"></script>
    <script>
        setTimeout(function() {
            document.querySelectorAll('.fade-alert').forEach(function(el) {
                el.classList.add('hide');
                setTimeout(() => el.remove(), 600); // remove after fade
            });
        }, 3000); // 3 seconds
    </script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>