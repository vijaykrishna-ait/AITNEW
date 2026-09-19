<?php
$seo_key       = 'hire-python-developer';
include 'includes/header.php';
?>

<!-- HERO BANNER -->
<section class="hero-navy">
  <div class="wrap hero-grid">

    <div class="">
      <div class="eyebrow">IT Staffing — Python Development</div>
      <h1><?= seo_h1() ?></h1>
      <p class="lead"><?= seo_lead() ?></p>
      <div class="hero-actions">
        <a href="<?= $base ?>contact" class="btn btn-lime">Hire a Developer &rarr;</a>
        <a href="#services" class="btn btn-outline-light">Explore Services</a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-photo">
        <img src="assets/images/banners/python-banner.jpeg" alt="">
      </div>
    </div>
  </div>
</section>

<!-- INTRO SPLIT -->
<section>
  <div class="wrap its-intro-grid">
    <div class="its-intro-content">
      <span class="tag">IT Staff Augmentation</span>
      <h2>Python IT Staff Augmentation</h2>
      <p>Our Python development team brings deep expertise across web frameworks, data engineering, machine learning, and automation. We integrate seamlessly into your existing workflow and deliver solutions built for scale and maintainability.</p>
      <p>Whether you need a Django web application, a FastAPI microservice, a data pipeline, or an ML model deployment — our Python specialists have the expertise to accelerate your project.</p>
    </div>
    <div class="its-intro-img">
      <img src="<?= $base ?>assets/images/staff-augmentation.jpg" alt="Hire Expert Python Developers for Web, Data & AI Solutions">
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="solutions" id="services">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Services</div>
      <?php seo_section(0); ?>
    </div>
    <div class="its-services-grid">
      <div class="its-service-card">
        <h3>Django Web Development</h3>
        <p>Build secure, scalable web applications with Django — batteries-included framework with ORM, admin panel, and authentication.</p>
        <div class="its-tech-tags"><span>Django</span><span>ORM</span><span>REST Framework</span></div>
      </div>
      <div class="its-service-card">
        <h3>FastAPI / Flask APIs</h3>
        <p>Develop high-performance REST and GraphQL APIs with FastAPI or Flask — async support, auto-documentation, and type hints.</p>
        <div class="its-tech-tags"><span>FastAPI</span><span>Flask</span><span>OpenAPI</span></div>
      </div>
      <div class="its-service-card">
        <h3>Data Engineering with Python</h3>
        <p>Build robust ETL pipelines, data processing workflows, and analytics platforms using Apache Spark, Airflow, and Pandas.</p>
        <div class="its-tech-tags"><span>Pandas</span><span>Airflow</span><span>PySpark</span></div>
      </div>
      <div class="its-service-card">
        <h3>Machine Learning Solutions</h3>
        <p>Develop and deploy ML models using Scikit-learn, TensorFlow, and PyTorch for classification, regression, and NLP tasks.</p>
        <div class="its-tech-tags"><span>Scikit-learn</span><span>TensorFlow</span><span>PyTorch</span></div>
      </div>
      <div class="its-service-card">
        <h3>Automation & Scripting</h3>
        <p>Automate repetitive tasks, business processes, and infrastructure workflows with Python scripting and orchestration tools.</p>
        <div class="its-tech-tags"><span>Selenium</span><span>Boto3</span><span>Paramiko</span></div>
      </div>
      <div class="its-service-card">
        <h3>Cloud-Native Python Apps</h3>
        <p>Build and deploy serverless Python functions and containerized microservices on AWS, Azure, and Google Cloud Platform.</p>
        <div class="its-tech-tags"><span>AWS Lambda</span><span>Docker</span><span>Kubernetes</span></div>
      </div>
    </div>
  </div>
</section>

<!-- FRAMEWORKS -->
<section>
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Tech Stack</div>
      <h2>Our Experts&rsquo; Proximity to Frameworks Boosts Your Success</h2>
    </div>
    <div class="its-why-grid">
      <div class="its-why-card">
        <div class="its-why-num"><img src="assets/logos/django.svg" alt=""></div>
        <h4>Django</h4>
        <p>A high-level Python web framework that encourages rapid development and clean, pragmatic design for secure, scalable web applications.</p>
      </div>
      <div class="its-why-card">
        <div class="its-why-num"><img src="assets/logos/fastapi.svg" alt=""></div>
        <h4>FastAPI</h4>
        <p>A modern, fast web framework for building APIs with Python 3.7+ based on standard Python type hints — blazing fast with auto docs.</p>
      </div>
      <div class="its-why-card">
        <div class="its-why-num"><img src="assets/logos/flask.svg" alt=""></div>
        <h4>Flask</h4>
        <p>A lightweight WSGI web application framework in Python — minimal core with rich extensibility for microservices and prototypes.</p>
      </div>
      <div class="its-why-card">
        <div class="its-why-num"><img src="assets/logos/pandas.svg" alt=""></div>
        <h4>Pandas</h4>
        <p>A powerful open-source data manipulation and analysis library providing data structures and operations for structured data.</p>
      </div>
      <div class="its-why-card">
        <div class="its-why-num"><img src="assets/logos/tensorflow.svg" alt=""></div>
        <h4>TensorFlow</h4>
        <p>An end-to-end open-source machine learning platform for training, deploying, and scaling ML models in production.</p>
      </div>
      <div class="its-why-card">
        <div class="its-why-num"><img src="assets/logos/airflow.svg" alt=""></div>
        <h4>Apache Airflow</h4>
        <p>A platform to programmatically author, schedule, and monitor data workflows — essential for production data pipeline orchestration.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section class="solutions">
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

