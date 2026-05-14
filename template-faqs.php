<?php
/*
Template Name: FAQs
*/
get_header(); ?>

<main class="fq-page">

<!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
<div class="fq-hero">
  <div class="fq-hero-bg"></div>
  <div class="fq-hero-inner">
    <span class="fq-eyebrow">Help Centre</span>
    <h1 class="fq-hero-title">Frequently Asked<br><em>Questions</em></h1>
    <p class="fq-hero-sub">Everything you need to know about Hombisilu products, orders, and delivery.</p>
    <div class="fq-hero-stats">
      <div class="fq-stat"><span class="fq-stat-num">23</span><span class="fq-stat-lbl">Questions Answered</span></div>
      <div class="fq-stat-div"></div>
      <div class="fq-stat"><span class="fq-stat-num">5</span><span class="fq-stat-lbl">Categories</span></div>
      <div class="fq-stat-div"></div>
      <div class="fq-stat"><span class="fq-stat-num">24h</span><span class="fq-stat-lbl">Response Time</span></div>
    </div>
  </div>
  <div class="fq-hero-wave">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,40 C360,80 1080,0 1440,40 L1440,60 L0,60 Z" fill="#FFF8F0"/></svg>
  </div>
</div>

<!-- ══════════════════════════════════════════
     FAQ BODY
