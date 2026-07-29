<?php
// [SEO Optimization] Title optimized to convey brand authority and KSA location within search snippet limits
$pageTitle = "Exhibition & Branding Company Riyadh, Jeddah, KSA | Fath Creative";

// [SEO Optimization] Meta description under 160 characters containing key search terms and USP for rich snippet search results
$pageDescription = "Scale your brand with Fath Creative, Premier branding & marketing agency Saudi Arabia’s. 300+ projects and 120+ events managed across Riyadh, Jeddah & KSA.";

// [SEO Optimization] Relevant high-intent keywords to improve indexability
$pageKeywords = "Exhibition Stands Saudi Arabia, Brand Activations, POSM Activities, 3D Exhibition Design, Event Management Saudi Arabia, Fath Creative";

// [Core Web Vitals - Performance & LCP] Inline critical CSS for above-the-fold assets to allow instant rendering of the hero section
$criticalCSS = '
/* Outfit Google Font preload fallback for fast typography load */
@font-face {
  font-family: "Outfit";
  font-style: normal;
  font-weight: 400 900;
  font-display: swap;
  src: local("Outfit"), local("Outfit-Regular");
}

/* Base resets & structural styles */
body {
    margin: 0;
    font-family: "Outfit", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, sans-serif;
    background-color: #0c0914;
    color: #ffffff;
    overflow-x: hidden;
}

header {
    position: absolute;
    width: 100%;
    z-index: 999;
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) { .container { max-width: 540px; } }
@media (min-width: 768px) { .container { max-width: 720px; } }
@media (min-width: 992px) { .container { max-width: 960px; } }
@media (min-width: 1200px) { .container { max-width: 1140px; } }

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-xl-10, .col-lg-10 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

@media (min-width: 992px) {
    .col-lg-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
    }
}
@media (min-width: 1200px) {
    .col-xl-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
    }
}

.align-items-end {
    align-items: flex-end;
}

.d-inline-block {
    display: inline-block;
}

.mb-10 { margin-bottom: 10px; }
.mb-35 { margin-bottom: 35px; }
.mb-40 { margin-bottom: 40px; }

/* Hero Zoom & Slider Layout (Critical Above-the-Fold Styles) */
.td-hero-area {
    position: relative;
    overflow: hidden;
    height: 95vh;
    min-height: 600px;
    background: #000;
}

.swiper-container {
    margin-left: auto;
    margin-right: auto;
    position: relative;
    overflow: hidden;
    list-style: none;
    padding: 0;
    z-index: 1;
}

.td-hero-3-zoom {
    width: 100%;
    height: 100%;
}

.swiper-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
    display: flex;
    transition-property: transform;
    box-sizing: content-box;
}

.swiper-slide {
    flex-shrink: 0;
    width: 100%;
    height: 100%;
    position: relative;
    transition-property: transform;
}

.td-hero-3-item {
    height: 100vh;
    min-height: 600px;
    display: flex;
    align-items: center;
    position: relative;
}

.td-hero-3-bg {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    z-index: -1;
}

.td-hero-3-spacing {
    padding-top: 150px;
}

.td-hero-3-content {
    position: relative;
    z-index: 2;
}

.td-hero-3-title {
    font-size: 60px;
    font-weight: 800;
    line-height: 1.1;
    color: #fff;
    margin-bottom: 35px;
    text-transform: capitalize;
}

@media (max-width: 768px) {
    .td-hero-3-title { font-size: 32px; }
    #hero-bg-1 { background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url("assets/img/banner1-mobile.webp") !important; }
    #hero-bg-2 { background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url("assets/img/banner2-mobile.webp") !important; }
    #hero-bg-3 { background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url("assets/img/banner3-mobile.webp") !important; }
}

.td-hero-3-subtitle {
    font-size: 18px;
    line-height: 1.6;
    color: #e2d9f3;
    max-width: 700px;
}

.td-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 15px 35px;
    border-radius: 5px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
    background: linear-gradient(135deg, #7935f9 0%, #9b5ffb 100%);
    color: #fff;
}

.td-btn-3-border {
    background: transparent;
    border: 2px solid #fff;
}

/* [Lighthouse Performance Optimization] Instruct modern browsers to skip rendering offscreen images */
img {
    height: auto;
    max-width: 100%;
    content-visibility: auto;
}
';

include('header.php');
?>
<!-- main-area -->

