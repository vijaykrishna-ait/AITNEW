<?php
require_once __DIR__ . '/config.php';
$current_page = $current_page ?? '';
$page_title   = $page_title   ?? SITE_NAME . ' | ' . SITE_TAGLINE;
$page_desc    = $page_desc    ?? SITE_DESCRIPTION;
$page_keywords= $page_keywords?? SITE_KEYWORDS;
$base = $base ?? '';   // '' for root pages, '../' for subfolder pages
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
<meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
<meta name="author" content="<?= SITE_NAME ?>">
<meta name="robots" content="index,follow">
<link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>">

<meta property="og:type" content="website">
<meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
<meta property="og:url" content="<?= htmlspecialchars($page_canonical) ?>">
<meta property="og:site_name" content="<?= SITE_NAME ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"EducationalOrganization",
  "name":"<?= SITE_NAME ?>",
  "url":"<?= SITE_URL ?>",
  "telephone":"<?= SITE_PHONE_DISPLAY ?>",
  "email":"<?= SITE_EMAIL ?>",
  "description":"<?= htmlspecialchars(SITE_DESCRIPTION) ?>",
  "address":{"@type":"PostalAddress","addressLocality":"Chennai","addressCountry":"IN"},
  "sameAs":["<?= SOCIAL_FACEBOOK ?>","<?= SOCIAL_INSTAGRAM ?>","<?= SOCIAL_LINKEDIN ?>","<?= SOCIAL_YOUTUBE ?>"]
}
</script>

<link rel="shortcut icon" href="<?= $base ?>assets/icons/favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- 1️⃣ Your existing stylesheet -->
<link rel="stylesheet" href="<?= $base ?>assets/css/styles.css">

<!-- motion.js (UMD build) – loads a global `motion` variable -->
<script src="https://cdn.jsdelivr.net/npm/motion@12.40.0/dist/motion.min.js"></script>

<!-- 3️⃣ Your animation file (must come *after* motion.js) -->
<script src="<?= $base ?>assets/js/animations.js"></script>

<!-- 4️⃣ Your original UI‑logic script (unchanged) -->
<script src="<?= $base ?>assets/js/script.js"></script>


