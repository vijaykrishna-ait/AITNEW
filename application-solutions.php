<?php
$current_page   = 'application-solutions';
$seo_key       = 'application-solutions';
include 'includes/header.php';
?>

<!-- HERO -->
<section class="hero-navy">
  <div class="wrap hero-grid">

    <div class="">
      <div class="eyebrow">Application Solutions</div>
      <h1><?= seo_h1() ?></h1>
      <p class="lead"><?= seo_lead() ?></p>
      <div class="hero-actions">
        <a href="<?= $base ?>contact#contact-form" class="btn btn-lime">Talk to an Application Expert &rarr;</a>
        <a href="<?= $base ?>application-solutions#services" class="btn btn-outline-light">Explore Our Services</a>
      </div>
      <div class="hero-stats">
        <div><b>24&times;7</b><span>Follow-the-sun support <br> across global time zones</span></div>
        <div><b>30&ndash;50%</b><span>Typical reduction in <br> application running costs</span></div>
        <div><b class="count-up" data-target="6" data-suffix="+">6+</b><span>Delivery locations coordinating <br> support and enhancement</span></div>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-photo">
        <img src="assets/images/ps/ams.jpeg" alt="Engineers monitoring and supporting business applications">
      </div>
    </div>

  </div>
</section>

<!-- INTRO -->
<section>
  <div class="wrap">
    <div class="itsol-intro-grid">
      <div class="itsol-intro-content">
        <div class="eyebrow">Why Application Solutions</div>
        <h2>Your applications deserve more than keeping the lights on</h2>
        <p>Most organizations spend the majority of their IT budget simply maintaining what already exists &mdash; leaving little room for the improvements that actually move the business forward. We change that balance. By combining disciplined support operations with continuous engineering, we stabilize your estate first, then reinvest the savings into modernization and new capability.</p>
        <div class="itsol-intro-points">
          <div class="itsol-intro-point">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>
            <div><strong>Single accountable partner</strong> for development, support, enhancement and release operations.</div>
          </div>
          <div class="itsol-intro-point">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>
            <div><strong>Transparent service levels</strong> covering response, resolution, availability and change throughput.</div>
          </div>
          <div class="itsol-intro-point">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>
            <div><strong>Onshore&ndash;offshore delivery</strong> from Chennai, coordinated across the USA, Singapore, Japan and Australia.</div>
          </div>
          <div class="itsol-intro-point">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>
            <div><strong>Structured knowledge transfer</strong> so your teams are never locked out of their own systems.</div>
          </div>
        </div>
        <a href="<?= $base ?>contact#contact-form" class="btn btn-lime" style="margin-top:26px;">Request an Application Assessment &rarr;</a>
      </div>
      <div class="itsol-intro-img">
        <img src="assets/images/ps/as.jpeg" alt="Application support team collaborating on a release">
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">What We Deliver</div>
      <h2>End-to-end services across the application lifecycle</h2>
      <p>From the first line of code to long-term managed operations, we cover every stage your applications pass through &mdash; and you can start at whichever stage you need most.</p>
    </div>

    <div class="itsol-grid">

      <div class="itsol-card">
        <div class="itsol-card-header">
          <div class="itsol-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
              <polyline points="22 4 12 14.01 9 11.01" />
            </svg></div>
          <span class="itsol-tag">Managed Services</span>
        </div>
        <h3>Application Managed Services</h3>
        <p>Full operational ownership of your application estate with defined service levels, tiered support and proactive monitoring. We handle incidents, service requests and routine changes so your internal teams can focus on new value rather than firefighting.</p>
        <ul class="itsol-feature-list">
          <li>L1, L2 &amp; L3 Support Tiers</li>
          <li>24&times;7 Follow-the-Sun Coverage</li>
          <li>Incident &amp; Problem Management</li>
          <li>Proactive Monitoring &amp; Alerting</li>
          <li>Root Cause Analysis</li>
          <li>Service Reporting &amp; Governance</li>
        </ul>
        <a href="<?= $base ?>contact#contact-form" class="btn btn-outline" style="margin-top:20px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>

      <div class="itsol-card">
        <div class="itsol-card-header">
          <div class="itsol-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="16 18 22 12 16 6" />
              <polyline points="8 6 2 12 8 18" />
            </svg></div>
          <span class="itsol-tag">Build</span>
        </div>
        <h3>Custom Application Development</h3>
        <p>Web, mobile and enterprise applications built around your actual business processes rather than forcing your operations to fit off-the-shelf software. Delivered in iterative cycles with demos, feedback loops and production-ready quality at every milestone.</p>
        <ul class="itsol-feature-list">
          <li>Web &amp; Progressive Web Apps</li>
          <li>Native &amp; Cross-Platform Mobile</li>
          <li>API &amp; Microservices Development</li>
          <li>Workflow &amp; Portal Applications</li>
          <li>Third-Party System Integration</li>
          <li>Accessibility &amp; Performance Engineering</li>
        </ul>
        <a href="<?= $base ?>web-application-development" class="btn btn-outline" style="margin-top:20px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>

      <div class="itsol-card">
        <div class="itsol-card-header">
          <div class="itsol-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 2v6h-6" />
              <path d="M3 12a9 9 0 0 1 15-6.7L21 8" />
              <path d="M3 22v-6h6" />
              <path d="M21 12a9 9 0 0 1-15 6.7L3 16" />
            </svg></div>
          <span class="itsol-tag">Modernization</span>
        </div>
        <h3>Legacy Application Modernization</h3>
        <p>Ageing systems rewritten, re-platformed or refactored without disrupting the business that depends on them. We assess what to keep, what to replace and what to retire, then migrate in controlled phases with rollback plans at every step.</p>
        <ul class="itsol-feature-list">
          <li>Application Portfolio Assessment</li>
          <li>Re-host, Re-platform &amp; Re-architect</li>
          <li>Monolith to Microservices</li>
          <li>Database &amp; Data Migration</li>
          <li>UI/UX Modernization</li>
          <li>Phased Cutover &amp; Rollback Planning</li>
        </ul>
        <a href="<?= $base ?>cloud-engineering" class="btn btn-outline" style="margin-top:20px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>

      <div class="itsol-card">
        <div class="itsol-card-header">
          <div class="itsol-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
            </svg></div>
          <span class="itsol-tag">Maintenance</span>
        </div>
        <h3>Maintenance &amp; Enhancement</h3>
        <p>Continuous small-change delivery that keeps applications current with regulation, security advisories and evolving business needs. Enhancements are prioritized with you each cycle, so the backlog reflects business value rather than whoever shouted loudest.</p>
        <ul class="itsol-feature-list">
          <li>Bug Fixes &amp; Defect Resolution</li>
          <li>Feature Enhancement Sprints</li>
          <li>Library &amp; Framework Upgrades</li>
          <li>Security Patching &amp; Vulnerability Fixes</li>
          <li>Technical Debt Reduction</li>
          <li>Documentation &amp; Runbook Upkeep</li>
        </ul>
        <a href="<?= $base ?>contact#contact-form" class="btn btn-outline" style="margin-top:20px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>

      <div class="itsol-card">
        <div class="itsol-card-header">
          <div class="itsol-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 11l3 3L22 4" />
              <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
            </svg></div>
          <span class="itsol-tag">Quality</span>
        </div>
        <h3>Testing &amp; Quality Engineering</h3>
        <p>Independent QA and test automation that catches regressions before your users do. We build durable regression suites around your critical journeys and wire them into the pipeline so every release ships with evidence rather than hope.</p>
        <ul class="itsol-feature-list">
          <li>Functional &amp; Regression Testing</li>
          <li>Test Automation Frameworks</li>
          <li>Performance &amp; Load Testing</li>
          <li>Security &amp; Vulnerability Testing</li>
          <li>Mobile &amp; Cross-Browser Testing</li>
          <li>UAT Support &amp; Release Sign-off</li>
        </ul>
        <a href="<?= $base ?>qa-process" class="btn btn-outline" style="margin-top:20px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>

      <div class="itsol-card">
        <div class="itsol-card-header">
          <div class="itsol-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" />
            </svg></div>
          <span class="itsol-tag">Operations</span>
        </div>
        <h3>DevOps &amp; Release Management</h3>
        <p>Automated build, test and deployment pipelines that turn releases from a weekend event into a routine, low-risk operation. Infrastructure defined as code, environments reproducible on demand, and observability built in from day one.</p>
        <ul class="itsol-feature-list">
          <li>CI/CD Pipeline Engineering</li>
          <li>Infrastructure as Code</li>
          <li>Containerization &amp; Orchestration</li>
          <li>Environment &amp; Config Management</li>
          <li>Observability, Logging &amp; Alerting</li>
          <li>Release Governance &amp; Change Control</li>
        </ul>
        <a href="<?= $base ?>digital-engineering" class="btn btn-outline" style="margin-top:20px;padding:10px 22px;font-size:14px;">Learn More &rarr;</a>
      </div>

    </div>
  </div>
