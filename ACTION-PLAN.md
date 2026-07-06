# Hombisilu SEO Action Plan
**Overall Score: 44/100 → Target: 72/100 in 90 days**

---

## CRITICAL — Fix This Week (Biggest Impact, Lowest Effort)

### 1. Install RankMath SEO Plugin (1 hour)
**Impact: Fixes 8 Critical issues at once**
- Go to WP Admin → Plugins → Add New → Search "RankMath SEO" → Install & Activate
- Run the Setup Wizard — enter business name, logo, address, phone
- This automatically adds: meta descriptions, OG tags, canonical tags, breadcrumbs, and schema scaffolding
- Set homepage meta description (160 chars):
  > "Shop authentic South Indian filter coffee, chutney powders, pickles & honey from Karnataka. 100% natural, no preservatives. FSSAI certified. Pan-India delivery."

### 2. Fix Email Typo — URGENT (10 minutes)
`hombisilufooods@gmail.com` has 3 o's in "foods" — customer emails may be bouncing.
- Server: `template-faqs.php` — fix all 3 occurrences
- Server: `footer.php` mobile nav — fix occurrence
- Verify the real address and correct everywhere
- Long-term: Get a domain email (`hello@hombisilu.com`)

### 3. Add FAQPage Schema to /faqs/ (2 hours)
**Impact: All 16 FAQ answers become eligible for Google AI Overviews**
Add this JSON-LD block inside `<head>` of `template-faqs.php`:
```json
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What makes Hombisilu products different?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Hombisilu products are made using traditional South Indian heritage recipes with 100% natural ingredients. No artificial preservatives, synthetic colours, or chemical additives. FSSAI License: 11225332000490."
      }
    }
  ]
}
```
(Add all 16 questions — repeat the Question block for each FAQ item)

### 4. Add Security Headers via LiteSpeed (.htaccess) (30 minutes)
Add to /public_html/.htaccess:
```apache
<IfModule mod_headers.c>
  Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains; preload"
  Header always set X-Frame-Options "SAMEORIGIN"
  Header always set X-Content-Type-Options "nosniff"
  Header always set Referrer-Policy "strict-origin-when-cross-origin"
  Header always unset X-Powered-By
</IfModule>
```

### 5. Create /llms.txt (20 minutes)
Create file at server root `/public_html/llms.txt` — copy content from FULL-AUDIT-REPORT.md.
This makes brand facts readable by ChatGPT, Perplexity, and ClaudeBot at inference time.

### 6. Add Product Image Alt Text (1–2 hours)
- WP Admin → Media Library
- Open each of 26 product images → set Alt Text field
- Pattern: "[Product Name] — South Indian [Category] by Hombisilu"
- Example: "Filter Coffee Powder Standard Blend — South Indian Coffee by Hombisilu"

---

## HIGH — Fix Within 2 Weeks

### 7. Add Organization + LocalBusiness Schema to Homepage
Add via RankMath or directly in `functions.php` using `wp_head`:
```json
{
  "@context": "https://schema.org",
  "@type": ["LocalBusiness", "Store"],
  "name": "Hombisilu",
  "legalName": "SGR Manufacturing & Trading",
  "url": "https://hombisilu.com/",
  "telephone": "+91-6362616933",
  "email": "hombisilufooods@gmail.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "#12, Somashetti Hall, Chikkabanavara",
    "addressLocality": "Bengaluru",
    "addressRegion": "Karnataka",
    "postalCode": "560090",
    "addressCountry": "IN"
  },
  "openingHoursSpecification": [
    {"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"opens": "09:00","closes": "18:00"},
    {"@type": "OpeningHoursSpecification","dayOfWeek": "Sunday","opens": "10:00","closes": "16:00"}
  ],
  "areaServed": {"@type": "Country","name": "India"},
  "logo": "https://hombisilu.com/wp-content/themes/hombisilu-theme/assets/images/logo.png",
  "image": "https://hombisilu.com/wp-content/themes/hombisilu-theme/assets/images/logo.png"
}
```

### 8. Fix All Internal Links (Missing Trailing Slashes)
In `footer.php` — fix these links:
- `/about-us` → `/about-us/`
- `/contact-us` → `/contact-us/`
- `/faqs` → `/faqs/`
- All 7 category links: `/product-category/coffee` → `/product-category/coffee/`

In `front-page.php` hero buttons:
- `/shop` → `/shop/`
- `/about-us` → `/about-us/`

### 9. Disable Users Sitemap (5 minutes)
WP Admin → Settings → Reading → uncheck "Users" sitemap.
Prevents admin username exposure via `/author/hombisilu/` URL.

### 10. Rewrite Inner Page Title Tags
Via RankMath page editor:
- About Us: "About Hombisilu — Karnataka's Authentic South Indian Foods"
- Shop: "Buy South Indian Natural Foods Online — Hombisilu Shop"
- FAQs: "FAQs About Hombisilu South Indian Natural Foods — Help Centre"

### 11. Fix /shop/ H1
In WP Admin → Pages → Shop → edit the page title to:
"Authentic South Indian Natural Foods"
(WooCommerce uses this as the H1 on the shop archive)

