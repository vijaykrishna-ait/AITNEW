<?php
$seo_key       = 'hire-veeva-developer';
include 'includes/header.php';
?>

<!-- HERO -->
<section class="hero-navy">
  <div class="wrap hero-grid">

    <div class="">
      <div class="eyebrow">IT SOLUTIONS — VEEVA CRM</div>
      <h1><?= seo_h1() ?></h1>
      <p class="lead"><?= seo_lead() ?></p>
      <div class="hero-actions">
        <a href="<?= $base ?>contact" class="btn btn-lime">Start Your Project &rarr;</a>
        <a href="#services" class="btn btn-outline-light">Explore Services</a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-photo">
        <img src="assets/images/veeva/veeva-banner.jpeg" alt="">
      </div>
    </div>
  </div>
</section>

<!-- SERVICES GRID -->
<section class="solutions" id="services">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Our Services</div>
      <?php seo_section(0); ?>
    </div>
    <div class="itsol-svc-grid">
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/veeva/crm.png" alt=""></div>
        <h3>Veeva CRM Implementation</h3>
        <p>End-to-end Vault CRM deployment — from blueprint and configuration to user training and go-live — delivered by experienced Veeva consultants with deep life sciences expertise.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/veeva/migration.png" alt=""></div>
        <h3>Classic CRM → Vault CRM Migration</h3>
        <p>Migrate from Salesforce-based Classic CRM to next-generation Vault CRM with minimal field force disruption, maintaining data integrity and business continuity throughout.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/veeva/configuration.png" alt=""></div>
        <h3>CRM Configuration & Customization</h3>
        <p>Tailor Vault CRM to your brand, territory, and workflow requirements — X-Pages, CLM content, Approved Email, call recording, and multichannel activity configuration.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/veeva/ams.png" alt=""></div>
        <h3>Application Management Services (AMS)</h3>
        <p>Ongoing Vault CRM support, monitoring, optimisation, and enhancement services to keep your CRM landscape stable and aligned with evolving business needs.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/veeva/data-migration.png" alt=""></div>
        <h3>HCP/HCO Data Migration</h3>
        <p>Structured migration of customer master data using Veeva Network and OpenData — with full validation, deduplication, and reconciliation to maintain data integrity.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/veeva/integration.png" alt=""></div>
        <h3>CRM Integration Services</h3>
        <p>Connect Vault CRM with third-party systems via Vault Connections, Spark Messaging, and REST API — enabling seamless enterprise-wide data flows across ERP, MDM, and BI platforms.</p>
      </div>
    </div>
  </div>
</section>



<!-- WHY CHOOSE -->
<section>
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Why Adhiran</div>
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
    <p>Partner with Adhiran Infotech to unlock the full potential of Veeva CRM for your life sciences commercial operations.</p>
    <div class="actions">
      <a href="<?= $base ?>contact" class="btn btn-lime">Get in Touch &rarr;</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>