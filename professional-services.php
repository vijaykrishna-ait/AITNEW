<?php
$current_page   = 'professional-services';
$seo_key       = 'professional-services';
include 'includes/header.php';
?>
<!-- HERO -->
<section class="hero-navy">
  <div class="wrap hero-grid">
    <div class="">
      <div class="eyebrow">Professional Services</div>
      <h1><?= seo_h1() ?></h1>
      <p class="lead"><?= seo_lead() ?></p>
      <div class="hero-actions">
        <a href="<?= $base ?>contact#contact-form" class="btn btn-lime">Talk to a Professional Services Expert &rarr;</a>
        <a href="<?= $base ?>professional-services#services" class="btn btn-outline-light">Explore Our Services</a>
      </div>
      <div class="hero-stats">
        <div><b>30&ndash;50%</b><span>Reduction in time lost <br> to administration</span></div>
        <div><b>24&times;7</b><span>Support across practice <br> and delivery platforms</span></div>
        <div><b class="count-up" data-target="40" data-suffix="%">40%</b><span>Faster engagement <br> staffing decisions</span></div>
        <div><b class="count-up" data-target="15" data-suffix="+">15+</b><span>Years building enterprise <br> delivery platforms</span></div>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-photo">
        <img src="assets/images/professional-services/banner.jpeg" alt="Professional services office building">
      </div>
    </div>
  </div>
</section>

<!-- VALUE CHAIN -->
<section style="padding-bottom:0;">
  <div class="wrap">
    <div class="section-head center">
      <div class="eyebrow" style="justify-content:center;">Across the Engagement Lifecycle</div>
      <h2>Supporting every stage, from pitch to invoice</h2>
      <p>We deliver technology across the full engagement lifecycle and the firm-wide data it should feed.</p>
    </div>
    <div class="valuechain-row">
      <div class="valuechain-pill"><span class="dot"></span>Business Development</div>
      <div class="valuechain-pill"><span class="dot"></span>Proposal &amp; Pricing</div>
      <div class="valuechain-pill"><span class="dot"></span>Resourcing</div>
      <div class="valuechain-pill"><span class="dot"></span>Engagement Delivery</div>
      <div class="valuechain-pill"><span class="dot"></span>Time &amp; Billing</div>
      <div class="valuechain-pill"><span class="dot"></span>Knowledge Capture</div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">What We Do</div>
      <h2>Technology across professional services firms</h2>
      <p>Systems for firms where a percentage point of utilization is a meaningful amount of money.</p>
    </div>
    <div class="ls-grid">
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" />
          </svg></div>
        <h3>Resource &amp; Capacity Planning</h3>
        <p>See who is available, who is over-committed and what the pipeline will demand, before you promise a start date.</p>
        <div class="tags">
          <ul>
            <li>Skills and availability matching</li>
            <li>Pipeline-weighted capacity forecasting</li>
            <li>Utilization and bench reporting</li>
          </ul>
        </div>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" /><rect x="8" y="2" width="8" height="4" rx="1" />
          </svg></div>
        <h3>Practice &amp; Engagement Management</h3>
        <p>Engagement setup, budget tracking and delivery status in one place, rather than a partner&rsquo;s spreadsheet.</p>
        <div class="tags">
          <ul>
            <li>Engagement setup and budget tracking</li>
            <li>Milestone and deliverable management</li>
            <li>Margin and write-off analysis</li>
          </ul>
        </div>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 2v6h-6" /><path d="M3 12a9 9 0 0 1 15-6.7L21 8" /><path d="M3 22v-6h6" /><path d="M21 12a9 9 0 0 1-15 6.7L3 16" />
          </svg></div>
        <h3>Time, Billing &amp; Invoicing</h3>
        <p>Time capture that people actually complete, feeding billing rules that handle your real fee arrangements.</p>
        <div class="tags">
          <ul>
            <li>Mobile and low-friction time capture</li>
            <li>Complex fee arrangement billing</li>
            <li>Automated invoice generation and approval</li>
          </ul>
        </div>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" />
          </svg></div>
        <h3>Knowledge Management</h3>
        <p>Make prior work findable, so the firm stops paying to solve the same problem repeatedly.</p>
        <div class="tags">
          <ul>
            <li>Searchable precedent and deliverable libraries</li>
            <li>AI-assisted document retrieval</li>
            <li>Expertise location across the firm</li>
          </ul>
        </div>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 3v18h18" /><path d="M18.4 8.6 13 14l-3-3-4.5 4.5" />
          </svg></div>
        <h3>Firm Analytics</h3>
        <p>Realization, utilization and client profitability, calculated consistently and visible to those who steer the firm.</p>
        <div class="tags">
          <ul>
            <li>Utilization and realization dashboards</li>
            <li>Client and sector profitability analysis</li>
            <li>Power BI reporting for partners</li>
          </ul>
        </div>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="11" width="18" height="11" rx="2" /><path d="M7 11V7a5 5 0 0 1 10 0v4" />
          </svg></div>
        <h3>Client Confidentiality &amp; Security</h3>
        <p>Matter-level access control and conflict management, because a breach here is an existential problem.</p>
        <div class="tags">
          <ul>
            <li>Matter-level access segregation</li>
            <li>Conflict checking workflows</li>
            <li>Secure client collaboration portals</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHO WE SERVE -->
