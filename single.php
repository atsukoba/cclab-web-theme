<?php get_header(); ?>

<section class="post">
  <div class="section-inner-wrapper">
    <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <p><?php the_category(', '); ?></p>
          <p><?php the_content(); ?></p>
      <?php endwhile;
      endif; ?>
      <?php previous_post_link('%link', 'go to previous post'); ?>
      <?php next_post_link('%link', 'go to next post'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>