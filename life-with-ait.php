<?php
$current_page   = 'life-with-ait';
$page_title     = 'Life with AIT | Adhiran Infotech';
$page_desc      = 'Website design and development company in chennai, web application development company in chennai | mobile app development company | offshoring company in chennai | hire software developer in chennai';
$page_keywords  = 'website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai, Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, adhiran infotech, adhiran infotech in chennai, adhiran, adhiran software company, hire software developers';
$page_canonical = 'https://www.adhiraninfotech.com/life-with-ait';
include 'includes/header.php';
?>

<!-- READING PROGRESS -->
<div class="reading-progress" aria-hidden="true"><span id="readingProgressBar"></span></div>

<main id="main-content">

<!-- LWA HERO -->
<section class="lwa-hero" id="life-at-ait" data-reveal="off">
  <div class="wrap">
    <div class="eyebrow">Life with AIT</div>
    <h1>Where Talent Thrives</h1>
    <p class="lead-text">From collaborative work environments and learning opportunities to team celebrations and employee well-being initiatives, Adhiran Infotech is a place where people can do their best work, grow their careers, and be part of something meaningful.</p>

    <div class="hero-actions">
      <a href="<?= $base ?>career#open-positions" class="btn btn-primary btn-magnetic">See Open Roles →</a>
      <a href="<?= $base ?>about#leadership" class="btn btn-outline">Meet the Team</a>
    </div>

    <ul class="lwa-hero-facts">
      <li>
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Hybrid &amp; remote working
      </li>
      <li>
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        Funded learning &amp; certifications
      </li>
      <li>
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        Global project exposure
      </li>
      <li>
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        Wellness &amp; healthcare cover
      </li>
    </ul>
  </div>
</section>

<!-- SECTION NAV -->
<nav class="section-nav" id="sectionNav" aria-label="Life with AIT sections">
  <ul>
    <li><a href="#gallery">Our People</a></li>
    <li><a href="#benefits">Benefits</a></li>
    <?php /* COMMENTED OUT - both targets are commented out below (#team-out
       stock-photo event cards, #testimonials unverified quotes), so these two
       links would jump nowhere. Restore them together with their sections. */ ?>
    <?php /*
    <li><a href="#team-out">Team Out</a></li>
    <li><a href="#testimonials">In Their Words</a></li>
    */ ?>
  </ul>
</nav>

<!-- GALLERY -->
<section class="lwa-gallery" id="gallery">
  <div class="wrap">
    <div class="section-head" data-reveal="up">
      <div class="eyebrow">Our People</div>
      <h2>Moments from the team</h2>
      <p>Offsites, games, celebrations and everyday life at Adhiran Infotech. Select any photo to view it larger.</p>
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

<!-- BENEFITS -->
<section id="benefits">
  <div class="wrap">
    <div class="section-head" data-reveal="up">
      <div class="eyebrow">Benefits</div>
      <h2>Benefits That Grow with You</h2>
      <p>Our benefits go beyond the basics. We offer programs and opportunities that support career development, employee well-being, work-life balance, and professional success—helping our team members grow, achieve, and excel wherever they are in the world.</p>
    </div>
    <div class="benefits-grid" data-reveal="stagger">
      <div class="benefit-card">
        <div class="ico" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
        <h3>Wellness &amp; Healthcare Benefits</h3>
        <p>Access to quality healthcare coverage, wellness resources, and support programs that help employees and their loved ones stay healthy and protected.</p>
      </div>
      <div class="benefit-card">
        <div class="ico" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h3>Work with Flexibility</h3>
        <p>We offer hybrid and remote working arrangements, enabling our teams to collaborate effectively across locations and time zones while maintaining flexibility in their work schedules.</p>
      </div>
      <div class="benefit-card">
        <div class="ico" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
        <h3>Upskilling for the Future</h3>
        <p>From cloud technologies and enterprise platforms to emerging digital skills, we invest in learning opportunities that empower our teams to grow and succeed.</p>
      </div>
      <div class="benefit-card">
        <div class="ico" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.5 9 8 11 4.5-2 8-6 8-11V5z"/><path d="m9 12 2 2 4-4"/></svg></div>
        <h3>Work-Life Balance Matters</h3>
        <p>Enjoy competitive leave benefits, regional holidays, and family-focused policies designed to promote well-being, balance, and quality time with loved ones.</p>
      </div>
      <div class="benefit-card">
        <div class="ico" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18.4 8.6 13 14l-3-3-4.5 4.5"/></svg></div>
        <h3>Performance &amp; Advancement Opportunities</h3>
        <p>We foster a culture of accountability and excellence through fair performance assessments, rewarding achievements, and providing clear direction for career development and progression.</p>
      </div>
      <div class="benefit-card">
        <div class="ico" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
        <h3>Global Career Opportunities</h3>
        <p>Collaborate with international teams, contribute to global projects, and gain valuable exposure to diverse markets, cultures, and business environments across our worldwide network.</p>
      </div>
      <div class="benefit-card">
        <div class="ico" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg></div>
        <h3>Cutting-Edge Tools &amp; Technologies</h3>
        <p>Work with industry-leading platforms, emerging technologies, and modern development environments that help you innovate, collaborate, and stay ahead in a fast-changing digital world.</p>
      </div>
      <div class="benefit-card">
        <div class="ico" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <h3>Referral Rewards</h3>
        <p>Our employee referral program encourages team members to bring talented individuals into the organization while earning attractive rewards for successful hires.</p>
      </div>
    </div>
  </div>
