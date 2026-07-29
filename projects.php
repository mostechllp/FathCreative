<?php 
$pageTitle = "Fath Creative Projects - Branding and Exhibition Works";
$pageDescription = "View our portfolio of successful projects including exhibitions for Basamh, NUEVO at LEAP 2025, Nespresso activations, and more across KSA.";
$pageKeywords = "Exhibition Portfolio Saudi Arabia, Event Gallery Riyadh, Branding Project Case Studies";
include('header.php'); 
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Projects",
    "item": "https://www.fathcreative.com/projects"  
  }]
}
</script>
<?php
include('adminpanel/database.php');
include('helpers.php');

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
        style="background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url(assets/img/banner/banner4.webp)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="td-breadcrumb-title-wrap">
                        <h1 class="td-breadcrumb-title mb-10 wow td-animetion-left" data-wow-duration="1.5s"
                            data-wow-delay="0.3s">Our Projects</h1>
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

    <div class="td-blog-area grey-bg-4 pt-80 p-relative z-index-1 fix pb-110">
        <div class="td-hero-4-blur td-team-5-blur"></div>
        <div class="td-hero-4-blur td-hero-4-blur-2 td-team-5-blur-2"></div>
        <div class="container">
            <div class="row justify-content-center mb-50">
                <div class="col-lg-10 text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <h5 class="para" style="font-size: 30px;">Fath Creative Project Gallery</h5>
                    <p class="para mt-20" style="text-align:justify; font-size: 16px; color: #666; line-height: 1.8;">
                        Our finest work in exhibition stand design, event management, and brand activations across Saudi Arabia, including Riyadh, Jeddah, and Dammam. We take immense pride in delivering high-quality, innovative, and impactful solutions for our clients. Over the years, our dedicated team of designers, fabricators, and event planners has successfully executed numerous large-scale projects, helping renowned brands elevate their market presence and connect meaningfully with their target audiences. From custom-built trade show booths that capture attention on the exhibition floor, to engaging point-of-sale materials (POSM) and dynamic promotional activities, our portfolio reflects our commitment to excellence and creativity. Each project is a testament to our meticulous attention to detail, strategic planning, and flawless execution. We collaborate closely with our partners to ensure every event, exhibition, and brand activation is not only visually stunning but also aligns perfectly with their marketing objectives. Browse through our successful case studies below to see how Fath Creative transforms concepts into remarkable brand experiences. Whether you are planning your next corporate event or looking to dominate the next big trade show in KSA, we are here to turn your vision into reality.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="td-blog-item td-blog-5-item mb-30">
                            <a href="projects/<?php echo $row['slug']; ?>">
                                <div class="td-blog-thumb p-relative fix">
                                    <img class="w-100" src="adminpanel/uploads/projects/<?php echo $row['blog_image']; ?>" alt="<?php echo htmlspecialchars($row['blog_title']); ?>" style="height:400px;">
    
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