══════════════════════════════════════════ -->
<div class="fq-body">
  <div class="fq-container">

    <!-- Category Tabs -->
    <div class="fq-tabs">
      <button class="fq-tab active" data-cat="all">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        All
      </button>
      <button class="fq-tab" data-cat="general">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        General
      </button>
      <button class="fq-tab" data-cat="products">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/></svg>
        Products & Quality
      </button>
      <button class="fq-tab" data-cat="ordering">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
        Ordering & Payment
      </button>
      <button class="fq-tab" data-cat="shipping">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
        Shipping & Delivery
      </button>
      <button class="fq-tab" data-cat="returns">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 102.13-9.36L1 10"/></svg>
        Returns & Refunds
      </button>
      <button class="fq-tab" data-cat="policies">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Policies
      </button>
    </div>

    <!-- FAQ Sections -->
    <div class="fq-sections">

      <!-- General -->
      <div class="fq-section" data-cat="general">
        <div class="fq-section-head">
          <div class="fq-section-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          </div>
          <h2>General</h2>
        </div>
        <div class="fq-list">
          <div class="fq-item">
            <button class="fq-q">
              Are Hombisilu products free from artificial additives?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Yes. The vast majority of our range contains no artificial colours, flavours, or preservatives. Product labels clearly list all ingredients.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Are your products FSSAI certified?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Absolutely. All Hombisilu products carry valid FSSAI certification. Our primary license number is <strong>11225332000490</strong>.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Where are Hombisilu products made?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">All products are made and packed in Bengaluru, Karnataka, India. We are proud to be a 100% Indian brand.</div></div>
          </div>
        </div>
      </div>

      <!-- Products & Quality -->
      <div class="fq-section" data-cat="products">
        <div class="fq-section-head">
          <div class="fq-section-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
          </div>
          <h2>Products &amp; Quality</h2>
        </div>
        <div class="fq-list">
          <div class="fq-item">
            <button class="fq-q">
              What makes Hombisilu products different?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Hombisilu products are made using traditional South Indian recipes with 100% natural ingredients. No artificial preservatives, colours, or flavours. Every product is handcrafted in small batches. FSSAI License: 11225332000490.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Are your products preservative-free?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Yes. We do not add any artificial preservatives, synthetic colours, or chemical additives. Natural shelf life is maintained through traditional preparation methods like sun-drying and hand-grinding.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Are your products vegetarian?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Yes, all Hombisilu products are 100% vegetarian. We display the green vegetarian symbol on all packaging.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Are your products gluten-free?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Many products such as rice-based items, lentil snacks, and certain chutneys are naturally gluten-free. Check individual product pages for detailed allergen information.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              What is the shelf life of your products?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Most dry products last 3–6 months in a cool, dry place. Pickles and chutneys typically last 3–4 months. Always check the Best Before date printed on each pack.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              How should I store Hombisilu products?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Store in a cool, dry place away from direct sunlight. Once opened, transfer to an airtight container. Always use a clean, dry spoon to avoid moisture contamination.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              What is the difference between Standard Blend and Premium Blend coffee?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">The <strong>Standard Blend</strong> is a 70:30 ratio of roasted coffee to chicory — ideal for a balanced, everyday brew. The <strong>Premium Blend</strong> uses an 80:20 ratio, delivering a stronger, more aromatic cup for those who prefer a richer coffee experience.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              What is Jeerige Midi pickle and how is it different from regular mango pickle?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Jeerige Midi (Jeera Midi) uses a rare variety of small, tender baby mangoes from the Western Ghats, known for their natural cumin-like aroma. This gives the pickle a distinctly aromatic and complex flavour compared to regular mango pickles.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              What is Kashaya Powder?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Kashaya Powder is a traditional South Indian herbal drink mix made from a blend of spices and medicinal herbs including turmeric, ginger, cardamom, pepper, and ashwagandha. It is boiled in water or milk to make a warm, caffeine-free wellness beverage.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Is the Edible Gum Laddu safe during pregnancy?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Edible gum (gond) is heat-generating and traditionally consumed postpartum. Pregnant women should consume in moderation and consult their doctor before use.</div></div>
          </div>
        </div>
      </div>

      <!-- Ordering & Payment -->
      <div class="fq-section" data-cat="ordering">
        <div class="fq-section-head">
          <div class="fq-section-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
          </div>
          <h2>Ordering &amp; Payment</h2>
        </div>
        <div class="fq-list">
          <div class="fq-item">
            <button class="fq-q">
              Do you offer pan-India delivery?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Yes. We ship across India. Delivery timelines and charges will be communicated at checkout.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              How do I place an order?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Browse our <a href="/shop/">shop</a>, add products to your cart, proceed to checkout, enter your delivery address and payment details, and confirm. You will receive an email confirmation with tracking information.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              What payment methods do you accept?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">We accept UPI (GPay, PhonePe, Paytm), Credit/Debit Cards (Visa, MasterCard, RuPay), Net Banking, and Cash on Delivery in select areas.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Can I modify or cancel my order?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">You can modify or cancel within 12 hours of placing the order by contacting us at <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a> or <a href="tel:+916362616933">+91 6362616933</a>. Once dispatched, cancellation is not possible.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Do you offer bulk or wholesale orders?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Yes! Email <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a> with your requirements and we will provide a custom quote with special pricing for large orders.</div></div>
          </div>
        </div>
      </div>

      <!-- Shipping & Delivery -->
      <div class="fq-section" data-cat="shipping">
        <div class="fq-section-head">
          <div class="fq-section-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
          </div>
          <h2>Shipping &amp; Delivery</h2>
        </div>
        <div class="fq-list">
          <div class="fq-item">
            <button class="fq-q">
              Do you offer free shipping?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Yes! Free shipping on all orders above ₹499. A nominal shipping fee applies for orders below ₹499 based on your location.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              How long does delivery take?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">
              <strong>Within Bengaluru:</strong> 1–2 business days<br>
              <strong>Other Karnataka cities:</strong> 2–4 business days<br>
              <strong>Rest of India:</strong> 4–7 business days
            </div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              How can I track my order?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Once dispatched, you will receive an SMS and email with your tracking number and courier partner name to follow your order in real time.</div></div>
          </div>
        </div>
      </div>

      <!-- Returns & Refunds -->
      <div class="fq-section" data-cat="returns">
        <div class="fq-section-head">
          <div class="fq-section-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 102.13-9.36L1 10"/></svg>
          </div>
          <h2>Returns &amp; Refunds</h2>
        </div>
        <div class="fq-list">
          <div class="fq-item">
            <button class="fq-q">
              What is your return policy?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">We accept returns only for damaged, defective, or wrong items. As food products, we cannot accept returns for change of mind. Report issues within 48 hours with photographs.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              What if I receive a damaged or wrong product?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Email <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a> with your order number and clear photos within 48 hours. We will arrange a replacement or full refund promptly.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              How long does a refund take?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Once approved, refunds are credited back to your original payment method within 5–7 business days.</div></div>
          </div>
        </div>
      </div>

      <!-- Policies -->
      <div class="fq-section" data-cat="policies">
        <div class="fq-section-head">
          <div class="fq-section-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h2>Policies</h2>
        </div>
        <div class="fq-list">
          <div class="fq-item">
            <button class="fq-q">
              What is your shipping policy?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">
              We offer pan-India shipping via trusted courier partners. Orders are processed within <strong>1–2 business days</strong>. Standard delivery takes <strong>4–7 business days</strong>. Shipping charges (if any) are displayed at checkout.
            </div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              What is your returns and refunds policy?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">
              We accept return/replacement requests for damaged or incorrect products reported within <strong>48 hours</strong> of delivery. Please email <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a> with your order details and a photo of the product. Refunds (if applicable) will be processed within <strong>7–10 business days</strong>. We are unable to accept returns for perishable items once opened.
            </div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Privacy Policy — how is my data used?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">Hombisilu values your privacy. We collect only the information necessary to process your orders and improve your experience. We do not sell or share your personal data with third parties. For full details, please refer to our complete Privacy Policy on the website.</div></div>
          </div>
          <div class="fq-item">
            <button class="fq-q">
              Terms &amp; Conditions — what should I know?
              <span class="fq-toggle"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
            </button>
            <div class="fq-a"><div class="fq-a-inner">By placing an order on the Hombisilu website, you agree to our terms of service. All product images are for illustration purposes only. Actual product appearance may vary slightly due to natural ingredients and packaging. Hombisilu reserves the right to modify pricing and availability without prior notice.</div></div>
          </div>
        </div>
      </div>

    </div><!-- /.fq-sections -->

    <!-- CTA -->
    <div class="fq-cta">
      <div class="fq-cta-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
      </div>
      <h2 class="fq-cta-title">Still Have Questions?</h2>
      <p class="fq-cta-sub">Our team is just a message away — we typically respond within 24 hours.</p>
      <div class="fq-cta-btns">
        <a href="/contact-us/" class="fq-btn-white">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          Contact Us
        </a>
        <a href="https://wa.me/916362616933" class="fq-btn-wa">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          WhatsApp
        </a>
      </div>
    </div>

  </div>
