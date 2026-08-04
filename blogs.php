<?php
$pageTitle = "Blogs - Latest Industry News & Insights | Fath Creative";
$pageDescription = "Explore the latest insights on exhibition booth design, real estate exhibitions like Cityscape Global, event management, and marketing solutions in Saudi Arabia.";
$pageKeywords = "Exhibition Stand KSA, Real Estate Exhibition Saudi Arabia, Cityscape Global 2026, Event Management Blog, Fath Creative Blogs";
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
    "name": "Blogs",
    "item": "https://www.fathcreative.com/blogs"  
  }]
}
</script>

<style>
    /* ===== Custom Blog Card & Page Styling ===== */
    .custom-blog-card {
        background: #ffffff;
        border-radius: 20px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .custom-blog-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(15, 23, 42, 0.12);
        border-color: #cbd5e1;
    }
    .blog-card-thumb {
        width: 100%;
        aspect-ratio: 16 / 9;
        overflow: hidden;
        position: relative;
        background: #0f172a;
    }
    .blog-card-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.5s ease;
    }
    .custom-blog-card:hover .blog-card-thumb img {
        transform: scale(1.05);
    }
    .blog-card-content {
        padding: 28px 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        align-items: flex-start;
    }
    .blog-date-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #edf2fe;
        color: #1e3a8a;
        padding: 6px 16px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 18px;
    }
    .blog-date-badge i {
        font-size: 13px;
        color: #1e3a8a;
    }
    .blog-card-title {
        font-size: 18px;
        line-height: 1.45;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 24px;
        text-transform: uppercase;
        letter-spacing: -0.2px;
    }
    .blog-card-title a {
        color: #0f172a;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .blog-card-title a:hover {
        color: #e63946;
    }
    .blog-read-more-btn {
        margin-top: auto;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 24px;
        border: 1.5px solid #0f172a;
        border-radius: 40px;
        color: #0f172a;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.3s ease;
        background: transparent;
    }
    .blog-read-more-btn:hover {
        background: #0f172a;
        color: #ffffff;
        gap: 14px;
    }
</style>

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
                            data-wow-delay="0.3s">Our Blogs</h1>
                        <div class="td-breadcrumb-list wow td-animetion-right" data-wow-duration="1.5s"
                            data-wow-delay="0.3s">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Blogs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-breadcrumb-area-end -->

    <!-- blog-section-start -->
    <div class="td-blog-area pt-90 pb-100 bg-position">
        <div class="container">
            <div class="row">
                
                <!-- Cityscape Global Blog Card -->
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="custom-blog-card">
                        <div class="blog-card-thumb">
                            <a href="blogs/cityscape-global-2026">
                                <img src="assets/img/blog/cityscape_global.webp" alt="Cityscape Global 2026 Saudi Arabia">
                            </a>
                        </div>
                        <div class="blog-card-content">
                            <div class="blog-date-badge">
                                <i class="fa-regular fa-calendar-days"></i>
                                <span>04-08-2026</span>
                            </div>
                            <h3 class="blog-card-title">
                                <a href="blogs/cityscape-global-2026">Tips for a susscessfull brand visibility in Cityscape Global exhibition</a>
                            </h3>
                            <a href="blogs/cityscape-global-2026" class="blog-read-more-btn">
                                <span>Read More</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- blog-section-end -->

</main>

<?php include('footer.php'); ?>
