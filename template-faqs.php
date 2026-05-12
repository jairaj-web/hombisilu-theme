<?php
/*
Template Name: FAQs
*/
get_header(); ?>
<main class="faqs-page">
<section style="background:linear-gradient(135deg,#2E6B3E 0%,#D4A017 100%);color:#fff;padding:80px 20px;text-align:center;">
<div class="container">
<h1 style="font-size:clamp(2rem,5vw,3.5rem);margin-bottom:16px;font-family:Georgia,serif;">Frequently Asked Questions</h1>
<p style="font-size:1.1rem;opacity:0.9;max-width:600px;margin:0 auto;">Everything you need to know about Hombisilu products, orders, and more.</p>
</div></section>
<section style="padding:80px 20px;background:#F4F9F0;">
<div class="container" style="max-width:850px;margin:0 auto;">
<style>
.faq-item{background:#fff;border-radius:10px;margin-bottom:12px;box-shadow:0 2px 8px rgba(0,0,0,.06);overflow:hidden}
.faq-q{padding:20px 24px;cursor:pointer;display:flex;justify-content:space-between;align-items:center;font-weight:600;color:#333;font-size:1rem}
.faq-q:hover,.faq-item.open .faq-q{background:#F4F9F0;color:#2E6B3E}
.faq-icon{color:#2E6B3E;font-size:1.4rem;transition:transform .3s;flex-shrink:0;margin-left:16px}
.faq-a{padding:0 24px;max-height:0;overflow:hidden;transition:max-height .35s ease,padding .3s;color:#555;line-height:1.7}
.faq-item.open .faq-a{max-height:400px;padding:0 24px 20px}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-cat-title{font-family:Georgia,serif;font-size:1.5rem;color:#2E6B3E;margin:0 0 20px;padding-bottom:12px;border-bottom:2px solid #D4A017}
.faq-cat{margin-bottom:50px}
</style>
<div class="faq-cat"><h2 class="faq-cat-title">Products &amp; Quality</h2>
<div class="faq-item"><div class="faq-q">What makes Hombisilu products different? <span class="faq-icon">+</span></div><div class="faq-a">Hombisilu products are made using traditional South Indian recipes with 100% natural ingredients. No artificial preservatives, colours, or flavours. Every product is handcrafted in small batches. FSSAI certified.</div></div>
<div class="faq-item"><div class="faq-q">Are your products preservative-free? <span class="faq-icon">+</span></div><div class="faq-a">Yes. We do not add any artificial preservatives, synthetic colours, or chemical additives. Natural shelf life is maintained through traditional preparation methods.</div></div>
<div class="faq-item"><div class="faq-q">Are your products vegetarian? <span class="faq-icon">+</span></div><div class="faq-a">Yes, all Hombisilu products are 100% vegetarian. We display the green vegetarian symbol on all packaging.</div></div>
<div class="faq-item"><div class="faq-q">Are your products gluten-free? <span class="faq-icon">+</span></div><div class="faq-a">Many products such as rice-based items, lentil snacks, and certain chutneys are naturally gluten-free. Check individual product pages for allergen details.</div></div>
<div class="faq-item"><div class="faq-q">What is the shelf life of your products? <span class="faq-icon">+</span></div><div class="faq-a">Most dry products last 3-6 months in a cool, dry place. Pickles and chutneys typically last 3-4 months. Check the Best Before date on each pack.</div></div>
<div class="faq-item"><div class="faq-q">How should I store Hombisilu products? <span class="faq-icon">+</span></div><div class="faq-a">Store in a cool, dry place away from direct sunlight. Once opened, transfer to an airtight container. Always use a dry spoon to avoid moisture contamination.</div></div>
</div>
<div class="faq-cat"><h2 class="faq-cat-title">Ordering &amp; Payment</h2>
<div class="faq-item"><div class="faq-q">How do I place an order? <span class="faq-icon">+</span></div><div class="faq-a">Browse our shop, add products to cart, proceed to checkout, enter your delivery address and payment details, and confirm. You will receive an email confirmation with tracking information.</div></div>
<div class="faq-item"><div class="faq-q">What payment methods do you accept? <span class="faq-icon">+</span></div><div class="faq-a">We accept UPI (GPay, PhonePe, Paytm), Credit/Debit Cards (Visa, MasterCard, RuPay), Net Banking, and Cash on Delivery in select areas.</div></div>
<div class="faq-item"><div class="faq-q">Can I modify or cancel my order? <span class="faq-icon">+</span></div><div class="faq-a">You can modify or cancel within 12 hours of placing by contacting hombisilufooods@gmail.com or +91 6362616933. Once dispatched, cancellation is not possible.</div></div>
<div class="faq-item"><div class="faq-q">Do you offer bulk or wholesale orders? <span class="faq-icon">+</span></div><div class="faq-a">Yes! Email hombisilufooods@gmail.com with your requirements and we will provide a custom quote with special pricing for large orders.</div></div>
</div>
<div class="faq-cat"><h2 class="faq-cat-title">Shipping &amp; Delivery</h2>
<div class="faq-item"><div class="faq-q">Do you offer free shipping? <span class="faq-icon">+</span></div><div class="faq-a">Yes! Free shipping on all orders above Rs.499. A nominal fee applies for orders below Rs.499 based on location.</div></div>
<div class="faq-item"><div class="faq-q">How long does delivery take? <span class="faq-icon">+</span></div><div class="faq-a">Within Bengaluru: 1-2 business days. Other Karnataka cities: 2-4 business days. Rest of India: 4-7 business days.</div></div>
<div class="faq-item"><div class="faq-q">How can I track my order? <span class="faq-icon">+</span></div><div class="faq-a">Once dispatched, you will receive an SMS and email with your tracking number and courier partner name.</div></div>
</div>
<div class="faq-cat"><h2 class="faq-cat-title">Returns &amp; Refunds</h2>
<div class="faq-item"><div class="faq-q">What is your return policy? <span class="faq-icon">+</span></div><div class="faq-a">We accept returns only for damaged, defective, or wrong items. As food products, we cannot accept returns for change of mind. Report issues within 48 hours with photographs.</div></div>
<div class="faq-item"><div class="faq-q">What if I receive a damaged or wrong product? <span class="faq-icon">+</span></div><div class="faq-a">Email hombisilufooods@gmail.com with your order number and clear photos within 48 hours. We will arrange a replacement or full refund promptly.</div></div>
<div class="faq-item"><div class="faq-q">How long does a refund take? <span class="faq-icon">+</span></div><div class="faq-a">Once approved, refunds are credited back to your original payment method within 5-7 business days.</div></div>
</div>
<div style="background:#2E6B3E;border-radius:16px;padding:48px;text-align:center;color:#fff;margin-top:20px;">
<h2 style="font-family:Georgia,serif;font-size:2rem;margin-bottom:16px;">Still Have Questions?</h2>
<p style="opacity:.9;margin-bottom:28px;">Our team is just a message away.</p>
<a href="/contact" style="background:#D4A017;color:#fff;padding:14px 36px;border-radius:8px;text-decoration:none;font-weight:700;">Contact Us</a>
</div>
</div></section></main>
<script>
document.querySelectorAll(".faq-q").forEach(function(btn){btn.addEventListener("click",function(){var item=this.closest(".faq-item");var isOpen=item.classList.contains("open");document.querySelectorAll(".faq-item").forEach(function(i){i.classList.remove("open");});if(!isOpen)item.classList.add("open");});});
</script>
<?php get_footer(); ?>
