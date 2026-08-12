/* ==========================================================================
   SHARED UI ENHANCEMENT LAYER
   Loaded before any page-specific script on enhanced pages.
   Exposes window.AIT for those scripts. No dependencies.
   ========================================================================== */
(function () {
  'use strict';

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var finePointer = window.matchMedia('(hover:hover) and (pointer:fine)').matches;

  function ready(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  /* rAF-throttled scroll bus — one listener shared by every scroll-driven
     feature on the page, instead of one listener per feature. */
  var scrollHandlers = [];
  var ticking = false;

  function flush() {
    for (var i = 0; i < scrollHandlers.length; i++) {
      try { scrollHandlers[i](); } catch (e) { /* never let one feature kill the rest */ }
    }
    ticking = false;
  }
  function schedule() {
    if (!ticking) { ticking = true; window.requestAnimationFrame(flush); }
  }
  function onScroll(fn) { scrollHandlers.push(fn); schedule(); }

  window.addEventListener('scroll', schedule, { passive: true });
  window.addEventListener('resize', schedule, { passive: true });

  window.AIT = {
    ready: ready,
    onScroll: onScroll,
    refresh: schedule,
    reduceMotion: reduceMotion,
    finePointer: finePointer
  };

  ready(function () {

    /* ----------------------------------------------------------------------
       READING PROGRESS
       ---------------------------------------------------------------------- */
    (function () {
      var bar = document.getElementById('readingProgressBar');
      if (!bar) return;
      onScroll(function () {
        var max = document.documentElement.scrollHeight - window.innerHeight;
        var pct = max > 0 ? Math.min(1, window.scrollY / max) : 0;
        bar.style.transform = 'scaleX(' + pct + ')';
      });
    })();

    /* ----------------------------------------------------------------------
       HEADER SCROLL STATE
       ---------------------------------------------------------------------- */
    onScroll(function () {
      document.body.classList.toggle('is-scrolled', window.scrollY > 80);
    });

    /* ----------------------------------------------------------------------
       SCROLL REVEAL
       ---------------------------------------------------------------------- */
    (function () {
      if (reduceMotion || !('IntersectionObserver' in window)) return;

      var targets = [];
      document.querySelectorAll('[data-reveal]').forEach(function (el) {
        if (el.dataset.reveal === 'off') return;
        el.classList.add(el.dataset.reveal === 'stagger' ? 'reveal-stagger' : 'reveal');
        targets.push(el);
      });
      if (!targets.length) return;

      /* Stagger children by index via transition-delay */
      document.querySelectorAll('.reveal-stagger').forEach(function (group) {
        Array.prototype.forEach.call(group.children, function (child, i) {
          child.style.transitionDelay = Math.min(i * 55, 440) + 'ms';
        });
      });

      /* Once revealed, strip the classes and inline delays. Left in place they
         override each card's own :hover transition and add up to 440ms of lag
         to every subsequent hover. */
      function cleanup(el) {
        el.classList.remove('reveal', 'reveal-stagger', 'is-visible');
        Array.prototype.forEach.call(el.children, function (child) {
          child.style.transitionDelay = '';
        });
      }

      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          var el = entry.target;
          el.classList.add('is-visible');
          io.unobserve(el);                     /* fire once, then stop working */
          window.setTimeout(function () { cleanup(el); }, 1100);
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

      targets.forEach(function (el) { io.observe(el); });
    })();

    /* ----------------------------------------------------------------------
       FLOATING CONTACT
       ---------------------------------------------------------------------- */
    (function () {
      var wrap = document.getElementById('floatContact');
      if (!wrap) return;
      var toggle = wrap.querySelector('.float-toggle');
      if (!toggle) return;

      function setOpen(on) {
        wrap.classList.toggle('is-open', on);
        toggle.setAttribute('aria-expanded', String(on));
        wrap.querySelectorAll('.float-action').forEach(function (el) { el.tabIndex = on ? 0 : -1; });
      }
      setOpen(false);

      toggle.addEventListener('click', function () {
        setOpen(!wrap.classList.contains('is-open'));
      });
      document.addEventListener('click', function (e) {
        if (!wrap.contains(e.target)) setOpen(false);
      });
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') setOpen(false);
      });
    })();

    /* ----------------------------------------------------------------------
       MAGNETIC PRIMARY CTAs
       Pointer devices only, 8px cap, disabled under reduced motion.
       ---------------------------------------------------------------------- */
    (function () {
      if (!finePointer || reduceMotion) return;
      document.querySelectorAll('.btn-magnetic').forEach(function (btn) {
        var frame = null;
        btn.addEventListener('pointermove', function (e) {
          if (frame) return;
          frame = window.requestAnimationFrame(function () {
            var r = btn.getBoundingClientRect();
            var x = Math.max(-8, Math.min(8, (e.clientX - (r.left + r.width / 2)) * 0.25));
            var y = Math.max(-8, Math.min(8, (e.clientY - (r.top + r.height / 2)) * 0.25));
            btn.style.transform = 'translate(' + x + 'px,' + y + 'px)';
            frame = null;
          });
        });
        btn.addEventListener('pointerleave', function () { btn.style.transform = ''; });
        btn.addEventListener('blur', function () { btn.style.transform = ''; });
      });
    })();

    /* ----------------------------------------------------------------------
       HEADER HEIGHT
       Anything that pins below the site header needs its live height — the
       header shrinks once .is-scrolled applies, so a fixed offset would leave
       a gap or overlap.
       ---------------------------------------------------------------------- */
    (function () {
      var header = document.querySelector('header');
      if (!header) return;
      var last = -1;
      function measure() {
        var h = Math.round(header.getBoundingClientRect().height);
        if (h !== last) {
          last = h;
          document.documentElement.style.setProperty('--header-h', h + 'px');
        }
      }
      onScroll(measure);
      window.addEventListener('load', measure);
      measure();
    })();

    /* ----------------------------------------------------------------------
       SECTION NAV — scrollspy for any page with #sectionNav
       ---------------------------------------------------------------------- */
    (function () {
      var nav = document.getElementById('sectionNav');
      if (!nav) return;

      var links = Array.prototype.slice.call(nav.querySelectorAll('a[href^="#"]'));
      if (!links.length) return;

      var targets = links.map(function (a) {
        return document.getElementById(a.getAttribute('href').slice(1));
      });

      onScroll(function () {
        /* The section whose top has most recently passed the nav wins. */
        var line = (parseInt(
          getComputedStyle(document.documentElement).getPropertyValue('--header-h'), 10
        ) || 78) + 90;

        var active = 0;
        for (var i = 0; i < targets.length; i++) {
          if (targets[i] && targets[i].getBoundingClientRect().top <= line) active = i;
        }
        /* At the very bottom, always light the last entry — short final
           sections can never reach the line on their own. */
        if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 4) {
          active = links.length - 1;
        }
        links.forEach(function (a, i) {
          if (i === active) a.setAttribute('aria-current', 'true');
          else a.removeAttribute('aria-current');
        });
      });
    })();

    /* ----------------------------------------------------------------------
       GALLERY LIGHTBOX — any page with .life-gallery + #lightbox
       ---------------------------------------------------------------------- */
    (function () {
      var gallery = document.querySelector('.life-gallery');
      var box = document.getElementById('lightbox');
      if (!gallery || !box) return;

      var triggers = Array.prototype.slice.call(gallery.querySelectorAll('.life-zoom'));
      if (!triggers.length) return;

      var imgEl = box.querySelector('.lightbox-figure img');
      var capEl = box.querySelector('.lightbox-caption');
      var countEl = box.querySelector('.lightbox-count');
      var closeBtn = box.querySelector('.lightbox-close');
      var prevBtn = box.querySelector('.lightbox-btn.prev');
      var nextBtn = box.querySelector('.lightbox-btn.next');
      if (!imgEl || !closeBtn) return;

      var slides = triggers.map(function (btn) {
        var img = btn.parentElement.querySelector('img');
        return { src: img.getAttribute('src'), alt: img.getAttribute('alt') || '' };
      });

      var index = 0;
      var lastFocused = null;

      function render() {
        var s = slides[index];
        imgEl.setAttribute('src', s.src);
        imgEl.setAttribute('alt', s.alt);
        if (capEl) capEl.textContent = s.alt;
        if (countEl) countEl.textContent = 'Photo ' + (index + 1) + ' of ' + slides.length;
      }

      function open(i) {
        index = i;
        lastFocused = document.activeElement;
        render();
        box.hidden = false;
        document.body.classList.add('lightbox-open');
        /* Next frame so the opening transition has a starting state */
        window.requestAnimationFrame(function () { box.classList.add('is-open'); });
        closeBtn.focus();
      }

      function close() {
        box.classList.remove('is-open');
        document.body.classList.remove('lightbox-open');
        var done = function () {
          box.hidden = true;
          if (lastFocused && lastFocused.focus) lastFocused.focus();
        };
        if (reduceMotion) done();
        else window.setTimeout(done, 250);
      }

      function step(delta) {
        index = (index + delta + slides.length) % slides.length;
        render();
      }

      triggers.forEach(function (btn, i) {
        btn.addEventListener('click', function () { open(i); });
      });

      closeBtn.addEventListener('click', close);
      if (prevBtn) prevBtn.addEventListener('click', function () { step(-1); });
      if (nextBtn) nextBtn.addEventListener('click', function () { step(1); });

      /* Backdrop click, but not clicks on the photo or the controls */
      box.addEventListener('click', function (e) {
        if (e.target === box) close();
      });

      box.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') { e.preventDefault(); close(); return; }
        if (e.key === 'ArrowRight') { e.preventDefault(); step(1); return; }
        if (e.key === 'ArrowLeft') { e.preventDefault(); step(-1); return; }

        /* Focus trap — the dialog is modal, so Tab must stay inside it */
        if (e.key !== 'Tab') return;
        var focusable = box.querySelectorAll('button');
        if (!focusable.length) return;
        var first = focusable[0];
        var last = focusable[focusable.length - 1];
        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault(); last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault(); first.focus();
        }
      });
    })();

    schedule();
  });
})();
