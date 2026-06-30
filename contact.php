<?php
$page_title     = 'Contact Us | Adhiran Infotech';
$page_desc      = 'Website design and development company in chennai, web application development company in chennai | mobile app development company | offshoring company in chennai | hire software developer in chennai';
$page_keywords  = 'website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai, Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, adhiran infotech, adhiran infotech in chennai, adhiran, adhiran software company, hire software developers';
$page_canonical = 'https://adhiraninfotech.com/';
include 'includes/header.php';
?>

  <!-- ========== HERO ========== -->
  <section class="hero">
    <div class="wrap hero-grid">
      <div>
        <div class="eyebrow">Contact Us</div>
        <h1>Let's Build Something <em>Great Together</em></h1>
        <p class="lead">Have a project in mind? Reach out to our global team and let's turn your vision into reality.
        </p>
        <div class="hero-actions">
          <a href="<?= $base ?>contact#contact-form" class="btn btn-primary">Get In Touch →</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-photo">
          <!-- Using a placeholder image - in production this would be a real office/team photo -->
          <img src="https://images.unsplash.com/photo-1554224155-6726b3d854eb?auto=format&fit=crop&w=800&q=80"
            alt="Global team collaboration">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== GLOBAL PRESENCE ========== -->
  <section class="skills" style="background: var(--sky);">
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;">Global Presence</div>
        <h2>Offices Across the World</h2>
        <p>From Chennai to Dubai, our global teams deliver excellence across time zones, cultures, and continents.</p>
      </div>
      <div class="supply-grid">
        <a href="<?= $base ?>singapore" class="supply-card">
          <span class="flag">🇸🇬</span>
          <h3>Singapore</h3>
          <p>Onsite consultants and offshore-supported teams for banking, fintech and professional services clients.</p>
        </a>
        <a href="<?= $base ?>#" class="supply-card">
          <span class="flag">🇦🇪</span>
          <h3>Dubai, UAE</h3>
          <p>Local talent supply across IT, digital and enterprise platform roles, supported by our regional team.</p>
        </a>
        <a href="<?= $base ?>usa" class="supply-card">
          <span class="flag">🇺🇸</span>
          <h3>United States</h3>
          <p>Candidate supply for technology, data and digital roles across major U.S. cities, including New York,
            Texas.</p>
        </a>
        <a href="<?= $base ?>japan" class="supply-card">
          <span class="flag">🇯🇵</span>
          <h3>Japan</h3>
          <p>Onsite and remote talent for technology and engineering roles, with bilingual support where required.</p>
        </a>
        <a href="<?= $base ?>australia" class="supply-card">
          <span class="flag">🇦🇺</span>
          <h3>Australia</h3>
          <p>Candidate supply for technology, data and digital roles across major Australian cities.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT FORM ========== -->
  <section class="contact-form-section" >
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow">Get In Touch</div>
        <h2>Send Us a Message</h2>
        <p>Fill out the form below and our team will get back to you within 24 hours.</p>
      </div>

      <div class="contact-grid" id="contact-form">
        <div class="form-wrapper">
          <form id="contactForm" novalidate>
            <div class="form-row">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" placeholder="Jane" required>
                <div class="error-msg">Please enter your first name</div>
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" placeholder="Smith" required>
                <div class="error-msg">Please enter your last name</div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="jane@gmail.com" required>
                <div class="error-msg">Please enter a valid email</div>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" placeholder="##### #####" required>
                <div class="error-msg">Please enter a valid phone number</div>
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <select id="subject" required>
                <option value="general">General Inquiry</option>
                <option value="project">Project Discussion</option>
                <option value="partnership">Partnership</option>
                <option value="careers">Careers</option>
                <option value="support">Support</option>
              </select>
              <div class="error-msg">Please select a subject</div>
            </div>
            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea id="message" rows="4" placeholder=" " required></textarea>
              <div class="error-msg">Please enter your message</div>
            </div>
            <button type="submit" class="btn-submit">
              <span class="btn-text">Send Message &rarr;</span>
              <span class="spinner"></span>
            </button>
          </form>

          <div class="contact-info-row">
            <div class="contact-info-item"
              style="display: flex; align-items: center; gap: 10px; font-size: .875rem; color: var(--gray);">
              <svg viewBox="0 0 24 24">
                <path
                  d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
              </svg>
              <span>sales@adhiraninfotech.com</span>
            </div>
            <div class="contact-info-item"
              style="display: flex; align-items: center; gap: 10px; font-size: .875rem; color: var(--gray);">
              <svg viewBox="0 0 24 24">
                <path
                  d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
              </svg>
              <span>+91 73586 15097</span>
            </div>
            <div class="contact-info-item"
              style="display: flex; align-items: center; gap: 10px; font-size: .875rem; color: var(--gray);">
              <svg viewBox="0 0 24 24">
                <path
                  d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z" />
              </svg>
              <span>Chennai, India</span>
            </div>
          </div>
        </div>

        <div class="illustration-side"
          style="display: flex; align-items: center; justify-content: center; position: relative;">
          <!-- Tech illustration placeholder -->
          <div
            style="width: 100%; max-width: 560px; background: var(--white); padding: 40px; border-radius: 20px; text-align: center;">
            <div style="font-size: 4rem; margin-bottom: 20px;">💻</div>
            <h3 style="color: var(--navy); margin-bottom: 16px;">Global Technology Partner</h3>
            <p style="color: var(--gray); max-width: 400px; line-height: 1.6;">We collaborate with clients worldwide to
              deliver innovative technology solutions that drive business growth and transformation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta" id="contact">
    <h2>Ready to Start Your Project?</h2>
    <p>Partner with us and let's bring your ideas to life with cutting-edge technology.</p>
    <div class="actions">
      <a href="<?= $base ?>contact" class="btn btn-lime">Get Started &rarr;</a>
    </div>
  </section>

    <?php include 'includes/footer.php'; ?>