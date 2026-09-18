<?php

// Site identity
define('SITE_NAME',     'Adhiran Infotech');
define('SITE_TAGLINE',  'Website design and development company in chennai, web application development company in chennai | mobile app development company | offshoring company in chennai | hire software developer in chennai');
define('SITE_URL',      'https://www.adhiraninfotech.com');   
define('SITE_DESCRIPTION', 'Adhiran Infotech is the best offshore development company in India, offering outstanding developers to serve your business needs at a reasonable cost. website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai,Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, hire software developers');
define('SITE_KEYWORDS', 'website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai, Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, adhiran infotech, adhiran infotech in chennai, adhiran, adhiran software company, hire software developers');

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
// or https://adhiraninfotech.com — on localhost it replies 403, so the careers
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