</head>
<body>

  <div class="topbar">
    <div class="wrap">
      <a href="mailto:<?= SITE_EMAIL ?>">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 4h16v16H4z" opacity="0" />
          <rect x="2" y="4" width="20" height="16" rx="2" />
          <path d="m22 6-10 7L2 6" />
        </svg>
        <?= SITE_EMAIL ?>
      </a>
      <a href="tel:<?= SITE_PHONE_TEL ?>">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <path
            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.05 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.13 1 .35 1.98.66 2.92a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.16-1.12a2 2 0 0 1 2.11-.45c.94.31 1.92.53 2.92.66A2 2 0 0 1 22 16.92z" />
        </svg>
        <?= SITE_PHONE_DISPLAY ?>
      </a>
    </div>
  </div>
  <header>
    <nav>
      <a href="<?= $base ?>index" class="logo"><img src="assets/images/logo.png" alt="Adhiran Infotech"
          style="height:58px;display:block;"></a>
      <div class="nav-right">

        <!-- Hamburger Button -->
        <button class="hamburger-btn" aria-label="Toggle Menu">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <div class="nav-links">
          <div class="nav-item">
            <a href="<?= $base ?>about#who-we-are">Who We Are <svg class="chev" width="12" height="12" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9" />
              </svg></a>
            <div class="nav-dropdown cols-3">
              <span class="col-label">Our Organization</span>
              <span class="col-label">Careers</span>
              <span class="col-label">Insights</span>
              <a href="<?= $base ?>about#who-we-are">About Us</a>
              <a href="<?= $base ?>leadership">Leadership</a>
              <a href="<?= $base ?>case-studies">Case Studies</a>
              <a href="<?= $base ?>vision-mission">Our Vision &amp; Mission</a>
              <a href="<?= $base ?>https://vijaykrishna-ait.github.io/AITNEW/career">Careers Overview</a>
              <a href="<?= $base ?>news-blog">News &amp; Blog</a>
              <a href="<?= $base ?>core-values">Core Values</a>
              <a href="<?= $base ?>life-with-ait">Life with AIT</a>
              <a href="<?= $base ?>index#clients">Our Clients</a>
              <a href="<?= $base ?>index#reach">Global Presence</a>
              <a href="<?= $base ?>contact">Contact Us</a>
              <a href="<?= $base ?>index#jobs">Explore Job Opportunities</a>
            </div>
          </div>
          <div class="nav-item">
            <a href="<?= $base ?>index#services">What We Do <svg class="chev" width="12" height="12" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9" />
              </svg></a>
            <div class="nav-dropdown">
              <a href="<?= $base ?>ai">Artificial Intelligence &amp; Data</a>
              <a href="<?= $base ?>cloud-engineering">Cloud Services</a>
              <a href="<?= $base ?>digital-engineering">Digital Engineering</a>
              <a href="<?= $base ?>talent-solutions">Talent Solutions</a>
              <a href="<?= $base ?>team-solutions">Team Solutions</a>
              <a href="<?= $base ?>project-solutions">Project Solutions</a>
              <a href="<?= $base ?>enterprise-solutions">Enterprise Platforms</a>
              <a href="<?= $base ?>edutech">EdTech Solutions</a>
              <a href="<?= $base ?>life-sciences">Life Sciences &amp; Pharma</a>
              <a href="<?= $base ?>hire-me">Hire Developers</a>
            </div>
          </div>
          <div class="nav-item">
            <a href="<?= $base ?>index#industries">Industry <svg class="chev" width="12" height="12" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9" />
              </svg></a>
            <div class="nav-dropdown light">
              <span class="col-label">Industries</span>
              <a href="<?= $base ?>index#industries">Banking &amp; Financial Services <span class="chev-r">›</span></a>
              <a href="<?= $base ?>index#industries">Consumer Products <span class="chev-r">›</span></a>
              <a href="<?= $base ?>index#industries">Healthcare &amp; Life Sciences <span class="chev-r">›</span></a>
              <a href="<?= $base ?>index#industries">Hospitality <span class="chev-r">›</span></a>
              <a href="<?= $base ?>index#industries">Manufacturing <span class="chev-r">›</span></a>
              <a href="<?= $base ?>index#industries">Professional Services <span class="chev-r">›</span></a>
            </div>
          </div>
          <a href="<?= $base ?>life-with-ait">Life with AIT</a>
          <a href="<?= $base ?>#contact" class="btn nav-btn">Find Talent</a>
        </div>
      </div>

      <!-- Mobile Accordion Menu -->
      <div class="mobile-menu">
        <div class="mobile-menu-inner">

          <!-- Accordion Item 1: Who We Are -->
          <div class="mobile-accordion">
            <button class="mobile-accordion-header">
              Who We Are
              <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </button>
            <div class="mobile-accordion-content">
              <a href="<?= $base ?>about#who-we-are">About Us</a>
              <a href="<?= $base ?>leadership">Leadership</a>
              <a href="<?= $base ?>vision-mission">Our Vision &amp; Mission</a>
              <a href="<?= $base ?>core-values">Core Values</a>
              <a href="<?= $base ?>index#clients">Our Clients</a>
              <a href="<?= $base ?>index#reach">Global Presence</a>
              <a href="<?= $base ?>case-studies">Case Studies</a>
              <a href="<?= $base ?>news-blog">News &amp; Blog</a>
              <a href="<?= $base ?>life-with-ait">Life with AIT</a>
              <a href="<?= $base ?>https://vijaykrishna-ait.github.io/AITNEW/career">Careers Overview</a>
              <a href="<?= $base ?>index#jobs">Explore Job Opportunities</a>
              <a href="<?= $base ?>contact">Contact Us</a>
            </div>
          </div>

          <!-- Accordion Item 2: What We Do -->
          <div class="mobile-accordion">
            <button class="mobile-accordion-header">
              What We Do
              <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </button>
            <div class="mobile-accordion-content">
              <a href="<?= $base ?>ai">Artificial Intelligence &amp; Data</a>
              <a href="<?= $base ?>cloud-engineering">Cloud Services</a>
              <a href="<?= $base ?>digital-engineering">Digital Engineering</a>
              <a href="<?= $base ?>talent-solutions">Talent Solutions</a>
              <a href="<?= $base ?>team-solutions">Team Solutions</a>
              <a href="<?= $base ?>project-solutions">Project Solutions</a>
              <a href="<?= $base ?>enterprise-solutions">Enterprise Platforms</a>
              <a href="<?= $base ?>edutech">EdTech Solutions</a>
              <a href="<?= $base ?>life-sciences">Life Sciences &amp; Pharma</a>
              <a href="<?= $base ?>hire-me">Hire Developers</a>
            </div>
          </div>

          <!-- Accordion Item 3: Industry -->
          <div class="mobile-accordion">
            <button class="mobile-accordion-header">
              Industry
              <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </button>
            <div class="mobile-accordion-content">
              <a href="<?= $base ?>index#industries">Banking &amp; Financial Services</a>
              <a href="<?= $base ?>index#industries">Consumer Products</a>
              <a href="<?= $base ?>index#industries">Healthcare &amp; Life Sciences</a>
              <a href="<?= $base ?>index#industries">Hospitality</a>
              <a href="<?= $base ?>index#industries">Manufacturing</a>
              <a href="<?= $base ?>index#industries">Professional Services</a>
            </div>
          </div>

          <!-- Standalone Link -->
          <a href="<?= $base ?>life-with-ait" class="mobile-standalone-link">Life with AIT</a>
          <a href="<?= $base ?>contact" class="btn btn-primary mobile-cta-btn">Find Talent</a>

        </div>
      </div>
    </nav>
  </header>