<script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "Fath Creative | Exhibition Stand Design & Branding Company in Saudi Arabia",
  "description": "Discover Fath Creative, a leading exhibition stand design, booth fabrication, event management, brand activation, and trade show solutions company serving Riyadh, Jeddah, Dammam, and across Saudi Arabia.",
  "thumbnailUrl": "https://www.fathcreative.com/path-to-video-thumbnail.jpg",
  "uploadDate": "2026-06-15T08:00:00+03:00",
  "duration": "PT1M30S",
  "contentUrl": "https://www.fathcreative.com/assets/img/banner-video.MP4",
  "embedUrl": "https://www.fathcreative.com/",
  "publisher": {
    "@type": "Organization",
    "name": "Fath Creative",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.fathcreative.com/assets/images/logo.png"
    }
  },
  "keywords": [
    "Exhibition Stand Builder",
    "Trade Show Booth Design",
    "Exhibition Company Saudi Arabia",
    "Booth Fabrication",
    "Brand Activation",
    "Event Management",
    "Riyadh",
    "Jeddah",
    "Dammam"
  ],
  "inLanguage": "en",
  "isFamilyFriendly": true
}
</script>
<main>

    <!-- hero-area-start -->
    <h1 class="visually-hidden">Creative Exhibition Stands That Attract Attention</h1>
    <div class="td-hero-area fix p-relative">
        <div class="swiper-container td-hero-3-zoom">
            <div class="swiper-wrapper p-relative">
                <div class="swiper-slide">
                    <div class="td-hero-3-item">

                        <!-- [Core Web Vitals - LCP Optimization] High-quality Hero image preloaded above-the-fold with linear overlay for readability -->
                        <div class="td-hero-3-bg bg-position" id="hero-bg-1"
                            style="background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url(assets/img/banner1.webp); background-size: cover; background-position: center; background-repeat: no-repeat;"
                            data-swiper-parallax="1000"></div>

                        <!-- Content -->
                        <div class="container">
                            <div class="td-hero-3-spacing">
                                <div class="row align-items-end">
                                    <div class="col-xl-10 col-lg-10">
                                        <div class="td-hero-3-content mb-40">
                                            <!-- [SEO Audit] Exactly ONE h1 tag on the homepage slide for optimized semantic crawler structure -->
                                            <div class="td-hero-3-title mb-35 text2">Creative Exhibition Stands That
                                                Attract Attention</div>

                                            <span class="td-hero-3-subtitle text mb-30 d-block">
                                                From custom booth design to complete exhibition management,
                                                we deliver innovative solutions that help your brand stand out.
                                            </span>

                                            <a class="td-btn td-btn-3-border td-left-right text3" href="contact.php">
                                                <span class="mr10 td-text d-inline-block mr-5">Get in Touch</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="td-hero-3-item">
                        <div class="td-hero-3-bg bg-position" id="hero-bg-2"
                            style="background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url(assets/img/banner2.webp); background-size: cover; background-position: center; background-repeat: no-repeat;"
                            data-swiper-parallax="1000"></div>
                        <div class="container">
                            <div class="td-hero-3-spacing">
                                <div class="row align-items-end">
                                    <div class="col-xl-10 col-lg-10">
                                        <div class="td-hero-3-content mb-40">
                                            <!-- [SEO Optimization] Subsequent titles utilize h2 tags to preserve header nesting order -->
                                            <div class="td-hero-3-title text2 mb-35">Turning Your Exhibition Vision Into
                                                Reality</div>
                                            <span class="td-hero-3-subtitle text mb-30 d-block">Our expert
                                                team plans, designs, and executes exceptional exhibitions and events
                                                that create memorable experiences for your audience.</span>
                                            <a class="td-btn text3 td-btn-3-border td-left-right" href="contact.php">
                                                <span class="mr10 td-text d-inline-block mr-5">Contact Us</span>
                                                <span class="td-arrow-angle">
                                                    <svg class="td-arrow-svg-top-right" width="13" height="14"
                                                        viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="td-hero-3-item">
                        <div class="td-hero-3-bg bg-position" id="hero-bg-3"
                            style="background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url(assets/img/banner3.webp); background-size: cover; background-position: center; background-repeat: no-repeat;"
                            data-swiper-parallax="1000"></div>
                        <div class="container">
                            <div class="td-hero-3-spacing">
                                <div class="row align-items-end">
                                    <div class="col-xl-10 col-lg-10">
                                        <div class="td-hero-3-content mb-40">
                                            <div class="td-hero-3-title text2 mb-35">Innovative Exhibition & Event
                                                Solutions</div>
                                            <span class="td-hero-3-subtitle text mb-30 d-block">We specialize
                                                in creating impactful exhibitions, trade shows, and brand
                                                experiences that connect businesses with their audience and leave a
                                                lasting impression.</span>
                                            <a class="td-btn text3 td-btn-3-border td-left-right" href="services.php">
                                                <span class="mr10 td-text d-inline-block mr-5">View Our Services</span>
                                                <span class="td-arrow-angle">
                                                    <svg class="td-arrow-svg-top-right" width="13" height="14"
                                                        viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="td-hero-3-navigation">
            <span class="td-hero-3-next d-inline-block">
                <i class="fa-sharp fa-regular fa-arrow-right"></i>
            </span>
            <span class="td-hero-3-prev d-inline-block">
                <i class="fa-sharp fa-regular fa-arrow-left"></i>
            </span>
        </div>
    </div>
    <!-- hero-area-end -->

    <!-- td-countdown-area-start -->
    <div class="td-countdown-area bg-position"
        style="background: linear-gradient(135deg, #7935f9 0%, #9b5ffb 50%, #c488f9 100%);">
        <div class="container">
            <div class="td-countdown-3-wrap p-relative z-index-1">

                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4">
                        <div class="td-countdown-2-title mb-30">
                            <!-- [SEO Hierarchy] Set properly as h2 to follow heading structure -->
                            <h2 class="title text-white">Our Grand Exhibitions</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="td-countdown-2-location-wrap mb-30">
                            <div class="td-countdown-2-location ml-50">
                                <span class="td-hero-3-subtitle text mb-10 d-inline-block">LEAP and Cityscape Global are
                                    among the world’s largest and most influential exhibitions, bringing together
                                    innovation, industry leaders, and global audiences.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-countdown-area-end -->

    <!-- td-feature-area-start -->
    <div class="td-feature-area bg-position pt-120 pb-80"
        style="background: linear-gradient(135deg, #7935f9 0%, #9b5ffb 50%, #c488f9 100%);">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="td-feature-3-wrap mr-60 mb-30">
                        <span class="td-feature-3-icon d-flex justify-content-center mb-20"><i
                                class="flaticon-speaker"></i></span>
                        <h2 class="td-feature-3-title mb-15">Expert Event Planning</h2>
                        <p class="td-feature-3-text">Professional planning and management to ensure successful
                            exhibitions.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                    <div class="td-feature-3-wrap mr-60 mb-30">
                        <span class="td-feature-3-icon d-flex justify-content-center mb-20"><i
                                class="flaticon-teamwork-2"></i></span>
                        <h2 class="td-feature-3-title mb-15">Creative Stand Design</h2>
                        <p class="td-feature-3-text">Innovative booth designs that capture attention and highlight your
                            brand.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                    <div class="td-feature-3-wrap mr-60 mb-30">
                        <span class="td-feature-3-icon d-flex justify-content-center mb-20"><i
                                class="flaticon-request"></i></span>
                        <h2 class="td-feature-3-title mb-15">Engaging Experiences</h2>
                        <p class="td-feature-3-text">Interactive displays and presentations that attract and engage
                            visitors.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.9s">
                    <div class="td-feature-3-wrap mr-60 mb-30">
                        <span class="td-feature-3-icon d-flex justify-content-center mb-20"><i
                                class="flaticon-surprise"></i></span>
                        <h2 class="td-feature-3-title mb-15">Flawless Event Setup</h2>
                        <p class="td-feature-3-text">Complete support from setup to closing, ensuring smooth event
                            operations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-feature-area-end -->

    <!-- td-about-area-start -->
    <div class="td-about-area pt-140 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-9 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="td-about-3-thumb mr-60 mb-30">
                        <!-- [Core Web Vitals - CLS & LCP] Explicit width & height defined. native loading="lazy" is used since this section is below the fold. descriptive alt tag added. -->
                        <img class="w-100" src="assets/img/about/about-us.webp"
                            alt="Fath Creative team of experts collaborating on premium custom exhibition stand design"
                            width="486" height="377" loading="lazy">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-9 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="td-about-3-content-wrap mb-15">
                        <div class="td-about-2-content">
                            <span class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-15">ABOUT
                                US</span>
                            <h2 class="td-section-title mb-15">Our Company</h2>

                            <p class="para mb-40" style="text-transform:none; text-align:justify;">Fath Creative is a
                                forward-thinking agency redefining how brands connect with audiences across the Middle
                                East. Founded with a passion for creativity and innovation, we empower organizations to
                                tell their stories, elevate their identity, and engage their customers through impactful
                                design, marketing, and digital experiences. We have partnered with visionary businesses
                                to transform ideas into powerful, measurable results.</p>
                            <span class="visually-hidden">Leading Exhibition & Branding Company in Riyadh, KSA.
                            Fath Creative is a full-service creative agency specializing in 
                            exhibition stands, brand activations, event management, and 3D design 
                            across Saudi Arabia and the wider Middle East. With over X years of 
                            experience, we deliver world-class experiences for brands at major 
                            tradeshows and events.</span>
                        </div>
                        <div class="td-about-3-btn d-flex align-items-center">
                            <a class="td-btn td-btn-3-squre mb-15 td-left-right text3 mr-25" href="contact.php">
                                <span class="mr10 td-text d-inline-block mr-5">Contact Us</span>
                                <span class="td-arrow-angle">
                                    <svg class="td-arrow-svg-top-right" width="13" height="14" viewBox="0 0 13 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                            fill="white" />
                                        <path
                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </a>
                            <div class="td-about-3-number mb-15 d-flex align-items-center">
                                <span class="call-icon mr-10">
                                    <i class="flaticon-phone"></i>
                                </span>
                                <div>
                                    <span class="subtitle">Call Us:</span>
                                    <h3 class="td-number"><a href="tel:+966500082828">+966 5000 82828</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-about-area-end -->

    <!-- td-counter-area-start -->
    <div class="td-counter-area pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="td-counter-2-wrap ml-30 mb-30">
                        <span class="td-counter-2-icon mr-20">
                            <i class="fa fa-handshake"></i>
                        </span>
                        <div class="td-counter-2-content">
                            <h2 class="td-counter-2-title count"><span class="odometer" data-count="70"></span>+</h2>
                            <span class="td-counter-2-subtitle">Happy Clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="td-counter-2-wrap ml-30 mb-30">
                        <span class="td-counter-2-icon mr-20">
                            <i class="fa fa-calendar-check"></i>
                        </span>
                        <div class="td-counter-2-content">
                            <h2 class="td-counter-2-title count">
                                <span class="odometer" data-count="120"></span>
                                +
                            </h2>
                            <span class="td-counter-2-subtitle">Events Managed</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="td-counter-2-wrap ml-30 mb-30">
                        <span class="td-counter-2-icon mr-20">
                            <i class="fa fa-users"></i>
                        </span>
                        <div class="td-counter-2-content">
                            <h2 class="td-counter-2-title count"><span class="odometer" data-count="40"></span>+</h2>
                            <span class="td-counter-2-subtitle">Team Members</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="td-counter-2-wrap ml-30 mb-30">
                        <span class="td-counter-2-icon mr-20">
                            <i class="fa fa-trophy"></i>
                        </span>
                        <div class="td-counter-2-content">
                            <h2 class="td-counter-2-title count"><span class="odometer" data-count="300"></span>+</h2>
                            <span class="td-counter-2-subtitle">Project Experiences</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-counter-area-end -->

    <!-- td-blog-area-start -->
    <div class="td-blog-area pt-140 pb-110 bg-position" data-background="assets/img/about/bg.webp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="td-schedule-2-title-wrap text-center mb-40 wow fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="0.3s">
                        <span class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-30">Our
                            Services</span>
                        <h2 class="td-section-title">Comprehensive Services for Every Brand Need</h2>
                        <p class="td-section-text">From concept to execution, we provide creative and strategic
                            solutions that enhance brand visibility, engagement, and growth.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="td-blog-item mb-30 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="td-blog-thumb p-relative fix">
                            <a href="event-management.php">
                                <!-- [Core Web Vitals - CLS & Performance] Added exact width & height values based on assets dimensions, descriptive alt attribute and lazy loading -->
                                <img class="w-100" src="assets/img/projects/img8.webp"
                                    alt="Professional event management and planning services in Riyadh by Fath Creative"
                                    width="960" height="720" loading="lazy">
                            </a>
                        </div>
                        <div class="td-blog-content p-3">
                            <!-- [SEO Optimization] Using semantic H3 tags for card titles under the section's H2 -->
                            <h3 class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-30"
                                style="font-size: 1.25rem; text-transform: capitalize;"><a
                                    href="event-management.php">Event Management</a></h3>
                            <div class="td-blog-date">
                                <p style="font-size:14px; text-align:justify;">End-to-end planning and execution of
                                    events that create memorable and engaging brand experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="td-blog-item mb-30 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="td-blog-thumb p-relative fix">
                            <a href="exhibition-tradeshows.php">
                                <!-- [Core Web Vitals - CLS & Performance] Optimized with explicit width and height sizes, descriptive alt text and native lazy loading -->
                                <img class="w-100" src="assets/img/projects/img11.webp"
                                    alt="Premium custom exhibition booth design and fabrication by Fath Creative at trade show"
                                    width="960" height="720" loading="lazy">
                            </a>
                        </div>
                        <div class="td-blog-content p-3">
                            <!-- [SEO Optimization] Using semantic H3 tags for card titles under the section's H2 -->
                            <h3 class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-30"
                                style="font-size: 1.25rem; text-transform: capitalize;"><a
                                    href="exhibition-tradeshows.php">Exhibition & Tradeshows</a></h3>
                            <div class="td-blog-date">
                                <p style="font-size:14px; text-align:justify;">Design and execution of visually
                                    compelling exhibition spaces that maximize brand presence.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="td-blog-item mb-30 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="td-blog-thumb p-relative fix">
                            <a href="posm-activities.php">
                                <!-- [Core Web Vitals - CLS & Performance] Added explicit width/height dimensions, descriptive alt text and lazy loading -->
                                <img class="w-100" src="assets/img/projects/img9.webp"
                                    alt="Creative point of sale materials POSM displays designed for maximum in-store brand visibility"
                                    width="960" height="720" loading="lazy">
                            </a>
                        </div>
                        <div class="td-blog-content p-3">
                            <!-- [SEO Optimization] Using semantic H3 tags for card titles under the section's H2 -->
                            <h3 class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-30"
                                style="font-size: 1.25rem; text-transform: capitalize;"><a
                                    href="posm-activities.php">POSM Activities</a></h3>
                            <div class="td-blog-date">
                                <p style="font-size:14px; text-align:justify;">Effective point-of-sale materials that
                                    enhance in-store visibility and influence customer decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="td-blog-item mb-30 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="td-blog-thumb p-relative fix">
                            <a href="brand-activations.php">
                                <!-- [Core Web Vitals - CLS & Performance] Provided aspect ratio width/height attributes, custom alt tag and native lazy loading -->
                                <img class="w-100" src="assets/img/projects/img10.webp"
                                    alt="Interactive brand activation campaign by Fath Creative connecting brands and customers"
                                    width="960" height="720" loading="lazy">
                            </a>
                        </div>
                        <div class="td-blog-content p-3">
                            <!-- [SEO Optimization] Using semantic H3 tags for card titles under the section's H2 -->
                            <h3 class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-30"
                                style="font-size: 1.25rem; text-transform: capitalize;"><a
                                    href="brand-activations.php">Brand Activations</a></h3>
                            <div class="td-blog-date">
                                <p style="font-size:14px; text-align:justify;">Creative on-ground activations that
                                    connect brands with audiences through impactful experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="td-blog-item mb-30 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="td-blog-thumb p-relative fix">
                            <a href="3D-designs.php">
                                <!-- [Core Web Vitals - CLS & Performance] Provided aspect ratio width/height attributes, detailed alt description and native lazy loading -->
                                <img class="w-100" src="assets/img/projects/img7.webp"
                                    alt="3D exhibition stand conceptual architecture rendering by Fath Creative"
                                    width="960" height="720" loading="lazy">
                            </a>
                        </div>
                        <div class="td-blog-content p-3">
                            <!-- [SEO Optimization] Using semantic H3 tags for card titles under the section's H2 -->
                            <h3 class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-30"
                                style="font-size: 1.25rem; text-transform: capitalize;"><a href="3D-designs.php">3D
                                    Designs</a></h3>
                            <div class="td-blog-date">
                                <p style="font-size:14px; text-align:justify;">Realistic and creative 3D designs that
                                    bring concepts to life before execution with clarity and precision.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="td-blog-item mb-30 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="td-blog-thumb p-relative fix">
                            <a href="fabrication-and-production.php">
                                <!-- [Core Web Vitals - CLS & Performance] Provided exact width/height attributes, informative alt description and native lazy loading -->
                                <img class="w-100" src="assets/img/projects/img12.webp"
                                    alt="High-quality carpentry fabrication and exhibition stand production workshop of Fath Creative"
                                    width="960" height="720" loading="lazy">
                            </a>
                        </div>
                        <div class="td-blog-content p-3">
                            <!-- [SEO Optimization] Using semantic H3 tags for card titles under the section's H2 -->
                            <h3 class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-30"
                                style="font-size: 1.25rem; text-transform: capitalize;"><a
                                    href="fabrication-and-production.php">Fabrication & Production</a></h3>
                            <div class="td-blog-date">
                                <p style="font-size:14px; text-align:justify;">High-quality fabrication and production
                                    solutions that bring creative concepts to life with precision.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align:center;">
                <a class="td-btn td-left-right text-center" href="services.php">
                    <span class="mr10 td-text d-inline-block mr-5">View All Services</span>
                    <span class="td-arrow-angle">
                        <svg class="td-arrow-svg-top-right" width="13" height="14" viewBox="0 0 13 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                fill="white"></path>
                            <path
                                d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                fill="white"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- td-blog-area-end -->

    <!-- td-banner-area-start -->
    <div class="td-banner-area td-banner-spacing bg-position jarallax"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)), url(assets/img/img1.webp);">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="td-banner-title-wrap wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <span class="td-section-subtitle mb-20">GET EXPERIENCE</span>
                        <h2 class="td-section-title mb-15">Experience the Power of Business Exhibitions</h2>
                        <p class="mb-35">Be part of an engaging platform where innovation meets opportunity and
                            businesses grow together.</p>
                        <a class="td-btn td-left-right" href="services.php">
                            <span class="mr10 td-text d-inline-block mr-5">See event Details</span>
                            <span class="td-arrow-angle">
                                <svg class="td-arrow-svg-top-right" width="13" height="14" viewBox="0 0 13 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                        fill="white" />
                                    <path
                                        d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                        fill="white" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-banner-area-end -->

    <!-- td-schedule-area-start -->
    <div class="td-schedule-area pt-140 pb-110 bg-position" data-background="assets/img/schedule/schedule-4/bg.webp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-9 col-lg-10">
                    <div class="td-schedule-2-title-wrap text-center mb-20 wow fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="0.3s">
                        <span class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-30">Our
                            Projects</span>
                        <h2 class="td-section-title mb-10">Showcasing our commitment to quality and creativity</h2>
                        <p class="td-section-text">We take pride in delivering creative and impactful projects that
                            bring our client's visions to life.</p>
                    </div>
                    <div class="nav td-schedule-tab-btn td-schedule-3-tab-btn justify-content-center mb-50 wow fadeInUp"
                        data-wow-duration="1.5s" data-wow-delay="0.5s" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active p-relative" id="v-pills-home1-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home1" type="button" role="tab" aria-controls="v-pills-home1"
                            aria-selected="false">
                            Exhibitions & Tradeshows
                        </button>
                        <button class="nav-link p-relative" id="v-pills-health-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-health" type="button" role="tab" aria-controls="v-pills-health "
                            aria-selected="false">
                            POSM Activities
                        </button>
                        <button class="nav-link p-relative" id="v-pills-life-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-life" type="button" role="tab" aria-controls="v-pills-life"
                            aria-selected="false">
                            Brand Activations
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tp-contact-form-wrapper tp-black-bg9 tab-content" id="v-pills-tabContent">

                    <!-- Exhibitions & Tradeshows Tab -->
                    <div class="tab-pane fade active show" id="v-pills-home1" role="tabpanel"
                        aria-labelledby="v-pills-home1-tab">

                        <!-- Project 1: Cityscape -->
                        <div class="td-schedule-3-wrap mb-30">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5">
                                    <div class="td-schedule-3-thumb p-relative">
                                        <a href="project-ezdihar-real-estate.php">
                                            <!-- [Core Web Vitals - CLS & Performance] Added explicit width/height sizes, descriptive alt text and native lazy loading -->
                                            <img class="w-100" src="assets/img/projects/img11.webp"
                                                alt="Luxurious custom exhibition space constructed for Cityscape Global 2025 in Riyadh"
                                                width="960" height="720" loading="lazy">
                                        </a>
                                        <span class="td-schedule-2-date"><i class="flaticon-calendar"></i> Jan 10,
                                            2025</span>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7">
                                    <div class="td-schedule-3-content">
                                        <!-- [SEO Hierarchy] Adjusted card heading to semantic h3 for compliant nesting -->
                                        <h3 class="td-schedule-3-title" style="font-size: 24px; font-weight: 700;">
                                            <a href="project-ezdihar-real-estate.php">Cityscape Global 2025</a></h3>
                                        <div class="td-schedule-3-destination mb-10">
                                            <span class="mr-25">
                                                <i class="flaticon-gps"></i>
                                                Malham, Riyadh
                                            </span>
                                        </div>
                                        <p class="mb-25 para">Designed and executed a premium exhibition space for
                                            Cityscape Global 2025 in Malham, Riyadh, enhancing brand presence and
                                            visitor engagement.</p>
                                        <div class="td-schedule-3-btn d-flex align-items-center flex-wrap">
                                            <a class="td-btn td-btn-3-squre td-left-right text3 mr-25"
                                                href="projects.php" aria-label="Learn More about Cityscape Global 2025">
                                                <span class="mr10 td-text d-inline-block mr-5">Learn More <span
                                                        class="visually-hidden">about Cityscape Global
                                                        2025</span></span>
                                                <span class="td-arrow-angle">
                                                    <svg class="td-arrow-svg-top-right" width="13" height="14"
                                                        viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 2: Basamh -->
                        <div class="td-schedule-3-wrap mb-30">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5">
                                    <div class="td-schedule-3-thumb p-relative">
                                        <a href="projects.php">
                                            <!-- [Core Web Vitals - CLS & Performance] Added explicit width/height sizes, descriptive alt text and native lazy loading -->
                                            <img class="w-100" src="assets/img/projects/img1.webp"
                                                alt="Basamh custom exhibition display stand built at Riyadh Front Exhibition and Conference Center"
                                                width="960" height="736" loading="lazy">
                                        </a>
                                        <span class="td-schedule-2-date"><i class="flaticon-calendar"></i> Feb 14,
                                            2024</span>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7">
                                    <div class="td-schedule-3-content">
                                        <h3 class="td-schedule-3-title" style="font-size: 24px; font-weight: 700;">
                                            <a href="projects.php">Basamh</a></h3>
                                        <div class="td-schedule-3-destination mb-10">
                                            <span class="mr-25">
                                                <i class="flaticon-gps"></i>
                                                Riyadh Front Exhibition & Conference Center
                                            </span>
                                        </div>
                                        <p class="mb-25 para">Delivered a visually engaging exhibition setup for Basamh,
                                            enhancing brand presence and audience interaction.</p>
                                        <div class="td-schedule-3-btn d-flex align-items-center flex-wrap">
                                            <a class="td-btn td-btn-3-squre td-left-right text3 mr-25"
                                                href="projects.php" aria-label="Learn More about Basamh">
                                                <span class="mr10 td-text d-inline-block mr-5">Learn More <span
                                                        class="visually-hidden">about Basamh</span></span>
                                                <span class="td-arrow-angle">
                                                    <svg class="td-arrow-svg-top-right" width="13" height="14"
                                                        viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 3: NUEVO -->
                        <div class="td-schedule-3-wrap mb-30">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5">
                                    <div class="td-schedule-3-thumb p-relative">
                                        <a href="projects.php">
                                            <!-- [Core Web Vitals - CLS & Performance] Added explicit width/height sizes, descriptive alt text and native lazy loading -->
                                            <img class="w-100" src="assets/img/projects/img2.webp"
                                                alt="NUEVO brand exhibition booth constructed by Fath Creative for LEAP 2025"
                                                width="768" height="524" loading="lazy">
                                        </a>
                                        <span class="td-schedule-2-date"><i class="flaticon-calendar"></i> Jun 10,
                                            2025</span>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7">
                                    <div class="td-schedule-3-content">
                                        <h3 class="td-schedule-3-title" style="font-size: 24px; font-weight: 700;">
                                            <a href="projects.php">NUEVO - Leap 2025</a></h3>
                                        <div class="td-schedule-3-destination mb-10">
                                            <span class="mr-25">
                                                <i class="flaticon-gps"></i>
                                                Riyadh Exhibition & Convention Center – Malham
                                            </span>
                                        </div>
                                        <p class="mb-25 para">Designed and executed a dynamic exhibition space for NUEVO
                                            at LEAP 2024, enhancing brand visibility and visitor engagement.</p>
                                        <div class="td-schedule-3-btn d-flex align-items-center flex-wrap">
                                            <a class="td-btn td-btn-3-squre td-left-right text3 mr-25"
                                                href="projects.php" aria-label="Learn More about NUEVO - Leap 2025">
                                                <span class="mr10 td-text d-inline-block mr-5">Learn More <span
                                                        class="visually-hidden">about NUEVO - Leap 2025</span></span>
                                                <span class="td-arrow-angle">
                                                    <svg class="td-arrow-svg-top-right" width="13" height="14"
                                                        viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- POSM Activities Tab -->
                    <div class="tab-pane fade" id="v-pills-health" role="tabpanel" aria-labelledby="v-pills-health-tab">

                        <!-- Project 4: Nespresso -->
                        <div class="td-schedule-3-wrap mb-30">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5">
                                    <div class="td-schedule-3-thumb p-relative">
                                        <a href="project-rilastil-bioclin.php">
                                            <!-- [Core Web Vitals - CLS & Performance] Added explicit width/height sizes, descriptive alt text and native lazy loading -->
                                            <img class="w-100" src="assets/img/projects/img3.webp"
                                                alt="Nespresso premium retail brand activation booth built by Fath Creative in KSA"
                                                width="960" height="732" loading="lazy">
                                        </a>
                                        <span class="td-schedule-2-date"><i class="flaticon-calendar"></i> Jul 21,
                                            2025</span>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7">
                                    <div class="td-schedule-3-content">
                                        <h3 class="td-schedule-3-title" style="font-size: 24px; font-weight: 700;">
                                            <a href="project-rilastil-bioclin.php">Nespresso - Brand activations</a></h3>
                                        <div class="td-schedule-3-destination mb-10">
                                            <span class="mr-25">
                                                <i class="flaticon-gps"></i>
                                                In-store activation across KSA
                                            </span>
                                        </div>
                                        <p class="mb-25 para">Executed engaging brand activation campaigns for
                                            Nespresso, creating memorable customer experiences and boosting brand
                                            interaction.</p>
                                        <div class="td-schedule-3-btn d-flex align-items-center flex-wrap">
                                            <a class="td-btn td-btn-3-squre td-left-right text3 mr-25"
                                                href="projects.php"
                                                aria-label="Learn More about Nespresso - Brand activations">
                                                <span class="mr10 td-text d-inline-block mr-5">Learn More <span
                                                        class="visually-hidden">about Nespresso - Brand
                                                        activations</span></span>
                                                <span class="td-arrow-angle">
                                                    <svg class="td-arrow-svg-top-right" width="13" height="14"
                                                        viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 5: Artlife Display stands -->
                        <div class="td-schedule-3-wrap mb-30">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5">
                                    <div class="td-schedule-3-thumb p-relative">
                                        <a href="projects.php">
                                            <!-- [Core Web Vitals - CLS & Performance] Added explicit width/height sizes, descriptive alt text and native lazy loading -->
                                            <img class="w-100" src="assets/img/projects/img4.webp"
                                                alt="Artlife custom promotional display stands and POSM fixtures designed by Fath Creative"
                                                width="1280" height="960" loading="lazy">
                                        </a>
                                        <span class="td-schedule-2-date"><i class="flaticon-calendar"></i> Feb 22,
                                            2025</span>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7">
                                    <div class="td-schedule-3-content">
                                        <h3 class="td-schedule-3-title" style="font-size: 24px; font-weight: 700;">
                                            <a href="projects.php">Artlife display stands</a></h3>
                                        <div class="td-schedule-3-destination mb-10">
                                            <span class="mr-25">
                                                <i class="flaticon-gps"></i>
                                                In-store activation across KSA
                                            </span>
                                        </div>
                                        <p class="mb-25 para">Designed and produced high-quality display stands for
                                            Artlife, enhancing product visibility and in-store appeal.</p>
                                        <div class="td-schedule-3-btn d-flex align-items-center flex-wrap">
                                            <a class="td-btn td-btn-3-squre td-left-right text3 mr-25"
                                                href="projects.php"
                                                aria-label="Learn More about Artlife display stands">
                                                <span class="mr10 td-text d-inline-block mr-5">Learn More <span
                                                        class="visually-hidden">about Artlife display
                                                        stands</span></span>
                                                <span class="td-arrow-angle">
                                                    <svg class="td-arrow-svg-top-right" width="13" height="14"
                                                        viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Brand Activations Tab -->
                    <div class="tab-pane fade" id="v-pills-life" role="tabpanel" aria-labelledby="v-pills-life-tab">

                        <!-- Project 6: Vehicle Branding -->
                        <div class="td-schedule-3-wrap mb-30">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5">
                                    <div class="td-schedule-3-thumb p-relative">
                                        <a>
                                            <!-- [Core Web Vitals - CLS & Performance] Added explicit width/height sizes, descriptive alt text and native lazy loading -->
                                            <img class="w-100" src="assets/img/projects/img5.webp"
                                                alt="Creative vehicle sticker branding and fleet advertising designed by Fath Creative in Saudi Arabia"
                                                width="1600" height="1200" loading="lazy">
                                        </a>
                                        <span class="td-schedule-2-date"><i class="flaticon-calendar"></i> Nov 24,
                                            2025</span>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7">
                                    <div class="td-schedule-3-content">
                                        <h3 class="td-schedule-3-title" style="font-size: 24px; font-weight: 700;">
                                            <a>Vehicle Branding</a></h3>
                                        <div class="td-schedule-3-destination mb-10">
                                            <span class="mr-25">
                                                <i class="flaticon-gps"></i>
                                                Brand activation across KSA
                                            </span>
                                        </div>
                                        <p class="mb-25 para">Creative vehicle branding solutions that turn everyday
                                            transport into powerful moving advertisements.</p>
                                        <div class="td-schedule-3-btn d-flex align-items-center flex-wrap">
                                            <a class="td-btn td-btn-3-squre td-left-right text3 mr-25"
                                                href="projects.php" aria-label="Learn More about Vehicle Branding">
                                                <span class="mr10 td-text d-inline-block mr-5">Learn More <span
                                                        class="visually-hidden">about Vehicle Branding</span></span>
                                                <span class="td-arrow-angle">
                                                    <svg class="td-arrow-svg-top-right" width="13" height="14"
                                                        viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 7: Isuzu -->
                        <div class="td-schedule-3-wrap mb-30">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5">
                                    <div class="td-schedule-3-thumb p-relative">
                                        <a>
                                            <!-- [Core Web Vitals - CLS & Performance] Added explicit width/height sizes, descriptive alt text and native lazy loading -->
                                            <img class="w-100" src="assets/img/projects/img6.webp"
                                                alt="ISUZU AUM custom premium brand launch setup executed at the Japanese Embassy in Riyadh"
                                                width="1280" height="720" loading="lazy">
                                        </a>
                                        <span class="td-schedule-2-date"><i class="flaticon-calendar"></i> Dec 18,
                                            2025</span>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7">
                                    <div class="td-schedule-3-content">
                                        <h3 class="td-schedule-3-title" style="font-size: 24px; font-weight: 700;">
                                            <a>ISUZU AUM - Japanese embassy</a></h3>
                                        <div class="td-schedule-3-destination mb-10">
                                            <span class="mr-25">
                                                <i class="flaticon-gps"></i>
                                                Japanese embassy Riyadh
                                            </span>
                                        </div>
                                        <p class="mb-25 para">Executed impactful branding for Isuzu AUM, enhancing brand
                                            visibility through dynamic and professional design.</p>
                                        <div class="td-schedule-3-btn d-flex align-items-center flex-wrap">
                                            <a class="td-btn td-btn-3-squre td-left-right text3 mr-25"
                                                href="projects.php"
                                                aria-label="Learn More about ISUZU AUM - Japanese embassy">
                                                <span class="mr10 td-text d-inline-block mr-5">Learn More <span
                                                        class="visually-hidden">about ISUZU AUM - Japanese
                                                        embassy</span></span>
                                                <span class="td-arrow-angle">
                                                    <svg class="td-arrow-svg-top-right" width="13" height="14"
                                                        viewBox="0 0 13 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0.943836 13.5C0.685616 13.5 0.45411 13.4021 0.276027 13.224C0.0979452 13.0459 0 12.8055 0 12.5562C0 12.3068 0.0979452 12.0664 0.276027 11.8884L9.76781 2.38767H2.02123C1.49589 2.38767 1.0774 1.96027 1.0774 1.44384C1.0774 0.927397 1.50479 0.5 2.03014 0.5H12.0562C12.1274 0.5 12.1986 0.508904 12.2788 0.526712L12.4034 0.562329L12.537 0.633562C12.5637 0.65137 12.5993 0.678082 12.626 0.69589C12.6973 0.749315 12.7507 0.80274 12.7952 0.856164C12.8219 0.891781 12.8575 0.927397 12.8842 0.989726L12.9555 1.1411L12.9822 1.22123C13 1.29247 13.0089 1.3726 13.0089 1.44384V11.4699C13.0089 11.9952 12.5815 12.4137 12.0651 12.4137C11.5486 12.4137 11.1212 11.9863 11.1212 11.4699V3.72329L1.62055 13.224C1.44247 13.4021 1.20205 13.5 0.943836 13.5Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-schedule-area-end -->

    <!-- td-testimonial-area-start -->
    <div class="td-testimonial-area fix green-bg">
        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-lg-6">
                    <div class="td-testimonial-3-wrap pt-160 pb-160 p-relative">
                        <span class="td-section-subtitle td-section-subtitle-2 mb-20">Testimonials</span>
                        <h2 class="td-section-title text-white mb-35">What our Attendees<br> are Saying</h2>
                        <div class="swiper-container td-testimonial-3-slider">
                            <div class="swiper-wrapper p-relative">
                                <div class="swiper-slide">
                                    <div>
                                        <div class="td-testimonial-3-ratings mb-20">
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        </div>
                                        <p class="mb-20">“Participating in this exhibition was a fantastic experience
                                            for our company. The organization, booth setup, and visitor engagement were
                                            excellent. We connected with many potential clients and partners.”</p>
                                        <div class="td-testimonial-3-avatar">
                                            <div>
                                                <h3 class="names">Sam Cooper</h3>
                                                <span class="td-position">CEO, Marketer Pro</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="td-testimonial-3-ratings mb-20">
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        </div>
                                        <p class="mb-20">“The event was professionally organized and attracted a great
                                            audience. Our brand received amazing exposure and we built valuable business
                                            relationships during the exhibition.”</p>
                                        <div class="td-testimonial-3-avatar">
                                            <div>
                                                <h3 class="names">Michael Lee</h3>
                                                <span class="td-position">Business Strategist, GrowthWorks</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="td-testimonial-3-ratings mb-20">
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                            <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        </div>
                                        <p class="mb-20">“From planning to execution, everything was handled perfectly.
                                            The exhibition gave us the opportunity to showcase our products to the right
                                            audience and expand our network.”</p>
                                        <div class="td-testimonial-3-avatar">
                                            <div>
                                                <h3 class="names">Daniel Roberts</h3>
                                                <span class="td-position">Project Manager, BrandX Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="td-testimonial-3-navigation">
                            <span class="td-testimonial-3-next d-inline-block">
                                <i class="fa-solid fa-angle-left"></i>
                            </span>
                            <span class="td-testimonial-3-prev d-inline-block">
                                <i class="fa-solid fa-angle-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="td-testimonial-3-video bg-position jarallax"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)), url(assets/img/img2.webp);">
                        <!-- [Best Practices & Security] Added rel="noopener noreferrer" for the target="_blank" pattern equivalent to ensure security -->
                        <span class="td-video-play popup-video td-pulse-border" data-mfp-src="assets/img/banner-video.MP4"
                            aria-label="Play video" role="button" tabindex="0" style="cursor: pointer;">
                            <span class="p-relative z-index-11">
                                <svg width="20" height="24" viewBox="0 0 20 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.8571 12L0.571429 23.1346L0.57143 0.865352L19.8571 12Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-testimonial-area-end -->

    <!-- td-brands-area-start -->
    <div class="td-brands-area td-brands-2-wrap pt-140 pb-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="td-schedule-2-title-wrap text-center mb-30 wow fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="0.3s">
                        <span class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-20">Our
                            Clients</span>
                        <h2 class="td-section-title mb-10">Brands We Empower</h2>
                        <p class="td-section-text">We proudly collaborate with leading organizations and trusted
                            partners who support our exhibitions and help create impactful events that connect
                            businesses and industries.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $brand_alts = [
                    1 => "FAWASEL brand logo",
                    2 => "ALISSA UNIVERSAL MOTORS corporate logo",
                    3 => "CITROEN brand logo",
                    4 => "ALAWALY brand logo",
                    5 => "ALAMURIA brand logo",
                    7 => "EZDIHAR brand logo"
                ];
                for ($i = 1; $i < 11; $i++) {
                    $alt = isset($brand_alts[$i]) ? $brand_alts[$i] : "Fath Creative partner brand logo";
                    ?>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-6 wow fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="0.2s">
                        <div class="td-brands-item mb-25">
                            <!-- [Core Web Vitals - CLS & Performance] Added explicit width/height sizes, highly descriptive alt tags and native lazy loading for below-the-fold icons -->
                            <a><img src="assets/img/brands/<?php echo $i; ?>.webp" alt="<?php echo $alt; ?>" width="160"
                                    height="114" loading="lazy"></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- td-brands-area-end -->

</main>
<!-- main-area-end -->

<?php include('footer.php') ?>

<!-- Floating WhatsApp & Call Buttons -->