</section>

<!-- ENGAGEMENT MODELS -->
<section id="engagement-models">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Engagement Models</div>
      <h2>Choose the model that matches your situation</h2>
      <p>Whether you need someone to take over an inherited system, run a steady support function, or build something new alongside your team, the commercial model flexes to fit.</p>
    </div>

    <div class="deliv-row">

      <div class="deliv-item">
        <div class="deliv-img">
          <img src="assets/images/ps/ams.jpeg" alt="Support engineers reviewing an application dashboard">
        </div>
        <div class="deliv-content">
          <span class="tag">Managed Application Support</span>
          <h3>We take ownership, you get predictable outcomes</h3>
          <p>Best suited to stable, business-critical applications that need reliable ongoing care. We take over via a structured transition, run to agreed service levels, and report on service health every month &mdash; with a fixed monthly cost you can plan around.</p>
          <h5>What you can expect:</h5>
          <ul class="deliv-features">
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Structured knowledge transfer and shadowing before go-live </li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Defined targets for response, resolution and availability </li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Fixed monthly cost with a transparent change mechanism </li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Monthly service reviews with trend and root-cause reporting </li>
          </ul>
        </div>
      </div>

      <div class="deliv-item reverse">
        <div class="deliv-img">
          <img src="assets/images/ps/as.jpeg" alt="Dedicated application team in a planning session">
        </div>
        <div class="deliv-content">
          <span class="tag">Dedicated Application Team</span>
          <h3>A persistent team that learns your systems deeply</h3>
          <p>A named group of engineers, testers and a delivery lead working exclusively on your application portfolio. They accumulate context over time, integrate into your ceremonies and tooling, and scale up or down as your roadmap changes.</p>
          <h5>What you can expect:</h5>
          <ul class="deliv-features">
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Named engineers with continuity, not a rotating pool </li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Works inside your sprints, boards and code review process </li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Flexible ramp-up and ramp-down as priorities shift </li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Ideal for continuous enhancement alongside steady-state support </li>
          </ul>
          <a href="<?= $base ?>team-solutions" class="btn btn-outline" style="margin-top:20px;padding:10px 22px;font-size:14px;">Explore Team Solutions &rarr;</a>
        </div>
      </div>

      <div class="deliv-item">
        <div class="deliv-img">
          <img src="assets/images/ps/fsp.jpeg" alt="Team mapping out a fixed-scope modernization programme">
        </div>
        <div class="deliv-content">
          <span class="tag">Fixed-Scope Modernization</span>
          <h3>A defined programme with a defined end point</h3>
          <p>For discrete initiatives &mdash; a re-platform, a major upgrade, a migration off an unsupported stack &mdash; with scope, cost and timeline agreed before work begins. Delivered against clear milestones, then handed over cleanly or rolled into ongoing support.</p>
          <h5>What you can expect:</h5>
          <ul class="deliv-features">
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Scope, cost and schedule agreed before kick-off </li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Milestone-based delivery with acceptance criteria per stage </li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Dedicated project manager and independent QA oversight </li>
            <li><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>Documentation and handover included, not charged as an extra </li>
          </ul>
          <a href="<?= $base ?>project-solutions" class="btn btn-outline" style="margin-top:20px;padding:10px 22px;font-size:14px;">Explore Project Solutions &rarr;</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TRANSITION PROCESS -->