<section class="solutions">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Who We Serve</div>
      <h2>Tailored solutions across professional services</h2>
    </div>
    <div class="segment-row">
      <div class="segment-item">
        <div class="segment-img">
          <img src="assets/images/professional-services/consulting.jpeg" alt="Consultants reviewing analysis together" loading="lazy" decoding="async">
        </div>
        <div class="segment-content">
          <span class="tag">Consulting &amp; Advisory Firms</span>
          <p>Project-based delivery where staffing decisions and scope control determine engagement margin.</p>
          <ul class="segment-features">
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Engagement profitability tracking</li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Consultant skills and staffing tools</li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Proposal and pricing support systems</li>
          </ul>
        </div>
      </div>

      <div class="segment-item reverse">
        <div class="segment-img">
          <img src="assets/images/professional-services/legal.jpeg" alt="Legal team in a meeting" loading="lazy" decoding="async">
        </div>
        <div class="segment-content">
          <span class="tag">Legal &amp; Compliance Practices</span>
          <p>Matter management and document workflows with the confidentiality controls the profession requires.</p>
          <ul class="segment-features">
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Matter and case management systems</li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Document automation and precedent libraries</li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Conflict checking and ethical walls</li>
          </ul>
        </div>
      </div>

      <div class="segment-item">
        <div class="segment-img">
          <img src="assets/images/professional-services/accounting.jpeg" alt="Accounting team at work" loading="lazy" decoding="async">
        </div>
        <div class="segment-content">
          <span class="tag">Accounting &amp; Audit Firms</span>
          <p>Recurring compliance cycles where workflow standardization and deadline visibility keep the season survivable.</p>
          <ul class="segment-features">
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Compliance workflow automation</li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Client document collection portals</li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Deadline and filing status tracking</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STANDARDS -->
<section class="compliance-band">
  <div class="wrap">
    <div class="section-head center">
      <div class="eyebrow" style="justify-content:center;">Built for Confidential Work</div>
      <?php seo_section(1); ?>
    </div>
    <div class="compliance-grid">
      <div class="compliance-card">
        <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="11" width="18" height="11" rx="2" /><path d="M7 11V7a5 5 0 0 1 10 0v4" />
          </svg></div>
        <h3>Matter-Level Access Control</h3>
        <p>Ethical walls and segregation enforced in the platform</p>
      </div>
      <div class="compliance-card">
        <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" /><line x1="2" y1="12" x2="22" y2="12" /><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
          </svg></div>
        <h3>GDPR &amp; Data Privacy</h3>
        <p>Client data protected across regions and jurisdictions</p>
      </div>
      <div class="compliance-card">
        <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" /><rect x="8" y="2" width="8" height="4" rx="1" />
          </svg></div>
        <h3>ISO 27001 &amp; SOC 2</h3>
        <p>Controlled access, audit trails and documented change management</p>
      </div>
      <div class="compliance-card">
        <div class="ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2 4 5v6c0 5 3.5 9 8 11 4.5-2 8-6 8-11V5z" /><path d="m9 12 2 2 4-4" />
          </svg></div>
        <h3>Data Residency</h3>
        <p>Deployment options that respect client and jurisdictional requirements</p>
      </div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section>
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Why Adhiran Infotech</div>
      <h2>Benefits of working with us</h2>
    </div>
    <div class="itc-benefits-grid">
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Strategic Partnerships : </strong>We invest in long-term relationships rather than one-off transactions, aligning our roadmap to your business objectives.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Competitive Pricing : </strong>Onshore&ndash;offshore delivery from Chennai gives you maximum value on every penny spent, without compromising on quality.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Flexibility : </strong>Engagement models are tailored to how you work and scale up or down as your business grows.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Excellent Customer Service : </strong>Goal-oriented customer care with prompt communication and a named point of contact throughout.</div>
      </div>
    </div>
  </div>
