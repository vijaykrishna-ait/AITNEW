<?php

// Site identity
define('SITE_NAME',     'Adhiran Infotech');
define('SITE_TAGLINE',  'Website design and development company in chennai, web application development company in chennai | mobile app development company | offshoring company in chennai | hire software developer in chennai');
define('SITE_URL',      'https://www.adhiraninfotech.com');   
define('SITE_DESCRIPTION', 'Adhiran Infotech is the best offshore development company in India, offering outstanding developers to serve your business needs at a reasonable cost. website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai,Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, hire software developers');
define('SITE_KEYWORDS', 'website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai, Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, adhiran infotech, adhiran infotech in chennai, adhiran, adhiran software company, hire software developers');

// Contact
define('SITE_PHONE_DISPLAY', '+91 73586 15097');
define('SITE_PHONE_TEL',     '+917358615097');
define('SITE_EMAIL',         'sales@adhiraninfotech.com');

// Social
define('SOCIAL_FACEBOOK',  'https://www.facebook.com/adhiraninfotech/');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/adhiraninfotech/');
define('SOCIAL_TWITTER',   'https://x.com/Adhiraninfotech');
define('SOCIAL_YOUTUBE',   'https://www.youtube.com/@Adhiran-infotech');
define('SOCIAL_LINKEDIN',  'https://www.linkedin.com/company/adhiraninfotech/');

// Helper: pick active class
function nav_active($page, $current){
  return $page === $current ? 'active' : '';
}
