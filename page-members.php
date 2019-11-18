<?php get_header(); ?>

<section class="page members">
  <div class="section-inner-wrapper">
    <div class="container">
      <h1>Members</h1>
      <table class="table">
        <tbody>
          <thead class="thead-dark">
            <tr>
              <th colspan="2">Faculty</th>
            </tr>
          </thead>
          <tr>
            <td>Nao Tokui</td>
            <td><a href="http://naotokui.net/">Surf on Entropy</a></td>
          </tr>
          <thead class="thead-dark">
            <tr>
              <th colspan="2">D2</th>
            </tr>
          </thead>
          <tr>
            <td>Scott Allen</td>
            <td><a href="https://scottallen.ws/">scottallen.ws</a></td>
          </tr>
          <thead class="thead-dark">
            <tr>
              <th colspan="2">M2</th>
            </tr>
          </thead>
          <tr>
            <td>Ryosuke Nakajima</td>
            <td><a href="http://rystylee.com/">rystylee.com</a></td>
          </tr>
          <thead class="thead-dark">
            <tr>
              <th colspan="2">M1</th>
            </tr>
          </thead>
          <thead class="thead-dark">
            <tr>
              <th colspan="2">B4</th>
            </tr>
          </thead>
          <tr>
            <td>Akihiro Sato</td>
            <td><a href=""></a></td>
          </tr>
          <tr>
            <td>Keisuke Nohara</td>
            <td><a href="https://k-isk.com">k-isk.com</a></td>
          </tr>
          <tr>
            <td>Makoto Amano</td>
            <td><a href="https://makoamano.myportfolio.com/contact-1">makoamano.myportfolio.com</a></td>
          </tr>
          <tr>
            <td>Shin Hanagata</td>
            <td><a href="https://hana-folio.tumblr.com/">hana-folio.tumblr.com</a></td>
          </tr>
          <tr>
            <td>Yuki Kawabe</td>
            <td><a href=""></a></td>
          </tr>
          <tr>
            <td>Yusuke Yamada</td>
            <td><a href=""></a></td>
          </tr>
          <thead class="thead-dark">
            <tr>
              <th colspan="2">B3</th>
            </tr>
          </thead>
          <tr>
            <td>Atsuya Kobayashi</td>
            <td><a href="https://www.atsuya.xyz">atsuya.xyz</a></td>
          </tr>
          <tr>
            <td>Hanako Hirata</td>
            <td><a href="https://hanaecom.tumblr.com">hanaecom.tumblr.com</a></td>
          </tr>
          <tr>
            <td>Leo Anzai</td>
            <td><a href="https://soundcloud.com/reo_anzai">soundcloud.com/reo_anzai</a></td>
          </tr>
          <tr>
            <td>Ryo Nishikado</td>
            <td><a href="https://ryo-simon-mf.github.io">ryo-simon-mf.github.io</a></td>
          </tr>
          <tr>
            <td>Satomi Osaki</td>
            <td><a href=""></a></td>
          </tr>
          <tr>
            <td>Yuga Kobayashi</td>
            <td><a href=""></a></td>
          </tr>
          <thead class="thead-dark">
            <tr>
              <th colspan="2">B2</th>
            </tr>
          </thead>
          <tr>
            <td>Ryogo Ishino</td>
            <td><a href=""></a></td>
          </tr>
          <tr>
            <td>Yoriaki Hirota</td>
            <td><a href=""></a></td>
          </tr>
          <thead class="thead-dark">
            <tr>
              <th colspan="2">B1</th>
            </tr>
          </thead>
          <tr>
            <td>Santa Naruse</td>
            <td><a href="https://santa-sukitoku.github.io/">santa-sukitoku.github.io</a></td>
          </tr>
          <tr>
            <td>Takayuki Yamaguchi</td>
            <td><a href=""></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- <div class="container">
  <section class="post">
    <div class="section-inner-wrapper">
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
  </section>
</div> -->

<?php get_footer(); ?>