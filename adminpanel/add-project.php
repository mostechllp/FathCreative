<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THESAY Pharma Admin Panel</title>
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
                <?php include('nav.php'); ?>
                <!-- End Sidebar navigation -->
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php include('header.php'); ?>
            <!--  Header End -->
            <div class="body-wrapper-inner">
                <div class="container-fluid" style="max-width:1600px!important;padding-top:120px;">
                    <!--  Row 1 -->
                    <div class="row">
                        <div class="d-flex justify-content-between align-items-center">
                                <h3>Add Project</h3>
                                <a href="projects.php" class="btn btn-primary m-1"><i class="ti ti-left-arrow"></i> Go Back</a>
                            </div>
                        <div class="col-md-8 col-12">
                            
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form method="POST" action="save-blog.php" enctype="multipart/form-data">
    
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" name="blog_title"
                                                placeholder="Enter Title of the Blog" required>
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="blog_description" id="editor_description" rows="3"></textarea>
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Other Details</label>
                                            <textarea name="blog_details" id="editor_details" rows="8"></textarea>
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Date</label>
                                            <input type="date" class="form-control" name="blog_date" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" name="blog_location"
                                                placeholder="Enter location">
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control" name="blog_image" accept="image/*" required>
                                        </div>
    
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
    
                                </div>
    
                            </div>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(
            document.querySelector('#editor_description'), {
                placeholder: 'Enter short description here...'
            }
        ).catch(error => console.error(error));

        ClassicEditor.create(
            document.querySelector('#editor_details'), {
                placeholder: 'Enter detailed content here...'
            }
        ).catch(error => console.error(error));
    </script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>