<?php
$current_page   = 'about';
$page_title     = 'About Us | Adhiran Infotech';
$page_desc      = 'Website design and development company in chennai, web application development company in chennai | mobile app development company | offshoring company in chennai | hire software developer in chennai';
$page_keywords  = 'website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai, Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, adhiran infotech, adhiran infotech in chennai, adhiran, adhiran software company, hire software developers';
$page_canonical = 'https://www.adhiraninfotech.com/about';
include 'includes/header.php';
?>

  <!-- READING PROGRESS -->
  <div class="reading-progress" aria-hidden="true"><span id="readingProgressBar"></span></div>

<main id="main-content">

  <!-- ABOUT HERO -->
  <section class="hero-navy" id="who-we-are" data-reveal="off">
    <div class="wrap hero-grid">
      <div>
        <div class="eyebrow">About Adhiran Infotech</div>
        <h1>Accelerating Growth Through People and Technology</h1>
        <p class="lead">At Adhiran Infotech, we specialize in IT staffing, software development, and AI-powered consulting services. We partner with organizations worldwide to build high-performing teams, create scalable web and mobile applications, and implement technology solutions that drive business success.</p>
        <div class="hero-actions">
          <a href="<?= $base ?>contact" class="btn btn-lime btn-magnetic">Work With Us →</a>
          <a href="<?= $base ?>career" class="btn btn-outline-light">Join Our Team</a>
        </div>
        <div class="hero-stats">
          <div class="stat" tabindex="0">
            <b class="count-up" data-target="10" data-suffix="+">10+</b><span>Years of <br> Industry Experience</span>
            <span class="stat-proof" role="note">Combined delivery experience across IT staffing, software engineering and consulting engagements.</span>
          </div>
          <div class="stat" tabindex="0">
            <b class="count-up" data-target="6">6</b><span>Local Presence <br> Across Countries</span>
            <span class="stat-proof" role="note">India (HQ, Chennai), United States, Singapore, UAE, Japan and Australia.</span>
          </div>
          <div class="stat" tabindex="0">
            <b class="count-up" data-target="500" data-suffix="+">500+</b><span>Successful Placements & <br> Engagements</span>
            <span class="stat-proof" role="note">Placements and project engagements delivered for clients across our global markets.</span>
          </div>
        </div>
      </div>
      <div class="about-hero-visual">
        <div class="about-hero-img">
          <img src="assets/images/about/about-hero.jpg"
            width="1500" height="969"
            fetchpriority="high" decoding="async"
            alt="International team of consultants collaborating in a meeting">
        </div>
        <!-- <div class="about-hero-badge"><b class="count-up" data-target="28" data-suffix="+">28+</b><span>Years of combined team experience</span></div> -->
      </div>
    </div>
  </section>

  <!-- SECTION NAV -->
  <nav class="section-nav" id="sectionNav" aria-label="About page sections">
    <ul>
      <li><a href="#who-we-are">Who We Are</a></li>
      <li><a href="#vision-mission">Vision &amp; Mission</a></li>
      <li><a href="#core-values">Core Values</a></li>
      <li><a href="#leadership">Leadership</a></li>
      <li><a href="#life">Life with Adhiran</a></li>
    </ul>
  </nav>

  <!-- OUR VISION -->
  <section id="vision-mission">
    <div class="wrap vm-grid" data-reveal="up">
      <div class="vm-img">
        <img src="assets/images/about/together.jpg"
          width="1000" height="667" loading="lazy" decoding="async"
          alt="Team planning around a table">
      </div>
      <div class="vm-content">
        <span class="tag">Our Vision</span>
        <h2>Building the Future Together</h2>
        <p>We envision Adhiran Infotech as a globally respected partner that organizations can depend on for talent, technology, and innovation. Our focus is on delivering consistent quality, fostering strong partnerships, and helping businesses accelerate growth through skilled professionals and advanced solutions.</p>
        <p>By combining local understanding with global capabilities, we aim to support clients across industries and geographies, enabling them to build stronger teams, embrace innovation, and achieve sustainable success.</p>
      </div>
    </div>
  </section>

  <!-- OUR MISSION -->
  <section class="solutions">
    <div class="wrap vm-grid" data-reveal="up">
      <div class="vm-content">
        <span class="tag">Our Mission</span>
        <h2>Transforming Ideas into Business Outcomes</h2>
        <p>Our mission is to empower businesses with the people, skills, and technology needed to thrive in a rapidly changing world. We work closely with our clients to deliver high-quality talent, scalable technology solutions, and strategic support that foster growth and operational excellence.</p>
        <p>Every engagement is driven by a simple goal: helping our clients move faster, innovate smarter, and achieve sustainable business success.</p>
      </div>
      <div class="vm-img reverse">
        <img src="assets/images/about/transform-ideas.jpg"
          width="1000" height="667" loading="lazy" decoding="async"
          alt="Team discussing strategy in office">
      </div>
    </div>
  </section>

  <!-- CORE VALUES -->
  <section id="core-values">
    <div class="wrap">
      <div class="section-head center" data-reveal="up">
        <div class="eyebrow" style="justify-content:center;">What We Stand For</div>
        <h2>Our Core Values</h2>
        <p>The principles that guide how we hire, deliver and partner — every day, in every market.</p>
      </div>
      <div class="values-grid" data-reveal="stagger">
        <div class="value-card">
          <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg></div>
          <h3>Transparency</h3>
          <p>Clear strategies, honest timelines and full visibility into every engagement — no surprises.</p>
        </div>
        <div class="value-card">
          <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12" />
            </svg></div>
          <h3>Quality First</h3>
          <p>We hold ourselves to a high bar — rigorous vetting, code reviews and delivery standards.</p>
        </div>
        <div class="value-card">
          <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg></div>
          <h3>People First</h3>
          <p>Our talent's growth and wellbeing come first — happy teams build better products.</p>
        </div>
        <div class="value-card">
          <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <line x1="2" y1="12" x2="22" y2="12" />
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
            </svg></div>
          <h3>Global Mindset</h3>
          <p>We work across time zones and cultures as naturally as we work down the hall.</p>
        </div>
        <div class="value-card">
          <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 3v18h18" />
              <path d="M18.4 8.6 13 14l-3-3-4.5 4.5" />
            </svg></div>
          <h3>Innovation</h3>
          <p>From AI to automation, we bring forward-looking thinking to every engagement.</p>
        </div>
        <div class="value-card">
          <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg></div>
          <h3>Integrity</h3>
          <p>We do what we say we'll do — for clients, for candidates, and for each other.</p>
        </div>
        <div class="value-card">
          <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" />
            </svg></div>
          <h3>Agility</h3>
          <p>We scale teams up or down quickly, adapting to shifting priorities without friction.</p>
        </div>
        <div class="value-card">
          <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2 4 5v6c0 5 3.5 9 8 11 4.5-2 8-6 8-11V5z" />
              <path d="m9 12 2 2 4-4" />
            </svg></div>
          <h3>Accountability</h3>
          <p>Every engagement has a clear owner, clear goals, and clear results.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- LEADERSHIP -->
  <section class="industries" id="leadership">
    <div class="wrap">
      <div class="section-head center" data-reveal="up">
        <div class="eyebrow" style="justify-content:center;">Leadership</div>
        <h2>The people leading Adhiran Infotech</h2>
        <p>Experienced leaders driving strategy, delivery and client success across our global offices.</p>
      </div>
      <div class="leader-grid" data-reveal="stagger">
        <div class="leader-card">
          <div class="photo">
            <img src="assets/images/aitteam/karthikeyan.jpg"
              width="852" height="1260" loading="lazy" decoding="async"
              alt="Karthikeyan, Founder and CEO of Adhiran Infotech">
          </div>
          <h3>Karthikeyan</h3>
          <div class="role">Founder &amp; CEO</div>
        </div>
        <div class="leader-card">
          <div class="photo">
            <img src="assets/images/aitteam/prem.jpg"
              width="612" height="640" loading="lazy" decoding="async"
              alt="Premkumar, Co-Founder and CTO of Adhiran Infotech">
          </div>
          <h3>Premkumar</h3>
          <div class="role">Co-Founder &amp; CTO</div>
        </div>
        <div class="leader-card">
          <div class="photo">
            <img src="assets/images/aitteam/selvi.jpg"
              width="1088" height="1445" loading="lazy" decoding="async"
              alt="Selvi, Director at Adhiran Infotech">
          </div>
          <h3>Selvi</h3>
          <div class="role">Director</div>
        </div>
        <div class="leader-card">
          <div class="photo">
            <img src="assets/images/aitteam/kalaivani.jpg"
              width="696" height="1040" loading="lazy" decoding="async"
              alt="Kalaivani, Director at Adhiran Infotech">
          </div>
          <h3>Kalaivani</h3>
          <div class="role">Director</div>
        </div>
      </div>
    </div>
  </section>

  <!-- LIFE WITH ADHIRAN -->
  <section id="life">
    <div class="wrap">
      <div class="section-head center" data-reveal="up">
        <div class="eyebrow" style="justify-content:center;">Culture</div>
        <h2>Life with Adhiran</h2>
        <p>A glimpse into our culture — collaboration, celebration and the people who make it all work.
          Select any photo to view it larger.</p>
      </div>
      <div class="life-gallery" data-reveal="stagger">
        <div>
          <img src="assets/images/aitlife/life1.jpg" width="750" height="1000" loading="lazy" decoding="async"
            alt="Team members sitting together on benches during a day out at a theme park">
          <button type="button" class="life-zoom" aria-label="View photo: team members at a theme park day out">
            <span class="zoom-ico" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg>
            </span>
          </button>
        </div>
        <div>
          <img src="assets/images/aitlife/life2.jpg" width="1000" height="667" loading="lazy" decoding="async"
            alt="The team gathered on an outdoor archery range holding bows after a session">
          <button type="button" class="life-zoom" aria-label="View photo: team archery session">
            <span class="zoom-ico" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg>
            </span>
          </button>
        </div>
        <div>
          <img src="assets/images/aitlife/life3.jpg" width="1000" height="667" loading="lazy" decoding="async"
            alt="Colleagues crowded around a table tennis table during an offsite games session">
          <button type="button" class="life-zoom" aria-label="View photo: table tennis at a team offsite">
            <span class="zoom-ico" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg>
            </span>
          </button>
        </div>
        <div>
          <img src="assets/images/aitlife/adhiran.jpeg" width="1280" height="960" loading="lazy" decoding="async"
            alt="The Adhiran Infotech team lined up outside the Chennai office, many wearing company polo shirts">
          <button type="button" class="life-zoom" aria-label="View photo: the team outside the Chennai office">
            <span class="zoom-ico" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg>
            </span>
          </button>
        </div>
        <div>
          <img src="assets/images/aitlife/life5.jpg" width="1000" height="563" loading="lazy" decoding="async"
            alt="Group selfie of the team outdoors among greenery during a company outing">
          <button type="button" class="life-zoom" aria-label="View photo: group selfie on a company outing">
            <span class="zoom-ico" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg>
            </span>
          </button>
        </div>
        <div>
          <img src="assets/images/aitlife/life4.jpg" width="1000" height="750" loading="lazy" decoding="async"
            alt="Team group photo outside a colonnaded building during an offsite">
          <button type="button" class="life-zoom" aria-label="View photo: team group photo at an offsite">
            <span class="zoom-ico" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg>
            </span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- RECENT BLOG / ACTIVITIES -->
  <?php /* ============================================================
     COMMENTED OUT - RECENT BLOG / ACTIVITIES ("Stories of transformation")
     Was already disabled with an HTML comment, which still executed the PHP
     inside it and shipped ~50 lines of dead markup to every visitor. Re-wrapped
     in a PHP comment so it is not sent to the browser at all.
     VERIFY BEFORE RESTORING. Five headlines announcing events with no source anywhere in the repo - a 500+ placements milestone, GITEX Dubai 2026, a new Singapore delivery hub, a STEM volunteering programme and an internal hackathon - each on a hotlinked Unsplash stock photo, and every card links to "#" rather than to an article. The same five headlines make up most of news-blog.php.
     Markup below is kept verbatim and unchanged. To restore, delete
     this header and the two PHP comment markers around the block.
     ============================================================ */ ?>
  <?php /*
  <section class="news">
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow" style="justify-content:center;">Insights</div>
        <h2>Stories of <em>transformation</em></h2>
        <p>Recent activities, milestones and stories from inside Adhiran Infotech.</p>
      </div>
      <div class="stories-grid">
        <a href="<?= $base ?>#" class="story-card big">
          <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=900&q=80"
            alt="Team celebrating company milestone">
          <div class="inner">
            <span class="pill">Company News</span>
            <h3>Adhiran Infotech crosses 500+ successful placements milestone</h3>
          </div>
        </a>
        <a href="<?= $base ?>#" class="story-card">
          <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=700&q=80"
            alt="Team at a tech conference">
          <div class="inner">
            <span class="pill">Events</span>
            <h3>Our team at GITEX Dubai 2026</h3>
          </div>
        </a>
        <a href="<?= $base ?>#" class="story-card">
          <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=700&q=80"
            alt="New office opening">
          <div class="inner">
            <span class="pill">Expansion</span>
            <h3>New delivery hub opens in Singapore</h3>
          </div>
        </a>
        <a href="<?= $base ?>#" class="story-card">
          <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=700&q=80"
            alt="Team volunteering activity">
          <div class="inner">
            <span class="pill">CSR</span>
            <h3>Adhiran volunteers support local STEM education programs</h3>
          </div>
        </a>
        <a href="<?= $base ?>#" class="story-card">
          <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=700&q=80"
            alt="Internal hackathon event">
          <div class="inner">
            <span class="pill">Innovation</span>
            <h3>Annual internal hackathon sparks new AI tools</h3>
          </div>
        </a>
      </div>
    </div>
  </section>
  */ ?>

  <!-- CTA -->
  <section class="cta" id="contact">
    <h2>Want to be part of our story?</h2>
    <p>Whether you're looking to hire talent, partner on a project, or join our team — we'd love to hear from you.</p>
    <div class="actions">
      <a href="<?= $base ?>contact" class="btn btn-lime btn-magnetic">Contact Us</a>
      <a href="<?= $base ?>career" class="btn btn-outline-light">View Careers</a>
    </div>
  </section>

