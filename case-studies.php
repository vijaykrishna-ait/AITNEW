<?php
$seo_key       = 'case-studies';
include 'includes/header.php';
?>
  <!-- CASE STUDIES HERO -->
  <section class="cs-hero">
    <div class="wrap">
      <div class="eyebrow">Case Studies</div>
      <h1><?= seo_h1() ?></h1>
      <p class="lead-text">A look at how we've helped clients across healthcare, automation, life sciences, EdTech and
        beyond — with measurable outcomes.</p>
    </div>
  </section>

  <!-- FILTERS & GRID -->
  <section>
    <div class="wrap">
      <div class="cs-filters">
        <div class="cs-filter active" data-filter="all">All</div>
        <div class="cs-filter" data-filter="ai">AI &amp; Automation</div>
        <div class="cs-filter" data-filter="healthcare">Healthcare &amp; Life Sciences</div>
        <div class="cs-filter" data-filter="enterprise">Enterprise Platforms</div>
        <div class="cs-filter" data-filter="edutech">EdTech</div>
        <div class="cs-filter" data-filter="cloud">Cloud &amp; Manufacturing</div>
      </div>

      <div class="cs-grid">
        <a href="<?= $base ?>case-study-healthcare-ai-diagnostics" class="cs-card" data-cat="healthcare ai">
          <div class="cs-card-img">
            <img src="assets/images/case-studies/healthcare-banner.jpeg"
              alt="AI diagnostics in a hospital setting">
          </div>
          <div class="cs-card-body">
            <span class="tag">Healthcare AI</span>
            <h3>AI-powered diagnostics platform for a hospital network</h3>
            <p>Built and staffed an AI/ML team that delivered a diagnostic-assist platform now used across 200+
              hospitals.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>case-study-uipath-rpa-automation" class="cs-card" data-cat="cloud ai">
          <div class="cs-card-img">
            <img src="assets/images/case-studies/uipath-banner.jpeg"
              alt="Automation workflow on screen">
          </div>
          <div class="cs-card-body">
            <span class="tag">UiPath Automation</span>
            <h3>RPA rollout that automated 30+ back-office workflows</h3>
            <p>Deployed certified UiPath developers to design and scale bots, cutting manual processing time by over
              60%.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>case-study-veeva-crm-implementation" class="cs-card" data-cat="healthcare enterprise">
          <div class="cs-card-img">
            <img src="assets/images/case-studies/veeva-banner.jpeg"
              alt="Sales team reviewing CRM dashboard">
          </div>
          <div class="cs-card-body">
            <span class="tag">Veeva CRM</span>
            <h3>Veeva CRM implementation for a life sciences leader</h3>
            <p>Configured and integrated Veeva CRM across global sales teams, improving rep productivity and compliance
              tracking.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>case-study-edtech-ai-learning-platform" class="cs-card" data-cat="edutech ai">
          <div class="cs-card-img">
            <img src="assets/images/case-studies/edtech-banner.jpeg"
              alt="Student learning online with laptop">
          </div>
          <div class="cs-card-body">
            <span class="tag">EdTech AI</span>
            <h3>AI-based personalized learning platform</h3>
            <p>Engineered an adaptive learning engine that tailors content paths for students, boosting completion
              rates.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>case-study-azure-openai-recruitment" class="cs-card" data-cat="ai enterprise">
          <div class="cs-card-img">
            <img src="assets/images/case-studies/azure-banner.jpeg"
              alt="Team in a meeting discussing recruitment">
          </div>
          <div class="cs-card-body">
            <span class="tag">Azure OpenAI</span>
            <h3>Elevating tax advisory recruitment with Azure OpenAI</h3>
            <p>A global tax and advisory leader implemented Azure OpenAI into their hiring process to screen and match
              candidates — 30–50% faster.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>case-study-predictive-maintenance" class="cs-card" data-cat="cloud">
          <div class="cs-card-img">
            <img src="assets/images/case-studies/predictive-banner.jpeg"
              alt="Manufacturing plant floor with automation">
          </div>
          <div class="cs-card-body">
            <span class="tag">Industry 4.0</span>
            <h3>Predictive maintenance cuts downtime by 60% for a manufacturer</h3>
            <p>IoT sensors and ML models flagged equipment issues early, reducing unplanned downtime across multiple
              plants.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>case-study-cloud-erp-migration" class="cs-card" data-cat="enterprise cloud">
          <div class="cs-card-img">
            <img src="assets/images/case-studies/cloud-erp-banner.jpeg"
              alt="Team reviewing cloud migration plan">
          </div>
          <div class="cs-card-body">
            <span class="tag">Cloud Migration</span>
            <h3>Legacy ERP migrated to cloud with 40% cost reduction</h3>
            <p>Re-architected a legacy SAP environment onto Azure, cutting infrastructure costs while improving uptime.
            </p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>case-study-admissions-portal" class="cs-card" data-cat="edutech">
          <div class="cs-card-img">
            <img src="assets/images/case-studies/admissions-banner.jpeg"
              alt="University admissions portal on screen">
          </div>
          <div class="cs-card-body">
            <span class="tag">Higher Education</span>
            <h3>Admissions portal handles 3x application volume at peak</h3>
            <p>A scalable cloud admissions platform supported a university through its busiest enrollment season yet.
            </p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>case-study-patient-support-chatbot" class="cs-card" data-cat="ai healthcare">
          <div class="cs-card-img">
            <img src="assets/images/case-studies/chatbot-banner.jpeg"
              alt="Healthcare professional using AI chatbot">
          </div>
          <div class="cs-card-body">
            <span class="tag">Conversational AI</span>
            <h3>AI patient-support chatbot reduces call center load by 35%</h3>
            <p>A multilingual chatbot now handles routine patient queries, freeing staff for higher-value interactions.
            </p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta" id="contact">
    <h2>Want to see what we could build for you?</h2>
    <p>Tell us about your challenge — we'll share examples relevant to your industry and goals.</p>
    <div class="actions">
      <a href="<?= $base ?>contact" class="btn btn-lime">Talk to Us</a>
      <a href="<?= $base ?>#solutions" class="btn btn-outline-light">Explore Our Solutions</a>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>