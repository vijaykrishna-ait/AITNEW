<?php
/**
 * Renders the page copy held in seo-data.php and the schema generated from it.
 *
 * A page opts in by setting $seo_key to its slug before including header.php.
 * header.php then fills in the title, description and canonical, and the page
 * body calls seo_h1() / seo_lead() / seo_sections() / seo_faq() where the copy
 * belongs. Pages that set no $seo_key are untouched.
 */

require_once __DIR__ . '/seo-data.php';

function seo_page()
{
    global $SEO_PAGES, $seo_key;
    if (empty($seo_key) || !isset($SEO_PAGES[$seo_key])) {
        return null;
    }
    return $SEO_PAGES[$seo_key];
}

/** Canonical URL for a slug — the home page sits at the bare domain. */
function seo_canonical($key)
{
    return SITE_URL . ($key === 'index' ? '/' : '/' . $key);
}

/** The H1. Already HTML-escaped in the data file, so it prints as-is. */
function seo_h1($fallback = '')
{
    $p = seo_page();
    return ($p && $p['h1'] !== '') ? $p['h1'] : $fallback;
}

/** The opening paragraph that follows the H1. */
function seo_lead($fallback = '')
{
    $p = seo_page();
    return ($p && $p['lead'] !== '') ? $p['lead'] : $fallback;
}

/**
 * One H2 section, as a bare heading and paragraph — no wrapper element.
 *
 * Each call sits inside the page's own section, in place of the heading and
 * paragraph that were there, so the copy takes on that section's layout and
 * no section is added. Which document section replaces which existing one is
 * decided per page; sections the page has no equivalent for are simply not
 * called, and stay in seo-data.php as the record of the source document.
 *
 * Prints nothing for an index the page does not define, so a stale call
 * cannot produce a fatal error.
 */
function seo_section($i)
{
    $p = seo_page();
    if (!$p || !isset($p['sections'][$i])) {
        return;
    }
    [$head, $body] = $p['sections'][$i];
    echo '<h2>' . $head . "</h2>\n      <p>" . $body . '</p>';
}

/**
 * The visible FAQ list. The matching FAQPage JSON-LD is emitted by
 * seo_faq_schema() from head, so the two never drift apart.
 */
function seo_faq($heading = 'Frequently Asked Questions')
{
    $p = seo_page();
    if (!$p || empty($p['faqs'])) {
        return;
    }
    ?>
<section class="seo-faq">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">FAQ</div>
      <h2><?= $heading ?></h2>
    </div>
    <div class="seo-faq-list">
      <?php foreach ($p['faqs'] as $f): ?>
      <details class="seo-faq-item">
        <summary><?= $f[0] ?></summary>
        <p><?= $f[1] ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php
}

/**
 * FAQPage JSON-LD for the current page. Schema.org wants plain text, so the
 * HTML entities the copy carries are decoded back before encoding as JSON.
 */
function seo_faq_schema()
{
    $p = seo_page();
    if (!$p || empty($p['faqs'])) {
        return;
    }
    $plain = function ($s) {
        return html_entity_decode(strip_tags($s), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    };
    $entities = [];
    foreach ($p['faqs'] as $f) {
        $entities[] = [
            '@type'          => 'Question',
            'name'           => $plain($f[0]),
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $plain($f[1])],
        ];
    }
    $schema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $entities];
    echo '<script type="application/ld+json">'
       . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
       . "</script>\n";
}
