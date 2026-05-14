<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand Column -->
      <div class="footer-brand">
        <div class="brand">Hombisilu</div>
        <p>Authentic South Indian foods crafted with heritage, rooted in purity. From the fragrant hills of Karnataka to your kitchen table — no shortcuts, no compromise.</p>
        <span class="fssai">FSSAI: 11225332000490</span>
        <div style="margin-top:18px;display:flex;gap:12px;">
          <a href="https://wa.me/916362616933" style="display:inline-flex;align-items:center;gap:6px;background:#25D366;color:#fff;padding:8px 14px;border-radius:8px;font-size:.8rem;font-weight:600;">
            💬 WhatsApp
          </a>
          <a href="mailto:hombisilufooods@gmail.com" style="display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,.1);color:rgba(255,255,255,.8);padding:8px 14px;border-radius:8px;font-size:.8rem;font-weight:600;">
            ✉️ Email Us
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
          <li><a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>">Shop All</a></li>
          <li><a href="<?php echo home_url('/about-us'); ?>">About Us</a></li>
          <li><a href="<?php echo home_url('/contact-us'); ?>">Contact Us</a></li>
          <li><a href="<?php echo home_url('/faqs'); ?>">FAQs</a></li>
          <?php if (function_exists('wc_get_page_id')): ?>
          <li><a href="<?php echo wc_get_cart_url(); ?>">Cart</a></li>
          <li><a href="<?php echo wc_get_checkout_url(); ?>">Checkout</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Categories -->
      <div class="footer-col">
        <h4>Categories</h4>
        <ul>
          <li><a href="<?php echo home_url('/product-category/coffee'); ?>">☕ Coffee</a></li>
          <li><a href="<?php echo home_url('/product-category/chutney-powders'); ?>">🌿 Chutney Powders</a></li>
          <li><a href="<?php echo home_url('/product-category/spices-masalas'); ?>">🟡 Spices &amp; Masalas</a></li>
          <li><a href="<?php echo home_url('/product-category/pickles'); ?>">🫙 Pickles</a></li>
          <li><a href="<?php echo home_url('/product-category/honey-natural-sweeteners'); ?>">🍯 Honey &amp; Sweeteners</a></li>
          <li><a href="<?php echo home_url('/product-category/herbal-wellness'); ?>">🌱 Herbal &amp; Wellness</a></li>
          <li><a href="<?php echo home_url('/product-category/candied-fruits'); ?>">🍊 Candied Fruits</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-col">
        <h4>Contact Us</h4>
        <p>📍 #12, Somashetti Hall,<br>Chikkabanavara, Bengaluru – 560090</p>
        <p>📞 <a href="tel:+916362616933">+91 6362616933</a></p>
        <p>✉️ <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a></p>
        <p>🕐 Mon–Sat: 9AM–6PM<br>Sun: 10AM–4PM</p>
        <div style="margin-top:16px;background:rgba(212,160,23,.12);border:1px solid rgba(212,160,23,.25);border-radius:8px;padding:12px;">
          <div style="font-size:.72rem;color:#D4A017;font-weight:700;text-transform:uppercase;letter-spacing:1px;margin-bottom:4px;">Delivery</div>
          <div style="font-size:.82rem;color:rgba(255,255,255,.7);line-height:1.5;">Pan-India delivery · Free above ₹499</div>
        </div>
      </div>

    </div><!-- .footer-grid -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>© <?php echo date('Y'); ?> Hombisilu by SGR Manufacturing &amp; Trading. All Rights Reserved. 🇮🇳</p>
      <div class="footer-links">
        <a href="<?php echo home_url('/terms-and-conditions'); ?>">Terms &amp; Conditions</a>
        <a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a>
        <a href="<?php echo home_url('/refund-policy'); ?>">Refund Policy</a>
        <a href="<?php echo home_url('/faqs'); ?>">FAQs</a>
      </div>
      <p style="margin-top:10px;font-size:.75rem;color:rgba(255,255,255,.4);">Website designed by <a href="https://printigly.in" target="_blank" rel="noopener" style="color:rgba(255,255,255,.6);text-decoration:underline;">Printigly</a></p>
    </div>
  </div>
</footer>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/916362616933?text=Hi%20Hombisilu!%20I%20have%20a%20query%20about%20your%20products."
   class="whatsapp-float"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="Chat on WhatsApp">
  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
  </svg>
</a>

<?php wp_footer(); ?>
</body>
</html>
