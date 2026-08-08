<?php
/**
 * Front page — "Get in Touch" contact panel + "Find Us" sign-off block.
 *
 * Self-contained: no server-side form handler exists on this site, so this
 * section offers real, working contact channels only (tel:, mailto:, wa.me,
 * and a link to the /contact-us/ page) rather than another decorative form.
 *
 * Content reused verbatim from footer.php / template-contact.php:
 * address, phone, email, hours, WhatsApp number, FSSAI number, wordmark tag.
 */

$tpl  = get_template_directory_uri();
$shop = hb_shop_url();
?>

<section class="ds-section ds-section--cream hc-section" aria-labelledby="hc-heading">
  <div class="ds-wrap">

    <div class="ds-head ds-head--center">
      <span class="ds-eyebrow">Get In Touch</span>
      <h2 class="ds-title" id="hc-heading">We&rsquo;d Love to Hear From You</h2>
      <p class="ds-sub">Questions about an order, a product, or bulk buying &mdash; reach us directly, no forms required.</p>
    </div>

    <div class="hc-grid">

      <!-- LEFT: business info -->
      <div class="ds-card hc-info">
        <h3 class="hc-info-title">Our Details</h3>
        <ul class="hc-info-list">
          <li>
            <span class="hc-info-icon"><?php echo hb_icon( 'pin', 24 ); ?></span>
            <span>
              <strong>Address</strong>
              <span>#12, Somashetti Hall, Chikkabanavara,<br>Bengaluru &ndash; 560090</span>
            </span>
          </li>
          <li>
            <span class="hc-info-icon"><?php echo hb_icon( 'phone', 24 ); ?></span>
            <span>
              <strong>Phone</strong>
              <a href="tel:+916362616933">+91 6362616933</a>
            </span>
          </li>
          <li>
            <span class="hc-info-icon"><?php echo hb_icon( 'mail', 24 ); ?></span>
            <span>
              <strong>Email</strong>
              <a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a>
            </span>
          </li>
          <li>
            <span class="hc-info-icon"><?php echo hb_icon( 'clock', 24 ); ?></span>
            <span>
              <strong>Hours</strong>
              <span>Mon&ndash;Sat: 9AM&ndash;6PM &middot; Sun: 10AM&ndash;4PM</span>
            </span>
          </li>
        </ul>
        <span class="ds-chip ds-chip--gold">FSSAI: 11225332000490</span>
      </div>

      <!-- RIGHT: calm action panel -->
      <div class="ds-card hc-actions">
        <h3 class="hc-actions-title">Talk to Our Team</h3>
        <p class="hc-actions-copy">Prefer to message us directly? Chat on WhatsApp or head to our contact page &mdash; we typically respond within 24 hours on business days.</p>
        <div class="hc-actions-btns">
          <a href="https://wa.me/916362616933" target="_blank" rel="noopener" class="ds-btn ds-btn--gold">
            <?php echo hb_icon( 'chat', 18 ); ?> Chat on WhatsApp
          </a>
          <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="ds-btn ds-btn--outline">
            <?php echo hb_icon( 'arrow', 18 ); ?> Visit Contact Page
          </a>
        </div>
        <p class="hc-actions-note"><?php echo hb_icon( 'check', 14 ); ?> We typically respond within 24 hours.</p>
      </div>

    </div>
  </div>
</section>

<!-- "Find Us" closing sign-off -->
<section class="ds-section ds-section--tight ds-section--white hc-findus" aria-labelledby="hc-findus-heading">
  <div class="ds-wrap ds-wrap--narrow hc-findus-inner">

    <span class="ds-wordmark hc-findus-wordmark">
      <span class="ds-wordmark-name" id="hc-findus-heading">Hombisilu</span>
      <span class="ds-wordmark-tag">Golden Sunshine</span>
    </span>

    <p class="hc-findus-copy">Authentic South Indian foods, made with heritage and shipped with care &mdash; wherever you are in India.</p>

    <div class="hc-findus-links">
      <a href="https://wa.me/916362616933" target="_blank" rel="noopener" class="hc-findus-link" aria-label="Chat with us on WhatsApp">
        <?php echo hb_icon( 'chat', 18 ); ?> WhatsApp
      </a>
      <a href="mailto:hombisilufooods@gmail.com" class="hc-findus-link" aria-label="Email Hombisilu">
        <?php echo hb_icon( 'mail', 18 ); ?> Email
      </a>
    </div>
  </div>
</section>
