<?php
include('adminpanel/database.php');

$id = $_GET["id"];

// ✅ Safe query
$sql = "SELECT * FROM blogs WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

// ✅ Fetch data
$row = mysqli_fetch_assoc($result);

// Set Dynamic SEO Tags
$pageTitle = $row['blog_title'] . " | Project Details | Fath Creative";
$pageDescription = substr(strip_tags($row['blog_description']), 0, 160);
$pageKeywords = $row['blog_title'] . ", Fath Creative Project, Exhibition Stand KSA, Event Success";

include('header.php');
?>

<main>

    <div class="td-breadcrumb-area td-breadcrumb-spacing bg-position"
        style="background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url(assets/img/banner/banner4.webp)">
        <div class="container">
            <h2 class="td-breadcrumb-title mb-10"><?php echo $row['blog_title']; ?></h2>
            <div class="td-breadcrumb-list">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><i class="fa-sharp fa-solid fa-angle-right fa-fw"></i></li>
                    <li class="pages"><a href="projects.php">Projects</a></li>
                    <li><i class="fa-sharp fa-solid fa-angle-right fa-fw"></i></li>
                    <li class="pages"><?php echo $row['blog_title']; ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="td-schedule-details-area pt-140 pb-140">
        <div class="container">
            <div class="row">

                <!-- LEFT -->
                <div class="col-lg-8">
                    <div class="td-schedule-details-left mb-40">

                        <div class="td-schedule-details-thumb mb-25">
                            <img class="w-100"
                                src="adminpanel/uploads/projects/<?php echo $row['blog_image']; ?>"
                                style="height:500px;">
                        </div>

                        <div class="td-schedule-details-content">
                            <h2 class="td-schedule-details-title mb-25">
                                <?php echo $row['blog_title']; ?>
                            </h2>

                            <p><?php echo $row['blog_description']; ?></p>

                            <p class="mb-35"><?php echo $row['blog_details']; ?></p>
                        </div>

                    </div>
                </div>

                <!-- RIGHT -->
                <div class="col-lg-4">
                    <div class="td-schedule-details-right ml-40 mb-40">
                        <div class="td-schedule-details-right-list grey-bg mb-40">

                            <h3 class="td-schedule-team-title mb-15">Information</h3>
                            <span class="td-schedule-team-border mb-15"></span>
                            <div class="td-schedule-details-info-list">
                                <ul>

                                    <?php if ($row['blog_date'] != '0000-00-00') { ?>
                                        <li>
                                            <span class="ceta">Date:</span>
                                            <span>
                                                <?php echo date('d-m-Y', strtotime($row['blog_date'])); ?>
                                            </span>
                                        </li>
                                    <?php } ?>

                                    <?php if (!empty($row['blog_location'])) { ?>
                                        <li>
                                            <span class="ceta">Location:</span>
                                            <span><?php echo $row['blog_location']; ?></span>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?php include('footer.php'); ?>