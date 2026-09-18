/* =========================================================================
   CAREER PAGE — live openings from the PeopleHub public careers API
   -------------------------------------------------------------------------
   GET  {API_BASE}/jobs?page&limit&search&department&location
   POST {API_BASE}/candidates        (multipart/form-data)

   The API only accepts requests coming from https://www.adhiraninfotech.com
   (and the apex domain). Any other origin gets a 403 with no CORS headers,
   which the browser surfaces as a failed fetch — handled in showJobsError().
   ========================================================================= */
(function () {
  'use strict';

  const section = document.getElementById('open-positions');
  if (!section || !section.dataset.careersApi) return;

  const API_BASE = section.dataset.careersApi.replace(/\/+$/, '');
  const JOBS_URL = API_BASE + '/jobs';
  const APPLY_URL = API_BASE + '/candidates';
  const GENERAL_JOB_ID = section.dataset.generalJobId ? Number(section.dataset.generalJobId) : null;
  const PAGE_SIZE = 100;
  const MAX_PAGES = 10;
  const MAX_RESUME_BYTES = 5 * 1024 * 1024;
  const RESUME_HINT = 'Click to upload your resume (PDF or DOC, max 5MB)';

  // ---- Elements -----------------------------------------------------------
  const grid = document.getElementById('jobsGrid');
  const loading = document.getElementById('jobsLoading');
  const errorBox = document.getElementById('jobsError');
  const errorMsg = document.getElementById('jobsErrorMsg');
  const retryBtn = document.getElementById('jobsRetry');
  const summary = document.getElementById('jobsSummary');
  const filtersWrap = document.getElementById('jobFilters');
  const searchInput = document.getElementById('jobSearch');
  const emptyMsg = document.getElementById('jobEmpty');

  const detailsOverlay = document.getElementById('jobDetailsOverlay');
  const detailsDept = document.getElementById('detailsDept');
  const detailsTitle = document.getElementById('detailsTitle');
  const detailsMeta = document.getElementById('detailsMeta');
  const detailsBadges = document.getElementById('detailsBadges');
  const detailsDescription = document.getElementById('detailsDescription');
  const detailsReqSection = document.getElementById('detailsRequirementsSection');
  const detailsRequirements = document.getElementById('detailsRequirements');
  const detailsApplyBtn = document.querySelector('.job-details-apply');

  const applyOverlay = document.getElementById('jobModalOverlay');
  const applyTitle = document.getElementById('jobModalTitle');
  const applyRole = document.getElementById('jobModalRole');
  const applyBody = document.getElementById('jobModalBody');
  const applySuccess = document.getElementById('jobModalSuccess');
  const applyForm = document.getElementById('jobApplyForm');
  const jobOpeningIdInput = document.getElementById('jobOpeningId');
  const formError = document.getElementById('jobFormError');
  const resumeInput = document.getElementById('resumeFile');
  const resumeLabel = document.getElementById('resumeFileLabel');
  const resumeTrigger = document.getElementById('resumeFieldTrigger');
  const resumeError = document.getElementById('resumeError');

  let allJobs = [];
  let activeDept = 'all';
  let currentJob = null;      // job shown in the details modal

  // ---- Helpers ------------------------------------------------------------
  function escapeHtml(value) {
    return String(value == null ? '' : value)
      .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
  }

  function slugify(value) {
    return String(value || '')
      .toLowerCase().trim()
      .replace(/[^a-z0-9]+/g, '-')
      .replace(/^-+|-+$/g, '') || 'other';
  }

  // Job descriptions come back as rich HTML from the PeopleHub admin editor,
  // so render only a known-safe subset of it.
  const ALLOWED_TAGS = new Set(['P', 'BR', 'B', 'STRONG', 'I', 'EM', 'U', 'UL', 'OL', 'LI',
    'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'SPAN', 'DIV', 'A', 'BLOCKQUOTE', 'HR', 'CODE', 'PRE',
    'TABLE', 'THEAD', 'TBODY', 'TR', 'TH', 'TD', 'SMALL', 'SUB', 'SUP']);

  function sanitizeHtml(html) {
    const doc = new DOMParser().parseFromString(String(html || ''), 'text/html');
    doc.body.querySelectorAll('script,style,iframe,object,embed,form,input,link,meta,svg').forEach(el => el.remove());
    Array.from(doc.body.querySelectorAll('*')).forEach(el => {
      if (!ALLOWED_TAGS.has(el.tagName)) {
        el.replaceWith(...Array.from(el.childNodes));
        return;
      }
      Array.from(el.attributes).forEach(attr => {
        const name = attr.name.toLowerCase();
        const keep = el.tagName === 'A' && (name === 'href' || name === 'title');
        if (!keep) el.removeAttribute(attr.name);
      });
      if (el.tagName === 'A') {
        const href = el.getAttribute('href') || '';
        if (/^\s*(javascript|data|vbscript):/i.test(href)) el.removeAttribute('href');
        el.setAttribute('target', '_blank');
        el.setAttribute('rel', 'noopener noreferrer');
      }
    });
    return doc.body.innerHTML;
  }

  function hasContent(html) {
    if (!html) return false;
    const doc = new DOMParser().parseFromString(String(html), 'text/html');
    return doc.body.textContent.trim().length > 0;
  }

  function formatExperience(min, max) {
    const hasMin = min !== null && min !== undefined && min !== '';
    const hasMax = max !== null && max !== undefined && max !== '';
    if (!hasMin && !hasMax) return '';
    const n = v => String(Number(v)).replace(/\.0$/, '');
    if (hasMin && hasMax) return n(min) + ' – ' + n(max) + ' yrs experience';
    if (hasMin) return n(min) + '+ yrs experience';
    return 'Up to ' + n(max) + ' yrs experience';
  }

  function formatSalary(min, max) {
    const lpa = v => String((Number(v) / 100000).toFixed(1)).replace(/\.0$/, '') + ' LPA';
    if (min && max) return lpa(min) + ' – ' + lpa(max);
    if (min) return 'From ' + lpa(min);
    if (max) return 'Up to ' + lpa(max);
    return '';
  }

  function formatOpenings(count) {
    if (!count) return '';
    return count + (count === 1 ? ' opening' : ' openings');
  }

  const MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  function formatPosted(value) {
    if (!value) return '';
    const d = new Date(value);
    if (isNaN(d.getTime())) return '';
    return 'Posted ' + String(d.getDate()).padStart(2, '0') + '-' + MONTHS[d.getMonth()] + '-' + d.getFullYear();
  }

  function isNetworkError(error) {
    // fetch() rejects with a TypeError when the request never completed —
    // offline, DNS failure, or a blocked origin (403 with no CORS headers).
    return !!error && (error instanceof TypeError || error.name === 'TypeError');
  }

  // ---- Loading / error states ---------------------------------------------
  function setLoading(isLoading) {
    if (loading) loading.hidden = !isLoading;
    if (!isLoading) return;
    if (grid) { grid.innerHTML = ''; grid.hidden = true; }
    if (errorBox) errorBox.hidden = true;
    if (emptyMsg) emptyMsg.classList.remove('show');
    if (summary) summary.textContent = '';
    if (filtersWrap) filtersWrap.hidden = true;
  }

  function showJobsError(message) {
    if (grid) { grid.innerHTML = ''; grid.hidden = true; }
    if (summary) summary.textContent = '';
    if (filtersWrap) filtersWrap.hidden = true;
    if (errorMsg) errorMsg.textContent = message;
    if (errorBox) errorBox.hidden = false;
  }

  // ---- Fetching -----------------------------------------------------------
  async function requestJobs(page) {
    const params = new URLSearchParams({ page: String(page), limit: String(PAGE_SIZE) });
    const response = await fetch(JOBS_URL + '?' + params.toString(), {
      headers: { 'Accept': 'application/json' },
      credentials: 'omit'
    });
    let payload = null;
    try {
      payload = await response.json();
    } catch (e) {
      throw new Error('The careers service returned an unreadable response.');
    }
    if (!response.ok) {
      throw new Error((payload && payload.message) || 'Unable to load open positions right now.');
    }
    return payload;
  }

  async function loadJobs() {
    setLoading(true);
    try {
      const first = await requestJobs(1);
      let jobs = Array.isArray(first.data) ? first.data.slice() : [];
      const totalPages = Math.min(Number(first.total_pages) || 1, MAX_PAGES);
      for (let page = 2; page <= totalPages; page++) {
        const next = await requestJobs(page);
        if (Array.isArray(next.data)) jobs = jobs.concat(next.data);
      }
      allJobs = jobs;
      setLoading(false);
      buildFilters();
      applyFilters();
    } catch (error) {
      setLoading(false);
      // A blocked origin (403 without CORS headers) surfaces as a TypeError.
      const blocked = isNetworkError(error);
      showJobsError(blocked
        ? 'We could not reach the careers service from this address. Open positions load on the live site at adhiraninfotech.com.'
        : (error.message || 'Unable to load open positions right now.'));
      if (blocked) console.warn('[careers] Jobs request blocked — the API only allows the official website origin.');
    }
  }

  // ---- Department filter chips -------------------------------------------
  function buildFilters() {
    if (!filtersWrap) return;
    const depts = new Map();
    allJobs.forEach(job => {
      const label = (job.department || '').trim();
      if (label && !depts.has(slugify(label))) depts.set(slugify(label), label);
    });
    if (!depts.size) { filtersWrap.hidden = true; return; }

    const chips = ['<button type="button" class="job-filter active" data-filter="all">All Roles</button>'];
    Array.from(depts.entries())
      .sort((a, b) => a[1].localeCompare(b[1]))
      .forEach(pair => {
        chips.push('<button type="button" class="job-filter" data-filter="' + escapeHtml(pair[0]) + '">' +
          escapeHtml(pair[1]) + '</button>');
      });
    filtersWrap.innerHTML = chips.join('');
    filtersWrap.hidden = depts.size < 2;   // a single department is not worth a filter row
    activeDept = 'all';
  }

  // ---- Rendering ----------------------------------------------------------
  function jobCardHtml(job) {
    const deptLabel = job.department || '';
    const badges = [
      formatExperience(job.experience_min, job.experience_max),
      formatSalary(job.salary_range_min, job.salary_range_max),
      formatOpenings(job.openings_count)
    ].filter(Boolean)
      .map(text => '<span class="job-badge">' + escapeHtml(text) + '</span>')
      .join('');

    const role = [deptLabel, job.employment_type].filter(Boolean).map(escapeHtml).join(' · ');

    return '' +
      '<article class="job-card" data-job-id="' + escapeHtml(job.id) + '" data-dept="' + escapeHtml(slugify(deptLabel)) + '">' +
        '<div>' +
          '<h3>' + escapeHtml(job.title || 'Open role') + '</h3>' +
          '<div class="meta">' + escapeHtml(job.location || 'Location flexible') + '</div>' +
          (role ? '<div class="role">' + role + '</div>' : '') +
        '</div>' +
        (badges ? '<div class="job-badges">' + badges + '</div>' : '') +
        '<div class="date">' + escapeHtml(formatPosted(job.created_at)) + '</div>' +
        '<div class="job-card-actions">' +
          '<button type="button" class="btn btn-outline-light job-view-btn">View Details</button>' +
          '<button type="button" class="btn btn-lime job-apply-btn">Apply Now</button>' +
        '</div>' +
      '</article>';
  }

  function applyFilters() {
    if (!grid) return;
    const query = searchInput ? searchInput.value.trim().toLowerCase() : '';
    const matches = allJobs.filter(job => {
      if (activeDept !== 'all' && slugify(job.department) !== activeDept) return false;
      if (!query) return true;
      const haystack = [job.title, job.location, job.department, job.employment_type]
        .filter(Boolean).join(' ').toLowerCase();
      return haystack.indexOf(query) !== -1;
    });

    grid.innerHTML = matches.map(jobCardHtml).join('');
    grid.hidden = matches.length === 0;
    if (emptyMsg) emptyMsg.classList.toggle('show', matches.length === 0);

    if (summary) {
      if (!allJobs.length) {
        summary.textContent = 'No open positions are listed right now — submit a general application and we will get in touch.';
      } else if (matches.length === allJobs.length) {
        summary.textContent = 'Showing all ' + allJobs.length + ' open position' + (allJobs.length === 1 ? '' : 's') + '.';
      } else {
        summary.textContent = 'Showing ' + matches.length + ' of ' + allJobs.length + ' open positions.';
      }
    }
  }

  function findJob(id) {
    return allJobs.filter(job => String(job.id) === String(id))[0] || null;
  }

  // ---- Details modal ------------------------------------------------------
  function openDetailsModal(job) {
    if (!detailsOverlay || !job) return;
    currentJob = job;
    if (detailsDept) detailsDept.textContent = job.department || 'Open Role';
    if (detailsTitle) detailsTitle.textContent = job.title || 'Open role';
    if (detailsMeta) detailsMeta.textContent = [job.location, job.employment_type].filter(Boolean).join(' · ');

    if (detailsBadges) {
      detailsBadges.innerHTML = [
        formatExperience(job.experience_min, job.experience_max),
        formatSalary(job.salary_range_min, job.salary_range_max),
        formatOpenings(job.openings_count),
        formatPosted(job.created_at)
      ].filter(Boolean)
        .map(text => '<span class="job-badge">' + escapeHtml(text) + '</span>')
        .join('');
    }

    if (detailsDescription) {
      detailsDescription.innerHTML = hasContent(job.description)
        ? sanitizeHtml(job.description)
        : '<p>Full details are shared during the first conversation with our talent team.</p>';
    }
    if (detailsReqSection && detailsRequirements) {
      const showReq = hasContent(job.requirements);
      detailsReqSection.hidden = !showReq;
      detailsRequirements.innerHTML = showReq ? sanitizeHtml(job.requirements) : '';
    }

    detailsOverlay.classList.add('open');
    document.body.classList.add('modal-open');
  }

  function closeDetailsModal() {
    if (!detailsOverlay) return;
    detailsOverlay.classList.remove('open');
    document.body.classList.remove('modal-open');
  }

  // ---- Apply modal --------------------------------------------------------
  function resetResumeField() {
    if (resumeInput) resumeInput.value = '';
    if (resumeLabel) {
      resumeLabel.textContent = RESUME_HINT;
      const field = resumeLabel.closest('.file-field');
      if (field) field.classList.remove('filled', 'error');
    }
    if (resumeError) resumeError.textContent = '';
  }

  function clearFormErrors() {
    if (!applyForm) return;
    applyForm.querySelectorAll('.form-group').forEach(g => g.classList.remove('error', 'success'));
    applyForm.querySelectorAll('.error-msg').forEach(el => {
      if (el.dataset.defaultMsg) el.textContent = el.dataset.defaultMsg;
    });
    if (resumeError) resumeError.textContent = '';
    if (formError) { formError.textContent = ''; formError.hidden = true; }
  }

  function openApplyModal(job) {
    if (!applyOverlay) return;
    const jobId = job ? job.id : GENERAL_JOB_ID;
    if (jobOpeningIdInput) jobOpeningIdInput.value = jobId == null ? '' : jobId;
    if (applyTitle) applyTitle.textContent = job ? (job.title || 'Open role') : 'General Application';
    if (applyRole) {
      applyRole.textContent = job
        ? [job.location, job.department, job.employment_type].filter(Boolean).join(' · ')
        : 'Future Opportunities';
    }
    if (applyBody) applyBody.style.display = '';
    if (applySuccess) applySuccess.classList.remove('show');
    clearFormErrors();
    applyOverlay.classList.add('open');
    document.body.classList.add('modal-open');
  }

  function closeApplyModal() {
    if (!applyOverlay) return;
    applyOverlay.classList.remove('open');
    document.body.classList.remove('modal-open');
  }

  // A general application still needs a job_opening_id (the API requires one).
  // Without a configured evergreen opening, send people to the live list instead.
  function handleGeneralApply() {
    if (GENERAL_JOB_ID) { openApplyModal(null); return; }
    if (typeof section.scrollIntoView === 'function') {
      section.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    if (searchInput) setTimeout(() => searchInput.focus(), 400);
  }

  // ---- Validation ---------------------------------------------------------
  function setFieldError(id, message) {
    const el = document.getElementById(id);
    const group = el ? el.closest('.form-group') : null;
    if (!group) return;
    group.classList.add('error');
    group.classList.remove('success');
    const msg = group.querySelector('.error-msg');
    if (msg && message) msg.textContent = message;
  }

  function validateForm() {
    let valid = true;
    const checks = [
      { id: 'appFirstName', test: v => v.trim().length > 0 },
      { id: 'appLastName', test: v => v.trim().length > 0 },
      { id: 'appEmail', test: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()) },
      { id: 'appPhone', test: v => v.replace(/\D/g, '').length >= 10 },
      { id: 'appExperience', test: v => v.trim() !== '' && !isNaN(Number(v)) && Number(v) >= 0 }
    ];
    checks.forEach(check => {
      const el = document.getElementById(check.id);
      if (!el) return;
      const group = el.closest('.form-group');
      if (group) group.classList.remove('error', 'success');
      if (!check.test(el.value)) {
        setFieldError(check.id);
        valid = false;
      } else if (group) {
        group.classList.add('success');
      }
    });

    const file = resumeInput && resumeInput.files ? resumeInput.files[0] : null;
    const fileField = resumeLabel ? resumeLabel.closest('.file-field') : null;
    if (fileField) fileField.classList.remove('error');
    let resumeMessage = '';
    if (!file) resumeMessage = 'Please attach your resume.';
    else if (file.size > MAX_RESUME_BYTES) resumeMessage = 'Your resume must be 5MB or smaller.';
    else if (!/\.(pdf|doc|docx)$/i.test(file.name)) resumeMessage = 'Please upload a PDF, DOC or DOCX file.';

    if (resumeMessage) {
      if (resumeError) resumeError.textContent = resumeMessage;
      if (fileField) fileField.classList.add('error');
      valid = false;
    } else if (resumeError) {
      resumeError.textContent = '';
    }

    return valid;
  }

  function numberOrNull(id) {
    const el = document.getElementById(id);
    if (!el) return null;
    const raw = String(el.value || '').replace(/[,\s₹]/g, '');
    if (raw === '') return null;
    const num = Number(raw);
    return isNaN(num) ? null : num;
  }

  function textOrNull(id) {
    const el = document.getElementById(id);
    const value = el ? String(el.value || '').trim() : '';
    return value === '' ? null : value;
  }

  function buildPayload() {
    const data = new FormData();
    data.append('job_opening_id', jobOpeningIdInput ? jobOpeningIdInput.value : '');
    data.append('first_name', document.getElementById('appFirstName').value.trim());
    data.append('last_name', document.getElementById('appLastName').value.trim());
    data.append('email', document.getElementById('appEmail').value.trim());
    data.append('phone', document.getElementById('appPhone').value.trim());
    data.append('resume', resumeInput.files[0]);

    const optional = {
      current_company: textOrNull('appCompany'),
      total_experience: numberOrNull('appExperience'),
      current_ctc: numberOrNull('appCurrentCtc'),
      expected_ctc: numberOrNull('appExpectedCtc'),
      notice_period_days: numberOrNull('appNotice'),
      referred_by_employee_code: textOrNull('appReferral'),
      tags: textOrNull('appSkills')
    };
    Object.keys(optional).forEach(key => {
      if (optional[key] !== null) data.append(key, optional[key]);
    });
    return data;
  }

  // Map FastAPI validation errors (detail[].loc) back onto the form fields.
  const API_FIELD_TO_INPUT = {
    first_name: 'appFirstName',
    last_name: 'appLastName',
    email: 'appEmail',
    phone: 'appPhone',
    current_company: 'appCompany',
    total_experience: 'appExperience',
    current_ctc: 'appCurrentCtc',
    expected_ctc: 'appExpectedCtc',
    notice_period_days: 'appNotice',
    referred_by_employee_code: 'appReferral',
    tags: 'appSkills'
  };

  function showApiErrors(payload, fallback) {
    let handled = false;
    if (payload && Array.isArray(payload.detail)) {
      payload.detail.forEach(item => {
        if (!item || !item.loc) return;
        const apiField = String(item.loc[item.loc.length - 1]);
        if (apiField === 'resume') {
          if (resumeError) resumeError.textContent = item.msg || 'Please check your resume file.';
          handled = true;
          return;
        }
        const inputId = API_FIELD_TO_INPUT[apiField];
        if (inputId) {
          setFieldError(inputId, item.msg || 'Please check this field.');
          handled = true;
        }
      });
    }
    const message = (payload && typeof payload.message === 'string' && payload.message) ||
      (payload && typeof payload.detail === 'string' && payload.detail) ||
      (handled ? 'Please correct the highlighted fields and try again.' : fallback);
    if (formError) {
      formError.textContent = message;
      formError.hidden = false;
    }
  }

  async function submitApplication(event) {
    event.preventDefault();
    clearFormErrors();

    if (!jobOpeningIdInput || !jobOpeningIdInput.value) {
      if (formError) {
        formError.textContent = 'Please pick a role from the open positions list before applying.';
        formError.hidden = false;
      }
      return;
    }
    if (!validateForm()) return;

    const submitBtn = applyForm.querySelector('.btn-submit');
    if (submitBtn) { submitBtn.classList.add('loading'); submitBtn.disabled = true; }

    try {
      const response = await fetch(APPLY_URL, {
        method: 'POST',
        body: buildPayload(),
        credentials: 'omit'
      });
      let payload = null;
      try { payload = await response.json(); } catch (e) { payload = null; }

      if (response.ok) {
        if (applyBody) applyBody.style.display = 'none';
        if (applySuccess) applySuccess.classList.add('show');
        applyForm.reset();
        applyForm.querySelectorAll('.form-group').forEach(g => g.classList.remove('success', 'error', 'active'));
        resetResumeField();
      } else {
        showApiErrors(payload, 'We could not submit your application. Please try again.');
      }
    } catch (error) {
      if (formError) {
        formError.textContent = isNetworkError(error)
          ? 'We could not reach the careers service. Please try again from adhiraninfotech.com, or email your resume to sales@adhiraninfotech.com.'
          : (error.message || 'Something went wrong while submitting your application.');
        formError.hidden = false;
      }
    } finally {
      if (submitBtn) { submitBtn.classList.remove('loading'); submitBtn.disabled = false; }
    }
  }

  // ---- Events -------------------------------------------------------------
  if (searchInput) {
    searchInput.addEventListener('input', applyFilters);
    searchInput.addEventListener('keydown', e => { if (e.key === 'Enter') e.preventDefault(); });
  }

  if (filtersWrap) {
    filtersWrap.addEventListener('click', e => {
      const btn = e.target.closest('.job-filter');
      if (!btn) return;
      filtersWrap.querySelectorAll('.job-filter').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeDept = btn.dataset.filter || 'all';
      applyFilters();
    });
  }

  if (grid) {
    grid.addEventListener('click', e => {
      const card = e.target.closest('.job-card');
      if (!card) return;
      const job = findJob(card.dataset.jobId);
      if (!job) return;
      if (e.target.closest('.job-view-btn')) openDetailsModal(job);
      else if (e.target.closest('.job-apply-btn')) openApplyModal(job);
    });
  }

  if (retryBtn) retryBtn.addEventListener('click', loadJobs);

  document.querySelectorAll('.job-general-apply').forEach(btn => {
    btn.addEventListener('click', e => { e.preventDefault(); handleGeneralApply(); });
  });

  document.querySelectorAll('[data-details-modal-close]').forEach(el => el.addEventListener('click', closeDetailsModal));
  document.querySelectorAll('[data-job-modal-close]').forEach(el => el.addEventListener('click', closeApplyModal));

  if (detailsOverlay) {
    detailsOverlay.addEventListener('click', e => { if (e.target === detailsOverlay) closeDetailsModal(); });
  }
  if (applyOverlay) {
    applyOverlay.addEventListener('click', e => { if (e.target === applyOverlay) closeApplyModal(); });
  }
  if (detailsApplyBtn) {
    detailsApplyBtn.addEventListener('click', () => {
      const job = currentJob;
      closeDetailsModal();
      if (job) openApplyModal(job); else handleGeneralApply();
    });
  }

  document.addEventListener('keydown', e => {
    if (e.key !== 'Escape') return;
    closeDetailsModal();
    closeApplyModal();
  });

  // Resume picker
  if (resumeTrigger && resumeInput) {
    resumeTrigger.addEventListener('click', e => {
      if (e.target === resumeInput) return;
      resumeInput.click();
    });
    resumeTrigger.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); resumeInput.click(); }
    });
  }
  if (resumeInput && resumeLabel) {
    resumeInput.addEventListener('change', () => {
      const field = resumeLabel.closest('.file-field');
      if (resumeInput.files && resumeInput.files.length) {
        resumeLabel.textContent = resumeInput.files[0].name;
        if (field) { field.classList.add('filled'); field.classList.remove('error'); }
        if (resumeError) resumeError.textContent = '';
      } else {
        resumeLabel.textContent = RESUME_HINT;
        if (field) field.classList.remove('filled');
      }
    });
  }

  if (applyForm) {
    // Remember each field's default message so API messages can be reset later.
    applyForm.querySelectorAll('.error-msg').forEach(el => { el.dataset.defaultMsg = el.textContent; });
    applyForm.addEventListener('submit', submitApplication);
    applyForm.querySelectorAll('input, select, textarea').forEach(field => {
      const group = field.closest('.form-group');
      if (!group) return;
      const update = () => group.classList.toggle('active', !!String(field.value || '').trim());
      field.addEventListener('input', update);
      field.addEventListener('change', update);
      field.addEventListener('blur', update);
    });
  }

  loadJobs();
})();
