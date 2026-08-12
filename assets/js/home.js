/* ==========================================================================
   HOME PAGE INTERACTIONS
   Loaded only on index.php, after ui.js.
   Shared foundations (reveal, header state, reading progress, floating
   contact, magnetic buttons, the scroll bus) live in ui.js / window.AIT.
   ========================================================================== */
(function () {
  'use strict';

  var AIT = window.AIT;
  if (!AIT) return;

  var reduceMotion = AIT.reduceMotion;
  var finePointer = AIT.finePointer;
  var onScroll = AIT.onScroll;

  AIT.ready(function () {
    /* ----------------------------------------------------------------------
       4. HERO PARALLAX (transform only, capped at 8px)
       ---------------------------------------------------------------------- */
    (function () {
      var visual = document.querySelector('.hero-visual');
      if (!visual || reduceMotion || !finePointer) return;
      onScroll(function () {
        if (window.scrollY > window.innerHeight) return;
        var offset = Math.max(-8, Math.min(8, window.scrollY * 0.035));
        visual.style.setProperty('--hero-parallax', offset + 'px');
      });
    })();

    /* ----------------------------------------------------------------------
       5. SKILLS — filter chips + spotlight
       ---------------------------------------------------------------------- */
    (function () {
      var grid = document.querySelector('.skill-flat-grid');
      var chips = document.querySelectorAll('.skill-chip');
      var count = document.getElementById('skillCount');
      if (!grid) return;

      var items = Array.prototype.slice.call(grid.querySelectorAll('.skill-item'));

      if (chips.length) {
        chips.forEach(function (chip) {
          chip.addEventListener('click', function () {
            var cat = chip.dataset.cat;
            chips.forEach(function (c) { c.setAttribute('aria-pressed', String(c === chip)); });

            var visible = 0;
            items.forEach(function (item) {
              var match = cat === 'all' || (item.dataset.cat || '').split(' ').indexOf(cat) > -1;
              item.classList.toggle('is-filtered-out', !match);
              if (match) visible++;
            });

            if (count) {
              count.textContent = cat === 'all'
                ? 'Showing all ' + visible + ' technologies'
                : 'Showing ' + visible + ' of ' + items.length + ' technologies';
            }
          });
        });
      }

      /* Spotlight — pointer devices only */
      if (finePointer && !reduceMotion) {
        var spotFrame = null;
        grid.addEventListener('pointermove', function (e) {
          if (spotFrame) return;
          spotFrame = window.requestAnimationFrame(function () {
            var r = grid.getBoundingClientRect();
            grid.style.setProperty('--spot-x', (e.clientX - r.left) + 'px');
            grid.style.setProperty('--spot-y', (e.clientY - r.top) + 'px');
            spotFrame = null;
          });
        });
        grid.addEventListener('pointerenter', function () { grid.classList.add('is-spot'); });
        grid.addEventListener('pointerleave', function () { grid.classList.remove('is-spot'); });
      }
    })();

    /* ----------------------------------------------------------------------
       6. TABS — Solutions + Services
       Full tablist semantics, arrow-key navigation, crossfade.
       Desktop only; below 900px styles.css turns both into accordions.
       ---------------------------------------------------------------------- */
    function initTabs(tabSelector, panelSelector, keyAttr, panelKeyAttr, displayMode) {
      var tabs = Array.prototype.slice.call(document.querySelectorAll(tabSelector));
      var panels = Array.prototype.slice.call(document.querySelectorAll(panelSelector));
      if (!tabs.length || !panels.length) return;

      var desktop = window.matchMedia('(min-width:901px)');

      function select(tab, focusTab) {
        var key = tab.dataset[keyAttr];
        tabs.forEach(function (t) {
          var on = t === tab;
          t.setAttribute('aria-selected', String(on));
          t.setAttribute('tabindex', on ? '0' : '-1');
          t.classList.toggle('active', on);
        });
        panels.forEach(function (p) {
          var on = p.dataset[panelKeyAttr] === key;
          if (!desktop.matches) return;          /* accordion mode owns display */
          p.style.display = on ? displayMode : 'none';
          p.classList.remove('panel-in');
          if (on && !reduceMotion) {
            void p.offsetWidth;                  /* restart the crossfade */
            p.classList.add('panel-in');
          }
        });
        if (focusTab) tab.focus();
      }

      tabs.forEach(function (tab, i) {
        tab.addEventListener('click', function () { select(tab, false); });
        tab.addEventListener('keydown', function (e) {
          var dir = 0;
          if (e.key === 'ArrowRight' || e.key === 'ArrowDown') dir = 1;
          else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') dir = -1;
          else if (e.key === 'Home') { e.preventDefault(); select(tabs[0], true); return; }
          else if (e.key === 'End') { e.preventDefault(); select(tabs[tabs.length - 1], true); return; }
          if (!dir) return;
          e.preventDefault();
          select(tabs[(i + dir + tabs.length) % tabs.length], true);
        });
      });
    }

    initTabs('.sol-tab', '.sol-panel', 'tab', 'panel', 'grid');
    initTabs('.svc-tab', '.svc-panels', 'svc', 'svcpanel', 'grid');

    /* ----------------------------------------------------------------------
       7. HIRING STEPS — scroll-driven timeline
       Replaces the 6s infinite loop from styles.css:553-568.
       ---------------------------------------------------------------------- */
    (function () {
      var row = document.querySelector('.steps-row');
      if (!row) return;
      var steps = Array.prototype.slice.call(row.querySelectorAll('.step'));
      if (!steps.length) return;

      if (reduceMotion) {
        steps.forEach(function (s) { s.classList.add('is-active'); });
        row.style.setProperty('--steps-progress', '1');
        return;
      }

      onScroll(function () {
        var rect = row.getBoundingClientRect();
        var start = window.innerHeight * 0.85;
        var end = window.innerHeight * 0.28;
        var progress = (start - rect.top) / (start - end);
        progress = Math.max(0, Math.min(1, progress));

        row.style.setProperty('--steps-progress', progress.toFixed(3));
        steps.forEach(function (step, i) {
          step.classList.toggle('is-active', progress >= (i / steps.length) + 0.05);
        });
      });
    })();

    /* ----------------------------------------------------------------------
       8. EXPERTS MARQUEE — explicit pause control (WCAG 2.2.2)
       ---------------------------------------------------------------------- */
    (function () {
      var track = document.querySelector('.experts-track');
      var toggle = document.getElementById('marqueeToggle');
      if (!track || !toggle) return;

      if (reduceMotion) { track.classList.add('is-paused'); }

      function label() {
        var paused = track.classList.contains('is-paused');
        toggle.setAttribute('aria-pressed', String(paused));
        toggle.querySelector('.marquee-toggle-text').textContent = paused ? 'Play' : 'Pause';
      }
      label();

      toggle.addEventListener('click', function () {
        track.classList.toggle('is-paused');
        label();
      });
    })();

    /* ----------------------------------------------------------------------
       9. GLOBAL REACH — arrows + progress rail + keyboard
       ---------------------------------------------------------------------- */
    (function () {
      var grid = document.getElementById('reachGrid');
      var prev = document.querySelector('.reach-arrow.prev');
      var next = document.querySelector('.reach-arrow.next');
      var rail = document.getElementById('reachRail');
      if (!grid) return;

      function step() {
        var card = grid.querySelector('.reach-card');
        return card ? card.getBoundingClientRect().width + 24 : grid.clientWidth * 0.8;
      }

      function update() {
        var max = grid.scrollWidth - grid.clientWidth;
        if (prev) prev.disabled = grid.scrollLeft <= 4;
        if (next) next.disabled = grid.scrollLeft >= max - 4;
        if (rail && max > 0) {
          var ratio = grid.clientWidth / grid.scrollWidth;
          var pos = grid.scrollLeft / max;
          rail.style.width = (ratio * 100) + '%';
          rail.style.transform = 'translateX(' + (pos * ((1 / ratio) - 1) * 100) + '%)';
        }
      }

      if (prev) prev.addEventListener('click', function () {
        grid.scrollBy({ left: -step(), behavior: reduceMotion ? 'auto' : 'smooth' });
      });
      if (next) next.addEventListener('click', function () {
        grid.scrollBy({ left: step(), behavior: reduceMotion ? 'auto' : 'smooth' });
      });

      grid.addEventListener('scroll', function () { window.requestAnimationFrame(update); }, { passive: true });
      window.addEventListener('resize', update);
      update();

      /* Keyboard: focused card scrolls itself into view */
      grid.querySelectorAll('.reach-card').forEach(function (card) {
        card.addEventListener('focus', function () {
          card.scrollIntoView({ block: 'nearest', inline: 'nearest', behavior: reduceMotion ? 'auto' : 'smooth' });
        });
      });
    })();

    /* ----------------------------------------------------------------------
       10. JOBS CAROUSEL — dots + disabled arrows
       Arrow click handling stays in script.js; this only adds state + dots.
       ---------------------------------------------------------------------- */
    (function () {
      var slider = document.getElementById('jobsSlider');
      var dotsWrap = document.getElementById('jobsDots');
      var prev = document.querySelector('.jobs-arrow.prev');
      var next = document.querySelector('.jobs-arrow.next');
      if (!slider) return;

      var dots = [];

      function pageCount() {
        return Math.max(1, Math.ceil(slider.scrollWidth / slider.clientWidth));
      }

      function buildDots() {
        if (!dotsWrap) return;
        var n = pageCount();
        if (dots.length === n) return;
        dotsWrap.innerHTML = '';
        dots = [];
        for (var i = 0; i < n; i++) {
          (function (index) {
            var b = document.createElement('button');
            b.type = 'button';
            b.className = 'jobs-dot';
            b.setAttribute('aria-label', 'Go to job group ' + (index + 1) + ' of ' + n);
            b.addEventListener('click', function () {
              slider.scrollTo({ left: index * slider.clientWidth, behavior: reduceMotion ? 'auto' : 'smooth' });
            });
            dotsWrap.appendChild(b);
            dots.push(b);
          })(i);
        }
      }

      function update() {
        var max = slider.scrollWidth - slider.clientWidth;
        if (prev) prev.disabled = slider.scrollLeft <= 4;
        if (next) next.disabled = slider.scrollLeft >= max - 4;
        var active = Math.round(slider.scrollLeft / slider.clientWidth);
        dots.forEach(function (d, i) {
          if (i === active) d.setAttribute('aria-current', 'true');
          else d.removeAttribute('aria-current');
        });
      }

      slider.addEventListener('scroll', function () { window.requestAnimationFrame(update); }, { passive: true });
      window.addEventListener('resize', function () { buildDots(); update(); });
      buildDots();
      update();
    })();

    /* ----------------------------------------------------------------------
       11. INDUSTRIES — click + focus alongside the existing mouseenter
       ---------------------------------------------------------------------- */
    (function () {
      var rows = Array.prototype.slice.call(document.querySelectorAll('.ind-row'));
      var panes = Array.prototype.slice.call(document.querySelectorAll('.ind-visual .pane'));
      if (!rows.length || !panes.length) return;

      function activate(row) {
        rows.forEach(function (r) {
          var on = r === row;
          r.classList.toggle('active', on);
          r.setAttribute('aria-selected', String(on));
          r.setAttribute('tabindex', on ? '0' : '-1');
        });
        panes.forEach(function (p) { p.classList.toggle('active', p.dataset.pane === row.dataset.ind); });
      }

      rows.forEach(function (row, i) {
        /* mouseenter preserves the original desktop feel; click and focus make
           the same content reachable by touch, keyboard and screen readers. */
        row.addEventListener('mouseenter', function () { activate(row); });
        row.addEventListener('click', function () { activate(row); });
        row.addEventListener('focus', function () { activate(row); });
        row.addEventListener('keydown', function (e) {
          var dir = 0;
          if (e.key === 'ArrowDown' || e.key === 'ArrowRight') dir = 1;
          else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') dir = -1;
          else return;
          e.preventDefault();
          var target = rows[(i + dir + rows.length) % rows.length];
          activate(target);
          target.focus();
        });
      });
    })();

    /* ----------------------------------------------------------------------
       12. CTA — progressive lead form, wired to send-mail.php
       No fake success: the message shown is the server's actual response.
       ---------------------------------------------------------------------- */
    (function () {
      var form = document.getElementById('ctaLeadForm');
      if (!form) return;

      var response = document.getElementById('ctaResponse');
      var submitBtn = form.querySelector('button[type="submit"]');
      var emailField = form.querySelector('#ctaEmail');

      function expand() { form.classList.add('is-expanded'); }
      if (emailField) {
        emailField.addEventListener('focus', expand, { once: true });
        emailField.addEventListener('input', expand, { once: true });
      }

      function say(text, ok) {
        if (!response) return;
        response.textContent = text;
        response.classList.add('show');
        response.style.borderLeft = '3px solid ' + (ok ? '#7BD389' : '#FFC98A');
      }

      form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (!form.classList.contains('is-expanded')) { expand(); return; }

        /* Native constraint validation — no custom rules to drift out of sync */
        if (!form.checkValidity()) {
          form.reportValidity();
          return;
        }

        var data = new FormData(form);
        submitBtn.disabled = true;
        var originalLabel = submitBtn.textContent;
        submitBtn.textContent = 'Sending…';
        if (response) response.classList.remove('show');

        fetch(form.getAttribute('action'), { method: 'POST', body: data })
          .then(function (res) {
            return res.json().then(function (json) { return { ok: res.ok, json: json }; });
          })
          .then(function (result) {
            if (result.ok && result.json && result.json.success) {
              say(result.json.message || 'Thank you — your enquiry has been sent.', true);
              form.reset();
              form.classList.remove('is-expanded');
            } else {
              say((result.json && result.json.message) ||
                  'We could not send that. Please email sales@adhiraninfotech.com or call +91 73586 15097.', false);
            }
          })
          .catch(function () {
            say('Network error. Please email sales@adhiraninfotech.com or call +91 73586 15097.', false);
          })
          .then(function () {
            submitBtn.disabled = false;
            submitBtn.textContent = originalLabel;
          });
      });
    })();

    /* ----------------------------------------------------------------------
       13. STICKY CTA BAR
       Appears once the user passes the Solutions section; dismissible.
       ---------------------------------------------------------------------- */
    (function () {
      var bar = document.getElementById('stickyCta');
      var trigger = document.getElementById('solutions');
      var closeBtn = document.querySelector('.sticky-cta-close');
      var ctaSection = document.querySelector('.cta');
      if (!bar || !trigger) return;

      var dismissed = false;
      try { dismissed = sessionStorage.getItem('ait_sticky_cta_dismissed') === '1'; } catch (err) {}
      if (dismissed) return;

      function setVisible(on) {
        bar.classList.toggle('is-visible', on);
        document.body.classList.toggle('has-sticky-cta', on);
        /* Keep it out of the tab order while hidden */
        bar.querySelectorAll('a,button').forEach(function (el) {
          el.tabIndex = on ? 0 : -1;
        });
      }
      setVisible(false);

      onScroll(function () {
        if (dismissed) return;
        var past = trigger.getBoundingClientRect().bottom < 0;
        /* Stand down while the real CTA form is on screen — don't compete with it */
        var ctaOnScreen = false;
        if (ctaSection) {
          var r = ctaSection.getBoundingClientRect();
          ctaOnScreen = r.top < window.innerHeight && r.bottom > 0;
        }
        setVisible(past && !ctaOnScreen);
      });

      if (closeBtn) {
        closeBtn.addEventListener('click', function () {
          dismissed = true;
          setVisible(false);
          try { sessionStorage.setItem('ait_sticky_cta_dismissed', '1'); } catch (err) {}
        });
      }
    })();

    AIT.refresh();
  });
})();