<?php
include('adminpanel/database.php');
include('helpers.php');

$slug = isset($_GET["slug"]) ? $_GET["slug"] : 0;

if (empty($slug)) {
    http_response_code(404);
    include('404.php');
    exit;
}

// Safe query — use prepared statement since slug comes from user input
$stmt = $conn->prepare("SELECT * FROM blogs WHERE slug = ?");
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();

if (!$result || mysqli_num_rows($result) === 0) {
    http_response_code(404);
    include('404.php');
    exit;
}

$row = mysqli_fetch_assoc($result);
$id = $row['id']; 

// Safe query
$sql = "SELECT * FROM blogs WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) === 0) {
    http_response_code(404);
    include('404.php');
    exit;
}

// Fetch data
$row = mysqli_fetch_assoc($result);

// Generate clean SEO slug
$slug = $row['slug'];
$expected_url = "/projects/". $slug;


// Ensure URL is clean (301 Redirect for SEO)
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// Normalize localhost XAMPP paths if testing locally
$request_uri = str_replace(['/Fath/', '/FathCreative/'], '/', $request_uri);
if ($request_uri !== $expected_url && $request_uri !== $expected_url . '/') {
    header("Location: " . $expected_url, true, 301);
    exit;
}

// Set Dynamic SEO Tags
$pageTitle = $row['blog_meta_title'];
$pageDescription = substr(strip_tags($row['blog_meta_description']), 0, 160);
$pageKeywords = $row['blog_meta_title'] . ", Fath Creative Project, Exhibition Stand KSA, Event Success";

include('header.php');

// ---- Helper values for the modern layout (all derived from existing DB fields, nothing hardcoded) ----
$hasDate = ($row['blog_date'] != '0000-00-00' && !empty($row['blog_date']));
$hasEndDate = ($row['end_date'] != '0000-00-00' && !empty($row['end_date']));
$hasLocation = !empty($row['blog_location']);
$formattedDate = $hasDate ? date('d M Y', strtotime($row['blog_date'])) : null;
$formattedEndDate = $hasEndDate ? date('d M Y', strtotime($row['end_date'])) : null;

// Split blog_description into a short "intro" line (used as the pull-quote) and the rest as body copy.
// Falls back gracefully if the field is short or has no natural break.
$descPlain = trim(strip_tags(str_replace(['<br><br>', '<br/><br/>', '<br />'], ' ', $row['blog_description'])));
$sentences = preg_split('/(?<=[.?!])\s+/', $descPlain, -1, PREG_SPLIT_NO_EMPTY);
$introLine = $sentences[0] ?? $descPlain;
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
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "<?php echo htmlspecialchars($row['blog_title']); ?>",
    "item": "https://www.fathcreative.com<?php echo $expected_url; ?>"  
  }]
}
</script>

