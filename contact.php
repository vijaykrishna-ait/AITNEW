<?php
$current_page   = 'contact';
$page_title     = 'Contact Us | Adhiran Infotech';
$page_desc      = 'Website design and development company in chennai, web application development company in chennai | mobile app development company | offshoring company in chennai | hire software developer in chennai';
$page_keywords  = 'website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai, Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, adhiran infotech, adhiran infotech in chennai, adhiran, adhiran software company, hire software developers';
$page_canonical = 'https://www.adhiraninfotech.com/contact';
include 'includes/header.php';
?>

  <!-- READING PROGRESS -->
  <div class="reading-progress" aria-hidden="true"><span id="readingProgressBar"></span></div>

<main id="main-content">

  <!-- ========== HERO ========== -->
  <section class="hero" data-reveal="off">
    <div class="wrap hero-grid">
      <div>
        <div class="eyebrow">Contact Us</div>
        <h1>Let's Build Something <em>Great Together</em></h1>
        <p class="lead">Have a project in mind? Reach out to our global team and let's turn your vision into reality.
        </p>
        <div class="hero-actions">
          <a href="#contact-form" class="btn btn-primary btn-magnetic">Get In Touch →</a>
          <a href="tel:<?= SITE_PHONE_TEL ?>" class="btn btn-outline">Call <?= SITE_PHONE_DISPLAY ?></a>
        </div>

        <!-- Direct channels: previously plain text further down the page -->
        <ul class="contact-channels">
          <li>
            <a href="mailto:<?= SITE_EMAIL ?>">
              <span class="ch-ico" aria-hidden="true">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
              </span>
              <span class="ch-text"><small>Email us</small><?= SITE_EMAIL ?></span>
            </a>
          </li>
          <li>
            <a href="tel:<?= SITE_PHONE_TEL ?>">
              <span class="ch-ico" aria-hidden="true">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.05 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.13 1 .35 1.98.66 2.92a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.16-1.12a2 2 0 0 1 2.11-.45c.94.31 1.92.53 2.92.66A2 2 0 0 1 22 16.92z"/></svg>
              </span>
              <span class="ch-text"><small>Call us</small><?= SITE_PHONE_DISPLAY ?></span>
            </a>
          </li>
          <li>
            <a href="https://www.google.com/maps/search/?api=1&amp;query=Adhiran+Infotech+Chennai"
               target="_blank" rel="noopener noreferrer">
              <span class="ch-ico" aria-hidden="true">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </span>
              <span class="ch-text"><small>Head office</small>Chennai, India
                <span class="visually-hidden">(opens Google Maps in a new tab)</span></span>
            </a>
          </li>
          <li>
            <a href="<?= SOCIAL_LINKEDIN ?>" target="_blank" rel="noopener noreferrer">
              <span class="ch-ico" aria-hidden="true">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM3 9h4v12H3zM10 9h3.8v1.7h.05a4.2 4.2 0 0 1 3.77-2.07c4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.35c0-1.28-.02-2.92-1.78-2.92-1.78 0-2.05 1.39-2.05 2.83V21h-4z"/></svg>
              </span>
              <span class="ch-text"><small>Follow us</small>LinkedIn
                <span class="visually-hidden">(opens LinkedIn in a new tab)</span></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="hero-visual">
        <div class="hero-photo">
          <img src="assets/images/contact/contact-banner.jpeg"
            width="1200" height="800"
            fetchpriority="high" decoding="async"
            alt="Adhiran Infotech consultants collaborating in the office">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT FORM ========== -->
  <section class="contact-form-section">
    <div class="wrap">
      <div class="section-head center" data-reveal="up">
        <div class="eyebrow" style="justify-content:center;">Get In Touch</div>
        <h2>Send Us a Message</h2>
        <p>Tell us what you need and the right specialist will reply — usually within one business day.</p>
      </div>

      <div class="contact-grid" id="contact-form">
        <div class="form-wrapper">
          <form id="contactForm" action="<?= $base ?>send-mail.php" method="post" novalidate>

            <!-- Spam honeypot: hidden from people, tempting to bots -->
            <div class="hp-field" aria-hidden="true">
              <label for="companyWebsite">Company website</label>
              <input type="text" id="companyWebsite" name="companyWebsite" tabindex="-1" autocomplete="off">
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="firstName">First Name <span class="req" aria-hidden="true">*</span></label>
                <input type="text" id="firstName" name="firstName" placeholder="Jane"
                       autocomplete="given-name" required aria-describedby="err-firstName">
                <div class="error-msg" id="err-firstName">Please enter your first name</div>
              </div>
              <div class="form-group">
                <label for="lastName">Last Name <span class="req" aria-hidden="true">*</span></label>
                <input type="text" id="lastName" name="lastName" placeholder="Smith"
                       autocomplete="family-name" required aria-describedby="err-lastName">
                <div class="error-msg" id="err-lastName">Please enter your last name</div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="email">Email Address <span class="req" aria-hidden="true">*</span></label>
                <input type="email" id="email" name="email" placeholder="jane@company.com"
                       autocomplete="email" required aria-describedby="err-email">
                <div class="error-msg" id="err-email">Please enter a valid email address</div>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210"
                       autocomplete="tel" aria-describedby="err-phone hint-phone">
                <div class="field-hint" id="hint-phone">Optional — include your country code.</div>
                <div class="error-msg" id="err-phone">Please enter a valid phone number</div>
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Subject <span class="req" aria-hidden="true">*</span></label>
              <select id="subject" name="subject" required aria-describedby="err-subject">
                <option value="">Select a subject…</option>
                <option value="Project Discussion">Project Discussion</option>
                <option value="Hire Talent">Hire Talent / Staffing</option>
                <option value="Partnership">Partnership</option>
                <option value="Careers">Careers</option>
                <option value="Support">Support</option>
                <option value="General Inquiry">General Inquiry</option>
              </select>
              <div class="error-msg" id="err-subject">Please select a subject</div>
            </div>
            <div class="form-group">
              <label for="message">Your Message <span class="req" aria-hidden="true">*</span></label>
              <textarea id="message" name="message" rows="4"
                        placeholder="Roles, skills, timeline, or anything else that helps us respond well"
                        required aria-describedby="err-message count-message"></textarea>
              <div class="field-hint" id="count-message"><span id="messageCount">0</span> characters</div>
              <div class="error-msg" id="err-message">Please enter your message</div>
            </div>

            <button type="submit" class="btn-submit btn-magnetic">
              <span class="btn-text">Send Message &rarr;</span>
              <span class="spinner" aria-hidden="true"></span>
            </button>

            <p class="form-privacy">
              We use your details only to reply to this enquiry. Prefer email?
              <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
            </p>

            <!-- Live region: replaces the old blocking alert() -->
            <div class="form-response" id="formResponse" role="status" aria-live="polite"></div>
          </form>
        </div>

        <aside class="contact-aside" data-reveal="up">
          <div class="aside-card">
            <img src="assets/images/contact/contact.jpeg"
              width="1000" height="667" loading="lazy" decoding="async"
              alt="Adhiran Infotech team working with a client">
            <div class="aside-body">
              <h3>Global Technology Partner</h3>
              <p>We collaborate with clients worldwide to deliver innovative technology solutions that drive business
                growth and transformation.</p>
            </div>
          </div>

          <ol class="next-steps">
            <li>
              <span class="ns-num" aria-hidden="true">1</span>
              <div><b>We read every enquiry</b><span>A specialist in the right practice picks it up — not a generic inbox.</span></div>
            </li>
            <li>
              <span class="ns-num" aria-hidden="true">2</span>
              <div><b>You hear back within a business day</b><span>With questions, or a proposed time to talk.</span></div>
            </li>
            <li>
              <span class="ns-num" aria-hidden="true">3</span>
              <div><b>Qualified profiles in 24–48 hours</b><span>For staffing requests, once the brief is confirmed.</span></div>
            </li>
          </ol>
        </aside>
      </div>
    </div>
  </section>

  <!-- ========== GLOBAL PRESENCE ========== -->
  <section class="offices">
    <div class="wrap">
      <div class="section-head center" data-reveal="up">
        <div class="eyebrow" style="justify-content:center;">Global Presence</div>
        <h2>Offices Across the World</h2>
        <p>From Chennai to Dubai, our global teams deliver excellence across time zones, cultures, and continents.</p>
      </div>
      <div class="supply-grid" data-reveal="stagger">
        <div class="supply-card is-hq">
          <span class="flag" aria-hidden="true">🇮🇳</span>
          <span class="office-tag">Headquarters</span>
          <h3>India</h3>
          <p class="office-city">Chennai</p>
          <p>Our head office and primary delivery centre, supporting engineering, recruitment and managed services
            worldwide.</p>
        </div>
        <a href="<?= $base ?>usa" class="supply-card">
          <span class="flag" aria-hidden="true">🇺🇸</span>
          <h3>United States</h3>
          <p class="office-city">New Jersey · Texas</p>
          <p>Candidate supply for technology, data and digital roles across major U.S. cities.</p>
          <span class="office-link">View regional page <span aria-hidden="true">→</span></span>
        </a>
        <a href="<?= $base ?>singapore" class="supply-card">
          <span class="flag" aria-hidden="true">🇸🇬</span>
          <h3>Singapore</h3>
          <p class="office-city">Singapore</p>
          <p>Onsite consultants and offshore-supported teams for banking, fintech and professional services clients.</p>
          <span class="office-link">View regional page <span aria-hidden="true">→</span></span>
        </a>
        <div class="supply-card">
          <span class="flag" aria-hidden="true">🇦🇪</span>
          <h3>Dubai, UAE</h3>
          <p class="office-city">Dubai</p>
          <p>Local talent supply across IT, digital and enterprise platform roles, supported by our regional team.</p>
        </div>
        <a href="<?= $base ?>japan" class="supply-card">
          <span class="flag" aria-hidden="true">🇯🇵</span>
          <h3>Japan</h3>
          <p class="office-city">Tokyo</p>
          <p>Onsite and remote talent for technology and engineering roles, with bilingual support where required.</p>
          <span class="office-link">View regional page <span aria-hidden="true">→</span></span>
        </a>
        <a href="<?= $base ?>australia" class="supply-card">
          <span class="flag" aria-hidden="true">🇦🇺</span>
          <h3>Australia</h3>
          <p class="office-city">Sydney</p>
          <p>Candidate supply for technology, data and digital roles across major Australian cities.</p>
          <span class="office-link">View regional page <span aria-hidden="true">→</span></span>
        </a>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="contact-faq">
    <div class="wrap">
      <div class="section-head center" data-reveal="up">
        <div class="eyebrow" style="justify-content:center;">Before You Write</div>
        <h2>Common questions</h2>
        <p>Quick answers to what people usually ask before getting in touch.</p>
      </div>
      <div class="faq-list" data-reveal="stagger">
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-a-1" id="faq-q-1">
              <span>How quickly will I get a response?</span>
              <span class="faq-icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-a" id="faq-a-1" role="region" aria-labelledby="faq-q-1" hidden>
            <p>We aim to reply to every enquiry within one business day. For staffing requests, qualified candidate
              profiles typically follow within 24–48 hours of the brief being confirmed.</p>
          </div>
        </div>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-a-2" id="faq-q-2">
              <span>What information should I include?</span>
              <span class="faq-icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-a" id="faq-a-2" role="region" aria-labelledby="faq-q-2" hidden>
            <p>The more specific the better: the roles or skills you need, how many people, the engagement length,
              whether it's onsite or remote, and your target start date. If it's a project rather than a hire, a short
              outline of the outcome you're after is enough to start.</p>
          </div>
        </div>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-a-3" id="faq-q-3">
              <span>Do you work across time zones?</span>
              <span class="faq-icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-a" id="faq-a-3" role="region" aria-labelledby="faq-q-3" hidden>
            <p>Yes. We operate from India, the United States, Singapore, the UAE, Japan and Australia, so we can align
              delivery and communication with your working hours rather than ours.</p>
          </div>
        </div>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-a-4" id="faq-q-4">
              <span>I'm looking for a job, not hiring. Is this the right form?</span>
              <span class="faq-icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-a" id="faq-a-4" role="region" aria-labelledby="faq-q-4" hidden>
            <p>You can select “Careers” as the subject above, but our <a href="<?= $base ?>career">Careers page</a> is
              the faster route — it lists current openings and lets you attach a résumé directly to a role.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <h2>Ready to Start Your Project?</h2>
    <p>Partner with us and let's bring your ideas to life with cutting-edge technology.</p>
    <div class="actions">
      <a href="#contact-form" class="btn btn-lime btn-magnetic">Send Us a Message &rarr;</a>
      <a href="tel:<?= SITE_PHONE_TEL ?>" class="btn btn-outline-light">Call <?= SITE_PHONE_DISPLAY ?></a>
    </div>
  </section>

</main>

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
    <a class="float-action" href="mailto:<?= SITE_EMAIL ?>">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
      Email us
    </a>
    <a class="float-action" href="<?= $base ?>career">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
      Looking for a job?
    </a>
  </div>
</div>

    <?php include 'includes/footer.php'; ?>
