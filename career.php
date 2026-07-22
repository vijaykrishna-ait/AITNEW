<?php
$page_title     = 'Careers | Adhiran Infotech';
$page_desc      = 'Explore open positions at Adhiran Infotech. Join a global IT staffing and consulting team working across frontend, backend, mobile, cloud, data, QA and digital marketing.';
$page_keywords  = 'adhiran infotech careers, jobs at adhiran infotech, IT jobs chennai, hire software developers, careers in IT staffing, software developer jobs chennai, join adhiran infotech';
$page_canonical = 'https://www.adhiraninfotech.com/career';
include 'includes/header.php';
?>

  <!-- CAREER HERO -->
  <section class="career-hero">
    <div class="wrap">
      <div class="eyebrow">Careers at Adhiran Infotech</div>
      <h1>Build What's Next, With Us</h1>
      <p class="lead">We're a global IT staffing and consulting team helping organizations hire great talent and build
        great software. Join us and work on real projects, across real industries, with people who back your growth.</p>
      <div class="hero-actions">
        <a href="<?= $base ?>career#open-positions" class="btn btn-outline">View Open Positions</a>
        <a href="<?= $base ?>career#open-positions" class="btn btn-primary job-general-apply">Submit Your Resume</a>
      </div>
      <div class="hero-stats">
        <div><b class="count-up" data-target="10" data-suffix="+">10+</b><span>Years of Industry Experience</span></div>
        <div><b class="count-up" data-target="5">5</b><span>Countries with Local Teams</span></div>
        <div><b class="count-up" data-target="500" data-suffix="+">500+</b><span>Successful Placements</span></div>
      </div>
    </div>
  </section>

  <!-- OPEN POSITIONS -->
  <section class="jobs" id="open-positions">
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;color:var(--lime);">Open Positions</div>
        <h2>Find your next role</h2>
        <p>Search and filter live openings across our global delivery teams.</p>
      </div>

      <div class="job-search-bar">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="text" id="jobSearch" placeholder="Search by job title or location…">
      </div>

      <div class="job-filters">
        <button type="button" class="job-filter active" data-filter="all">All Roles</button>
        <button type="button" class="job-filter" data-filter="frontend">Front-end</button>
        <button type="button" class="job-filter" data-filter="backend">Backend</button>
        <button type="button" class="job-filter" data-filter="mobile">Mobile</button>
        <button type="button" class="job-filter" data-filter="cloud">Cloud &amp; DevOps</button>
        <button type="button" class="job-filter" data-filter="data">Data &amp; AI</button>
        <button type="button" class="job-filter" data-filter="qa">QA</button>
        <button type="button" class="job-filter" data-filter="marketing">Digital Marketing</button>
      </div>

      <div class="jobs-grid">
        <div class="job-card" data-title="Senior Frontend Developer (React)" data-loc="Chennai, India" data-dept="frontend" data-dept-label="Front-end Development" data-type="Full-time"
          data-overview="Own the frontend architecture for client web applications, working closely with backend and design teams to ship fast, accessible and maintainable interfaces."
          data-responsibilities="Build and maintain responsive UIs using React and modern JavaScript|Collaborate with UX/UI designers to translate mockups into pixel-perfect components|Optimize applications for performance, accessibility and cross-browser support|Write clean, reusable and well-tested code"
          data-requirements="4+ years of experience with React, JavaScript/TypeScript and modern CSS|Familiarity with state management (Redux/Context) and REST/GraphQL APIs|Strong eye for detail and UI polish|Good communication skills for client-facing collaboration">
          <div>
            <h3>Senior Frontend Developer (React)</h3>
            <div class="meta">Chennai, India</div>
            <div class="role">Front-end Development · Full-time</div>
          </div>
          <div class="date">Posted 28-Jun-2026</div>
          <div class="job-card-actions">
            <button type="button" class="btn btn-outline-light job-view-btn">View Details</button>
            <button type="button" class="btn btn-lime job-apply-btn">Apply Now</button>
          </div>
        </div>

        <div class="job-card" data-title="Backend Engineer (Node.js / Java)" data-loc="Remote — India" data-dept="backend" data-dept-label="Backend Development" data-type="Full-time"
          data-overview="Design and build scalable backend services and APIs that power web and mobile applications for our clients."
          data-responsibilities="Design, build and maintain RESTful APIs and microservices|Work with relational and NoSQL databases to model and optimize data|Ensure application security, performance and reliability|Collaborate with frontend and DevOps teams on end-to-end delivery"
          data-requirements="3+ years of experience with Node.js, Java or similar backend stacks|Solid understanding of databases (SQL/NoSQL) and API design|Experience with cloud platforms (AWS/Azure/GCP) is a plus|Strong problem-solving and debugging skills">
          <div>
            <h3>Backend Engineer (Node.js / Java)</h3>
            <div class="meta">Remote — India</div>
            <div class="role">Backend Development · Full-time</div>
          </div>
          <div class="date">Posted 25-Jun-2026</div>
          <div class="job-card-actions">
            <button type="button" class="btn btn-outline-light job-view-btn">View Details</button>
            <button type="button" class="btn btn-lime job-apply-btn">Apply Now</button>
          </div>
        </div>

        <div class="job-card" data-title="Mobile App Developer (Flutter)" data-loc="Sydney, Australia" data-dept="mobile" data-dept-label="Mobile App Development" data-type="Contract"
          data-overview="Build high-quality cross-platform mobile applications for clients across industries, from concept through App Store release."
          data-responsibilities="Develop and maintain mobile apps using Flutter for iOS and Android|Integrate with backend APIs and third-party services|Ensure smooth performance, responsiveness and offline support|Participate in code reviews and app store release processes"
          data-requirements="3+ years of mobile development experience, with Flutter/Dart or React Native|Experience publishing apps to the App Store and Google Play|Understanding of mobile UI/UX best practices|Comfortable working in a contract, deadline-driven environment">
          <div>
            <h3>Mobile App Developer (Flutter)</h3>
            <div class="meta">Sydney, Australia</div>
            <div class="role">Mobile App Development · Contract</div>
          </div>
          <div class="date">Posted 22-Jun-2026</div>
          <div class="job-card-actions">
            <button type="button" class="btn btn-outline-light job-view-btn">View Details</button>
            <button type="button" class="btn btn-lime job-apply-btn">Apply Now</button>
          </div>
        </div>

        <div class="job-card" data-title="Cloud &amp; DevOps Engineer (AWS / Azure)" data-loc="Dubai, UAE" data-dept="cloud" data-dept-label="Cloud Engineering" data-type="Full-time"
          data-overview="Manage cloud infrastructure and CI/CD pipelines that keep client applications secure, scalable and highly available."
          data-responsibilities="Design and manage cloud infrastructure on AWS and/or Azure|Build and maintain CI/CD pipelines for automated deployments|Monitor system health, performance and cost optimization|Implement security best practices across environments"
          data-requirements="3+ years of experience in cloud engineering or DevOps|Hands-on experience with Docker, Kubernetes and infrastructure-as-code (Terraform)|Familiarity with monitoring and logging tools|AWS/Azure certification is a plus">
          <div>
            <h3>Cloud &amp; DevOps Engineer (AWS / Azure)</h3>
            <div class="meta">Dubai, UAE</div>
            <div class="role">Cloud Engineering · Full-time</div>
          </div>
          <div class="date">Posted 20-Jun-2026</div>
          <div class="job-card-actions">
            <button type="button" class="btn btn-outline-light job-view-btn">View Details</button>
            <button type="button" class="btn btn-lime job-apply-btn">Apply Now</button>
          </div>
        </div>

        <div class="job-card" data-title="Data Engineer (Snowflake / Power BI)" data-loc="Singapore" data-dept="data" data-dept-label="Data Engineering" data-type="Full-time"
          data-overview="Build reliable data pipelines and reporting infrastructure that turn raw data into decision-ready insights for clients."
          data-responsibilities="Design and maintain ETL/ELT pipelines feeding Snowflake and other warehouses|Build and optimize dashboards and reports in Power BI|Ensure data quality, governance and documentation|Partner with analysts and stakeholders to define data models"
          data-requirements="3+ years of experience in data engineering or BI development|Strong SQL skills and experience with Snowflake or similar warehouses|Hands-on experience with Power BI or similar BI tools|Understanding of data modeling and pipeline orchestration">
          <div>
            <h3>Data Engineer (Snowflake / Power BI)</h3>
            <div class="meta">Singapore</div>
            <div class="role">Data Engineering · Full-time</div>
          </div>
          <div class="date">Posted 18-Jun-2026</div>
          <div class="job-card-actions">
            <button type="button" class="btn btn-outline-light job-view-btn">View Details</button>
            <button type="button" class="btn btn-lime job-apply-btn">Apply Now</button>
          </div>
        </div>

        <div class="job-card" data-title="QA Automation Engineer (Selenium / Cypress)" data-loc="Chennai, India" data-dept="qa" data-dept-label="QA Engineering" data-type="Full-time"
          data-overview="Own test automation strategy and execution to help our clients ship reliable software faster."
          data-responsibilities="Design, build and maintain automated test suites using Selenium/Cypress|Perform functional, regression and API testing|Collaborate with developers to identify and resolve defects early|Report on test coverage and quality metrics"
          data-requirements="2+ years of experience in QA automation|Hands-on experience with Selenium, Cypress or Playwright|Understanding of API testing tools (Postman, REST Assured)|Detail-oriented with strong analytical skills">
          <div>
            <h3>QA Automation Engineer (Selenium / Cypress)</h3>
            <div class="meta">Chennai, India</div>
            <div class="role">QA Engineering · Full-time</div>
          </div>
          <div class="date">Posted 15-Jun-2026</div>
          <div class="job-card-actions">
            <button type="button" class="btn btn-outline-light job-view-btn">View Details</button>
            <button type="button" class="btn btn-lime job-apply-btn">Apply Now</button>
          </div>
        </div>

        <div class="job-card" data-title="Data Scientist (AI / ML)" data-loc="New Jersey, USA" data-dept="data" data-dept-label="Data Science" data-type="Full-time"
          data-overview="Develop and deploy machine learning models that solve real business problems for our clients, from healthcare to fintech."
          data-responsibilities="Build, train and evaluate machine learning and deep learning models|Work with large datasets to extract features and insights|Deploy models into production and monitor performance|Communicate findings to technical and non-technical stakeholders"
          data-requirements="3+ years of experience in data science or machine learning|Strong Python skills with libraries like scikit-learn, TensorFlow or PyTorch|Experience with LLMs or generative AI is a plus|Strong statistical and analytical foundation">
          <div>
            <h3>Data Scientist (AI / ML)</h3>
            <div class="meta">New Jersey, USA</div>
            <div class="role">Data Science · Full-time</div>
          </div>
          <div class="date">Posted 12-Jun-2026</div>
          <div class="job-card-actions">
            <button type="button" class="btn btn-outline-light job-view-btn">View Details</button>
            <button type="button" class="btn btn-lime job-apply-btn">Apply Now</button>
          </div>
        </div>

        <div class="job-card" data-title="Digital Marketing Specialist (SEO / Performance)" data-loc="Chennai, India" data-dept="marketing" data-dept-label="Digital Marketing" data-type="Full-time"
          data-overview="Plan and execute digital marketing campaigns that drive qualified traffic, leads and brand visibility for our clients."
          data-responsibilities="Plan and manage SEO, SEM and social media campaigns|Analyze performance data and optimize campaigns for ROI|Create content calendars and coordinate with content/design teams|Track KPIs and report on campaign performance"
          data-requirements="2+ years of experience in digital marketing|Hands-on experience with Google Ads, SEO tools and analytics platforms|Strong understanding of content and performance marketing|Excellent written communication skills">
          <div>
            <h3>Digital Marketing Specialist (SEO / Performance)</h3>
            <div class="meta">Chennai, India</div>
            <div class="role">Digital Marketing · Full-time</div>
          </div>
          <div class="date">Posted 10-Jun-2026</div>
          <div class="job-card-actions">
            <button type="button" class="btn btn-outline-light job-view-btn">View Details</button>
            <button type="button" class="btn btn-lime job-apply-btn">Apply Now</button>
          </div>
        </div>
      </div>

      <p class="job-empty" id="jobEmpty">No roles match your search right now — try a different keyword or filter, or submit a general application below.</p>

      <div class="job-more">
        <p>Don't see the right role? We're always looking for great people.</p>
        <button type="button" class="btn btn-lime job-general-apply">Submit a General Application</button>
      </div>
    </div>
  </section>

  <!-- APPLICATION PROCESS -->
  <section>
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;">How To Join</div>
        <h2>Our hiring process</h2>
        <p>A simple, transparent path from application to your first day.</p>
      </div>
      <div class="hire-steps-row career-steps">
        <div class="hire-step">
          <div class="hire-step-num">1</div>
          <h3>Apply Online</h3>
          <p>Submit your application and resume for a role — or a general application for future openings.</p>
        </div>
        <div class="hire-step">
          <div class="hire-step-num">2</div>
          <h3>Screening Call</h3>
          <p>Our talent team reviews your profile and schedules an introductory conversation.</p>
        </div>
        <div class="hire-step">
          <div class="hire-step-num">3</div>
          <h3>Interviews</h3>
          <p>Meet hiring managers and technical panels relevant to the role you're applying for.</p>
        </div>
        <div class="hire-step">
          <div class="hire-step-num">4</div>
          <h3>Offer &amp; Onboarding</h3>
          <p>Receive your offer and join a structured onboarding program from day one.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- JOB DETAILS MODAL -->
  <div class="job-modal-overlay" id="jobDetailsOverlay">
    <div class="job-modal">
      <button type="button" class="job-modal-close" data-details-modal-close aria-label="Close">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>

      <div class="eyebrow" id="detailsDept">Department</div>
      <h3 id="detailsTitle">Job Title</h3>
      <div class="job-modal-role" id="detailsMeta">Location · Type</div>

      <div class="job-details-section">
        <h4>Role Overview</h4>
        <p id="detailsOverview"></p>
      </div>
      <div class="job-details-section">
        <h4>Key Responsibilities</h4>
        <ul id="detailsResponsibilities"></ul>
      </div>
      <div class="job-details-section">
        <h4>What We're Looking For</h4>
        <ul id="detailsRequirements"></ul>
      </div>

      <button type="button" class="btn btn-lime job-details-apply" style="width:100%;justify-content:center;">Apply for this Role</button>
    </div>
  </div>

  <!-- APPLY MODAL -->
  <div class="job-modal-overlay" id="jobModalOverlay">
    <div class="job-modal">
      <div class="sticky">
        <div class="eyebrow">Apply for</div>
        <h3 id="jobModalTitle">Apply to Adhiran Infotech</h3>
        <div class="job-modal-role" id="jobModalRole">General Application</div>
        <button type="button" class="job-modal-close" data-job-modal-close aria-label="Close">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
      </div>

      <div id="jobModalBody">
        <form id="jobApplyForm" novalidate>
          <input type="hidden" id="jobAppliedFor" value="General Application">
          <div class="form-row">
            <div class="form-group">
              <label for="appFirstName">First Name</label>
              <input type="text" id="appFirstName" placeholder="Jane" required>
              <div class="error-msg">Please enter your first name</div>
            </div>
            <div class="form-group">
              <label for="appLastName">Last Name</label>
              <input type="text" id="appLastName" placeholder="Smith" required>
              <div class="error-msg">Please enter your last name</div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="appEmail">Email</label>
              <input type="email" id="appEmail" placeholder="jane@gmail.com" required>
              <div class="error-msg">Please enter a valid email</div>
            </div>
            <div class="form-group">
              <label for="appPhone">Phone</label>
              <input type="tel" id="appPhone" placeholder="##### #####" required>
              <div class="error-msg">Please enter a valid phone number</div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="appCompany">Current Company</label>
              <input type="text" id="appCompany" placeholder="Company name">
            </div>
            <div class="form-group">
              <label for="appExperience">Total Experience (years)</label>
              <input type="text" id="appExperience" placeholder="e.g. 4" required>
              <div class="error-msg">Please enter your total experience</div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="appCurrentCtc">Current CTC</label>
              <input type="text" id="appCurrentCtc" placeholder="e.g. 8 LPA">
            </div>
            <div class="form-group">
              <label for="appExpectedCtc">Expected CTC</label>
              <input type="text" id="appExpectedCtc" placeholder="e.g. 12 LPA">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="appNotice">Notice Period (days)</label>
              <input type="text" id="appNotice" placeholder="e.g. 30">
            </div>
            <div class="form-group">
              <label for="appReferral">Referral Code (optional)</label>
              <input type="text" id="appReferral" placeholder="If referred by a teammate">
            </div>
          </div>
          <div class="form-group">
            <label for="appSkills">Skills / Tags</label>
            <input type="text" id="appSkills" placeholder="e.g. React, AWS, Power BI">
          </div>
          <div class="form-group">
            <label>Resume</label>
            <div class="file-field" id="resumeFieldTrigger" role="button" tabindex="0">
              <span id="resumeFileLabel">Click to upload your resume (PDF or DOC, max 5MB)</span>
              <input type="file" id="resumeFile" accept=".pdf,.doc,.docx">
            </div>
          </div>
          <button type="submit" class="btn-submit">
            <span class="btn-text">Submit Application &rarr;</span>
            <span class="spinner"></span>
          </button>
        </form>
      </div>

      <div class="job-modal-success" id="jobModalSuccess">
        <div class="ico">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <h3>Application received!</h3>
        <p>Thank you for applying to Adhiran Infotech. Our talent team will review your profile and get back to you
          soon.</p>
      </div>
    </div>
  </div>

<?php include 'includes/footer.php'; ?>