</main>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Photo viewer" hidden>
  <button type="button" class="lightbox-close" aria-label="Close photo viewer">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
      stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
  </button>
  <figure class="lightbox-figure">
    <button type="button" class="lightbox-btn prev" aria-label="Previous photo">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg>
    </button>
    <img src="" alt="">
    <button type="button" class="lightbox-btn next" aria-label="Next photo">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
    </button>
    <figcaption>
      <span class="lightbox-caption"></span>
      <span class="lightbox-count"></span>
    </figcaption>
  </figure>
</div>

<!-- FLOATING CONTACT -->
<div class="float-contact" id="floatContact">
  <button type="button" class="float-toggle" aria-expanded="false" aria-label="Open contact options">
    <svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
      <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
    </svg>
  </button>
  <div class="float-actions">
    <a class="float-action" href="tel:<?= SITE_PHONE_TEL ?>">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.05 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.13 1 .35 1.98.66 2.92a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.16-1.12a2 2 0 0 1 2.11-.45c.94.31 1.92.53 2.92.66A2 2 0 0 1 22 16.92z"/></svg>
      Call <?= SITE_PHONE_DISPLAY ?>
    </a>
    <a class="float-action" href="<?= $base ?>contact">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
      Send us a message
    </a>
    <a class="float-action" href="<?= $base ?>career">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
      View open roles
    </a>
  </div>
</div>

<?php include 'includes/footer.php'; ?>