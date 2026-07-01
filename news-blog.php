<?php
$page_title     = 'News & Blog | Adhiran Infotech';
$page_desc      = 'Website design and development company in chennai, web application development company in chennai | mobile app development company | offshoring company in chennai | hire software developer in chennai';
$page_keywords  = 'website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai, Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, adhiran infotech, adhiran infotech in chennai, adhiran, adhiran software company, hire software developers';
$page_canonical = 'https://adhiraninfotech.com/';
include 'includes/header.php';
?>

<!-- NB HERO -->
<section class="hero">
  <div class="wrap">
    <div class="eyebrow">News &amp; Blog</div>
    <h1>Stories of transformation</h1>
    <p class="lead-text">Company news, industry insights and stories from the projects, people and partnerships behind Adhiran Infotech.</p>
  </div>
</section>

<!-- FEATURED STORIES -->
<section style="padding-top:0;">
  <div class="wrap">
    <div class="stories-grid">
      <a href="<?= $base ?>#" class="story-card big">
        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=900&q=80" alt="Team celebrating company milestone">
        <div class="inner">
          <span class="pill">Company News</span>
          <h3>Adhiran Infotech crosses 500+ successful placements milestone</h3>
        </div>
      </a>
      <a href="<?= $base ?>#" class="story-card">
        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=700&q=80" alt="Fintech case study illustration">
        <div class="inner">
          <span class="pill">Insights</span>
          <h3>How AI is changing fintech recruitment</h3>
        </div>
      </a>
      <a href="<?= $base ?>#" class="story-card">
        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=700&q=80" alt="Healthcare AI case study illustration">
        <div class="inner">
          <span class="pill">Case Study</span>
          <h3>Inside our 200+ hospital AI diagnostics rollout</h3>
        </div>
      </a>
      <a href="<?= $base ?>#" class="story-card">
        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=700&q=80" alt="Team at a tech conference">
        <div class="inner">
          <span class="pill">Events</span>
          <h3>Our team at GITEX Dubai 2026</h3>
        </div>
      </a>
      <a href="<?= $base ?>#" class="story-card">
        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=700&q=80" alt="New office opening">
        <div class="inner">
          <span class="pill">Expansion</span>
          <h3>New delivery hub opens in Singapore</h3>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ARTICLE GRID -->
