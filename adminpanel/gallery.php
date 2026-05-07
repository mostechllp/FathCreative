<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include 'database.php';

$sql = "SELECT * FROM gallery ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THESAY Pharma Admin Panel - Gallery</title>

    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/logo.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />

    <style>
        .gallery-img {
            width: 90px;
            height: 65px;
            object-fit: cover;
            border-radius: 6px;
        }
        .fade-alert {
            transition: opacity .6s ease, transform .6s ease;
        }
        .fade-alert.hide {
            opacity: 0;
            transform: translateY(-10px);
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
                    <img src="assets/images/logos/logo.png" alt="">
                </a>
            </div>

            <?php include('nav.php'); ?>
        </div>
    </aside>
    <!-- END SIDEBAR -->

    <div class="body-wrapper">
        <!-- HEADER -->
        <?php include('header.php');?>
        <!-- END HEADER -->

        <div class="body-wrapper-inner">
            <div class="container-fluid" style="max-width:1600px;padding-top:120px;">

                <!-- SESSION MESSAGES -->
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
                    <h3>Gallery Images</h3>
                    <a href="add-gallery.php" class="btn btn-primary">
                        <i class="ti ti-plus"></i> Add Image
                    </a>
                </div>

                <!-- TABLE -->
                <div class="table-container">
                    <table class="blog-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Show On Home</th>
                            <th>Created At</th>
                            <th>Updated At</th>
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
                                <td><?= ++$i; ?></td>
                                <td>
                                    <img src="uploads/gallery/<?= htmlspecialchars($row['image']); ?>"
                                         class="gallery-img">
                                </td>
                                 <td> 
                                <form method="POST" action="toggle-home-image.php">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="status" value="<?php echo $row['status']; ?>">
                        
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   name="status"
                                                   onchange="this.form.submit()"
                                                   <?php if ($row['status'] == 1) echo 'checked'; ?>>
                                        </div>
                                </form></td>
                                <td><?= $row['created_at']; ?></td>
                                <td><?= $row['updated_at'] ?? '-'; ?></td>
                                <td class="actions">
                                    <a href="delete-gallery.php?id=<?= $row['id']; ?>"
                                       class="delete"
                                       onclick="return confirm('Are you sure you want to delete this image?');">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }
                        } else {
                            echo '<tr><td colspan="5" class="text-center">No images found</td></tr>';
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
