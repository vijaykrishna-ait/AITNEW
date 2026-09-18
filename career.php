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

  <!-- OPEN POSITIONS (live from the PeopleHub careers API) -->
  <section class="jobs" id="open-positions"
    data-careers-api="<?= htmlspecialchars(CAREERS_API_BASE) ?>"
    data-general-job-id="<?= CAREERS_GENERAL_JOB_ID ? (int) CAREERS_GENERAL_JOB_ID : '' ?>">
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;color:var(--lime);">Open Positions</div>
        <h2>Find your next role</h2>
        <p>Search and filter live openings across our global delivery teams.</p>
      </div>

      <div class="job-search-bar">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="text" id="jobSearch" placeholder="Search by job title, department or location…" autocomplete="off">
      </div>

      <!-- Department chips are rendered from the API response -->
      <div class="job-filters" id="jobFilters" hidden></div>

      <div class="jobs-summary" id="jobsSummary" aria-live="polite"></div>

      <!-- Loading skeleton -->
      <div class="jobs-grid jobs-skeleton" id="jobsLoading" aria-hidden="true">
        <div class="job-skeleton"></div>
        <div class="job-skeleton"></div>
        <div class="job-skeleton"></div>
      </div>

      <div class="jobs-grid" id="jobsGrid" hidden></div>

      <p class="job-empty" id="jobEmpty">No roles match your search right now — try a different keyword or filter, or submit a general application below.</p>

      <div class="jobs-error" id="jobsError" hidden>
        <p id="jobsErrorMsg"></p>
        <button type="button" class="btn btn-outline-light" id="jobsRetry">Try again</button>
      </div>

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
      <div class="job-badges job-modal-badges" id="detailsBadges"></div>

      <div class="job-details-section">
        <h4>Job Description</h4>
        <div class="job-rich-text" id="detailsDescription"></div>
      </div>
      <div class="job-details-section" id="detailsRequirementsSection" hidden>
        <h4>Requirements</h4>
        <div class="job-rich-text" id="detailsRequirements"></div>
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
          <input type="hidden" id="jobOpeningId" value="">
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
              <input type="number" id="appExperience" min="0" step="0.5" placeholder="e.g. 4" required>
              <div class="error-msg">Please enter your total experience in years</div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="appCurrentCtc">Current CTC (&#8377; per annum)</label>
              <input type="number" id="appCurrentCtc" min="0" step="1000" placeholder="e.g. 800000">
            </div>
            <div class="form-group">
              <label for="appExpectedCtc">Expected CTC (&#8377; per annum)</label>
              <input type="number" id="appExpectedCtc" min="0" step="1000" placeholder="e.g. 1200000">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="appNotice">Notice Period (days)</label>
              <input type="number" id="appNotice" min="0" step="1" placeholder="e.g. 30">
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
            <div class="error-msg resume-error" id="resumeError"></div>
          </div>

          <p class="form-error" id="jobFormError" role="alert" hidden></p>
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

<script defer src="<?= $base ?>assets/js/careers.js"></script>

<?php include 'includes/footer.php'; ?>
