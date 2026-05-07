<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THESAY Pharma Admin Panel - Add Gallery</title>

    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/logo.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />

    <style>
        .preview img {
            width: 90px;
            height: 70px;
            object-fit: cover;
            border-radius: 6px;
            margin: 5px;
            border: 1px solid #ddd;
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
            <?php include('nav.php'); ?>
            <!-- End Sidebar navigation -->
        </div>
    </aside>
    <!-- END SIDEBAR -->

    <div class="body-wrapper">
        <!-- HEADER -->
        <?php include('header.php');?>

        <div class="body-wrapper-inner">
            <div class="container-fluid" style="max-width:1600px;padding-top:120px;">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Add Gallery Images</h3>
                    <a href="gallery.php" class="btn btn-primary">
                        <i class="ti ti-left-arrow"></i> Go Back
                    </a>
                </div>

                <div class="card">
                    <div class="card-body">

                        <!-- SESSION MESSAGES -->
                        <?php if (!empty($_SESSION['error'])) { ?>
                            <div class="alert alert-danger">
                                <?= $_SESSION['error']; ?>
                            </div>
                            <?php unset($_SESSION['error']); ?>
                        <?php } ?>
                        <?php if (!empty($_SESSION['success'])) { ?>
                            <div class="alert alert-success">
                                <?= $_SESSION['success']; ?>
                            </div>
                            <?php unset($_SESSION['success']); ?>
                        <?php } ?>

                        <!-- FORM -->
                        <form method="POST" action="save-gallery.php" enctype="multipart/form-data">

                            <!-- MULTIPLE IMAGES -->
                            <div class="mb-3">
                                <label class="form-label">Select Images</label>
                                <input type="file" class="form-control"
                                       name="gallery_images[]"
                                       multiple
                                       accept="image/*"
                                       required>
                                <small class="text-muted">You can upload multiple images at once.</small>
                            </div>

                            <!-- PREVIEW -->
                            <div class="preview d-flex flex-wrap"></div>

                            <button type="submit" class="btn btn-primary mt-3">
                                Upload Images
                            </button>

                        </form>

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

<script>
    // Live preview of selected images
    document.querySelector('input[name="gallery_images[]"]').addEventListener('change', function () {
        const preview = document.querySelector('.preview');
        preview.innerHTML = '';
        [...this.files].forEach(file => {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            preview.appendChild(img);
        });
    });
</script>

</body>
</html>
