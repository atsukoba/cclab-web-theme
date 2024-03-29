<?php get_header(); ?>

<section class="page single">
  <div class="section-inner-wrapper">
    <div class="container">
      <?php if (have_posts()) : the_post(); ?>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <p><?php the_content(); ?></p>
        <a class="share-btn twitter" href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&text=%20%23cclab%20%20%23SFC%20">
          <i class="fab fa-twitter"></i>
        </a>
        <a class="share-btn facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="share-btn line" href="http://line.me/R/msg/text/?<?php echo the_permalink(); ?>">LINE
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"><defs><style>.cls-1{fill:#00b900;}.cls-2{fill:#fff;}</style></defs><title>LINE Logo</title><g id="レイヤー_2" data-name="レイヤー 2"><g id="LINE_LOGO" data-name="LINE LOGO"><circle class="cls-1" cx="60" cy="60" r="60"/><g id="TYPE_A" data-name="TYPE A"><path class="cls-2" d="M99.91,56.4C99.91,38.54,82,24,60,24S20.09,38.54,20.09,56.4c0,16,14.2,29.42,33.38,31.95,1.3.28,3.07.86,3.51,2a8,8,0,0,1,.13,3.61l-.57,3.41c-.17,1-.8,4,3.46,2.15S83,86,91.36,76.32h0C97.14,70,99.91,63.54,99.91,56.4"/><path class="cls-1" d="M51.89,47.77h-2.8a.78.78,0,0,0-.78.77V65.93a.78.78,0,0,0,.78.78h2.8a.78.78,0,0,0,.78-.78V48.54a.78.78,0,0,0-.78-.77"/><path class="cls-1" d="M71.16,47.77h-2.8a.78.78,0,0,0-.78.77V58.87l-8-10.76L59.55,48h0l0-.05h0s0,0,0,0h0l0,0h0l0,0h0l0,0H56.17a.78.78,0,0,0-.78.77V65.93a.78.78,0,0,0,.78.78H59a.77.77,0,0,0,.77-.78V55.61l8,10.77a.89.89,0,0,0,.2.19h0l0,0h0l0,0h.06l.05,0h0a.64.64,0,0,0,.2,0h2.8a.78.78,0,0,0,.78-.78V48.54a.78.78,0,0,0-.78-.77"/><path class="cls-1" d="M45.14,62.35h-7.6V48.54a.78.78,0,0,0-.78-.77H34a.78.78,0,0,0-.78.77V65.93h0a.8.8,0,0,0,.22.54h0a.76.76,0,0,0,.54.22H45.14a.78.78,0,0,0,.78-.78v-2.8a.78.78,0,0,0-.78-.78"/><path class="cls-1" d="M86.62,52.12a.77.77,0,0,0,.77-.78V48.55a.77.77,0,0,0-.77-.78H75.43a.73.73,0,0,0-.53.22h0l0,0a.78.78,0,0,0-.21.53h0V65.93h0a.76.76,0,0,0,.22.54h0a.75.75,0,0,0,.53.22H86.62a.77.77,0,0,0,.77-.78v-2.8a.77.77,0,0,0-.77-.78H79V59.42h7.61a.77.77,0,0,0,.77-.78v-2.8a.77.77,0,0,0-.77-.78H79V52.12Z"/></g></g></g></svg> 
        </a>
      <?php else : ?>
        <p>記事内容がありません。</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>