<style>
    /* ===== Modern Project Detail Styles (scoped to this page) ===== */
    .pd-wrap { padding: 90px 0; background: #FAFAFC; }
    .pd-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start; }
    @media (max-width: 991px) { .pd-grid { grid-template-columns: 1fr; } }

    /* Hero image card */
    .pd-hero-img {
        position: relative; border-radius: 16px; overflow: hidden; height: 420px;
        background: linear-gradient(135deg, #2b2b38, #6c47ff);
    }
    .pd-hero-img img {
        width: 100%; height: 100%; object-fit: cover; display: block;
    }
    .pd-hero-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(180deg, transparent 55%, rgba(15,12,25,0.78) 100%);
        pointer-events: none;
    }
    .pd-hero-badge {
        position: absolute; top: 18px; left: 18px;
        background: #8555df; color: #fff; font-size: 11px; font-weight: 700;
        letter-spacing: 0.5px; padding: 7px 14px; border-radius: 30px; text-transform: uppercase;
    }
    .pd-hero-caption { position: absolute; bottom: 20px; left: 22px; right: 22px; color: #fff; }
    .pd-hero-caption .loc { font-size: 12px; opacity: 0.85; margin-bottom: 4px; }
    .pd-hero-caption .title { font-size: 24px; font-weight: 700; line-height: 1.25; }

    /* Pull-quote intro line */
    .pd-pullquote {
        margin: 28px 0; padding-left: 18px; border-left: 3px solid #6c47ff;
        font-size: 24px; line-height: 1.65; color: #2c2c38; font-style: italic;
    }

    /* Stat chips row (only date/location shown, remains data-driven) */
    .pd-facts { display: flex; flex-wrap: wrap; gap: 12px; margin-bottom: 32px; }
    .pd-fact-chip {
        background: #F6F4FF; border-radius: 12px; padding: 14px 18px;
        display: flex; align-items: center; gap: 10px; min-width: 160px;
    }
    .pd-fact-chip .ico {
        width: 34px; height: 34px; border-radius: 9px; background: rgba(108,71,255,0.15);
        display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #6c47ff; font-size: 15px;
    }
    .pd-fact-chip .label { font-size: 10.5px; color: #6b6b76; margin-bottom: 2px; }
    .pd-fact-chip .value { font-size: 14px; font-weight: 700; color: #1a1a24; }

    /* Body sections */
    .pd-section { margin-bottom: 26px; }
    .pd-section-head { display: flex; align-items: center; gap: 8px; margin-bottom: 10px; }
    .pd-section-bar { width: 4px; height: 18px; background: #6c47ff; border-radius: 2px; }
    .pd-section-title { font-size: 16px; font-weight: 700; color: #1a1a24; margin: 0; }
    .pd-section p { font-size: 14.5px; line-height: 1.85; color: #57576a; text-align: justify; margin: 0; }

    /* Sidebar */
    .pd-side-card {
        background: linear-gradient(160deg, #41417c, #7862c3); border-radius: 16px;
        padding: 26px; color: #fff; margin-bottom: 20px;
    }
    .pd-side-eyebrow { font-size: 11px; letter-spacing: 1.5px; color: #a996ff; text-transform: uppercase; margin-bottom: 16px; }
    .pd-side-row {
        display: flex; align-items: center; gap: 12px; padding-bottom: 18px; margin-bottom: 18px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .pd-side-row:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
    .pd-side-row .ico {
        width: 38px; height: 38px; border-radius: 10px; background: rgba(108,71,255,0.25);
        display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: #a996ff; font-size: 17px;
    }
    .pd-side-row .label { font-size: 10.5px; color: rgba(255,255,255,0.5); margin-bottom: 2px; }
    .pd-side-row .value { font-size: 14px; font-weight: 600; }

    .pd-cta-card { background: #F6F4FF; border-radius: 16px; padding: 24px; text-align: center; }
    .pd-cta-card p { font-size: 13px; color: #57576a; margin-bottom: 14px; line-height: 1.6; }
    .pd-cta-btn {
        display: inline-block; width: 100%; background: #8555df; color: #fff !important;
        border: none; padding: 12px 22px; border-radius: 8px; font-size: 13px; font-weight: 600;
        text-decoration: none; transition: background 0.2s ease;
    }
</style>

<main>

    <div class="td-breadcrumb-area td-breadcrumb-spacing bg-position"
        style="background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url(assets/img/banner/banner4.webp)">
        <div class="container">
            <h1 class="td-breadcrumb-title mb-10"><?php echo $row['blog_title']; ?></h1>
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

    <div class="pd-wrap">
        <div class="container">
            <div class="pd-grid">

                <!-- LEFT: Content -->
                <div class="pd-content">

                    <!-- Hero image with overlay caption -->
                    <div class="pd-hero-img">
                        <img src="adminpanel/uploads/projects/<?php echo $row['blog_image']; ?>"
                             alt="<?php echo htmlspecialchars($row['blog_title']); ?>">
                        <div class="pd-hero-overlay"></div>
                        <div class="pd-hero-badge">Featured Project</div>
                        
                    </div>

                    <!-- Pull-quote: first sentence of the description, pulled out for emphasis -->
                    <?php if (!empty($introLine)): ?>
                        <h3 class="pd-pullquote"><?php echo htmlspecialchars($introLine); ?></h3>
                    <?php endif; ?>

                    <!-- Details section: blog_details field -->
                    <?php if (!empty($row['blog_details'])): ?>
                        <div class="pd-section">
                            
                        <?php echo $row['blog_details']; ?>
                        </div>
                    <?php endif; ?>

                </div>

                <!-- RIGHT: Sidebar -->
                <div class="pd-sidebar">

                    <?php if ($hasDate || $hasLocation): ?>
                        <div class="pd-side-card">
                            <div class="pd-side-eyebrow">Project Information</div>

                            <?php if ($hasDate): ?>
                                <div class="pd-side-row">
                                    <div class="ico"><i class="fa-regular fa-calendar"></i></div>
                                    <div>
                                        <div class="label">Event Date</div>
                                        <div class="value"><?php echo $formattedDate; ?> - <?php echo $formattedEndDate; ?></div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($hasLocation): ?>
                                <div class="pd-side-row">
                                    <div class="ico"><i class="fa-regular fa-location-dot"></i></div>
                                    <div>
                                        <div class="label">Location</div>
                                        <div class="value"><?php echo htmlspecialchars($row['blog_location']); ?></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <div class="pd-cta-card">
                        <p>Want Fath Creative to bring your brand to your next exhibition?</p>
                        <a href="contact.php" class="pd-cta-btn">Get in touch →</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

</main>

<?php include('footer.php'); ?>