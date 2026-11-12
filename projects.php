<?php 
$pageTitle = "Fath Creative Projects - Branding and Exhibition Works";
$pageDescription = "View our portfolio of successful projects including exhibitions for Basamh, NUEVO at LEAP 2025, Nespresso activations, and more across KSA.";
$pageKeywords = "Exhibition Portfolio Saudi Arabia, Event Gallery Riyadh, Branding Project Case Studies";
$canonicalUrl = "https://www.fathcreative.com/projects";
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

            <!-- 3-Column Video Showcase (Click-to-Play Popup Modal) -->
            <style>
                .pro-video-card {
                    border-radius: 20px;
                    overflow: hidden;
                    background: #0d0d14;
                    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.10);
                    aspect-ratio: 16 / 9;
                    position: relative;
                    cursor: pointer;
                    transition: transform 0.35s ease, box-shadow 0.35s ease;
                }
                .pro-video-card:hover {
                    transform: translateY(-6px);
                    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
                }
                .pro-video-thumb {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    display: block;
                    transition: transform 0.45s ease;
                }
                .pro-video-card:hover .pro-video-thumb {
                    transform: scale(1.05);
                }
                .pro-video-overlay {
                    position: absolute;
                    inset: 0;
                    background: linear-gradient(180deg, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0.45) 100%);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: background 0.3s ease;
                    z-index: 2;
                }
                .pro-video-card:hover .pro-video-overlay {
                    background: linear-gradient(180deg, rgba(0,0,0,0.25) 0%, rgba(0,0,0,0.6) 100%);
                }
                .pro-video-play-btn {
                    width: 62px;
                    height: 62px;
                    line-height: 62px;
                    background: #ffffff;
                    color: #111111;
                    border: none;
                    border-radius: 50%;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
                    transition: transform 0.3s ease, background 0.3s ease, color 0.3s ease;
                }
                .pro-video-play-btn svg {
                    margin-left: 3px; /* visual center for play triangle */
                    transition: transform 0.3s ease;
                }
                .pro-video-card:hover .pro-video-play-btn {
                    transform: scale(1.12);
                    background: var(--td-theme-primary, #F248B4);
                    color: #ffffff;
                }
                .pro-video-card:hover .pro-video-play-btn svg path {
                    fill: #ffffff;
                }
                .pro-video-title-badge {
                    position: absolute;
                    bottom: 14px;
                    left: 16px;
                    right: 16px;
                    color: #ffffff;
                    font-size: 14px;
                    font-weight: 600;
                    font-family: var(--td-ff-poppins, sans-serif);
                    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);
                    pointer-events: none;
                    z-index: 3;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }

                /* Video Popup Modal (Floating Dialog, Not Full Screen) */
                .pro-video-modal-overlay {
                    position: fixed;
                    inset: 0;
                    background: rgba(0, 0, 0, 0.85);
                    backdrop-filter: blur(8px);
                    -webkit-backdrop-filter: blur(8px);
                    z-index: 999999;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 20px;
                    opacity: 0;
                    visibility: hidden;
                    transition: opacity 0.3s ease, visibility 0.3s ease;
                }
                .pro-video-modal-overlay.is-active {
                    opacity: 1;
                    visibility: visible;
                }
                .pro-video-modal-card {
                    width: 100%;
                    max-width: 960px;
                    background: #111118;
                    border: 1px solid rgba(255, 255, 255, 0.14);
                    border-radius: 20px;
                    overflow: hidden;
                    box-shadow: 0 25px 70px rgba(0, 0, 0, 0.75);
                    transform: scale(0.92);
                    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
                    position: relative;
                }
                .pro-video-modal-overlay.is-active .pro-video-modal-card {
                    transform: scale(1);
                }
                .pro-video-modal-header {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 14px 22px;
                    background: #171722;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
                }
                .pro-video-modal-title {
                    font-family: var(--td-ff-poppins, sans-serif);
                    font-size: 16px;
                    font-weight: 600;
                    color: #ffffff;
                    margin: 0;
                }
                .pro-video-modal-close {
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    border: 1px solid rgba(255, 255, 255, 0.15);
                    background: rgba(255, 255, 255, 0.06);
                    color: #ffffff;
                    font-size: 24px;
                    line-height: 1;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    transition: all 0.25s ease;
                }
                .pro-video-modal-close:hover {
                    background: var(--td-theme-primary, #F248B4);
                    border-color: var(--td-theme-primary, #F248B4);
                    transform: rotate(90deg);
                }
                .pro-video-modal-body {
                    aspect-ratio: 16 / 9;
                    width: 100%;
                    background: #000000;
                    position: relative;
                }
                .pro-video-modal-body video {
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                    outline: none;
                }
                @media (max-width: 575px) {
                    .pro-video-modal-overlay {
                        padding: 12px;
                    }
                    .pro-video-modal-header {
                        padding: 10px 16px;
                    }
                    .pro-video-modal-title {
                        font-size: 14px;
                    }
                    .pro-video-play-btn {
                        width: 50px;
                        height: 50px;
                        line-height: 50px;
                    }
                }
            </style>
            <?php
            $projectVideos = [
                [
                    'title'  => 'Our Work Showcase',
                    'mp4'    => 'assets/pro-video/our-work.mp4',
                    'poster' => 'assets/pro-video/our-work-poster.webp',
                ],
                [
                    'title'  => 'Project Showcase Highlight',
                    'mp4'    => 'assets/pro-video/showcase-project.mp4',
                    'poster' => 'assets/pro-video/showcase-project-poster.webp',
                ],
                [
                    'title'  => 'Event & Exhibition Production',
                    'mp4'    => 'assets/pro-video/showcase-project%202.mp4',
                    'poster' => 'assets/pro-video/showcase-project-2-poster.webp',
                ],
            ];
            ?>
            <div class="row g-4 justify-content-center mb-50">
                <?php foreach ($projectVideos as $video) { ?>
                    <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                        <div class="pro-video-card"
                             role="button"
                             tabindex="0"
                             aria-label="Play <?php echo htmlspecialchars($video['title']); ?>"
                             data-video-src="<?php echo $video['mp4']; ?>"
                             data-video-poster="<?php echo $video['poster']; ?>"
                             data-video-title="<?php echo htmlspecialchars($video['title']); ?>">
                            <img
                                src="<?php echo $video['poster']; ?>"
                                alt="<?php echo htmlspecialchars($video['title']); ?>"
                                class="pro-video-thumb"
                                loading="lazy"
                                width="640"
                                height="360">
                            <div class="pro-video-overlay">
                                <button type="button" class="pro-video-play-btn td-pulse-border" aria-label="Play video">
                                    <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.8571 12L0.571429 23.1346L0.57143 0.865352L19.8571 12Z" fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                            <div class="pro-video-title-badge">
                                <i class="fa-solid fa-circle-play me-1"></i> <?php echo htmlspecialchars($video['title']); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Video Popup Modal (Not Full Screen) -->
            <div id="proVideoModal" class="pro-video-modal-overlay" role="dialog" aria-modal="true" aria-hidden="true" aria-labelledby="proVideoModalTitle">
                <div class="pro-video-modal-card" id="proVideoModalCard">
                    <div class="pro-video-modal-header">
                        <h4 id="proVideoModalTitle" class="pro-video-modal-title">Project Video</h4>
                        <button type="button" class="pro-video-modal-close" id="proVideoModalClose" aria-label="Close video popup">&times;</button>
                    </div>
                    <div class="pro-video-modal-body">
                        <video id="proModalPlayer" controls playsinline preload="auto"></video>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var modal = document.getElementById('proVideoModal');
                    var modalCard = document.getElementById('proVideoModalCard');
                    var modalTitle = document.getElementById('proVideoModalTitle');
                    var modalPlayer = document.getElementById('proModalPlayer');
                    var modalClose = document.getElementById('proVideoModalClose');
                    var cards = document.querySelectorAll('.pro-video-card');

                    // Open Video Popup Modal — MP4 only
                    function openVideoModal(src, title, poster) {
                        if (!modal || !modalPlayer) return;

                        modalTitle.textContent = title || 'Project Video';
                        modalPlayer.poster = poster || '';
                        modalPlayer.src = src;
                        modalPlayer.currentTime = 0;
                        modalPlayer.load();

                        modal.classList.add('is-active');
                        modal.setAttribute('aria-hidden', 'false');
                        document.body.style.overflow = 'hidden';

                        var playPromise = modalPlayer.play();
                        if (playPromise && typeof playPromise.catch === 'function') {
                            playPromise.catch(function () {});
                        }
                    }

                    // Close Video Popup Modal
                    function closeVideoModal() {
                        if (!modal || !modalPlayer) return;

                        modalPlayer.pause();
                        modalPlayer.removeAttribute('src');
                        modalPlayer.load();

                        modal.classList.remove('is-active');
                        modal.setAttribute('aria-hidden', 'true');
                        document.body.style.overflow = '';
                    }

                    // Bind Card click and keyboard activation
                    cards.forEach(function (card) {
                        function handleTrigger(e) {
                            e.preventDefault();
                            var src = card.getAttribute('data-video-src');
                            var title = card.getAttribute('data-video-title');
                            var poster = card.getAttribute('data-video-poster');
                            openVideoModal(src, title, poster);
                        }

                        card.addEventListener('click', handleTrigger);
                        card.addEventListener('keydown', function (e) {
                            if (e.key === 'Enter' || e.key === ' ') {
                                handleTrigger(e);
                            }
                        });
                    });

                    // Modal close events
                    if (modalClose) {
                        modalClose.addEventListener('click', function (e) {
                            e.stopPropagation();
                            closeVideoModal();
                        });
                    }

                    // Click outside card (on dark backdrop) closes modal
                    if (modal) {
                        modal.addEventListener('click', function (e) {
                            if (!modalCard.contains(e.target)) {
                                closeVideoModal();
                            }
                        });
                    }

                    // Escape key closes modal
                    document.addEventListener('keydown', function (e) {
                        if (e.key === 'Escape' && modal && modal.classList.contains('is-active')) {
                            closeVideoModal();
                        }
                    });
                });
            </script>

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

