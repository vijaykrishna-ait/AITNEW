<?php
$seo_key       = 'sap-it-solutions';
include 'includes/header.php';
?>

<!-- HERO -->
<section class="hero-navy">
  <div class="wrap hero-grid">

    <div class="">
      <div class="eyebrow">IT Solutions — SAP</div>
      <h1><?= seo_h1() ?></h1>
      <p class="lead"><?= seo_lead() ?></p>
      <div class="hero-actions">
        <a href="<?= $base ?>contact#contact-form" class="btn btn-lime">Start Your Project &rarr;</a>
        <a href="sap-it-solutions#services" class="btn btn-outline-light">Explore Services</a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-photo">
        <img src="assets/images/banners/sap-banner.jpg" alt="">
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
        <div class="itsol-svc-icon"><img src="assets/icons/sap/sap.png" alt=""></div>
        <h3>Rise with SAP</h3>
        <p>Complete SAP S/4HANA cloud migration journey — from assessment and business case to cutover and hypercare — on a fixed-scope, subscription model.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/sap/crave.png" alt=""></div>
        <h3>SAP Carve Out</h3>
        <p>Separate business units or subsidiaries from existing SAP landscapes with minimal disruption, maintaining data integrity and business continuity.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/sap/implementation.png" alt=""></div>
        <h3>SAP Implementation</h3>
        <p>End-to-end SAP system implementation — blueprint, build, test, train and go-live — delivered by certified SAP consultants with deep domain expertise.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/sap/ams-sap.png" alt=""></div>
        <h3>Application Management Services (AMS)</h3>
        <p>Ongoing SAP support, monitoring, optimization, and enhancement services to keep your SAP landscape stable and aligned with evolving business needs.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/veeva/data-migration.png" alt=""></div>
        <h3>SAP Data Migration</h3>
        <p>Structured data migration using SAP Data Services and LSMW — extracting, transforming, and loading data with full validation and reconciliation.</p>
      </div>
      <div class="itsol-svc-card">
        <div class="itsol-svc-icon"><img src="assets/icons/veeva/integration.png" alt=""></div>
        <h3>SAP Integration</h3>
        <p>Connect SAP with third-party systems using SAP Integration Suite, BTP, and middleware — enabling seamless enterprise-wide data flows.</p>
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