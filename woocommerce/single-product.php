<?php
/**
 * Single product — rebuilt on the ds-* design system.
 * Gallery, add-to-cart, reviews and related-products behaviour are unchanged;
 * only the markup and presentation are new.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>

<main class="ds-single">
<?php while ( have_posts() ) : the_post(); ?>
<?php
global $product;
$product = wc_get_product( get_the_ID() );

// Primary category (skipping the catch-all term 15) drives breadcrumb + tag.
$terms    = get_the_terms( get_the_ID(), 'product_cat' );
$prim_cat = null;
if ( $terms && ! is_wp_error( $terms ) ) {
  $visible = array_values( array_filter( $terms, function ( $t ) { return 15 != $t->term_id; } ) );
  if ( ! empty( $visible ) ) { $prim_cat = $visible[0]; }
}

// Featured image first, then any gallery images, de-duplicated.
$featured_id  = has_post_thumbnail() ? get_post_thumbnail_id() : null;
$gallery_meta = get_post_meta( get_the_ID(), '_product_image_gallery', true );
$extra_ids    = $gallery_meta ? array_map( 'intval', explode( ',', $gallery_meta ) ) : [];
$gallery_ids  = [];
if ( $featured_id ) { $gallery_ids[] = $featured_id; }
foreach ( $extra_ids as $gid ) {
  if ( ! in_array( $gid, $gallery_ids, true ) ) { $gallery_ids[] = $gid; }
}

$avg_rating   = (float) $product->get_average_rating();
$rating_count = (int) $product->get_rating_count();

// Product JSON-LD (price, stock, rating). WooCommerce emits it from its own
// single-product hooks, which this custom template never runs.
if ( isset( WC()->structured_data ) ) {
  WC()->structured_data->generate_product_data( $product );
}
?>

  <!-- ═══ BREADCRUMB ═══ -->
  <nav class="ds-crumbbar" aria-label="Breadcrumb">
    <div class="ds-wrap ds-crumbs">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <?php echo hb_icon( 'chev', 12 ); ?>
      <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>">Shop</a>
      <?php if ( $prim_cat ) : ?>
        <?php echo hb_icon( 'chev', 12 ); ?>
        <a href="<?php echo esc_url( get_term_link( $prim_cat ) ); ?>"><?php echo esc_html( $prim_cat->name ); ?></a>
      <?php endif; ?>
      <?php echo hb_icon( 'chev', 12 ); ?>
      <span aria-current="page"><?php the_title(); ?></span>
    </div>
  </nav>

  <!-- ═══ PRODUCT ═══ -->
  <section class="ds-section ds-section--tight ds-section--white">
    <?php // "Added to cart" / "Not enough stock" etc. — nothing showed them before. ?>
    <div class="ds-wrap ds-notices"><?php woocommerce_output_all_notices(); ?></div>
    <div class="ds-wrap ds-pdp">

      <!-- Gallery -->
      <div class="ds-pdp-media">
        <?php if ( ! empty( $gallery_ids ) ) : ?>
          <div class="ds-pdp-stage" id="pdp-stage">
            <?php
            // Main image is the LCP element on this page — load it eagerly.
            echo wp_get_attachment_image( $gallery_ids[0], 'large', false, [
              'class'         => 'ds-pdp-main',
              'loading'       => 'eager',
              'fetchpriority' => 'high',
              'decoding'      => 'async',
            ] );
            ?>
            <?php if ( $product->is_on_sale() ) : ?>
              <span class="ds-prod-flag ds-prod-flag--sale">Sale</span>
            <?php endif; ?>
          </div>

          <?php if ( count( $gallery_ids ) > 1 ) : ?>
            <div class="ds-pdp-thumbs" id="pdp-thumbs">
              <?php foreach ( $gallery_ids as $i => $gid ) : ?>
                <button type="button"
                        class="ds-pdp-thumb<?php echo 0 === $i ? ' is-active' : ''; ?>"
                        data-full="<?php echo esc_url( wp_get_attachment_image_url( $gid, 'large' ) ); ?>"
                        aria-label="View image <?php echo (int) $i + 1; ?>">
                  <?php echo wp_get_attachment_image( $gid, 'thumbnail', false, [ 'loading' => 'lazy', 'decoding' => 'async' ] ); ?>
                </button>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        <?php else : ?>
          <div class="ds-pdp-stage"><span class="ds-ph"><?php echo hb_icon( 'leaf', 88 ); ?></span></div>
        <?php endif; ?>

        <ul class="ds-pdp-trust">
          <li><?php echo hb_icon( 'shield', 20 ); ?> FSSAI Certified</li>
          <li><?php echo hb_icon( 'leaf', 20 ); ?> 100% Natural</li>
          <li><?php echo hb_icon( 'truck', 20 ); ?> Free Shipping &#8377;499+</li>
        </ul>
      </div>

      <!-- Summary -->
      <div class="ds-pdp-info">
        <?php if ( $prim_cat ) : ?>
          <a class="ds-prod-cat" href="<?php echo esc_url( get_term_link( $prim_cat ) ); ?>"><?php echo esc_html( $prim_cat->name ); ?></a>
        <?php endif; ?>

        <h1 class="ds-pdp-title"><?php the_title(); ?></h1>

        <div class="ds-pdp-rating">
          <span class="ds-prod-stars" aria-label="Rated <?php echo esc_attr( $avg_rating ); ?> out of 5">
            <?php for ( $s = 1; $s <= 5; $s++ ) : ?>
              <span class="<?php echo $s <= round( $avg_rating ) ? 'is-on' : 'is-off'; ?>"><?php echo hb_icon( 'star', 15 ); ?></span>
            <?php endfor; ?>
          </span>
          <a href="#ds-reviews"><?php echo (int) $rating_count; ?> review<?php echo 1 === $rating_count ? '' : 's'; ?></a>
          <span class="ds-chip<?php echo $product->is_in_stock() ? '' : ' ds-chip--out'; ?>">
            <?php echo $product->is_in_stock() ? hb_icon( 'check', 14 ) . ' In stock' : 'Out of stock'; ?>
          </span>
        </div>

        <div class="ds-pdp-price"><?php echo $product->get_price_html(); ?></div>

        <?php if ( $product->get_short_description() ) : ?>
          <div class="ds-pdp-excerpt"><?php echo wp_kses_post( $product->get_short_description() ); ?></div>
        <?php endif; ?>

        <div class="ds-pdp-cart">
          <?php woocommerce_template_single_add_to_cart(); ?>
        </div>

        <dl class="ds-pdp-meta">
          <div><dt><?php echo hb_icon( 'tag', 16 ); ?> SKU</dt><dd><?php echo esc_html( $product->get_sku() ? $product->get_sku() : 'HMB-' . get_the_ID() ); ?></dd></div>
          <div><dt><?php echo hb_icon( 'sprout', 16 ); ?> Type</dt><dd>100% Vegetarian</dd></div>
          <div><dt><?php echo hb_icon( 'shield', 16 ); ?> Certification</dt><dd>FSSAI No. 11225332000490</dd></div>
        </dl>

        <div class="ds-pdp-share">
          <span>Share</span>
          <a href="https://wa.me/?text=<?php echo rawurlencode( get_the_title() . ' - ' . get_permalink() ); ?>" target="_blank" rel="noopener" class="ds-btn ds-btn--outline ds-pdp-share-wa">
            <?php echo hb_icon( 'chat', 15 ); ?> WhatsApp
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- ═══ DESCRIPTION ═══ -->
  <?php if ( trim( get_the_content() ) ) : ?>
  <section class="ds-section ds-section--tight ds-section--cream">
    <div class="ds-wrap ds-wrap--narrow">
      <div class="ds-head">
        <span class="ds-eyebrow">Details</span>
        <h2 class="ds-title">Product Details</h2>
      </div>
      <div class="ds-prose"><?php the_content(); ?></div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ═══ REVIEWS ═══ -->
  <section class="ds-section ds-section--tight ds-section--white" id="ds-reviews">
    <div class="ds-wrap ds-wrap--narrow">
      <div class="ds-head">
        <span class="ds-eyebrow">Feedback</span>
        <h2 class="ds-title">Customer Reviews</h2>
      </div>
      <div class="ds-prose">
        <?php
        if ( comments_open() || get_comments_number() ) {
          comments_template();
        } else {
          echo '<p class="ds-sub">No reviews yet.</p>';
        }
        ?>
      </div>
    </div>
  </section>

  <!-- ═══ RELATED ═══ -->
  <?php
  $related = wc_get_related_products( get_the_ID(), 4 );
  if ( ! empty( $related ) ) : ?>
  <section class="ds-section ds-section--tight ds-section--cream">
    <div class="ds-wrap">
      <div class="ds-head ds-head--center">
        <span class="ds-eyebrow">More to Explore</span>
        <h2 class="ds-title">You May Also Like</h2>
      </div>
      <div class="ds-grid ds-grid--4 ds-grid--prods">
        <?php foreach ( $related as $i => $related_id ) {
          hb_product_card( wc_get_product( $related_id ), 99 );
        } ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

<?php endwhile; ?>
</main>

<script>
(function () {
  var thumbsWrap = document.getElementById('pdp-thumbs');
  var stage      = document.getElementById('pdp-stage');
  if (!thumbsWrap || !stage) return;

  thumbsWrap.addEventListener('click', function (e) {
    var thumb = e.target.closest('.ds-pdp-thumb');
    if (!thumb) return;

    var main = stage.querySelector('.ds-pdp-main');
    var src  = thumb.getAttribute('data-full');
    if (!main || !src || main.getAttribute('src') === src) return;

    /* Cross-fade rather than swapping the node, so layout never jumps. */
    main.style.opacity = '0';
    var next = new Image();
    next.onload = function () {
      main.src = src;
      main.removeAttribute('srcset');
      main.style.opacity = '1';
    };
    next.src = src;

    thumbsWrap.querySelectorAll('.ds-pdp-thumb').forEach(function (t) { t.classList.remove('is-active'); });
    thumb.classList.add('is-active');
  });
})();
</script>

<?php get_footer(); ?>
