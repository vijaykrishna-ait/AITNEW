/* ==========================================================================
   CONTACT PAGE INTERACTIONS
   Loaded only on contact.php, after ui.js.
   Shared foundations (reveal, header state, reading progress, floating
   contact, magnetic buttons, the scroll bus) live in ui.js / window.AIT.
   ========================================================================== */
(function () {
  'use strict';

  var AIT = window.AIT;
  if (!AIT) return;

  var reduceMotion = AIT.reduceMotion;

  AIT.ready(function () {

    /* ----------------------------------------------------------------------
       1. FAQ ACCORDION
       ---------------------------------------------------------------------- */
    (function () {
      var items = document.querySelectorAll('.faq-item');
      if (!items.length) return;

      var buttons = [];

      items.forEach(function (item) {
        var btn = item.querySelector('.faq-q');
        var panel = item.querySelector('.faq-a');
        if (!btn || !panel) return;
        buttons.push(btn);

        /* The panel ships with [hidden] so it is collapsed without JS.
           Swap to a measurable max-height model now that JS is running. */
        panel.hidden = false;
        panel.style.maxHeight = '0px';

        function close() {
          btn.setAttribute('aria-expanded', 'false');
          panel.style.maxHeight = '0px';
          panel.classList.remove('is-open');
        }
        function open() {
          btn.setAttribute('aria-expanded', 'true');
          panel.classList.add('is-open');
          panel.style.maxHeight = panel.scrollHeight + 'px';
        }

        btn.addEventListener('click', function () {
          var isOpen = btn.getAttribute('aria-expanded') === 'true';
          /* Single-open accordion, matching the pattern used elsewhere on the site */
          items.forEach(function (other) {
            var ob = other.querySelector('.faq-q');
            var op = other.querySelector('.faq-a');
            if (!ob || !op || ob === btn) return;
            ob.setAttribute('aria-expanded', 'false');
            op.style.maxHeight = '0px';
            op.classList.remove('is-open');
          });
          if (isOpen) close(); else open();
        });

        /* Keep an open panel correctly sized when the text reflows */
        window.addEventListener('resize', function () {
          if (btn.getAttribute('aria-expanded') === 'true') {
            panel.style.maxHeight = panel.scrollHeight + 'px';
          }
        });
      });

      /* Up/Down move between questions, matching the site's other tab groups */
      buttons.forEach(function (btn, i) {
        btn.addEventListener('keydown', function (e) {
          var dir = 0;
          if (e.key === 'ArrowDown') dir = 1;
          else if (e.key === 'ArrowUp') dir = -1;
          else return;
          e.preventDefault();
          buttons[(i + dir + buttons.length) % buttons.length].focus();
        });
      });
    })();

    /* ----------------------------------------------------------------------
       2. CONTACT FORM
       Submits to send-mail.php for real and reports the server's actual
       response. script.js's handler (which faked success) is disabled on
       enhanced pages via body[data-enhanced].
       ---------------------------------------------------------------------- */
    (function () {
      var form = document.getElementById('contactForm');
      if (!form) return;

      var response = document.getElementById('formResponse');
      var submitBtn = form.querySelector('.btn-submit');
      var honeypot = document.getElementById('companyWebsite');
      var messageField = document.getElementById('message');
      var messageCount = document.getElementById('messageCount');

      /* Phone is optional. When given, accept international formats —
         the previous rule demanded exactly 10 digits, which rejected every
         country code this company actually operates in. */
      var RULES = [
        { id: 'firstName', test: function (v) { return v.trim().length > 0; } },
        { id: 'lastName',  test: function (v) { return v.trim().length > 0; } },
        { id: 'email',     test: function (v) { return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v.trim()); } },
        { id: 'phone',     test: function (v) {
            if (v.trim() === '') return true;
            var digits = v.replace(/\D/g, '');
            return digits.length >= 7 && digits.length <= 15;
          } },
        { id: 'subject',   test: function (v) { return v !== ''; } },
        { id: 'message',   test: function (v) { return v.trim().length >= 10; } }
      ];

      function groupOf(el) { return el ? el.closest('.form-group') : null; }

      function setState(el, ok) {
        var group = groupOf(el);
        if (!group) return;
        group.classList.remove('error', 'success');
        group.classList.add(ok ? 'success' : 'error');
        el.setAttribute('aria-invalid', ok ? 'false' : 'true');
      }

      function validateField(rule) {
        var el = document.getElementById(rule.id);
        if (!el) return true;
        var ok = rule.test(el.value);
        setState(el, ok);
        return ok;
      }

      /* Validate on blur, and live-correct once a field is already in error */
      RULES.forEach(function (rule) {
        var el = document.getElementById(rule.id);
        if (!el) return;
        el.addEventListener('blur', function () {
          if (el.value.trim() === '' && rule.id === 'phone') {
            var g = groupOf(el);
            if (g) g.classList.remove('error', 'success');
            el.removeAttribute('aria-invalid');
            return;
          }
          if (el.value.trim() !== '') validateField(rule);
        });
        el.addEventListener('input', function () {
          var g = groupOf(el);
          if (g && g.classList.contains('error')) validateField(rule);
        });
        el.addEventListener('change', function () {
          var g = groupOf(el);
          if (g && g.classList.contains('error')) validateField(rule);
        });
      });

      if (messageField && messageCount) {
        var updateCount = function () {
          messageCount.textContent = messageField.value.length;
        };
        messageField.addEventListener('input', updateCount);
        updateCount();
      }

      /* The server message is echoed back into the page, so escape it rather
         than trusting the response body. */
      function esc(s) {
        return String(s == null ? '' : s)
          .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
          .replace(/"/g, '&quot;');
      }

      function say(html, ok) {
        if (!response) return;
        response.innerHTML = html;
        response.classList.remove('is-ok', 'is-error');
        response.classList.add('show', ok ? 'is-ok' : 'is-error');
      }

      var FALLBACK = 'Please email <a href="mailto:sales@adhiraninfotech.com">sales@adhiraninfotech.com</a> ' +
                     'or call <a href="tel:+917358615097">+91 73586 15097</a>.';

      form.addEventListener('submit', function (e) {
        e.preventDefault();

        /* Silently discard bot submissions that filled the honeypot */
        if (honeypot && honeypot.value !== '') return;

        var firstInvalid = null;
        RULES.forEach(function (rule) {
          var ok = validateField(rule);
          if (!ok && !firstInvalid) firstInvalid = document.getElementById(rule.id);
        });

        if (firstInvalid) {
          say('Please correct the highlighted fields and try again.', false);
          firstInvalid.focus();
          firstInvalid.scrollIntoView({
            block: 'center',
            behavior: reduceMotion ? 'auto' : 'smooth'
          });
          return;
        }

        var data = new FormData(form);
        data.delete('companyWebsite');

        submitBtn.disabled = true;
        submitBtn.classList.add('loading');
        if (response) response.classList.remove('show');

        fetch(form.getAttribute('action'), { method: 'POST', body: data })
          .then(function (res) {
            return res.json()
              .catch(function () { return null; })
              .then(function (json) { return { ok: res.ok, json: json }; });
          })
          .then(function (result) {
            if (result.ok && result.json && result.json.success) {
              say('<strong>Thank you.</strong> ' +
                  esc(result.json.message || 'Your message has been sent.') +
                  ' We typically reply within one business day.', true);
              form.reset();
              form.querySelectorAll('.form-group').forEach(function (g) {
                g.classList.remove('success', 'error');
              });
              form.querySelectorAll('[aria-invalid]').forEach(function (el) {
                el.removeAttribute('aria-invalid');
              });
              if (messageCount) messageCount.textContent = '0';
            } else {
              var msg = (result.json && result.json.message) || 'We could not send your message.';
              say(esc(msg) + ' ' + FALLBACK, false);
            }
          })
          .catch(function () {
            say('We could not reach the server. ' + FALLBACK, false);
          })
          .then(function () {
            submitBtn.disabled = false;
            submitBtn.classList.remove('loading');
          });
      });
    })();

  });
})();
