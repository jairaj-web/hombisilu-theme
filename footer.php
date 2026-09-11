<footer class="ds-footer">

  <!-- Value strip -->
  <div class="ds-footer-strip">
    <div class="ds-wrap ds-footer-strip-inner">
      <div class="ds-footer-value"><span class="ds-footer-value-icon"><?php echo hb_icon( 'truck', 20 ); ?></span><div><strong>Pan-India Delivery</strong><span>Free above &#8377;499</span></div></div>
      <div class="ds-footer-value"><span class="ds-footer-value-icon"><?php echo hb_icon( 'shield', 20 ); ?></span><div><strong>FSSAI Certified</strong><span>11225332000490</span></div></div>
      <div class="ds-footer-value"><span class="ds-footer-value-icon"><?php echo hb_icon( 'leaf', 20 ); ?></span><div><strong>100&#37; Natural</strong><span>No preservatives</span></div></div>
      <div class="ds-footer-value"><span class="ds-footer-value-icon"><?php echo hb_icon( 'chat', 20 ); ?></span><div><strong>Talk to Us</strong><span>Mon–Sat 9AM–6PM</span></div></div>
    </div>
  </div>

  <div class="ds-wrap ds-footer-main">

    <div class="ds-footer-brand">
      <span class="ds-wordmark">
        <span class="ds-wordmark-name">Hombisilu</span>
        <span class="ds-wordmark-tag">Golden Sunshine</span>
      </span>
      <p>Authentic South Indian foods crafted with heritage, rooted in purity. From the fragrant hills of Karnataka to your kitchen table — no shortcuts, no compromise.</p>
      <span class="ds-chip ds-chip--gold">FSSAI: 11225332000490</span>
      <div class="ds-footer-social">
        <a href="https://wa.me/916362616933" class="ds-footer-icon ds-footer-icon--whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"><?php echo hb_icon( 'chat', 20 ); ?></a>
        <a href="mailto:hombisilufooods@gmail.com" class="ds-footer-icon ds-footer-icon--mail" aria-label="Email Hombisilu"><?php echo hb_icon( 'mail', 20 ); ?></a>
        <a href="tel:+916362616933" class="ds-footer-icon ds-footer-icon--phone" aria-label="Call Hombisilu"><?php echo hb_icon( 'phone', 20 ); ?></a>
      </div>
    </div>

    <div class="ds-footer-col">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( hb_shop_url() ); ?>">Shop All</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
        <li><a href="<?php echo esc_url( home_url( '/faqs/' ) ); ?>">FAQs</a></li>
        <?php if ( function_exists( 'wc_get_page_id' ) ) : ?>
          <li><a href="<?php echo esc_url( wc_get_cart_url() ); ?>">Cart</a></li>
          <li><a href="<?php echo esc_url( wc_get_checkout_url() ); ?>">Checkout</a></li>
        <?php endif; ?>
      </ul>
    </div>

    <div class="ds-footer-col">
      <h3>Categories</h3>
      <ul>
        <?php
        $footer_cats = [
          'coffee'                   => 'Coffee',
          'chutney-powders'          => 'Chutney Powders',
          'spices-masalas'           => 'Spices &amp; Masalas',
          'pickles'                  => 'Pickles',
          'honey-natural-sweeteners' => 'Honey &amp; Sweeteners',
          'herbal-wellness'          => 'Herbal &amp; Wellness',
          'candied-fruits'           => 'Candied Fruits',
        ];
        foreach ( $footer_cats as $slug => $label ) {
          printf(
            '<li><a href="%s">%s</a></li>',
            esc_url( home_url( '/product-category/' . $slug . '/' ) ),
            $label
          );
        }
        ?>
      </ul>
    </div>

    <div class="ds-footer-col">
      <h3>Get in Touch</h3>
      <ul class="ds-footer-contact">
        <li><?php echo hb_icon( 'pin', 16 ); ?><span>#12, Somashetti Hall,<br>Chikkabanavara, Bengaluru – 560090</span></li>
        <li><?php echo hb_icon( 'phone', 16 ); ?><a href="tel:+916362616933">+91 6362616933</a></li>
        <li><?php echo hb_icon( 'mail', 16 ); ?><a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a></li>
        <li><?php echo hb_icon( 'clock', 16 ); ?><span>Mon–Sat: 9AM–6PM<br>Sun: 10AM–4PM</span></li>
      </ul>
    </div>

  </div>

  <div class="ds-wrap ds-footer-bottom">
    <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Hombisilu by SGR Manufacturing &amp; Trading. All rights reserved.</p>
    <nav class="ds-footer-legal" aria-label="Legal">
      <a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>">Terms &amp; Conditions</a>
      <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
      <a href="<?php echo esc_url( home_url( '/refund-policy/' ) ); ?>">Refund Policy</a>
      <a href="<?php echo esc_url( home_url( '/faqs/' ) ); ?>">FAQs</a>
    </nav>
    <p class="ds-footer-credit">Website designed by <a href="https://printigly.in" target="_blank" rel="noopener">Printigly</a></p>
  </div>
</footer>

<a href="https://wa.me/916362616933?text=Hi%20Hombisilu!%20I%20have%20a%20query%20about%20your%20products."
   class="ds-wa-float"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="Chat on WhatsApp">
  <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor" aria-hidden="true">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
  </svg>
</a>

<script>
(function () {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  if (!('IntersectionObserver' in window)) return;

  var targets = document.querySelectorAll(
    '.ds-section > .ds-wrap, .ds-bento-card, .ds-prod, .ds-promise-card, ' +
    '.ds-testi, .ds-blog-card, .ds-story-figure'
  );
  if (!targets.length) return;

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-visible');
      io.unobserve(entry.target);
    });
  }, { rootMargin: '0px 0px -6% 0px', threshold: 0.04 });

  targets.forEach(function (el, i) {
    /* Anything already on screen at load stays visible — no flash of blank. */
    if (el.getBoundingClientRect().top < window.innerHeight) return;
    el.classList.add('js-reveal');
    el.style.transitionDelay = Math.min(i % 4, 3) * 55 + 'ms';
    io.observe(el);
  });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