</section>

<!-- TEAM OUT / EVENTS -->
<?php /* ============================================================
   COMMENTED OUT - TEAM OUT / EVENTS (Celebrations, outings & team moments)
   VERIFY BEFORE RESTORING. Six named events are illustrated with photos that do not show the event described, and in four of six cases show no people at all - "Annual team retreat at the coast" is a photo of helium balloons indoors, "Year-end team dinner (New Jersey)" is two hikers below snow-capped mountains, "Desert team-building day" is the Dubai skyline at dusk, "Marina Bay welcome event" and "Harbourside team lunch" are the Singapore and Sydney city photos reused from the homepage Global Reach rail, and "Cherry blossom season gathering" is a Tokyo street scene. The gallery above it (#gallery) is the real thing: actual team photos with matching alt text. Restore this section once real event photos exist, or once the captions are rewritten to describe the images that are actually there.
   Markup below is kept verbatim and unchanged. To restore, delete
   this header and the two PHP comment markers around the block.
   ============================================================ */ ?>
<?php /*
<section class="solutions" id="team-out">
  <div class="wrap">
    <div class="section-head" data-reveal="up">
      <div class="eyebrow">Team Out</div>
      <h2>Celebrations, outings &amp; team moments</h2>
      <p>A few snapshots from team events across our global offices.</p>
    </div>
    <div class="outings-grid" data-reveal="stagger">
      <div class="outing-card">
        <div class="outing-card-img">
          <img src="assets/images/aitlife/chennai.jpeg" width="700" height="467" loading="lazy" decoding="async"
            alt="Colourful helium balloons gathered against a ceiling at a celebration">
        </div>
        <div class="outing-card-body">
          <span class="loc-tag"><span class="loc-flag" aria-hidden="true">🇮🇳</span> Chennai, India</span>
          <h3>Annual team retreat at the coast</h3>
          <p>A two-day offsite combining strategy sessions with team-building activities by the sea.</p>
        </div>
      </div>
      <div class="outing-card">
        <div class="outing-card-img">
          <img src="assets/images/aitlife/new-jersey.jpeg" width="700" height="467" loading="lazy" decoding="async"
            alt="Two hikers with backpacks walking a trail below snow-capped mountains">
        </div>
        <div class="outing-card-body">
          <span class="loc-tag"><span class="loc-flag" aria-hidden="true">🇺🇸</span> New Jersey, USA</span>
          <h3>Year-end team dinner</h3>
          <p>Celebrating wins and welcoming new team members over dinner with the North America team.</p>
        </div>
      </div>
      <div class="outing-card">
        <div class="outing-card-img">
          <img src="assets/images/index/dubai.jpeg" width="700" height="1050" loading="lazy" decoding="async"
            alt="Dubai skyline with high-rise towers at dusk">
        </div>
        <div class="outing-card-body">
          <span class="loc-tag"><span class="loc-flag" aria-hidden="true">🇦🇪</span> Dubai, UAE</span>
          <h3>Desert team-building day</h3>
          <p>Our Dubai team swapped the office for a day of activities in the desert outside the city.</p>
        </div>
      </div>
      <div class="outing-card">
        <div class="outing-card-img">
          <img src="assets/images/index/singapore.jpeg" width="700" height="467" loading="lazy" decoding="async"
            alt="Singapore skyline and waterfront at dusk">
        </div>
        <div class="outing-card-body">
          <span class="loc-tag"><span class="loc-flag" aria-hidden="true">🇸🇬</span> Singapore</span>
          <h3>Marina Bay welcome event</h3>
          <p>Marking the opening of our Singapore hub with a welcome event for the new local team.</p>
        </div>
      </div>
      <div class="outing-card">
        <div class="outing-card-img">
          <img src="assets/images/aitlife/tokyo.jpeg" width="700" height="467" loading="lazy" decoding="async"
            alt="Historic street of wooden houses leading to a five-storey pagoda at dusk in Japan">
        </div>
        <div class="outing-card-body">
          <span class="loc-tag"><span class="loc-flag" aria-hidden="true">🇯🇵</span> Tokyo, Japan</span>
          <h3>Cherry blossom season gathering</h3>
          <p>Our Tokyo team's annual hanami gathering — a tradition the wider team looks forward to each year.</p>
        </div>
      </div>
      <div class="outing-card">
        <div class="outing-card-img">
          <img src="assets/images/aitlife/sydney.jpeg" width="700" height="467" loading="lazy" decoding="async"
            alt="Aerial view of Sydney Harbour with the Opera House and passing ferries">
        </div>
        <div class="outing-card-body">
          <span class="loc-tag"><span class="loc-flag" aria-hidden="true">🇦🇺</span> Sydney, Australia</span>
          <h3>Harbourside team lunch</h3>
          <p>Our Australia team came together for a lunch by Sydney Harbour to celebrate a strong quarter.</p>
        </div>
      </div>
    </div>
  </div>
</section>
*/ ?>