<section id="transition">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">How We Onboard</div>
      <h2>A transition designed to be uneventful</h2>
      <p>Taking over someone else's application is where most managed services engagements go wrong. Our transition runs in five deliberate stages, with your team in control of when we move from one to the next.</p>
    </div>

    <div class="journey-row">
      <div class="journey-item">
        <div class="journey-num">01</div>
        <div class="journey-content">
          <h3>Discovery &amp; Assessment</h3>
          <p>We map the application landscape, dependencies, integrations and known pain points, then baseline current incident volumes, costs and service performance so improvement can be measured objectively.</p>
        </div>
      </div>
      <div class="journey-item">
        <div class="journey-num">02</div>
        <div class="journey-content">
          <h3>Knowledge Transfer</h3>
          <p>Structured sessions with your incumbent team and users, captured in runbooks, architecture notes and support playbooks &mdash; so the knowledge lives in documentation rather than in one person's head.</p>
        </div>
      </div>
      <div class="journey-item">
        <div class="journey-num">03</div>
        <div class="journey-content">
          <h3>Shadow &amp; Reverse Shadow</h3>
          <p>Our engineers first observe your team handling live tickets, then take the lead with your team observing. Only when both sides are confident do we move on &mdash; no cliff-edge handover.</p>
        </div>
      </div>
      <div class="journey-item">
        <div class="journey-num">04</div>
        <div class="journey-content">
          <h3>Steady-State Operations</h3>
          <p>We assume full ownership against agreed service levels, with monitoring, escalation paths and reporting in place from day one. Your stakeholders get a single point of contact and a predictable cadence.</p>
        </div>
      </div>
      <div class="journey-item">
        <div class="journey-num">05</div>
        <div class="journey-content">
          <h3>Continuous Improvement</h3>
          <p>Recurring incidents get engineered out rather than repeatedly patched. Savings from automation and defect reduction are redirected into the enhancements your business actually asked for.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section>
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Why Adhiran Infotech</div>
      <h2>What working with us actually looks like</h2>
    </div>

    <div class="itc-benefits-grid">
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Cost Efficiency : </strong>Onshore&ndash;offshore delivery from our Chennai centre typically reduces application running costs by 30&ndash;50% without reducing coverage.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Round-the-Clock Coverage : </strong>Follow-the-sun teams coordinated across India, the USA, Singapore, Japan and Australia keep critical systems attended at every hour.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Technology Breadth : </strong>Java, .NET, PHP, Python, Node.js, React, Angular, Vue, Flutter, React Native and the major cloud platforms &mdash; under one accountable partner.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Security &amp; Compliance : </strong>Secure development practices, controlled access, audit trails and support for regulated environments across healthcare, finance and life sciences.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>No Lock-In : </strong>Documentation, runbooks and source control stay yours throughout. Exit assistance is part of the agreement, not a negotiation you have later.</div>
      </div>
      <div class="itc-benefit-item">
        <div class="itc-benefit-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg></div>
        <div><strong>Measured Improvement : </strong>Every engagement is baselined at the start, so reduced incident volume and faster resolution are demonstrated with data rather than asserted.</div>
      </div>
    </div>
  </div>
