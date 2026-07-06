# Hombisilu SEO Full Audit Report
**Site:** https://hombisilu.com  
**Date:** 14 May 2026  
**Platform:** WordPress 6.9.4 + WooCommerce 10.7.0 | LiteSpeed Server

---

## SEO Health Score: 44 / 100

| Category | Weight | Score | Weighted |
|----------|--------|-------|---------|
| Technical SEO | 22% | 54/100 | 11.9 |
| Content Quality (E-E-A-T) | 23% | 54/100 | 12.4 |
| On-Page SEO | 20% | 48/100 | 9.6 |
| Schema / Structured Data | 10% | 0/100 | 0.0 |
| Performance (CWV) | 10% | 55/100 | 5.5 |
| AI Search Readiness (GEO) | 10% | 41/100 | 4.1 |
| Images | 5% | 20/100 | 1.0 |
| **TOTAL** | 100% | | **44.5 / 100** |

**Business Type Detected:** E-commerce + D2C Food Brand (Hybrid: online + Bengaluru physical address)

---

## Executive Summary

Hombisilu has a strong brand identity — a memorable name (Golden Sunshine in Kannada), FSSAI certification with a published license number, authentic Karnataka heritage story, and a clean 26-product WooCommerce store. The site is technically healthy at a basic level: all pages return 200, robots.txt is correctly configured, the sitemap is valid, and all content is server-side rendered (fully crawlable).

However, the site has a cluster of Critical SEO deficiencies that will suppress organic visibility regardless of how good the design is:

1. **Zero structured data** — not a single JSON-LD block exists anywhere on the site
2. **Zero meta descriptions** — on every page
3. **No SEO plugin configured** — the root cause of both issues above
4. **No Product schema** — all 26 products are ineligible for Google rich results
5. **No FAQPage schema** — 16 excellent FAQ answers are invisible to AI Overviews
6. **No llms.txt** — brand is invisible to AI search engines at inference time
7. **Security headers missing** — HSTS, CSP, X-Frame-Options all absent

The good news: most Critical issues can be fixed in 1–2 weeks with an SEO plugin install and focused configuration work.

---

## Top 5 Critical Issues

1. **No schema markup on any page** — Zero JSON-LD. All 26 products ineligible for Product rich results. FAQs ineligible for Google AI Overviews. Organization invisible to Knowledge Panel.
2. **No meta descriptions site-wide** — Google auto-generates snippets; CTR is uncontrolled across all pages.
3. **No security headers** — HSTS, CSP, X-Frame-Options, X-Content-Type-Options all absent on a WooCommerce checkout site.
4. **Shop page is critically thin** — 131 words, title "Shop – Hombisilu" (17 chars), H1 = "Our Shop". Zero keyword targeting on the primary commercial page.
5. **No llms.txt + no AI crawler explicit rules** — Brand receives no citations from ChatGPT, Perplexity, or Bing Copilot; GEO score 41/100.

## Top 5 Quick Wins

