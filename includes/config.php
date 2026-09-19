<?php

// Site identity
define('SITE_NAME',     'Adhiran Infotech');
define('SITE_TAGLINE',  'Staffing Agency in Chennai & GCC Talent Solutions');
define('SITE_URL',      'https://www.adhiraninfotech.com');
define('SITE_DESCRIPTION', 'Adhiran Infotech is a Chennai-based staffing agency providing staff augmentation, dedicated offshore teams, and GCC talent solutions to companies in the US, Singapore, Japan, and Dubai.');
define('SITE_KEYWORDS', 'staffing agency in chennai, GCC talent solutions, staff augmentation chennai, offshore development team chennai, hire developers chennai, adhiran infotech');

// Contact
define('SITE_PHONE_DISPLAY', '+91 90423 59211');
define('SITE_PHONE_TEL',     '+919042359211');
define('SITE_EMAIL',         'sales@adhiraninfotech.com');

// Social
define('SOCIAL_FACEBOOK',  'https://www.facebook.com/adhiraninfotech/');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/adhiraninfotech/');
define('SOCIAL_TWITTER',   'https://x.com/Adhiraninfotech');
define('SOCIAL_YOUTUBE',   'https://www.youtube.com/@Adhiran-infotech');
define('SOCIAL_LINKEDIN',  'https://www.linkedin.com/company/adhiraninfotech/');

// Home page intro video
// Set HOME_VIDEO_ENABLED to false to switch the pop-up off site-wide.
define('HOME_VIDEO_ENABLED',      false);
define('HOME_VIDEO_SRC',          'assets/video/sample.mp4');
define('HOME_VIDEO_POSTER',       '');            // optional still image, e.g. 'assets/images/index/hero.jpg'
define('HOME_VIDEO_TITLE',        'Welcome to Adhiran Infotech');
// Show the video only once per browser session rather than on every visit.
define('HOME_VIDEO_ONCE_PER_SESSION', true);
// Delay in milliseconds before the pop-up appears after the page is ready.
define('HOME_VIDEO_DELAY_MS',     600);

// Careers (PeopleHub) public API
// The API only answers requests whose Origin is https://www.adhiraninfotech.com
// or https://www.adhiraninfotech.com — on localhost it replies 403, so the careers
// page shows a "cannot load openings" notice during local development.
define('CAREERS_API_BASE', 'https://peoplehubapi.adhiraninfotech.com/api/v1/public/careers');

// job_opening_id is REQUIRED by the apply endpoint, so a general application can
// only be submitted against a real opening. Create an evergreen "General
// Application" opening in PeopleHub and put its numeric id here; while this is
// null the general-application buttons simply scroll to the live openings list.
define('CAREERS_GENERAL_JOB_ID', null);

define('BASE_URL', '/aitnew/');

// Helper: pick active class
function nav_active($page, $current){
  return $page === $current ? 'active' : '';
}
