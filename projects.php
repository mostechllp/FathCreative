<?php 
include('header.php');
include ('adminpanel/database.php');

$sql = "SELECT 
        blogs.*
        FROM blogs
        ORDER BY blogs.id DESC";

$result = mysqli_query($conn, $sql);
?>

<!-- main-area -->
<main>

    <!-- td-breadcrumb-area-start -->
    <div class="td-breadcrumb-area td-breadcrumb-spacing bg-position"
        style="background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url(assets/img/banner/banner4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="td-breadcrumb-title-wrap">
                        <h2 class="td-breadcrumb-title mb-10 wow td-animetion-left" data-wow-duration="1.5s"
                            data-wow-delay="0.3s">Our Projects</h2>
                        <div class="td-breadcrumb-list wow td-animetion-right" data-wow-duration="1.5s"
                            data-wow-delay="0.3s">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="fa-sharp fa-solid fa-angle-right fa-fw"></i></li>
                                <li class="pages">Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-breadcrumb-area-end -->

    <div class="td-blog-area grey-bg-4 pt-140 p-relative z-index-1 fix pb-110">
        <div class="td-hero-4-blur td-team-5-blur"></div>
        <div class="td-hero-4-blur td-hero-4-blur-2 td-team-5-blur-2"></div>
        <div class="container">
            <div class="row">

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="td-blog-item td-blog-5-item mb-30">
                            <a href="project-details.php?id=<?php echo $row['id']; ?>">
                                <div class="td-blog-thumb p-relative fix">
                                    <img class="w-100" src="adminpanel/uploads/projects/<?php echo $row['blog_image']; ?>" alt="" style="height:400px;">
    
                                    <div class="td-blog-content">
    
                                        <h3 class="td-blog-title mb-15">
                                                <?php echo $row['blog_title']; ?>
                                        </h3>
    
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>



</main>
<!-- main-area-end -->
<?php include('footer.php') ?>