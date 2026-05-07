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
    <title>THESAY Pharma Admin Panel - Add Career</title>

    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/logo.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />
    <style>
        .ck-editor__editable ul,
.ck-editor__editable ol {
    padding-left: 40px;
}

.ck-editor__editable ul {
    list-style-type: disc;
}

.ck-editor__editable ol {
    list-style-type: decimal;
}
.ck-content ul {
    list-style: none;
    padding-left: 0;
}

.ck-content ul li {
    position: relative;
    padding-left: 20px;
}

.ck-content ul li::before {
    content: "›";
    position: absolute;
    left: 0;
    color: #000; 
    font-weight: bold;
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

        <div class="body-wrapper-inner">
            <div class="container-fluid" style="max-width:1600px;padding-top:120px;">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Add Career</h3>
                    <a href="careers.php" class="btn btn-primary">
                        <i class="ti ti-left-arrow"></i> Go Back
                    </a>
                </div>

                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="save-career.php">

                            <!-- POSITION -->
                            <div class="mb-3">
                                <label class="form-label">Position</label>
                                <input type="text" class="form-control"
                                       name="position"
                                       placeholder="Enter job position"
                                       required>
                            </div>

                            <!-- DETAILS -->
                            <div class="mb-3">
                                <label class="form-label">Job Details</label>
                                <textarea name="details" id="editor_details" rows="6"></textarea>
                            </div>

                            <!-- JOB TYPE -->
                            <div class="mb-3">
                                <label class="form-label">Job Type</label>
                                <select class="form-control" name="job_type" required>
                                    <option value="">Select Job Type</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract">Contract</option>
                                </select>
                            </div>

                            <!-- LOCATION -->
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control"
                                       name="location"
                                       placeholder="Dubai, UAE"
                                       required>
                            </div>

                            <!-- POSTED DATE -->
                            <div class="mb-3">
                                <label class="form-label">Posted Date</label>
                                <input type="date" class="form-control"
                                       name="posted_date"
                                       required>
                            </div>

                            <!-- LAST DATE -->
                            <div class="mb-3">
                                <label class="form-label">Last Date to Apply</label>
                                <input type="date" class="form-control"
                                       name="last_date_to_apply"
                                       required>
                            </div>

                            <!-- STATUS -->
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Submit
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

<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
<script>
   ClassicEditor.create(
    document.querySelector('#editor_details'),
    {
        placeholder: 'Enter job responsibilities, requirements, and description...',
        list: {
            properties: {
                styles: true,      // A, a, I, i
                startIndex: true,  // Start from any number
                reversed: true     // Reverse list
            }
        },
        toolbar: [
            'heading',
            '|',
            'bold', 'italic', 'underline',
            '|',
            'bulletedList', 'numberedList',
            '|',
            'undo', 'redo'
        ]
    }
).catch(error => console.error(error));

</script>

</body>
</html>
