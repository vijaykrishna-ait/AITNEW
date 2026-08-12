// =========================================
// MOBILE HAMBURGER & ACCORDION MENU LOGIC
// =========================================
document.addEventListener('DOMContentLoaded', () => {

  const hamburger = document.querySelector('.hamburger-btn');
  const mobileMenu = document.querySelector('.mobile-menu');
  const accordionHeaders = document.querySelectorAll('.mobile-accordion-header');
  const body = document.body;

  // Pages that ship their own accessible tab/reveal layer (home.js) opt out of
  // the click-only implementations below, so nothing is bound twice.
  const isEnhanced = body.dataset.enhanced === 'true';

  // 1. Toggle Mobile Menu
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      mobileMenu.classList.toggle('open');

      // Prevent background scrolling when menu is open
      if (mobileMenu.classList.contains('open')) {
        body.style.overflow = 'hidden';
      } else {
        body.style.overflow = '';
      }
    });
  }

  // 2. Toggle Accordion Panels
  accordionHeaders.forEach(header => {
    header.addEventListener('click', () => {
      header.classList.toggle('active');
      const content = header.nextElementSibling;
      content.classList.toggle('open');
    });
  });

  // 3. Close menu when any mobile link is clicked
  const mobileLinks = document.querySelectorAll('.mobile-menu a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('open');
      body.style.overflow = '';

      accordionHeaders.forEach(h => h.classList.remove('active'));
      document.querySelectorAll('.mobile-accordion-content').forEach(c => c.classList.remove('open'));
    });
  });

  // mobile constant
  const mobile = window.matchMedia("(max-width:900px)");

  // ServicesAccordion
  function initServicesAccordion() {
    if (!mobile.matches) return;
    const panels = document.querySelectorAll(".svc-panels");
    panels.forEach((panel, index) => {
      panel.style.display = "block";
      if (index !== 0) { panel.classList.add("collapsed"); }
      panel.addEventListener("click", function (e) {
        if (e.target.closest(".svc-card")) { return; }
        panels.forEach(item => { if (item !== panel) { item.classList.add("collapsed"); } });
        panel.classList.toggle("collapsed");
      });
    });
  }
  initServicesAccordion();


  // SolutionsAccordion
  function initSolutionsAccordion() {
    if (!mobile.matches) return;
    const panels = document.querySelectorAll(".sol-panel");
    panels.forEach((panel, index) => {
      panel.style.display = "block";
      if (index !== 0) {
        panel.classList.add("collapsed");
      }
      panel.addEventListener("click", function (e) {
        if (e.target.closest(".sol-panel-text") || e.target.closest(".sol-panel-img")) { return; }
        panels.forEach(item => { if (item !== panel) { item.classList.add("collapsed"); } });
        panel.classList.toggle("collapsed");
      });
    });
  }
  initSolutionsAccordion();

  // IndustriesAccordion
  function initIndustriesAccordion() {
    if (!mobile.matches) return;
    const panes = document.querySelectorAll(".ind-visual .pane");
    panes.forEach((pane, index) => {
      if (index !== 0) { pane.classList.add("collapsed"); }
      pane.addEventListener("click", function (e) {
        if (e.target.closest(".info") || e.target.closest("img")) { return; }
        panes.forEach(item => { if (item !== pane) { item.classList.add("collapsed"); } });
        pane.classList.toggle("collapsed");
      });
    });
  }
  initIndustriesAccordion();

  // Industries interactive list
  // Skipped where an accessible implementation exists (home.js), which also
  // keeps aria-selected/tabindex in sync — this one only toggles classes.
  const indRows = document.querySelectorAll('.ind-row');
  const indPanes = document.querySelectorAll('.ind-visual .pane');
  if (!isEnhanced) indRows.forEach(row => {
    row.addEventListener('mouseenter', () => {
      indRows.forEach(r => r.classList.remove('active'));
      row.classList.add('active');
      const key = row.dataset.ind;
      indPanes.forEach(p => p.classList.toggle('active', p.dataset.pane === key));
    });
  });

  // Global reach drag-to-scroll (FIXED: Added null check to prevent crash on other pages)
  const reachGrid = document.getElementById('reachGrid');
  if (reachGrid) {
    let isDown = false, startX, scrollLeft;
    reachGrid.addEventListener('mousedown', e => {
      isDown = true;
      reachGrid.classList.add('dragging');
      startX = e.pageX - reachGrid.offsetLeft;
      scrollLeft = reachGrid.scrollLeft;
    });
    ['mouseleave', 'mouseup'].forEach(ev =>
      reachGrid.addEventListener(ev, () => {
        isDown = false;
        reachGrid.classList.remove('dragging');
      })
    );
    reachGrid.addEventListener('mousemove', e => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - reachGrid.offsetLeft;
      reachGrid.scrollLeft = scrollLeft - (x - startX) * 1.5;
    });
  }

  const solTabs = document.querySelectorAll('.sol-tab');
  const solPanels = document.querySelectorAll('.sol-panel');
  if (!isEnhanced) solTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      solTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const key = tab.dataset.tab;
      solPanels.forEach(p => p.style.display = (p.dataset.panel === key) ? 'grid' : 'none');
    });
  });

  // Services tabs
  const svcTabs = document.querySelectorAll('.svc-tab');
  const svcPanels = document.querySelectorAll('.svc-panels');
  if (!isEnhanced) svcTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      svcTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const key = tab.dataset.svc;
      svcPanels.forEach(p => p.style.display = (p.dataset.svcpanel === key) ? 'grid' : 'none');
    });
  });

  // =========================================
  // CASE STUDIES FILTER LOGIC (FIXED & ENHANCED)
  // =========================================
  const csFilters = document.querySelectorAll('.cs-filter');
  const csCards = document.querySelectorAll('.cs-card');

  if (csFilters.length > 0) {
    csFilters.forEach(filter => {
      filter.addEventListener('click', () => {
        // Update active state on buttons
        csFilters.forEach(f => f.classList.remove('active'));
        filter.classList.add('active');

        const key = filter.dataset.filter;

        // Filter cards
        csCards.forEach(card => {
          const cats = card.dataset.cat || '';
          const shouldHide = key !== 'all' && !cats.split(' ').includes(key);

          if (shouldHide) {
            card.classList.add('hidden');
            card.classList.remove('animate-in');
          } else {
            card.classList.remove('hidden');
            // Retrigger CSS animation for a smooth fade-in effect
            card.classList.remove('animate-in');
            void card.offsetWidth; // Force browser reflow to restart animation
            card.classList.add('animate-in');
          }
        });
      });
    });
  }

  // Enterprise platform tabs
  const platPills = document.querySelectorAll('.platform-pill');
  const platPanels = document.querySelectorAll('.platform-panel');
  platPills.forEach(pill => {
    pill.addEventListener('click', () => {
      platPills.forEach(p => p.classList.remove('active'));
      pill.classList.add('active');
      const key = pill.dataset.platform;
      platPanels.forEach(panel => panel.classList.toggle('active', panel.dataset.panel === key));
    });
  });

  // Leadership region tabs
  const regionTabs = document.querySelectorAll('.region-tab');
  const regionPanels = document.querySelectorAll('.region-panel');
  regionTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      regionTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const key = tab.dataset.region;
      regionPanels.forEach(p => p.classList.toggle('active', p.dataset.panel === key));
    });
  });

  // News & blog filters
  const nbFilters = document.querySelectorAll('.nb-filter');
  const articleCards = document.querySelectorAll('.article-card');
  nbFilters.forEach(filter => {
    filter.addEventListener('click', () => {
      nbFilters.forEach(f => f.classList.remove('active'));
      filter.classList.add('active');
      const key = filter.dataset.filter;
      articleCards.forEach(card => {
        const cat = card.dataset.cat || '';
        card.classList.toggle('hidden', key !== 'all' && cat !== key);
      });
    });
  });

  // Form validation
  // NOTE: this handler never sent anything — it preventDefault()ed, waited 2s
  // and alert()ed success. Enhanced pages (contact.js) submit to send-mail.php
  // for real and report the server's actual response, so they opt out here.
  const form = document.getElementById('contactForm');
  if (form && !isEnhanced) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      let valid = true;
      const fields = [
        { id: 'firstName', test: v => v.trim().length > 0 },
        { id: 'lastName', test: v => v.trim().length > 0 },
        { id: 'email', test: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v) },
        { id: 'phone', test: v => /^[0-9]{10}$/.test(v.replace(/\D/g, '')) },
        { id: 'subject', test: v => v !== '' },
        { id: 'message', test: v => v.trim().length > 0 }
      ];
      fields.forEach(f => {
        const el = document.getElementById(f.id);
        const group = el.closest('.form-group');
        group.classList.remove('error', 'success');
        if (!f.test(el.value)) {
          group.classList.add('error');
          valid = false;
        } else {
          group.classList.add('success');
        }
      });
      if (valid) {
        const btn = form.querySelector('.btn-submit');
        btn.classList.add('loading');
        setTimeout(() => {
          btn.classList.remove('loading');
          alert('Thank you! Your message has been sent successfully.');
          form.reset();
          form.querySelectorAll('.form-group').forEach(g => {
            g.classList.remove('success', 'error', 'active');
          });
        }, 2000);
      }
    });
  }

  document.querySelectorAll(
    '#contactForm input, #contactForm textarea, #contactForm select'
  ).forEach(field => {

    const group = field.closest('.form-group');

    const updateState = () => {
      if (field.value.trim() !== '') {
        group.classList.add('active');
      } else {
        group.classList.remove('active');
      }
    };

    field.addEventListener('input', updateState);
    field.addEventListener('change', updateState);
    field.addEventListener('blur', updateState);

    updateState();
  });

  // itSolutionsAccordion
  document.querySelectorAll('.itsol-faq-q').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.itsol-faq-item');
      const ans = item.querySelector('.itsol-faq-a');
      const open = item.classList.contains('open');
      document.querySelectorAll('.itsol-faq-item').forEach(el => {
        el.classList.remove('open');
        el.querySelector('.itsol-faq-a').style.maxHeight = null;
      });
      if (!open) {
        item.classList.add('open');
        ans.style.maxHeight = ans.scrollHeight + 'px';
      }
    });
  });


});