</section>

<!-- TECHNOLOGIES -->
<section id="technologies">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Technologies We Support</div>
      <h2>Deep skills across the stacks enterprises actually run</h2>
      <p>Our engineers work across modern and long-established stacks alike &mdash; because most real application estates are a mixture of both.</p>
    </div>

    <div class="ps-grid">
      <div class="ps-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="8" rx="2" /><rect x="2" y="14" width="20" height="8" rx="2" /><line x1="6" y1="6" x2="6" y2="6" /><line x1="6" y1="18" x2="6" y2="18" />
          </svg></div>
        <h3>Backend</h3>
        <p>Server-side services and APIs across the frameworks enterprise systems are built on.</p>
        <div class="tags">
          <span>Java / Spring Boot</span>
          <span>.NET / C#</span>
          <span>PHP / Laravel</span>
          <span>Python / Django</span>
          <span>Node.js</span>
        </div>
      </div>
      <div class="ps-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="16 18 22 12 16 6" /><polyline points="8 6 2 12 8 18" />
          </svg></div>
        <h3>Frontend</h3>
        <p>Browser applications engineered for performance, accessibility and maintainability.</p>
        <div class="tags">
          <span>React</span>
          <span>Angular</span>
          <span>Vue.js</span>
          <span>TypeScript</span>
          <span>HTML5 / CSS3</span>
        </div>
      </div>
      <div class="ps-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="5" y="2" width="14" height="20" rx="2" /><line x1="12" y1="18" x2="12" y2="18" />
          </svg></div>
        <h3>Mobile</h3>
        <p>Native and cross-platform apps delivered by a single engineering team.</p>
        <div class="tags">
          <span>React Native</span>
          <span>Flutter</span>
          <span>Ionic</span>
          <span>Android</span>
          <span>iOS</span>
        </div>
      </div>
      <div class="ps-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" />
          </svg></div>
        <h3>Cloud &amp; DevOps</h3>
        <p>Deployment pipelines and infrastructure defined as code, reproducible on demand.</p>
        <div class="tags">
          <span>AWS</span>
          <span>Azure</span>
          <span>Google Cloud</span>
          <span>Docker / Kubernetes</span>
          <span>Terraform</span>
        </div>
      </div>
      <div class="ps-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <ellipse cx="12" cy="6" rx="9" ry="3" /><path d="M3 6v6c0 1.66 4 3 9 3s9-1.34 9-3V6" /><path d="M3 12v6c0 1.66 4 3 9 3s9-1.34 9-3v-6" />
          </svg></div>
        <h3>Data</h3>
        <p>Relational and document stores tuned for the queries your applications actually run.</p>
        <div class="tags">
          <span>SQL Server</span>
          <span>Oracle</span>
          <span>PostgreSQL</span>
          <span>MySQL</span>
          <span>MongoDB</span>
        </div>
      </div>
      <div class="ps-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 2 7 12 12 22 7 12 2" /><polyline points="2 17 12 22 22 17" /><polyline points="2 12 12 17 22 12" />
          </svg></div>
        <h3>Enterprise Platforms</h3>
        <p>Configuration and integration across the platforms carrying core business process.</p>
        <div class="tags">
          <span>SAP</span>
          <span>Salesforce</span>
          <span>ServiceNow</span>
          <span>Veeva CRM</span>
          <span>Power BI</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<?php seo_faq(); ?>

<!-- CTA -->
<section class="cta">
  <h2>Ready to hand over the applications that keep you awake at night?</h2>
  <p>Tell us what you're running today and we'll come back with an assessment, a transition plan and a clear view of what it will cost.</p>
  <div class="actions">
    <a href="<?= $base ?>contact#contact-form" class="btn btn-lime">Request an Assessment &rarr;</a>
    <a href="<?= $base ?>contact" class="btn btn-outline-light">Talk to Our Experts</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