</section>

<!-- RELATED CAPABILITIES -->
<section>
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Capabilities We Bring</div>
      <h2>The technology behind our professional services work</h2>
      <p>Every engagement draws on the same core capabilities, combined to fit the problem in front of us.</p>
    </div>
    <div class="ls-grid">
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="4" width="16" height="16" rx="2" /><rect x="9" y="9" width="6" height="6" /><line x1="9" y1="1" x2="9" y2="4" /><line x1="15" y1="1" x2="15" y2="4" /><line x1="9" y1="20" x2="9" y2="23" /><line x1="15" y1="20" x2="15" y2="23" /><line x1="20" y1="9" x2="23" y2="9" /><line x1="20" y1="14" x2="23" y2="14" /><line x1="1" y1="9" x2="4" y2="9" /><line x1="1" y1="14" x2="4" y2="14" />
          </svg></div>
        <h3>AI/ML Solutions</h3>
        <p>Predictive models, computer vision and intelligent automation built on your own operational data.</p>
        <a href="<?= $base ?>aiml-solutions" class="btn btn-outline" style="margin-top:18px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="21" r="1" /><circle cx="20" cy="21" r="1" /><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
          </svg></div>
        <h3>E-Commerce Development</h3>
        <p>Storefronts, checkout and order management engineered for conversion and peak-season load.</p>
        <a href="<?= $base ?>ecommerce-website-development" class="btn btn-outline" style="margin-top:18px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 3v18h18" /><path d="M18.4 8.6 13 14l-3-3-4.5 4.5" />
          </svg></div>
        <h3>Power BI</h3>
        <p>Dashboards and reporting that turn scattered operational data into decisions leaders actually make.</p>
        <a href="<?= $base ?>power-bi" class="btn btn-outline" style="margin-top:18px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="11" width="18" height="11" rx="2" /><path d="M7 11V7a5 5 0 0 1 10 0v4" />
          </svg></div>
        <h3>Block Chain</h3>
        <p>Distributed ledger solutions for traceability, settlement and tamper-evident record keeping.</p>
        <a href="<?= $base ?>block-chain" class="btn btn-outline" style="margin-top:18px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" /><rect x="8" y="2" width="8" height="4" rx="1" />
          </svg></div>
        <h3>QA Process</h3>
        <p>Independent testing and automation that catches regressions before your customers do.</p>
        <a href="<?= $base ?>qa-process" class="btn btn-outline" style="margin-top:18px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>
      <div class="ls-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 2v6h-6" /><path d="M3 12a9 9 0 0 1 15-6.7L21 8" /><path d="M3 22v-6h6" /><path d="M21 12a9 9 0 0 1-15 6.7L3 16" />
          </svg></div>
        <h3>UI PATH</h3>
        <p>RPA bots that take repetitive back-office work off your team entirely.</p>
        <a href="<?= $base ?>ui-path" class="btn btn-outline" style="margin-top:18px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- SUCCESS STORY -->
<section style="padding:0;">
  <div class="story-section">
    <div class="story">
      <div class="story-content">
        <div class="eyebrow" style="color:var(--lime);">Success Story</div>
        <h2>Transforming talent screening with AI</h2>
        <p>A global tax and advisory organization implemented Azure OpenAI to automate candidate screening and matching, reducing manual effort and accelerating hiring decisions.</p>
        <a href="<?= $base ?>case-studies" class="btn btn-primary">View More Case Studies &rarr;</a>
      </div>
      <div class="story-stat">
        <div class="bar"></div>
        <div class="body">
          <div class="num">30%&ndash;50%</div>
          <div class="cap">reduction in hiring process time</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<?php seo_faq(); ?>

<section class="cta" id="contact">
  <h2>Ready to get a clearer view of your firm?</h2>
  <p>Tell us where utilization, billing or knowledge reuse is leaking value &mdash; we will assess and propose a starting point.</p>
  <div class="actions">
    <a href="<?= $base ?>contact#contact-form" class="btn btn-lime">Talk to an Expert</a>
    <a href="<?= $base ?>hire-me" class="btn btn-outline-light">Hire Professional Services Talent</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