</div>

</main>

<style>
/* ════════════════════════════════════════════
   FAQ PAGE
════════════════════════════════════════════ */
:root {
  --fq-maroon:    #6B2737;
  --fq-maroon-dk: #4A0E1A;
  --fq-gold:      #C9A055;
  --fq-gold-lt:   #F5C842;
  --fq-cream:     #FFF8F0;
  --fq-border:    #E8DDD0;
  --fq-text:      #3A2A20;
  --fq-muted:     #7A6A60;
}
.fq-page { background: var(--fq-cream); }
.fq-container { max-width: 860px; margin: 0 auto; padding: 0 24px; }

/* HERO */
.fq-hero { position: relative; overflow: hidden; background: linear-gradient(135deg, var(--fq-maroon-dk) 0%, var(--fq-maroon) 60%, #8B3045 100%); padding: 80px 24px 100px; text-align: center; }
.fq-hero-bg { position: absolute; inset: 0; background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); pointer-events: none; }
.fq-hero-inner { position: relative; z-index: 1; max-width: 640px; margin: 0 auto; }
.fq-eyebrow { display: inline-block; font-size: .68rem; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--fq-gold-lt); background: rgba(201,160,85,.2); border: 1px solid rgba(201,160,85,.35); padding: 5px 16px; border-radius: 30px; margin-bottom: 18px; }
.fq-hero-title { font-family: 'Playfair Display', Georgia, serif; font-size: clamp(2.2rem, 5vw, 3.6rem); color: #fff; font-weight: 700; line-height: 1.15; margin-bottom: 16px; text-shadow: 0 2px 20px rgba(0,0,0,.25); }
.fq-hero-title em { font-style: italic; color: var(--fq-gold-lt); }
.fq-hero-sub { color: rgba(255,255,255,.8); font-size: 1rem; line-height: 1.75; margin-bottom: 36px; }
.fq-hero-stats { display: flex; align-items: center; justify-content: center; gap: 0; background: rgba(255,255,255,.1); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,.2); border-radius: 16px; padding: 20px 32px; display: inline-flex; }
.fq-stat { text-align: center; padding: 0 28px; }
.fq-stat-num { display: block; font-family: 'Playfair Display', Georgia, serif; font-size: 1.9rem; font-weight: 700; color: var(--fq-gold-lt); line-height: 1; margin-bottom: 4px; }
.fq-stat-lbl { font-size: .7rem; color: rgba(255,255,255,.7); font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
.fq-stat-div { width: 1px; height: 40px; background: rgba(255,255,255,.2); }
.fq-hero-wave { position: absolute; bottom: -1px; left: 0; right: 0; }
.fq-hero-wave svg { display: block; width: 100%; height: 50px; }

/* BODY */
.fq-body { background: var(--fq-cream); padding: 48px 0 88px; }

/* TABS */
.fq-tabs { display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 44px; }
.fq-tab { display: inline-flex; align-items: center; gap: 7px; padding: 10px 20px; border-radius: 30px; border: 1.5px solid var(--fq-border); background: #fff; color: var(--fq-text); font-size: .82rem; font-weight: 600; cursor: pointer; transition: all .25s; font-family: inherit; }
.fq-tab:hover { border-color: var(--fq-gold); color: var(--fq-maroon); }
.fq-tab.active { background: var(--fq-maroon); color: #fff !important; border-color: var(--fq-maroon); box-shadow: 0 4px 16px rgba(107,39,55,.25); }

/* SECTIONS */
.fq-section { margin-bottom: 40px; }
.fq-section.fq-hidden { display: none; }
.fq-section-head { display: flex; align-items: center; gap: 14px; margin-bottom: 20px; padding-bottom: 16px; border-bottom: 2px solid var(--fq-border); }
.fq-section-icon { width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, rgba(201,160,85,.15), rgba(107,39,55,.08)); border: 1.5px solid rgba(201,160,85,.25); display: flex; align-items: center; justify-content: center; color: var(--fq-maroon); flex-shrink: 0; }
.fq-section-head h2 { font-family: 'Playfair Display', Georgia, serif; font-size: 1.45rem; color: var(--fq-maroon); font-weight: 700; margin: 0; }

/* ACCORDION */
.fq-list { display: flex; flex-direction: column; gap: 10px; }
.fq-item { background: #fff; border: 1.5px solid var(--fq-border); border-radius: 14px; overflow: hidden; transition: border-color .25s, box-shadow .25s; }
.fq-item.open { border-color: var(--fq-maroon); box-shadow: 0 4px 20px rgba(107,39,55,.1); }
.fq-q { width: 100%; display: flex; align-items: center; justify-content: space-between; gap: 16px; padding: 18px 22px; background: none; border: none; cursor: pointer; font-size: .95rem; font-weight: 600; color: var(--fq-text); text-align: left; transition: color .25s, background .25s; font-family: inherit; }
.fq-q:hover { color: var(--fq-maroon); background: rgba(255,248,240,.6); }
.fq-item.open .fq-q { color: var(--fq-maroon); background: rgba(107,39,55,.04); }
.fq-toggle { width: 30px; height: 30px; border-radius: 50%; background: rgba(201,160,85,.12); border: 1.5px solid rgba(201,160,85,.3); display: flex; align-items: center; justify-content: center; color: var(--fq-maroon); flex-shrink: 0; transition: background .25s, transform .3s; }
.fq-item.open .fq-toggle { background: var(--fq-maroon); border-color: var(--fq-maroon); color: #fff; transform: rotate(45deg); }
.fq-a { max-height: 0; overflow: hidden; transition: max-height .38s ease; }
.fq-item.open .fq-a { max-height: 400px; }
.fq-a-inner { padding: 0 22px 20px; font-size: .92rem; color: var(--fq-muted); line-height: 1.8; border-top: 1px solid var(--fq-border); padding-top: 16px; }
.fq-a-inner a { color: var(--fq-maroon); font-weight: 600; }
.fq-a-inner a:hover { color: var(--fq-gold); }
.fq-a-inner strong { color: var(--fq-text); }

/* CTA */
.fq-cta { background: linear-gradient(135deg, var(--fq-maroon-dk) 0%, var(--fq-maroon) 60%, #8B3045 100%); border-radius: 24px; padding: 56px 48px; text-align: center; margin-top: 16px; position: relative; overflow: hidden; }
.fq-cta::before { content: ''; position: absolute; inset: 0; background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); pointer-events: none; }
.fq-cta-icon { position: relative; z-index: 1; width: 64px; height: 64px; border-radius: 18px; background: rgba(255,255,255,.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: var(--fq-gold-lt); }
.fq-cta-title { position: relative; z-index: 1; font-family: 'Playfair Display', Georgia, serif; font-size: clamp(1.6rem, 3vw, 2.2rem); color: #fff; margin-bottom: 10px; font-weight: 700; }
.fq-cta-sub { position: relative; z-index: 1; color: rgba(255,255,255,.75); font-size: .95rem; margin-bottom: 32px; }
.fq-cta-btns { position: relative; z-index: 1; display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
.fq-btn-white { display: inline-flex; align-items: center; gap: 8px; background: #fff; color: var(--fq-maroon) !important; padding: 13px 28px; border-radius: 30px; font-weight: 700; font-size: .92rem; box-shadow: 0 6px 20px rgba(0,0,0,.2); transition: all .28s; cursor: pointer; }
.fq-btn-white:hover { background: var(--fq-gold-lt); transform: translateY(-2px); }
.fq-btn-wa { display: inline-flex; align-items: center; gap: 8px; background: #25D366; color: #fff !important; padding: 13px 28px; border-radius: 30px; font-weight: 700; font-size: .92rem; box-shadow: 0 6px 20px rgba(37,211,102,.3); transition: all .28s; cursor: pointer; }
.fq-btn-wa:hover { background: #1fba59; transform: translateY(-2px); }

/* RESPONSIVE */
@media (max-width: 640px) {
  .fq-hero { padding: 60px 20px 80px; }
  .fq-hero-stats { flex-direction: column; gap: 12px; padding: 16px 24px; }
  .fq-stat-div { width: 60px; height: 1px; }
  .fq-cta { padding: 40px 24px; }
  .fq-tabs { gap: 8px; }
  .fq-tab { font-size: .76rem; padding: 8px 14px; }
}
</style>

<script>
(function(){
  /* Accordion */
  document.querySelectorAll('.fq-q').forEach(function(btn){
    btn.addEventListener('click', function(){
      var item = this.closest('.fq-item');
      var isOpen = item.classList.contains('open');
      document.querySelectorAll('.fq-item').forEach(function(i){ i.classList.remove('open'); });
      if (!isOpen) item.classList.add('open');
    });
  });

  /* Tabs filter */
  var tabs = document.querySelectorAll('.fq-tab');
  var sections = document.querySelectorAll('.fq-section');
  tabs.forEach(function(tab){
    tab.addEventListener('click', function(){
      tabs.forEach(function(t){ t.classList.remove('active'); });
      this.classList.add('active');
      var cat = this.getAttribute('data-cat');
      sections.forEach(function(sec){
        if (cat === 'all' || sec.getAttribute('data-cat') === cat) {
          sec.classList.remove('fq-hidden');
        } else {
          sec.classList.add('fq-hidden');
        }
      });
      document.querySelectorAll('.fq-item').forEach(function(i){ i.classList.remove('open'); });
    });
  });
})();
</script>

<?php get_footer(); ?>