### 12. Noindex Product Tag Archives
Via RankMath: Appearances → Taxonomies → Product Tags → set to "noindex"
Removes 15 thin tag pages from Google's index.

### 13. Create & Optimize Google Business Profile
- Go to business.google.com and claim/create listing
- Primary category: "Grocery store" or "Natural food store"
- Address: #12, Somashetti Hall, Chikkabanavara, Bengaluru 560090
- Upload 10+ product photos
- Add Google Maps embed to /contact-us/ page
- This unlocks review collection, Maps visibility, and local pack rankings

### 14. Update robots.txt for AI Crawlers
Add the segmented AI crawler rules from FULL-AUDIT-REPORT.md:
- Explicitly Allow GPTBot, OAI-SearchBot, ClaudeBot, PerplexityBot
- Explicitly Disallow CCBot, anthropic-ai (training only)

---

## MEDIUM — Fix Within 1 Month

### 15. Add Founder Story to About Us
- Add founder name, photo, and founding year
- Example: "Founded in 2023 by [Name] in Bengaluru..."
- This is the #1 E-E-A-T gap on the entire site
- Google's QRG rewards pages with named, credentialed authors

### 16. Add Product Schema to All 26 Product Pages
Via RankMath WooCommerce integration → enable Product schema.
Minimum required fields: name, description, image, offers (price, currency, availability), brand.

### 17. Expand Shop Page Content
Add a 200-word editorial introduction above the product grid in `woocommerce/archive-product.php`:
"Discover 26 authentic South Indian natural foods crafted in Bengaluru, Karnataka..."
This lifts the 131-word shop page above the thin content threshold.

### 18. Add Internal Links from FAQ Answers to Products
In `template-faqs.php`, add contextual links:
- "What makes Hombisilu products different?" → link to /shop/
- "Do you sell filter coffee?" → link to /product-category/coffee/
- "Are your products vegetarian?" → link to /faqs/ (self-referential, or product pages)

### 19. Fix /contact vs /contact-us/ Slug Inconsistency
In `template-faqs.php` — the "Contact Us" CTA links to `/contact`. Change to `/contact-us/`.

### 20. Add Google Maps Embed to Contact Page
Use the Google Maps embed code for Chikkabanavara, Bengaluru.
Add to `template-contact.php` in the contact info section.

### 21. Suppress WordPress Version from HTML
Add to `functions.php`:
```php
remove_action('wp_head', 'wp_generator');
```

### 22. Preload Hero LCP Image
Add to `header.php` inside `<head>`:
```html
<link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg" fetchpriority="high">
```

### 23. Fix Contact Footer Link Slug
In `footer.php` — change `href="/contact"` to `href="/contact-us/"` if present.

---

## LOW — Backlog (30–90 Days)

### 24. Start a Blog with 6 AI-Optimized Posts
Topics (each 800–1,200 words, targeting AI citation):
- "What is Kashaya powder and how do you make it?"
- "South Indian filter coffee vs. North Indian chai — a complete guide"
- "Benefits of moringa chutney powder in South Indian cooking"
- "What is Black Turmeric and how is it different from regular turmeric?"
- "How to use Hombisilu chutney powders — 5 authentic Karnataka recipes"
- "Appe Midi pickle — the traditional Karnataka mango pickle explained"

### 25. Create a YouTube Channel
- Brand story video (2–3 min)
- Filter coffee brewing tutorial
- Kashaya preparation video
- Chutney powder recipe demo
YouTube brand mentions correlate 0.737 with AI citation frequency — highest single off-page GEO factor.

### 26. Get Domain Email
Replace `hombisilufooods@gmail.com` with `hello@hombisilu.com` or `orders@hombisilu.com`.
Update on all pages, GBP, and any directory listings.

### 27. Build Citations on India Tier-1 Directories
Submit consistent NAP (Name, Address, Phone) to:
- Justdial, IndiaMart, Sulekha, TradeIndia
- Instagram Business, Facebook Business
- Amazon India seller profile

### 28. Add WebSite + SearchAction Schema
```json
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Hombisilu",
  "url": "https://hombisilu.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://hombisilu.com/?s={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
```

### 29. Standardize Product Images to 1:1 Ratio
Resize all product images to 1000×1000px minimum.
Eliminates CLS from mixed-dimension product cards on shop grid.

### 30. Add AggregateRating to Testimonials
Once reviews are collected via GBP or WooCommerce, add:
```json
"aggregateRating": {
  "@type": "AggregateRating",
  "ratingValue": "4.8",
  "reviewCount": "47"
}
```

---

## Score Projection

| Timeline | Score | Key Actions Completing |
|----------|-------|----------------------|
| Now | 44/100 | — |
| Week 1 | 55/100 | RankMath, email fix, FAQPage schema, security headers, llms.txt |
| Week 2 | 63/100 | Organization schema, title tags, internal links, GBP created |
| Month 1 | 68/100 | Product schema, shop content, founder story, blog started |
| Month 3 | 72–78/100 | Blog live (6 posts), YouTube started, citations built |