<section class="">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Industries We Serve</div>
      <h2>Our Developer Expertise in Various Industries</h2>
      <p>Our dedicated team possesses deep domain knowledge and technical proficiency, enabling us to craft tailored solutions that address the unique challenges and opportunities within various industries.</p>
    </div>
    <div class="its-industry-grid">
      <a href="<?= $base ?>life-sciences" class="its-industry-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
          </svg></div>
        <h4>Healthcare</h4>
        <p>We develop healthcare platforms that streamline patient relationships and improve clinic and hospital operations.</p>
      </a>
      <a href="<?= $base ?>retail-ecommerce" class="its-industry-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
            <line x1="3" y1="6" x2="21" y2="6" />
          </svg></div>
        <h4>Retail</h4>
        <p>We enable retailers to quickly create responsive web stores that enhance user experience, boost sales, and grow customer base.</p>
      </a>
      <a href="<?= $base ?>manufacturing" class="its-industry-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <rect x="2" y="7" width="20" height="14" rx="2" />
            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
          </svg></div>
        <h4>Manufacturing</h4>
        <p>We help manufacturers stay relevant by using IoT, automation, and AI for monitoring, maintenance, and performance improvement.</p>
      </a>
      <a href="<?= $base ?>edutech" class="its-industry-card">
        <div class="ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
            <path d="M6 12v5c3 3 9 3 12 0v-5" />
          </svg></div>
        <h4>Education</h4>
        <p>We offer strategic web-based e-learning solutions, enhancing remote learning for students and educators worldwide.</p>
      </a>
    </div>
  </div>
</section>

<?php seo_faq(); ?>

<?php /* ============================================================
   COMMENTED OUT - CLIENT TESTIMONIALS (duplicated across 17 pages)
   The identical three quotes (Dr. Jerriton Brewin / Bharath / Manoj) appear verbatim on 13 hire-* pages, all sharing one generic assets/images/testimonial.png avatar, and are topically unrelated to the page they sit on - a MedTech quote about medical device systems on a "Hire Angular Developer" page. These quotes look genuine (it-consulting.php carries a richer, industry-varied set from the same pool, and was deliberately left alone), so the problem is duplication and relevance, not authenticity. VERIFY: restore them on the pages they actually relate to rather than on all 13.
   Markup below is kept verbatim and unchanged. To restore, delete
   this header and the two PHP comment markers around the block.
   ============================================================ */ ?>
<?php /*
<section class="">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Client Stories</div>
      <h2>What Our Clients Say</h2>
    </div>
    <div class="its-testi-grid">
      <div class="its-testi-card">
        <p>"The team at adhiran infotech played a pivotal role in optimizing our medical device systems. Their deep understanding of the MedTech landscape and their ability to integrate cutting-edge technology has significantly improved our product development and regulatory compliance processes. We highly recommend their services to anyone looking to innovate in the healthcare sector."</p>
        <div class="its-testi-author"><img src="<?= $base ?>assets/images/testimonial.png" alt="Dr. Jerriton Brewin">
          <div><strong>Dr. Jerriton Brewin (MBBS)</strong><span>Med-Tech</span></div>
        </div>
      </div>
      <div class="its-testi-card">
        <p>"Thanks to Adhiran Infotech's staff augmentation, we were able to scale our development team quickly without compromising on quality. The professionals they provided brought specialized expertise that helped us meet critical project deadlines. Their exceptional talent matching, combined with outstanding ongoing support and collaboration, has been invaluable."</p>
        <div class="its-testi-author"><img src="<?= $base ?>assets/images/testimonial.png" alt="Bharath">
          <div><strong>Bharath</strong><span>IT Staff Augmentation</span></div>
        </div>
      </div>
      <div class="its-testi-card">
        <p>"Adhiran Infotech's staff augmentation services provided us with highly skilled and experienced professionals who seamlessly integrated into our team, quickly adapting to our processes and contributing effectively to our projects. These experts brought specialized expertise that enhanced our capabilities and sped up project timelines."</p>
        <div class="its-testi-author"><img src="<?= $base ?>assets/images/testimonial.png" alt="Manoj">
          <div><strong>Manoj</strong><span>IT Staff Augmentation</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
*/ ?>

<section class="cta">
  <div class="wrap">
    <h2>Start your journey with us. Let's make it extraordinary!</h2>
    <p>Get in touch today and we craft you perfect solution to brand your services to greater heights.</p>
    <a href="<?= $base ?>contact" class="btn btn-lime">Contact Us &rarr;</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>