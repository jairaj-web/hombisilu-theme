<?php
/*
Template Name: FAQs
*/
get_header(); ?>

<main class="fq-page">

<!-- ══════════════════════════════════════════
     PAGE HEAD
══════════════════════════════════════════ -->
<section class="ds-pagehead">
  <div class="ds-wrap">
    <nav class="ds-crumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <?php echo hb_icon( 'chev', 12 ); ?>
      <span aria-current="page">FAQs</span>
    </nav>

    <span class="ds-eyebrow">Help Centre</span>
    <h1 class="ds-pagehead-title">Frequently Asked Questions</h1>
    <p class="ds-sub">Everything you need to know about Hombisilu products, orders, and delivery.</p>

    <div class="fq-stats">
      <div class="fq-stat"><span class="fq-stat-num">23</span><span class="fq-stat-lbl">Questions Answered</span></div>
      <div class="fq-stat-div"></div>
      <div class="fq-stat"><span class="fq-stat-num">5</span><span class="fq-stat-lbl">Categories</span></div>
      <div class="fq-stat-div"></div>
      <div class="fq-stat"><span class="fq-stat-num">24h</span><span class="fq-stat-lbl">Response Time</span></div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     FAQ BODY
══════════════════════════════════════════ -->
<div class="ds-section ds-section--cream fq-body">
  <div class="ds-wrap ds-wrap--narrow">

    <!-- Category jump nav -->
    <nav class="fq-jumpnav" aria-label="FAQ categories">
      <a class="fq-jumplink" href="#cat-general"><?php echo hb_icon( 'grid', 15 ); ?> General</a>
      <a class="fq-jumplink" href="#cat-products"><?php echo hb_icon( 'leaf', 15 ); ?> Products &amp; Quality</a>
      <a class="fq-jumplink" href="#cat-ordering"><?php echo hb_icon( 'bag', 15 ); ?> Ordering &amp; Payment</a>
      <a class="fq-jumplink" href="#cat-shipping"><?php echo hb_icon( 'truck', 15 ); ?> Shipping &amp; Delivery</a>
      <a class="fq-jumplink" href="#cat-returns"><?php echo hb_icon( 'clock', 15 ); ?> Returns &amp; Refunds</a>
      <a class="fq-jumplink" href="#cat-policies"><?php echo hb_icon( 'book', 15 ); ?> Policies</a>
    </nav>

    <!-- FAQ Groups -->
    <div class="fq-groups">

      <!-- General -->
      <section class="fq-group" id="cat-general">
        <div class="fq-group-head">
          <span class="fq-group-icon"><?php echo hb_icon( 'grid', 22 ); ?></span>
          <h2>General</h2>
        </div>
        <div class="fq-accordion">
          <details class="fq-item">
            <summary class="fq-q">
              <span>Are Hombisilu products free from artificial additives?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Yes. The vast majority of our range contains no artificial colours, flavours, or preservatives. Product labels clearly list all ingredients.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Are your products FSSAI certified?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Absolutely. All Hombisilu products carry valid FSSAI certification. Our primary license number is <strong>11225332000490</strong>.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Where are Hombisilu products made?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">All products are made and packed in Bengaluru, Karnataka, India. We are proud to be a 100% Indian brand.</div>
          </details>
        </div>
      </section>

      <!-- Products & Quality -->
      <section class="fq-group" id="cat-products">
        <div class="fq-group-head">
          <span class="fq-group-icon"><?php echo hb_icon( 'leaf', 22 ); ?></span>
          <h2>Products &amp; Quality</h2>
        </div>
        <div class="fq-accordion">
          <details class="fq-item">
            <summary class="fq-q">
              <span>What makes Hombisilu products different?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Hombisilu products are made using traditional South Indian recipes with 100% natural ingredients. No artificial preservatives, colours, or flavours. Every product is handcrafted in small batches. FSSAI License: 11225332000490.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Are your products preservative-free?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Yes. We do not add any artificial preservatives, synthetic colours, or chemical additives. Natural shelf life is maintained through traditional preparation methods like sun-drying and hand-grinding.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Are your products vegetarian?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Yes, all Hombisilu products are 100% vegetarian. We display the green vegetarian symbol on all packaging.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Are your products gluten-free?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Many products such as rice-based items, lentil snacks, and certain chutneys are naturally gluten-free. Check individual product pages for detailed allergen information.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>What is the shelf life of your products?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Most dry products last 3–6 months in a cool, dry place. Pickles and chutneys typically last 3–4 months. Always check the Best Before date printed on each pack.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>How should I store Hombisilu products?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Store in a cool, dry place away from direct sunlight. Once opened, transfer to an airtight container. Always use a clean, dry spoon to avoid moisture contamination.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>What is the difference between Standard Blend and Premium Blend coffee?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">The <strong>Standard Blend</strong> is a 70:30 ratio of roasted coffee to chicory — ideal for a balanced, everyday brew. The <strong>Premium Blend</strong> uses an 80:20 ratio, delivering a stronger, more aromatic cup for those who prefer a richer coffee experience.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>What is Jeerige Midi pickle and how is it different from regular mango pickle?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Jeerige Midi (Jeera Midi) uses a rare variety of small, tender baby mangoes from the Western Ghats, known for their natural cumin-like aroma. This gives the pickle a distinctly aromatic and complex flavour compared to regular mango pickles.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>What is Kashaya Powder?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Kashaya Powder is a traditional South Indian herbal drink mix made from a blend of spices and medicinal herbs including turmeric, ginger, cardamom, pepper, and ashwagandha. It is boiled in water or milk to make a warm, caffeine-free wellness beverage.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Is the Edible Gum Laddu safe during pregnancy?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Edible gum (gond) is heat-generating and traditionally consumed postpartum. Pregnant women should consume in moderation and consult their doctor before use.</div>
          </details>
        </div>
      </section>

      <!-- Ordering & Payment -->
      <section class="fq-group" id="cat-ordering">
        <div class="fq-group-head">
          <span class="fq-group-icon"><?php echo hb_icon( 'bag', 22 ); ?></span>
          <h2>Ordering &amp; Payment</h2>
        </div>
        <div class="fq-accordion">
          <details class="fq-item">
            <summary class="fq-q">
              <span>Do you offer pan-India delivery?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Yes. We ship across India. Delivery timelines and charges will be communicated at checkout.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>How do I place an order?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Browse our <a href="/shop/">shop</a>, add products to your cart, proceed to checkout, enter your delivery address and payment details, and confirm. You will receive an email confirmation with tracking information.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>What payment methods do you accept?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">We accept UPI (GPay, PhonePe, Paytm), Credit/Debit Cards (Visa, MasterCard, RuPay), Net Banking, and Cash on Delivery in select areas.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Can I modify or cancel my order?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">You can modify or cancel within 12 hours of placing the order by contacting us at <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a> or <a href="tel:+916362616933">+91 6362616933</a>. Once dispatched, cancellation is not possible.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Do you offer bulk or wholesale orders?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Yes! Email <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a> with your requirements and we will provide a custom quote with special pricing for large orders.</div>
          </details>
        </div>
      </section>

      <!-- Shipping & Delivery -->
      <section class="fq-group" id="cat-shipping">
        <div class="fq-group-head">
          <span class="fq-group-icon"><?php echo hb_icon( 'truck', 22 ); ?></span>
          <h2>Shipping &amp; Delivery</h2>
        </div>
        <div class="fq-accordion">
          <details class="fq-item">
            <summary class="fq-q">
              <span>Do you offer free shipping?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Yes! Free shipping on all orders above ₹499. A nominal shipping fee applies for orders below ₹499 based on your location.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>How long does delivery take?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">
              <strong>Within Bengaluru:</strong> 1–2 business days<br>
              <strong>Other Karnataka cities:</strong> 2–4 business days<br>
              <strong>Rest of India:</strong> 4–7 business days
            </div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>How can I track my order?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Once dispatched, you will receive an SMS and email with your tracking number and courier partner name to follow your order in real time.</div>
          </details>
        </div>
      </section>

      <!-- Returns & Refunds -->
      <section class="fq-group" id="cat-returns">
        <div class="fq-group-head">
          <span class="fq-group-icon"><?php echo hb_icon( 'clock', 22 ); ?></span>
          <h2>Returns &amp; Refunds</h2>
        </div>
        <div class="fq-accordion">
          <details class="fq-item">
            <summary class="fq-q">
              <span>What is your return policy?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">We accept returns only for damaged, defective, or wrong items. As food products, we cannot accept returns for change of mind. Report issues within 48 hours with photographs.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>What if I receive a damaged or wrong product?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Email <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a> with your order number and clear photos within 48 hours. We will arrange a replacement or full refund promptly.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>How long does a refund take?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Once approved, refunds are credited back to your original payment method within 5–7 business days.</div>
          </details>
        </div>
      </section>

      <!-- Policies -->
      <section class="fq-group" id="cat-policies">
        <div class="fq-group-head">
          <span class="fq-group-icon"><?php echo hb_icon( 'book', 22 ); ?></span>
          <h2>Policies</h2>
        </div>
        <div class="fq-accordion">
          <details class="fq-item">
            <summary class="fq-q">
              <span>What is your shipping policy?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">
              We offer pan-India shipping via trusted courier partners. Orders are processed within <strong>1–2 business days</strong>. Standard delivery takes <strong>4–7 business days</strong>. Shipping charges (if any) are displayed at checkout.
            </div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>What is your returns and refunds policy?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">
              We accept return/replacement requests for damaged or incorrect products reported within <strong>48 hours</strong> of delivery. Please email <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a> with your order details and a photo of the product. Refunds (if applicable) will be processed within <strong>7–10 business days</strong>. We are unable to accept returns for perishable items once opened.
            </div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Privacy Policy — how is my data used?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">Hombisilu values your privacy. We collect only the information necessary to process your orders and improve your experience. We do not sell or share your personal data with third parties. For full details, please refer to our complete Privacy Policy on the website.</div>
          </details>
          <details class="fq-item">
            <summary class="fq-q">
              <span>Terms &amp; Conditions — what should I know?</span>
              <span class="fq-chev"><?php echo hb_icon( 'chev', 16 ); ?></span>
            </summary>
            <div class="fq-a">By placing an order on the Hombisilu website, you agree to our terms of service. All product images are for illustration purposes only. Actual product appearance may vary slightly due to natural ingredients and packaging. Hombisilu reserves the right to modify pricing and availability without prior notice.</div>
          </details>
        </div>
      </section>

    </div><!-- /.fq-groups -->

    <!-- CTA -->
    <div class="fq-cta">
      <span class="fq-cta-icon"><?php echo hb_icon( 'chat', 28 ); ?></span>
      <h2 class="fq-cta-title">Still Have Questions?</h2>
      <p class="fq-cta-sub">Our team is just a message away — we typically respond within 24 hours.</p>
      <div class="fq-cta-btns">
        <a href="/contact-us/" class="ds-btn ds-btn--white">
          <?php echo hb_icon( 'mail', 16 ); ?>
          Contact Us
        </a>
        <a href="https://wa.me/916362616933" class="ds-btn fq-btn-wa">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          WhatsApp
        </a>
      </div>
    </div>

  </div>
</div>

</main>

<?php get_footer(); ?>
