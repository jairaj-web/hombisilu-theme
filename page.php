<?php get_header(); ?>

<main class="inner-page">

  <!-- Page Hero -->
  <div class="page-hero">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php if (get_the_excerpt()) : ?>
        <p><?php the_excerpt(); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <!-- Page Content -->
  <div class="page-content-wrap">
    <div class="page-card">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>
