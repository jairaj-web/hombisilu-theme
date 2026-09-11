<?php
/**
 * Fallback template — 404, search results, blog posts and post archives.
 * Pages, products and the shop have their own templates; everything else
 * lands here, so it has to handle "nothing found" as well as a result list.
 */
get_header();

if ( is_404() ) {
  $eyebrow = 'Error 404';
  $title   = 'Page not found';
  $sub     = 'The page you were looking for has moved or no longer exists.';
} elseif ( is_search() ) {
  $eyebrow = 'Search';
  $title   = sprintf( 'Results for “%s”', get_search_query() );
  $sub     = '';
} elseif ( is_singular() ) {
  $eyebrow = '';
  $title   = single_post_title( '', false );
  $sub     = '';
} elseif ( is_archive() ) {
  $eyebrow = 'Archive';
  $title   = wp_strip_all_tags( get_the_archive_title() );
  $sub     = wp_strip_all_tags( get_the_archive_description() );
} else {
  $eyebrow = 'Journal';
  $title   = 'From Our Kitchen';
  $sub     = '';
}
?>

<main class="ds-shop">

  <section class="ds-pagehead">
    <div class="ds-wrap">
      <nav class="ds-crumbs" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <?php echo hb_icon( 'chev', 12 ); ?>
        <span aria-current="page"><?php echo esc_html( $title ); ?></span>
      </nav>
      <?php if ( $eyebrow ) : ?><span class="ds-eyebrow"><?php echo esc_html( $eyebrow ); ?></span><?php endif; ?>
      <h1 class="ds-pagehead-title"><?php echo esc_html( $title ); ?></h1>
      <?php if ( $sub ) : ?><p class="ds-sub"><?php echo esc_html( $sub ); ?></p><?php endif; ?>
    </div>
  </section>

  <section class="ds-section ds-section--tight ds-section--cream">
    <div class="ds-wrap<?php echo is_singular() ? ' ds-wrap--narrow' : ''; ?>">

      <?php if ( is_singular() && have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="ds-prose"><?php the_content(); ?></article>
        <?php endwhile; ?>

      <?php elseif ( ! is_404() && have_posts() ) : ?>
        <div class="ds-grid ds-grid--3">
          <?php while ( have_posts() ) : the_post(); ?>
            <article class="ds-card ds-blog-card">
              <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" class="ds-blog-figure" tabindex="-1" aria-hidden="true">
                  <?php the_post_thumbnail( 'medium_large', [ 'loading' => 'lazy', 'decoding' => 'async' ] ); ?>
                </a>
              <?php endif; ?>
              <div class="ds-blog-body">
                <span class="ds-blog-meta">
                  <span class="ds-blog-cat"><?php echo esc_html( 'product' === get_post_type() ? 'Product' : get_the_date() ); ?></span>
                </span>
                <h2 class="ds-blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="ds-sub"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
                <a href="<?php the_permalink(); ?>" class="ds-link">View <?php echo hb_icon( 'arrow', 14 ); ?></a>
              </div>
            </article>
          <?php endwhile; ?>
        </div>

        <?php
        $links = paginate_links( [ 'type' => 'list', 'prev_text' => '&larr; Prev', 'next_text' => 'Next &rarr;' ] );
        if ( $links ) {
          echo '<nav class="ds-pagination" aria-label="Pagination">' . $links . '</nav>';
        }
        ?>

      <?php else : ?>
        <div class="ds-empty">
          <span class="ds-empty-icon"><?php echo hb_icon( is_404() ? 'leaf' : 'search', 44 ); ?></span>
          <h2 class="ds-title"><?php echo is_search() ? 'Nothing matched your search' : 'Let’s get you back on track'; ?></h2>
          <p class="ds-sub">Search our products, or head straight to the shop.</p>
          <form role="search" method="get" class="ds-sort" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label for="fallback-search" class="screen-reader-text">Search products</label>
            <input type="search" id="fallback-search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="Search pickles, honey, coffee…">
            <input type="hidden" name="post_type" value="product">
            <button type="submit" class="ds-btn ds-btn--outline">Search</button>
          </form>
          <a href="<?php echo esc_url( hb_shop_url() ); ?>" class="ds-btn ds-btn--primary">View All Products</a>
        </div>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>