// =========================================
// CAREER PAGE: JOB SEARCH, FILTERS & APPLY MODAL
// =========================================
document.addEventListener('DOMContentLoaded', () => {

  const jobCards = document.querySelectorAll('.job-card[data-dept]');
  const jobFilters = document.querySelectorAll('.job-filter');
  const jobSearch = document.getElementById('jobSearch');
  const jobEmpty = document.getElementById('jobEmpty');

  function applyJobFilters() {
    const activeFilter = document.querySelector('.job-filter.active');
    const dept = activeFilter ? activeFilter.dataset.filter : 'all';
    const query = jobSearch ? jobSearch.value.trim().toLowerCase() : '';
    let visible = 0;

    jobCards.forEach(card => {
      const matchesDept = dept === 'all' || card.dataset.dept === dept;
      const haystack = (card.dataset.title + ' ' + card.dataset.loc).toLowerCase();
      const matchesQuery = query === '' || haystack.includes(query);
      if (matchesDept && matchesQuery) {
        card.classList.remove('hidden');
        visible++;
      } else {
        card.classList.add('hidden');
      }
    });

    if (jobEmpty) jobEmpty.classList.toggle('show', visible === 0);
  }

  if (jobFilters.length) {
    jobFilters.forEach(btn => {
      btn.addEventListener('click', () => {
        jobFilters.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        applyJobFilters();
      });
    });
  }

  if (jobSearch) jobSearch.addEventListener('input', applyJobFilters);
  if (jobCards.length) applyJobFilters();

  // ---- Apply Modal ----
  const modalOverlay = document.getElementById('jobModalOverlay');
  const modalRole = document.getElementById('jobModalRole');
  const modalTitle = document.getElementById('jobModalTitle');
  const modalForm = document.getElementById('jobApplyForm');
  const modalJobField = document.getElementById('jobAppliedFor');
  const modalSuccess = document.getElementById('jobModalSuccess');
  const modalBody = document.getElementById('jobModalBody');

  function openJobModal(title, meta) {
    if (!modalOverlay) return;
    if (modalRole) modalRole.textContent = meta || 'General Application';
    if (modalJobField) modalJobField.value = title || 'General Application';
    if (modalTitle) modalTitle.textContent = title || 'Apply to Adhiran Infotech';
    if (modalBody) modalBody.style.display = '';
    if (modalSuccess) modalSuccess.classList.remove('show');
    modalOverlay.classList.add('open');
    document.body.classList.add('modal-open');
  }

  function closeJobModal() {
    if (!modalOverlay) return;
    modalOverlay.classList.remove('open');
    document.body.classList.remove('modal-open');
  }

  document.querySelectorAll('.job-apply-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const card = btn.closest('.job-card');
      const title = card ? card.dataset.title : 'General Application';
      const loc = card ? card.dataset.loc : '';
      const deptLabel = card ? card.dataset.deptLabel : '';
      openJobModal(title, [loc, deptLabel].filter(Boolean).join(' · '));
    });
  });

  document.querySelectorAll('.job-general-apply').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openJobModal('General Application', 'Future Opportunities');
    });
  });

  document.querySelectorAll('[data-job-modal-close]').forEach(el => {
    el.addEventListener('click', closeJobModal);
  });

  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) closeJobModal();
    });
  }

  // ---- Job Details Modal ----
  const detailsOverlay = document.getElementById('jobDetailsOverlay');
  const detailsDept = document.getElementById('detailsDept');
  const detailsTitle = document.getElementById('detailsTitle');
  const detailsMeta = document.getElementById('detailsMeta');
  const detailsOverview = document.getElementById('detailsOverview');
  const detailsResp = document.getElementById('detailsResponsibilities');
  const detailsReq = document.getElementById('detailsRequirements');
  const detailsApplyBtn = document.querySelector('.job-details-apply');
  let currentDetailsCard = null;

  function listItems(value) {
    return (value || '')
      .split('|')
      .map(v => v.trim())
      .filter(Boolean)
      .map(v => `<li>${v}</li>`)
      .join('');
  }

  function openDetailsModal(card) {
    if (!detailsOverlay || !card) return;
    currentDetailsCard = card;
    if (detailsDept) detailsDept.textContent = card.dataset.deptLabel || '';
    if (detailsTitle) detailsTitle.textContent = card.dataset.title || '';
    if (detailsMeta) detailsMeta.textContent = [card.dataset.loc, card.dataset.type].filter(Boolean).join(' · ');
    if (detailsOverview) detailsOverview.textContent = card.dataset.overview || '';
    if (detailsResp) detailsResp.innerHTML = listItems(card.dataset.responsibilities);
    if (detailsReq) detailsReq.innerHTML = listItems(card.dataset.requirements);
    detailsOverlay.classList.add('open');
    document.body.classList.add('modal-open');
  }

  function closeDetailsModal() {
    if (!detailsOverlay) return;
    detailsOverlay.classList.remove('open');
    document.body.classList.remove('modal-open');
  }

  document.querySelectorAll('.job-view-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openDetailsModal(btn.closest('.job-card'));
    });
  });

  document.querySelectorAll('[data-details-modal-close]').forEach(el => {
    el.addEventListener('click', closeDetailsModal);
  });

  if (detailsOverlay) {
    detailsOverlay.addEventListener('click', (e) => {
      if (e.target === detailsOverlay) closeDetailsModal();
    });
  }

  if (detailsApplyBtn) {
    detailsApplyBtn.addEventListener('click', () => {
      closeDetailsModal();
      if (currentDetailsCard) {
        const title = currentDetailsCard.dataset.title;
        const loc = currentDetailsCard.dataset.loc;
        const deptLabel = currentDetailsCard.dataset.deptLabel;
        openJobModal(title, [loc, deptLabel].filter(Boolean).join(' · '));
      } else {
        openJobModal('General Application', 'Future Opportunities');
      }
    });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeJobModal();
      closeDetailsModal();
    }
  });

  // Resume file field: open the OS file picker reliably
  const resumeInput = document.getElementById('resumeFile');
  const resumeLabel = document.getElementById('resumeFileLabel');
  const resumeTrigger = document.getElementById('resumeFieldTrigger');

  if (resumeTrigger && resumeInput) {
    resumeTrigger.addEventListener('click', (e) => {
      // Avoid double-firing if the click already landed on the input itself
      if (e.target === resumeInput) return;
      resumeInput.click();
    });
    // Keyboard accessibility (Enter / Space)
    resumeTrigger.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        resumeInput.click();
      }
    });
  }

  if (resumeInput && resumeLabel) {
    resumeInput.addEventListener('change', () => {
      const field = resumeLabel.closest('.file-field');
      if (resumeInput.files && resumeInput.files.length > 0) {
        resumeLabel.textContent = resumeInput.files[0].name;
        field.classList.add('filled');
      } else {
        resumeLabel.textContent = 'Click to upload your resume (PDF or DOC, max 5MB)';
        field.classList.remove('filled');
      }
    });
  }

  // Apply form validation + fake submit
  if (modalForm) {
    modalForm.addEventListener('submit', function (e) {
      e.preventDefault();
      let valid = true;
      const fields = [
        { id: 'appFirstName', test: v => v.trim().length > 0 },
        { id: 'appLastName', test: v => v.trim().length > 0 },
        { id: 'appEmail', test: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v) },
        { id: 'appPhone', test: v => /^[0-9]{10}$/.test(v.replace(/\D/g, '')) },
        { id: 'appExperience', test: v => v.trim().length > 0 }
      ];
      fields.forEach(f => {
        const el = document.getElementById(f.id);
        if (!el) return;
        const group = el.closest('.form-group');
        group.classList.remove('error', 'success');
        if (!f.test(el.value)) {
          group.classList.add('error');
          valid = false;
        } else {
          group.classList.add('success');
        }
      });

      if (valid) {
        const btn = modalForm.querySelector('.btn-submit');
        btn.classList.add('loading');
        setTimeout(() => {
          btn.classList.remove('loading');
          if (modalBody) modalBody.style.display = 'none';
          if (modalSuccess) modalSuccess.classList.add('show');
          modalForm.reset();
          modalForm.querySelectorAll('.form-group').forEach(g => {
            g.classList.remove('success', 'error', 'active');
          });
          if (resumeLabel) resumeLabel.textContent = 'Click to upload your resume (PDF or DOC, max 5MB)';
          const field = resumeLabel ? resumeLabel.closest('.file-field') : null;
          if (field) field.classList.remove('filled');
        }, 1600);
      }
    });

    modalForm.querySelectorAll('input, textarea, select').forEach(field => {
      const group = field.closest('.form-group');
      if (!group) return;
      const updateState = () => {
        if (field.value && field.value.trim() !== '') {
          group.classList.add('active');
        } else {
          group.classList.remove('active');
        }
      };
      field.addEventListener('input', updateState);
      field.addEventListener('change', updateState);
      field.addEventListener('blur', updateState);
    });
  }


  // jobs carousel
  const slider = document.getElementById("jobsSlider");
  const next = document.querySelector(".jobs-arrow.next");
  const prev = document.querySelector(".jobs-arrow.prev");

  // Guarded: without this, every page that has no jobs carousel threw a
  // TypeError here and aborted the rest of this DOMContentLoaded block.
  if (slider && next && prev) {
    next.addEventListener("click", () => {
      slider.scrollBy({
        left: slider.clientWidth,
        behavior: "smooth"
      });
    });

    prev.addEventListener("click", () => {
      slider.scrollBy({
        left: -slider.clientWidth,
        behavior: "smooth"
      });
    });
  }
});
