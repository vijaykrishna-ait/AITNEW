// =========================================
// MOBILE HAMBURGER & ACCORDION MENU LOGIC
// =========================================
document.addEventListener('DOMContentLoaded', () => {

  /* ---------------------------------------------------------------------
     HEADER HEIGHT
     The mobile menu pins directly below the sticky header. Only <header> is
     sticky (.topbar scrolls away), and the header shrinks once scrolled, so a
     fixed offset leaves a gap. Publish the live height as --header-h.
     ui.js sets the same variable on enhanced pages; both write the same value.
     --------------------------------------------------------------------- */
  (function () {
    const siteHeader = document.querySelector('header');
    if (!siteHeader) return;
    let last = -1;
    const measure = () => {
      const h = Math.round(siteHeader.getBoundingClientRect().height);
      if (h !== last) {
        last = h;
        document.documentElement.style.setProperty('--header-h', h + 'px');
      }
    };
    measure();
    window.addEventListener('load', measure);
    window.addEventListener('resize', measure, { passive: true });
    window.addEventListener('scroll', measure, { passive: true });
  })();

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
// FEATURED JOBS CAROUSEL (home page)
// -----------------------------------------
// The career page's job list, filters and apply flow now come from the
// PeopleHub careers API and live in assets/js/careers.js.
// =========================================
document.addEventListener('DOMContentLoaded', () => {

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
