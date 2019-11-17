<?php get_header(); ?>

<section class="page">
  <div class="section-inner-wrapper">
    <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <p><?php the_content(); ?></p>
      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>