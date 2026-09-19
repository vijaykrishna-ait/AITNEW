<?php
$seo_key       = 'power-bi';
include 'includes/header.php';
?>

<!-- HERO -->
<section class="hero-navy">
  <div class="wrap hero-grid">

    <div class="">
      <div class="eyebrow">IT Solutions — Power BI</div>
      <h1><?= seo_h1() ?></h1>
      <p class="lead"><?= seo_lead() ?></p>
      <div class="hero-actions">
        <a href="<?= $base ?>contact#contact-form" class="btn btn-lime">Start Your Project &rarr;</a>
        <a href="power-bi#services" class="btn btn-outline-light">Explore Services</a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-photo">
        <img src="assets/images/banners/power-bi-banner.jpg" alt="">
      </div>
    </div>

  </div>
</section>

<!-- SERVICES GRID -->
<section class="solutions" id="services">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Our Services</div>
      <h2>What We Offer</h2>
    </div>
    <div class="itsol-svc-grid">
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/powerbi/dashboard.png" alt=""></div>
        <h3>Dashboard & Report Creation</h3>
        <p>Design and develop interactive Power BI dashboards and paginated reports tailored to your business KPIs and stakeholder needs.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/powerbi/model.png" alt=""></div>
        <h3>Data Modeling</h3>
        <p>Build robust, optimized data models using star schemas, DAX measures, and calculated columns to ensure accurate, fast analytics.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/powerbi/db.png" alt=""></div>
        <h3>Database Integration</h3>
        <p>Connect Power BI to your data sources — SQL Server, Azure SQL, Snowflake, Databricks, SharePoint, Salesforce, and hundreds more.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/powerbi/custom.png" alt=""></div>
        <h3>Custom Visual Development</h3>
        <p>Build bespoke Power BI visuals using D3.js and the Power BI custom visual SDK when standard chart types don't meet your needs.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/powerbi/tuning.png" alt=""></div>
        <h3>Performance Tuning</h3>
        <p>Optimize slow Power BI reports — query folding, aggregations, DirectQuery vs Import mode selection, and model compression.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/powerbi/training.png" alt=""></div>
        <h3>Training & Support</h3>
        <p>Empower your team with Power BI training — from report building basics to advanced DAX and administration for self-service BI.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Key Features</div>
      <?php seo_section(0); ?>
    </div>
    <div class="itsol-adv-grid">
      <div class="itsol-adv-card">
        <h4>Data Visualization</h4>
        <p>Transform complex data into clear, compelling visuals — charts, maps, matrices, and KPI cards that make insights immediately obvious.</p>
      </div>
      <div class="itsol-adv-card">
        <h4>Interactive Dashboards</h4>
        <p>Dynamic dashboards with cross-filtering, drill-through, and bookmarks that let users explore data from multiple dimensions.</p>
      </div>
      <div class="itsol-adv-card">
        <h4>Data Modeling</h4>
        <p>Robust semantic models with well-defined relationships, hierarchies, and DAX calculations for accurate, consistent metrics.</p>
      </div>
      <div class="itsol-adv-card">
        <h4>AI-Powered Insights</h4>
        <p>Leverage Power BI's built-in AI features — Q&A natural language queries, Key Influencers, Decomposition Tree, and Smart Narratives.</p>
      </div>
      <div class="itsol-adv-card">
        <h4>Seamless Data Connectivity</h4>
        <p>Native connectors to 200+ data sources including databases, cloud services, flat files, and streaming data for unified analytics.</p>
      </div>
      <div class="itsol-adv-card">
        <h4>Enhanced Collaboration</h4>
        <p>Share reports and dashboards securely via Power BI Service, embed in Teams, SharePoint, or external portals with row-level security.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section>
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Why Choose Us</div>
      <h2>Why Choose Adhiran Infotech</h2>
    </div>
    <div class="itc-benefits-grid">
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Guaranteed Service : </strong>We commit to quality and reliability, guaranteeing that every engagement meets agreed standards and deliverables.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Quick & Easy Integration : </strong>Our professionals integrate seamlessly into your existing team, workflows and toolsets with minimal ramp-up time.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Continuous Improvement : </strong>We embrace agile practices and regular retrospectives to continuously refine processes and improve output quality.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Custom Solutions : </strong>Every solution is tailored to your specific business context, technology stack and project requirements.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Expert Team : </strong>Our team consists of experienced professionals proficient in their domain with proven track records across industries.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Certified Developers : </strong>Our developers hold industry-recognized certifications and undergo rigorous vetting before joining any client engagement.</div>
      </div>
    </div>
  </div>
</section>

<?php seo_faq(); ?>

<section class="cta">
  <div class="wrap">
    <h2>Ready to Transform Your Business?</h2>
    <p>Partner with Adhiran Infotech to unlock the full potential of cutting-edge IT solutions tailored for your industry.</p>
    <div class="actions">
      <a href="<?= $base ?>contact" class="btn btn-lime">Get in Touch &rarr;</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>