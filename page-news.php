<?php get_header(); ?>


<section class="page news">
  <div class="section-inner-wrapper">
    <div class="container">
      <h1>News</h1>
      <?php $blog_posts = query_posts('post_type=post&category_name={news}&posts_per_pege=12'); ?>
      <?php $count = 1; ?>
      <?php foreach ($blog_posts as $post) : setup_postdata($post); ?>
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
      <?php endforeach; ?>
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