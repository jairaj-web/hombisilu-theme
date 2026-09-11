<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<main class="pc-page">

<!-- ══════════════════════════════════════════
     PAGE HEAD
══════════════════════════════════════════ -->
<section class="ds-pagehead">
  <div class="ds-wrap">
    <nav class="ds-crumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <?php echo hb_icon( 'chev', 12 ); ?>
      <span aria-current="page">Contact Us</span>
    </nav>

    <span class="ds-eyebrow">Get In Touch</span>
    <h1 class="ds-pagehead-title">We&rsquo;d Love to Hear From You</h1>
    <p class="ds-sub">Whether you have a question about our products, an order, or just want to say hello &mdash; our team is ready to help.</p>

    <div class="pc-quicklinks">
      <a href="tel:+916362616933" class="pc-quick">
        <span class="pc-quick-icon"><?php echo hb_icon( 'phone', 24 ); ?></span>
        <span class="pc-quick-text">
          <span class="pc-quick-label">Call Us</span>
          <span class="pc-quick-val">+91 6362616933</span>
        </span>
      </a>
      <a href="https://wa.me/916362616933" class="pc-quick pc-quick--wa">
        <span class="pc-quick-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </span>
        <span class="pc-quick-text">
          <span class="pc-quick-label">WhatsApp</span>
          <span class="pc-quick-val">Chat Now</span>
        </span>
      </a>
      <div class="pc-quick">
        <span class="pc-quick-icon"><?php echo hb_icon( 'clock', 24 ); ?></span>
        <span class="pc-quick-text">
          <span class="pc-quick-label">Business Hours</span>
          <span class="pc-quick-val">Mon&ndash;Sat 9AM&ndash;6PM</span>
        </span>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     MAIN CONTENT
══════════════════════════════════════════ -->
<section class="ds-section ds-section--cream">
  <div class="ds-wrap">
    <div class="ds-grid ds-grid--2 pc-grid">

      <!-- LEFT: Contact Info -->
      <div class="pc-info">
        <span class="ds-eyebrow">Our Details</span>
        <h2 class="ds-title">Contact Information</h2>

        <div class="pc-info-list">
          <div class="ds-card pc-info-item">
            <div class="pc-info-icon"><?php echo hb_icon( 'pin', 24 ); ?></div>
            <div>
              <h3>Our Address</h3>
              <p>#12, Somashetti Hall, Chikkabanavara,<br>Bengaluru &ndash; 560090, Karnataka</p>
            </div>
          </div>
          <div class="ds-card pc-info-item">
            <div class="pc-info-icon"><?php echo hb_icon( 'phone', 24 ); ?></div>
            <div>
              <h3>Phone</h3>
              <p><a href="tel:+916362616933">+91 6362616933</a></p>
            </div>
          </div>
          <div class="ds-card pc-info-item">
            <div class="pc-info-icon"><?php echo hb_icon( 'mail', 24 ); ?></div>
            <div>
              <h3>Email</h3>
              <p><a href="mailto:hombisilufooods@gmail.com">hombisilufooods@gmail.com</a></p>
            </div>
          </div>
          <div class="ds-card pc-info-item">
            <div class="pc-info-icon"><?php echo hb_icon( 'clock', 24 ); ?></div>
            <div>
              <h3>Business Hours</h3>
              <p>Mon&ndash;Sat: 9:00 AM &ndash; 6:00 PM<br>Sunday: 10:00 AM &ndash; 4:00 PM</p>
            </div>
          </div>
        </div>

        <div class="ds-card pc-cert">
          <div class="pc-cert-icon"><?php echo hb_icon( 'shield', 24 ); ?></div>
          <div>
            <div class="pc-cert-title">FSSAI Certified</div>
            <div class="pc-cert-num">License No: 11225332000490</div>
          </div>
        </div>

        <a href="https://wa.me/916362616933" class="ds-btn ds-btn--primary pc-wa-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Chat on WhatsApp
        </a>
      </div>

      <!-- RIGHT: Form -->
      <div class="ds-card pc-form-card" id="contact-form">
        <span class="ds-eyebrow">Message Us</span>
        <h2 class="ds-title">Send Us a Message</h2>
        <p class="ds-sub">We typically respond within 24 hours on business days.</p>

        <?php
        $sent_state = isset( $_GET['sent'] ) ? sanitize_key( wp_unslash( $_GET['sent'] ) ) : '';
        $notices    = [
          '1'       => [ 'ok', 'Thank you! Your message has been sent &mdash; we&rsquo;ll get back to you within 24 hours.' ],
          '0'       => [ 'err', 'Sorry, your message could not be sent right now. Please call or WhatsApp us on +91 6362616933.' ],
          'invalid' => [ 'err', 'Please fill in your name, a valid email, a subject and your message.' ],
          'wait'    => [ 'err', 'You just sent a message &mdash; please wait a few seconds before sending another.' ],
        ];
        if ( isset( $notices[ $sent_state ] ) ) :
          list( $notice_type, $notice_text ) = $notices[ $sent_state ]; ?>
          <p class="pc-notice pc-notice--<?php echo esc_attr( $notice_type ); ?>" role="<?php echo 'ok' === $notice_type ? 'status' : 'alert'; ?>"><?php echo wp_kses_post( $notice_text ); ?></p>
        <?php endif; ?>

        <form class="pc-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
          <input type="hidden" name="action" value="hombisilu_contact">
          <div class="pc-hp" aria-hidden="true">
            <label for="contact_website">Website</label>
            <input type="text" id="contact_website" name="contact_website" tabindex="-1" autocomplete="off">
          </div>

          <div class="pc-row">
            <div class="pc-field">
              <label for="contact_name">Full Name <span class="pc-req">*</span></label>
              <input type="text" id="contact_name" name="contact_name" required placeholder="Your full name">
            </div>
            <div class="pc-field">
              <label for="contact_email">Email Address <span class="pc-req">*</span></label>
              <input type="email" id="contact_email" name="contact_email" required placeholder="your@email.com">
            </div>
          </div>

          <div class="pc-row">
            <div class="pc-field">
              <label for="contact_phone">Phone Number</label>
              <input type="tel" id="contact_phone" name="contact_phone" placeholder="+91 XXXXX XXXXX">
            </div>
            <div class="pc-field">
              <label for="contact_subject">Subject <span class="pc-req">*</span></label>
              <select id="contact_subject" name="contact_subject" required>
                <option value="">Select a subject</option>
                <option value="order">Order Related</option>
                <option value="product">Product Enquiry</option>
                <option value="bulk">Bulk / Wholesale Order</option>
                <option value="return">Return / Refund</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <div class="pc-field">
            <label for="contact_message">Message <span class="pc-req">*</span></label>
            <textarea id="contact_message" name="contact_message" required rows="5" placeholder="Tell us how we can help&hellip;"></textarea>
          </div>

          <button type="submit" class="ds-btn ds-btn--primary pc-submit">
            <?php echo hb_icon( 'arrow', 18 ); ?>
            Send Message
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
