/* ==========================================================================
   ABOUT PAGE INTERACTIONS
   Loaded only on about.php, after ui.js.
   The section nav, gallery lightbox and header-height measurement are shared
   with life-with-ait.php and live in ui.js.
   ========================================================================== */
(function () {
  'use strict';

  var AIT = window.AIT;
  if (!AIT) return;

  AIT.ready(function () {

    /* ----------------------------------------------------------------------
       HERO PARALLAX (transform only, capped at 8px)
       ---------------------------------------------------------------------- */
    (function () {
      var visual = document.querySelector('.about-hero-visual');
      if (!visual || AIT.reduceMotion || !AIT.finePointer) return;
      AIT.onScroll(function () {
        if (window.scrollY > window.innerHeight) return;
        var offset = Math.max(-8, Math.min(8, window.scrollY * 0.035));
        visual.style.setProperty('--about-parallax', offset + 'px');
      });
    })();

  });
})();