<!-- TESTIMONIALS -->
<?php /* ============================================================
   COMMENTED OUT - TEAM TESTIMONIALS (What our team says about working here)
   VERIFY BEFORE RESTORING. Three initial-only quotes (Ananya R., James W., Mei L.) with no photos, on a site that demonstrably carries invented people elsewhere. If these are genuine employee quotes, uncomment - the section itself is well built.
   Markup below is kept verbatim and unchanged. To restore, delete
   this header and the two PHP comment markers around the block.
   ============================================================ */ ?>
<?php /*
<section class="skills bg-white" id="testimonials">
  <div class="wrap">
    <div class="section-head center" data-reveal="up">
      <div class="eyebrow" style="justify-content:center;">In Their Words</div>
      <h2>What our team says about working here</h2>
      <p>A few thoughts from people across our global offices.</p>
    </div>
    <div class="testi-grid" data-reveal="stagger">
      <figure class="testi-card">
        <div class="quote-mark" aria-hidden="true">"</div>
        <blockquote>
          <p>I've worked on projects for clients in three different countries without ever feeling like I was on my own — the global team is genuinely connected.</p>
        </blockquote>
        <figcaption class="who">Ananya R.<span>Software Engineer, Chennai</span></figcaption>
      </figure>
      <figure class="testi-card">
        <div class="quote-mark" aria-hidden="true">"</div>
        <blockquote>
          <p>The flexibility to work hybrid while staying close to a strong local team has made a real difference for my work-life balance.</p>
        </blockquote>
        <figcaption class="who">James W.<span>Account Manager, Sydney</span></figcaption>
      </figure>
      <figure class="testi-card">
        <div class="quote-mark" aria-hidden="true">"</div>
        <blockquote>
          <p>Certifications, mentorship, and real ownership of projects early on — I've grown faster here than I expected.</p>
        </blockquote>
        <figcaption class="who">Mei L.<span>Cloud Engineer, Singapore</span></figcaption>
      </figure>
    </div>
  </div>
</section>
*/ ?>

<!-- CTA -->
<section class="cta" id="contact">
  <h2>Want to be part of the team?</h2>
  <p>Explore open roles across our global offices — or get in touch to learn more about life at AIT.</p>
  <div class="actions">
    <a href="<?= $base ?>career#open-positions" class="btn btn-lime btn-magnetic">View Open Roles</a>
    <a href="<?= $base ?>contact" class="btn btn-outline-light">Talk to Us</a>
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
    <a class="float-action" href="<?= $base ?>career#open-positions">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
      View open roles
    </a>
    <a class="float-action" href="mailto:<?= SITE_EMAIL ?>">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
      Email us
    </a>
    <a class="float-action" href="<?= $base ?>contact">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      Send us a message
    </a>
  </div>
</div>

  <?php include 'includes/footer.php'; ?>
