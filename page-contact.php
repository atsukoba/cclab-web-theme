<?php get_header(); ?>

<!-- <section class="page">
  <div class="section-inner-wrapper">
    <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <p><?php the_category(', '); ?></p>
          <p><?php the_content(); ?></p>
      <?php endwhile;
      endif; ?>
      <?php previous_post_link('%link', '古い記事へ'); ?>
      <?php next_post_link('%link', '新しい記事へ'); ?>
    </div>
  </div>
</section> -->

<section class="page contact">
  <div class="section-inner-wrapper">
    <div class="container">
      <h1>Contact</h1>
      <table class="table">
        <tr>
          <th><strong>Email</strong></th>
          <td><a href="mailto:tokui@sfc.keio.ac.jp">tokui@sfc.keio.ac.jp</a></td>
        </tr>
        <tr>
          <th><strong>Twitter</strong></th>
          <td>Coming Soon...<a href=""></a></td>
        </tr>
        <tr>
          <th><strong>Facebook</strong></th>
          <td>Coming Soon...<a href=""></a></td>
        </tr>
        <tr>
          <th><strong>YouTube</strong></th>
          <td>Coming Soon...<a href=""></a></td>
        </tr>
      </table>
      <hr>
      <p>
        our laboratory @Z104
      </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d260.07462166735877!2d139.428653245338!3d35.386542859739784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601853ea5f37a509%3A0xb3a89351b539a82a!2z44CSMjUyLTA4MTYg56We5aWI5bed55yM6Jek5rKi5biC6YGg6JekIM6WKOOCvOODvOOCvynppKg!5e0!3m2!1sja!2sjp!4v1569610522228!5m2!1sja!2sjp" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
</section>

<?php get_footer(); ?>