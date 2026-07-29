<?php
$all_services = [
    ['url' => 'event-management.php', 'img' => 'assets/img/projects/img8.webp', 'title' => 'Event Management', 'desc' => 'End-to-end planning and execution of events that create memorable and engaging brand experiences.'],
    ['url' => 'exhibition-tradeshows.php', 'img' => 'assets/img/projects/img11.webp', 'title' => 'Exhibition & Tradeshows', 'desc' => 'Design and execution of visually compelling exhibition spaces that maximize brand presence.'],
    ['url' => 'posm-activities.php', 'img' => 'assets/img/projects/img9.webp', 'title' => 'POSM Activities', 'desc' => 'Creative point of sale materials displays designed for maximum in-store brand visibility.'],
    ['url' => 'brand-activations.php', 'img' => 'assets/img/projects/img10.webp', 'title' => 'Brand Activations', 'desc' => 'Interactive brand activation campaigns connecting brands and customers.'],
    ['url' => '3D-designs.php', 'img' => 'assets/img/projects/img7.webp', 'title' => '3D Designs', 'desc' => 'Innovative 3D exhibition stand conceptual architecture rendering and designs.'],
    ['url' => 'fabrication-and-production.php', 'img' => 'assets/img/projects/img12.webp', 'title' => 'Fabrication & Production', 'desc' => 'High-quality carpentry fabrication and exhibition stand production workshop.'],
    ['url' => 'technology-solutions.php', 'img' => 'assets/img/projects/img13.webp', 'title' => 'Technology Solutions', 'desc' => 'Smart technology solutions that enhance customer interaction and improve overall brand experiences.'],
    ['url' => 'digital-marketing-solutions.php', 'img' => 'assets/img/projects/img14.webp', 'title' => 'Digital Marketing', 'desc' => 'Result-driven digital marketing strategies that increase online visibility and strengthen brand presence.']
];

$current_page = basename($_SERVER['PHP_SELF']);
$related = [];
foreach ($all_services as $service) {
    if ($service['url'] !== $current_page) {
        $related[] = $service;
    }
}
// Shuffle and pick 3
shuffle($related);
$related = array_slice($related, 0, 3);
?>
<style>
    .w-100{
        height:100%;
    }
</style>
<div class="td-related-services-area pt-100 pb-80" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-8">
                <div class="td-schedule-2-title-wrap text-center mb-40 wow fadeInUp" data-wow-duration="1.5s"
                    data-wow-delay="0.3s">
                    <h2 class="td-section-title">Related Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($related as $item): ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="td-blog-item mb-30 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s"
                        style="background: #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 8px;">
                        <div class="td-blog-thumb p-relative fix">
                            <a href="<?php echo $item['url']; ?>">
                                <img class="w-100" src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>"
                                    width="960" height="720" loading="lazy" style="border-radius: 8px 8px 0 0;">
                            </a>
                        </div>
                        <div class="td-blog-content p-3">
                            <h3 class="td-section-subtitle td-section-subtitle-2 td-section-subtitle-3 mb-20"
                                style="font-size: 1.25rem; text-transform: capitalize;">
                                <a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                            </h3>
                            <div class="td-blog-date">
                                <p style="font-size:14px; text-align:justify; margin-bottom: 0;">
                                    <?php echo $item['desc']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>