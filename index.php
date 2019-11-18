<?php get_header(); ?>

<section class="page news">
  <div class="section-inner-wrapper">
    <div class="container">
      <h1><?php the_archive_title(); ?></h1>
      <?php $count = 1; ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_post(); ?>
          <article id="<?php the_ID(); ?>" class="col-sm-12 col-md-6 col-lg-4">
            <a href="<?php the_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
            </a>
            <p class="date">
              <?php the_time('Y-m-d'); ?>
            </p>
            <div class="eyecatch">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php else : ?>
                <a href="<?php the_permalink(); ?>" class="image" data-modaal-desc="<?php the_title(); ?>">
                  <img src="<?php echo get_first_image(); ?>" alt="">
                </a>
              <?php endif; ?>
            </div>
            <p class="description">
              <?php the_excerpt(); ?>
            </p>
          </article>
          <?php $count++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php
      $big = 999999999; // need an unlikely integer
      echo paginate_links(
        array(
          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
          'format' => '/page/%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $the_query->max_num_pages
        )
      );
      ?>
      <?php posts_nav_link('｜', 'back', 'Show More'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>