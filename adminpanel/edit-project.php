<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';

if (!isset($_GET['id'])) {
    header("Location: projects.php");
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM blogs WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    header("Location: projects.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Project - Admin Panel</title>
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
                <?php include('nav.php'); ?>
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
                                <h3>Edit Project</h3>
                                <a href="projects.php" class="btn btn-primary m-1"><i class="ti ti-left-arrow"></i> Go Back</a>
                            </div>
                        <div class="col-md-8 col-12">
                            
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form method="POST" action="update-blog.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
    
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" name="blog_title"
                                                value="<?= htmlspecialchars($row['blog_title']) ?>">
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="blog_description" id="editor_description" rows="3"><?= htmlspecialchars($row['blog_description']) ?></textarea>
                                        </div>
                                        
                                         <div class="mb-3">
                                            <label class="form-label">Blog Meta Title</label>
                                            <textarea class="form-control" name="blog_meta_title" rows="3"><?= htmlspecialchars($row['blog_meta_title']) ?></textarea>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Blog Meta Description</label>
                                            <textarea class="form-control" name="blog_meta_description" rows="3"><?= htmlspecialchars($row['blog_meta_description']) ?></textarea>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Slug for URL</label>
                                            <textarea class="form-control" name="slug" rows="3"><?= htmlspecialchars($row['slug']) ?></textarea>
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Other Details</label>
                                            <textarea name="blog_details" id="editor_details" rows="8"><?= htmlspecialchars($row['blog_details']) ?></textarea>
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Start Date</label>
                                            <input type="date" class="form-control" name="blog_date" value="<?= $row['blog_date'] ?>">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">End Date</label>
                                            <input type="date" class="form-control" name="end_date" value="<?= $row['end_date'] ?>">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" name="blog_location"
                                                value="<?= htmlspecialchars($row['blog_location']) ?>">
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Update Image (Leave blank to keep current image)</label>
                                            <br>
                                            <?php if ($row['blog_image']) { ?>
                                                <img src="uploads/projects/<?= $row['blog_image'] ?>" style="width:150px; margin-bottom:10px;">
                                            <?php } ?>
                                            <input type="file" class="form-control" name="blog_image" accept="image/*">
                                        </div>
    
                                        <button type="submit" class="btn btn-primary">Update Project</button>
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
            document.querySelector('#editor_description')
        ).catch(error => console.error(error));

        ClassicEditor.create(
            document.querySelector('#editor_details')
        ).catch(error => console.error(error));
    </script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
