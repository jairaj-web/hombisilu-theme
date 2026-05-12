<?php
/*
Template Name: Contact Us
*/
get_header(); ?>
<main class="contact-page">
<section style="background:linear-gradient(135deg,#8B4513 0%,#D4A017 100%);color:#fff;padding:80px 20px;text-align:center;">
<div class="container">
<p style="display:inline-block;background:rgba(255,255,255,0.2);padding:6px 18px;border-radius:20px;font-size:13px;letter-spacing:2px;text-transform:uppercase;margin-bottom:16px;">Get In Touch</p>
<h1 style="font-size:clamp(2rem,5vw,3.5rem);margin-bottom:16px;font-family:Georgia,serif;">We'd Love to Hear From You</h1>
<p style="font-size:1.1rem;opacity:0.9;max-width:600px;margin:0 auto;">Whether you have a question about our products, your order, or anything else — our team is ready to help.</p>
</div>
</section>
<section style="padding:80px 20px;background:#fff;">
<div class="container" style="max-width:1100px;margin:0 auto;display:grid;grid-template-columns:1fr 1.5fr;gap:60px;align-items:start;">
<div>
<h2 style="font-family:Georgia,serif;font-size:1.8rem;color:#8B4513;margin-bottom:30px;">Contact Information</h2>
<div style="display:flex;align-items:flex-start;gap:16px;margin-bottom:28px;">
<div style="width:48px;height:48px;background:#FFF8F0;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:20px;">📍</div>
<div><h4 style="color:#8B4513;margin-bottom:6px;">Our Address</h4><p style="color:#555;">#12, Somashetti Hall, Chikkabanavara, Bengaluru – 560090, Karnataka</p></div>
</div>
<div style="display:flex;align-items:flex-start;gap:16px;margin-bottom:28px;">
<div style="width:48px;height:48px;background:#FFF8F0;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:20px;">📞</div>
<div><h4 style="color:#8B4513;margin-bottom:6px;">Phone</h4><p><a href="tel:+916362616933" style="color:#555;text-decoration:none;">+91 6362616933</a></p></div>
</div>
<div style="display:flex;align-items:flex-start;gap:16px;margin-bottom:28px;">
<div style="width:48px;height:48px;background:#FFF8F0;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:20px;">✉️</div>
<div><h4 style="color:#8B4513;margin-bottom:6px;">Email</h4><p><a href="mailto:hombisilufooods@gmail.com" style="color:#8B4513;">hombisilufooods@gmail.com</a></p></div>
</div>
<div style="display:flex;align-items:flex-start;gap:16px;margin-bottom:40px;">
<div style="width:48px;height:48px;background:#FFF8F0;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:20px;">🕐</div>
<div><h4 style="color:#8B4513;margin-bottom:6px;">Business Hours</h4><p style="color:#555;">Mon–Sat: 9:00 AM – 6:00 PM<br>Sunday: 10:00 AM – 4:00 PM</p></div>
</div>
<div style="background:#FFF8F0;border-radius:12px;padding:24px;">
<h4 style="color:#8B4513;margin-bottom:8px;">FSSAI Certified</h4>
<p style="color:#666;font-size:0.9rem;">License No: 11225332000490</p>
</div>
</div>
<div>
<h2 style="font-family:Georgia,serif;font-size:1.8rem;color:#8B4513;margin-bottom:30px;">Send Us a Message</h2>
<form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
<input type="hidden" name="action" value="hombisilu_contact">
<?php wp_nonce_field('hombisilu_contact_nonce'); ?>
<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px;">
<div>
<label style="display:block;color:#333;font-weight:600;margin-bottom:8px;font-size:0.9rem;">Full Name *</label>
<input type="text" name="contact_name" required placeholder="Your full name" style="width:100%;padding:12px 16px;border:2px solid #E8DDD0;border-radius:8px;font-size:1rem;box-sizing:border-box;">
</div>
<div>
<label style="display:block;color:#333;font-weight:600;margin-bottom:8px;font-size:0.9rem;">Email *</label>
<input type="email" name="contact_email" required placeholder="your@email.com" style="width:100%;padding:12px 16px;border:2px solid #E8DDD0;border-radius:8px;font-size:1rem;box-sizing:border-box;">
</div>
</div>
<div style="margin-bottom:20px;">
<label style="display:block;color:#333;font-weight:600;margin-bottom:8px;font-size:0.9rem;">Phone Number</label>
<input type="tel" name="contact_phone" placeholder="+91 XXXXX XXXXX" style="width:100%;padding:12px 16px;border:2px solid #E8DDD0;border-radius:8px;font-size:1rem;box-sizing:border-box;">
</div>
<div style="margin-bottom:20px;">
<label style="display:block;color:#333;font-weight:600;margin-bottom:8px;font-size:0.9rem;">Subject *</label>
<select name="contact_subject" required style="width:100%;padding:12px 16px;border:2px solid #E8DDD0;border-radius:8px;font-size:1rem;background:#fff;">
<option value="">Select a subject</option>
<option value="order">Order Related</option>
<option value="product">Product Enquiry</option>
<option value="bulk">Bulk / Wholesale Order</option>
<option value="return">Return / Refund</option>
<option value="other">Other</option>
</select>
</div>
<div style="margin-bottom:28px;">
<label style="display:block;color:#333;font-weight:600;margin-bottom:8px;font-size:0.9rem;">Message *</label>
<textarea name="contact_message" required rows="6" placeholder="Tell us how we can help..." style="width:100%;padding:12px 16px;border:2px solid #E8DDD0;border-radius:8px;font-size:1rem;box-sizing:border-box;resize:vertical;"></textarea>
</div>
<button type="submit" style="background:linear-gradient(135deg,#8B4513,#A0522D);color:#fff;border:none;padding:16px 40px;border-radius:8px;font-size:1rem;font-weight:700;cursor:pointer;width:100%;">
Send Message
</button>
</form>
</div>
</div>
</section>
</main>
<?php get_footer(); ?>