<section>
  <div class="wrap">
    <div class="nb-filters">
      <div class="nb-filter active" data-filter="all">All</div>
      <div class="nb-filter" data-filter="company">Company News</div>
      <div class="nb-filter" data-filter="insights">Insights</div>
      <div class="nb-filter" data-filter="events">Events</div>
      <div class="nb-filter" data-filter="csr">CSR</div>
    </div>

    <div class="article-grid">
      <a href="<?= $base ?>#" class="article-card" data-cat="company">
        <div class="article-card-img">
          <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=700&q=80" alt="Team celebrating company milestone">
        </div>
        <div class="article-card-body">
          <span class="tag">Company News</span>
          <div class="meta">12 Jun 2026 · 3 min read</div>
          <h3>Adhiran Infotech crosses 500+ successful placements milestone</h3>
          <p>A look back at the journey from our first placement to building teams across five countries.</p>
          <span>Read More <span class="arrow">→</span></span>
        </div>
      </a>
      <a href="<?= $base ?>#" class="article-card" data-cat="events">
        <div class="article-card-img">
          <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=700&q=80" alt="Team at a tech conference">
        </div>
        <div class="article-card-body">
          <span class="tag">Events</span>
          <div class="meta">5 Jun 2026 · 2 min read</div>
          <h3>Our team at GITEX Dubai 2026</h3>
          <p>Highlights from our time at one of the region's biggest technology events.</p>
          <span>Read More <span class="arrow">→</span></span>
        </div>
      </a>
      <a href="<?= $base ?>#" class="article-card" data-cat="company">
        <div class="article-card-img">
          <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=700&q=80" alt="New office opening">
        </div>
        <div class="article-card-body">
          <span class="tag">Expansion</span>
          <div class="meta">28 May 2026 · 2 min read</div>
          <h3>New delivery hub opens in Singapore</h3>
          <p>Our newest center expands onsite and offshore talent supply across APAC.</p>
          <span>Read More <span class="arrow">→</span></span>
        </div>
      </a>
      <a href="<?= $base ?>#" class="article-card" data-cat="insights">
        <div class="article-card-img">
          <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=700&q=80" alt="Fintech case study illustration">
        </div>
        <div class="article-card-body">
          <span class="tag">Insights</span>
          <div class="meta">20 May 2026 · 4 min read</div>
          <h3>How AI is changing fintech recruitment</h3>
          <p>A look at how generative AI is reshaping how financial services firms screen and hire talent.</p>
          <span>Read More <span class="arrow">→</span></span>
        </div>
      </a>
      <a href="<?= $base ?>#" class="article-card" data-cat="insights">
        <div class="article-card-img">
          <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=700&q=80" alt="Manufacturing plant floor">
        </div>
        <div class="article-card-body">
          <span class="tag">Insights</span>
          <div class="meta">14 May 2026 · 5 min read</div>
          <h3>Industry 4.0: where AI delivers the fastest ROI</h3>
          <p>Predictive maintenance and quality inspection are leading the way for manufacturers adopting AI.</p>
          <span>Read More <span class="arrow">→</span></span>
        </div>
      </a>
      <a href="<?= $base ?>#" class="article-card" data-cat="csr">
        <div class="article-card-img">
          <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=700&q=80" alt="Team volunteering activity">
        </div>
        <div class="article-card-body">
          <span class="tag">CSR</span>
          <div class="meta">2 May 2026 · 2 min read</div>
          <h3>Adhiran volunteers support local STEM education programs</h3>
          <p>Employees across our India and UAE offices spent the month mentoring students in STEM subjects.</p>
          <span>Read More <span class="arrow">→</span></span>
        </div>
      </a>
      <a href="<?= $base ?>#" class="article-card" data-cat="company">
        <div class="article-card-img">
          <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=700&q=80" alt="Internal hackathon event">
        </div>
        <div class="article-card-body">
          <span class="tag">Innovation</span>
          <div class="meta">22 Apr 2026 · 3 min read</div>
          <h3>Annual internal hackathon sparks new AI tools</h3>
          <p>Teams across all offices competed to build internal tools — three projects are now in production.</p>
          <span>Read More <span class="arrow">→</span></span>
        </div>
      </a>
      <a href="<?= $base ?>#" class="article-card" data-cat="insights">
        <div class="article-card-img">
          <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=700&q=80" alt="Student learning online">
        </div>
        <div class="article-card-body">
          <span class="tag">Insights</span>
          <div class="meta">10 Apr 2026 · 4 min read</div>
          <h3>What we learned building AI tutors for medical colleges</h3>
          <p>Lessons from rolling out AI-generated practice cases across multiple medical training programs.</p>
          <span>Read More <span class="arrow">→</span></span>
        </div>
      </a>
      <a href="<?= $base ?>#" class="article-card" data-cat="events">
        <div class="article-card-img">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=700&q=80" alt="Corporate training session">
        </div>
        <div class="article-card-body">
          <span class="tag">Events</span>
          <div class="meta">29 Mar 2026 · 2 min read</div>
          <h3>Hosting our first APAC client summit</h3>
          <p>Clients from Singapore, Japan and Australia joined us to discuss the future of talent and AI.</p>
          <span>Read More <span class="arrow">→</span></span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="solutions">
  <div class="wrap">
    <div class="newsletter-box">
      <div>
        <h3>Get our latest insights in your inbox</h3>
        <p>Occasional updates on AI, talent trends and what we're building — no spam, unsubscribe anytime.</p>
      </div>
      <form class="newsletter-form" onsubmit="return false;">
        <input type="email" placeholder="Enter your email" required>
        <button type="submit" class="btn btn-lime">Subscribe</button>
      </form>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta" id="contact">
  <h2>Want to be featured in our next story?</h2>
  <p>If you're a client, partner or team member with a story to share, we'd love to hear it.</p>
  <div class="actions">
    <a href="<?= $base ?>contact" class="btn btn-lime">Contact Us</a>
    <a href="<?= $base ?>case-studies" class="btn btn-outline-light">View Case Studies</a>
  </div>
</section>

  <?php include 'includes/footer.php'; ?>