1. Install RankMath SEO (free) → instantly fixes meta descriptions, OG tags, canonicals, and schema scaffolding site-wide
2. Add FAQPage JSON-LD to /faqs/ → 16 answers become eligible for Google AI Overviews in 2–4 weeks
3. Create /llms.txt → brand facts become readable by ChatGPT, Perplexity, ClaudeBot at inference time
4. Fix email typo `hombisilufooods@gmail.com` (3 o's) → customer emails may be bouncing right now
5. Add HSTS + X-Frame-Options headers in LiteSpeed → fixes 4 Critical security gaps in 30 minutes

---

## 1. Technical SEO — Score: 54/100

### Crawlability — PARTIAL PASS
- ✅ robots.txt valid — blocks /wp-admin/, wc-logs, transient files, add-to-cart params
- ✅ Sitemap index at /wp-sitemap.xml — all 26 products confirmed in product sitemap
- ✅ HTTP/3 (QUIC) active — good connection latency
- ✅ LiteSpeed cache active (X-LiteSpeed-Cache: hit)
- ❌ **[HIGH]** Users sitemap exposes admin username: `/author/hombisilu/` — security + spam risk
- ❌ **[HIGH]** 15 product tag archive pages indexed — thin content, waste crawl budget
- ❌ **[MEDIUM]** WordPress/WooCommerce version exposed via `<meta name="generator">` — vulnerability disclosure

### Indexability — FAIL
- ✅ Homepage canonical self-referencing and correct
- ✅ Product page canonicals present
- ❌ **[CRITICAL]** No meta descriptions on any page
- ❌ **[CRITICAL]** No Open Graph or Twitter Card meta tags — social sharing broken
- ❌ **[HIGH]** /shop/ page has NO canonical tag
- ❌ **[HIGH]** Shop pagination pages (/shop/page/2/) have no canonical or rel=next/prev
- ❌ **[HIGH]** Author archive (/author/hombisilu/) is indexable — thin content

### Security Headers — FAIL (Critical)
- ✅ HTTPS active, HTTP 301-redirects to HTTPS
- ✅ Cookies have Secure + HttpOnly flags
- ❌ **[CRITICAL]** No HSTS header — SSL-stripping vulnerability
- ❌ **[CRITICAL]** No Content-Security-Policy — XSS risk on checkout
- ❌ **[HIGH]** No X-Frame-Options — clickjacking vulnerability
- ❌ **[HIGH]** No X-Content-Type-Options — MIME-sniffing risk
- ❌ **[HIGH]** No Referrer-Policy — customer cart/checkout URLs leak to third parties
- ❌ **[MEDIUM]** X-Powered-By: PHP/8.2.30 exposed — exact PHP version disclosed

### URL Structure — PARTIAL PASS
- ✅ Product URLs clean: `/product/filter-coffee-powder-standard-blend/`
- ✅ Category URLs clean: `/product-category/coffee/`
- ❌ **[HIGH]** Footer links missing trailing slashes on /about-us, /contact-us, /faqs, all 7 category links → unnecessary 301 on every crawl
- ❌ **[HIGH]** Hero CTA buttons use `/shop` and `/about-us` (no trailing slash)

### Core Web Vitals Signals — PARTIAL PASS
- ✅ Logo uses `loading="eager"` with explicit width/height — correct for LCP
- ✅ WooCommerce JS correctly deferred
- ✅ Speculative prefetch rules present
- ❌ **[HIGH]** Hero images loaded via CSS `background-image` — invisible to preload scanner, LCP risk
- ❌ **[HIGH]** No `<link rel="preload">` for hero/LCP image
- ❌ **[MEDIUM]** jQuery + jQuery Migrate render-blocking in `<head>`
- ❌ **[HIGH]** Product images have inconsistent aspect ratios → CLS risk on shop grid

---

## 2. Content Quality & E-E-A-T — Score: 54/100

| E-E-A-T Factor | Score | Key Gap |
|----------------|-------|---------|
| Experience | 45/100 | No founder name, no manufacturing story |
| Expertise | 50/100 | No author credentials, shallow product descriptions |
| Authoritativeness | 35/100 | No press mentions, no third-party citations |
| Trustworthiness | 60/100 | FSSAI number present, but Gmail address undermines authority |

### Page-Level Word Counts
| Page | Words | Status |
|------|-------|--------|
| Homepage | ~447 | Below 500 minimum |
| About Us | ~627 | Adequate but borderline |
| **Shop** | **~131** | **Critically thin — FAIL** |
| FAQs | ~504 | Pass |

### Key E-E-A-T Gaps (All Pages)
- ❌ **[CRITICAL]** No founder name, photo, or founding year anywhere on the site
- ❌ **[HIGH]** Gmail address `hombisilufooods@gmail.com` used as business contact — signals micro-business
- ❌ **[HIGH]** Email has typo — "fooods" has 3 o's — customer emails may be bouncing
- ❌ **[HIGH]** No blog or editorial content — zero informational layer for AI citation
- ❌ **[MEDIUM]** Product descriptions thin — no ingredient sourcing specifics, no provenance per product
- ❌ **[MEDIUM]** Testimonials have no star ratings, dates, or verification signals
- ❌ **[LOW]** No founding year stated anywhere

---

## 3. On-Page SEO — Score: 48/100

### Title Tags
| Page | Current | Length | Recommended |
|------|---------|--------|-------------|
| Homepage | "Hombisilu – Taste the Tradition. Savour the Difference." | 59 ✅ | Add product keywords |
| About Us | "About Us – Hombisilu" | 21 ❌ | "About Hombisilu — Karnataka's Authentic South Indian Foods" |
| Shop | "Shop – Hombisilu" | 17 ❌ | "Buy South Indian Natural Foods Online — Hombisilu Shop" |
| FAQs | "FAQs – Hombisilu" | 18 ❌ | "FAQs About Hombisilu South Indian Natural Foods — Help Centre" |

### Meta Descriptions
**ALL PAGES: MISSING** — Critical across the entire site.

### H1 Keyword Gaps
- Homepage H1: "Taste the Tradition. Savour the Difference." — zero keywords
- Shop H1: "Our Shop" — worst possible H1 for a commercial page
- About H1: "Born from the Heart of Karnataka" — one partial keyword

### Top 5 Homepage Target Keywords
1. "South Indian natural foods online"
2. "buy Karnataka traditional food online"
3. "authentic South Indian filter coffee"
4. "natural chutney powder online India"
5. "preservative-free South Indian foods"

### Other Issues
- ❌ **[CRITICAL]** No alt text on product images (26 products)
- ❌ **[HIGH]** About Us story image is CSS background — invisible to Google
- ❌ **[HIGH]** FAQs CTA links to `/contact` but nav uses `/contact-us/` — potential broken link
- ❌ **[HIGH]** FAQ answers contain no internal links to product pages
- ❌ **[MEDIUM]** Shop pagination needs canonical handling

---

## 4. Schema / Structured Data — Score: 0/100 ❌ CRITICAL

**Zero structured data found on any page.** No JSON-LD, no Microdata, no RDFa.

The "Printigly" mention found is a footer design credit link — not schema injection.

### Missing Schema (Priority Order)

| Schema Type | Page | Priority | Impact |
|-------------|------|----------|--------|
| FAQPage | /faqs/ | CRITICAL | AI Overviews eligibility for all 16 answers |
| Organization | Homepage, About | CRITICAL | Knowledge Panel, entity recognition |
| Product + Offer | All 26 product pages | CRITICAL | Google Shopping + rich results |
| WebSite + SearchAction | Homepage | HIGH | Sitelinks search box |
| LocalBusiness | All pages | HIGH | Google Maps, local pack |
| BreadcrumbList | All inner pages | HIGH | SERP breadcrumb display |
| ItemList | /shop/ | HIGH | Product carousel in SERPs |

---

## 5. Performance (CWV) — Score: 55/100

- ✅ Server-side rendered (no JS required for crawling)
- ✅ WooCommerce JS deferred
- ✅ HTTP/3 active
- ❌ Hero images via CSS `background-image` — not preload-scannable (LCP risk)
- ❌ jQuery render-blocking in `<head>`
- ❌ Mixed product image aspect ratios → CLS risk
- ❌ No `fetchpriority="high"` on LCP element

---

## 6. AI Search Readiness (GEO) — Score: 41/100

| Platform | Score | Biggest Barrier |
|----------|-------|-----------------|
| Google AI Overviews | 38/100 | No FAQ schema, no Organization schema |
| ChatGPT Browse | 32/100 | No llms.txt, no Wikipedia entity |
| Perplexity | 44/100 | Shallow product copy, no blog |
| Bing Copilot | 36/100 | No structured data, no FAQ schema |

### AI Crawler Access
- ✅ GPTBot, ClaudeBot, PerplexityBot — NOT blocked (correct)
- ❌ No explicit Allow rules for AI search crawlers
- ❌ CCBot and anthropic-ai (training crawlers) also allowed — should be blocked

### Key GEO Gaps
- ❌ No llms.txt — brand facts not readable by LLMs at inference time
- ❌ No FAQPage schema — 16 answers invisible to AI Overviews
- ❌ No YouTube channel — strongest AI citation correlator (0.737) completely absent
- ❌ No Wikipedia entity — no entity disambiguation for AI models
- ❌ No blog — zero informational content for AI to index as authoritative

---

## 7. Local SEO — Score: 28/100

- ❌ **[CRITICAL]** No Google Business Profile signals detected
- ❌ **[CRITICAL]** No LocalBusiness schema anywhere
- ❌ **[HIGH]** No Google Maps embed on contact page
- ❌ **[HIGH]** NAP inconsistency — legal name formatted differently across pages
- ❌ **[HIGH]** Gmail address used instead of domain email
- ✅ Full address published: #12, Somashetti Hall, Chikkabanavara, Bengaluru – 560090
- ✅ FSSAI number 11225332000490 displayed
- ✅ Phone consistently +91 6362616933 across all pages
- ✅ Karnataka, Bengaluru origin prominently stated
- ✅ Kannada script used (ಹೊಂಬಿಸಿಲು) — cultural authenticity signal

---

## 8. Images — Score: 20/100

- ❌ **[CRITICAL]** All 26 product images: no alt text set in media library (WCAG 2.1 violation)
- ❌ **[HIGH]** About Us story image is CSS background — not indexable by Google Images
- ❌ **[HIGH]** Mixed product image dimensions → CLS on shop grid
- ✅ Logo has alt="Hombisilu"
- ✅ Hero slides use aria-hidden="true" (decorative — correct)

---

## Sitemap Analysis

- ✅ wp-sitemap.xml valid and declared in robots.txt
- ✅ 26 products in product sitemap with lastmod timestamps
- ✅ Pages, categories, tags included
- ❌ Users sitemap exposes admin username — disable
- ❌ Posts sitemap likely empty (only "Hello World" post)

---

## robots.txt Analysis

Current robots.txt is functional but needs AI crawler segmentation:

```
# Recommended additions:

User-agent: GPTBot
Allow: /

User-agent: OAI-SearchBot  
Allow: /

User-agent: ClaudeBot
Allow: /

User-agent: PerplexityBot
Allow: /

User-agent: CCBot
Disallow: /

User-agent: anthropic-ai
Disallow: /
```

---

## llms.txt (Does Not Exist — Create at hombisilu.com/llms.txt)

```
# Hombisilu

> Hombisilu (meaning "Golden Sunshine" in Kannada) is a Bengaluru-based premium South Indian natural food brand. 26 products across 9 categories. 100% natural ingredients, zero artificial preservatives. FSSAI License: 11225332000490.

## Brand Facts
- Based in Bengaluru, Karnataka, India (#12, Somashetti Hall, Chikkabanavara – 560090)
- FSSAI Registration: 11225332000490
- All products 100% vegetarian
- Pan-India delivery | Free shipping above ₹499
- Heritage recipes from Karnataka culinary tradition

## Product Categories
- Filter Coffee (Standard Blend, Premium Blend)
- Chutney Powders (7 varieties: Curry Leaves, Moringa, Groundnut, Flax Seeds, Niger Seeds, Roasted Gram, Bitter Gourd)
- Spices & Masalas (Turmeric, Black Turmeric, Rasam Powder)
- Pickles (Amla, Appe Midi, Jeerige Midi)
- Honey & Sweeteners (Pure Honey, Honey Soaked Dry Fruits)
- Herbal & Wellness (Kashaya Powder, Laddus)
- Candied Fruits (Amla Sugar, Amla Jaggery, Orange)
- Healthy Snacks (Java Plum Bar / Jamun Bar)

## Key Pages
- Shop: https://hombisilu.com/shop/
- About: https://hombisilu.com/about-us/
- FAQs: https://hombisilu.com/faqs/
- Contact: https://hombisilu.com/contact-us/

## Contact
- Phone: +91 6362616933
- Email: hombisilufooods@gmail.com
```
