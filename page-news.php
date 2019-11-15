<?php get_header(); ?>


<section class="page news">
  <div class="section-inner-wrapper">
    <div class="container">
      <h1>News</h1>

      <!-- 以下コピーして記事追加
          <article id="記事ID" class="col-sm-12 col-md-6 col-lg-4">
            <h2>タイトル</h2>
            <p class="date">YYYY-MM-DD</p>
            <div class="eyecatch">
              <a href="../img/画像ファイル.png" class="image" data-modaal-desc="画像名">
                <img src="../img/画像ファイル.png" alt="">
              </a>
            </div>
            <p class="description">
              本文
            </p>
          </article>
          <hr>
        -->

      <div class="row">
        <article id="news_2_orf" class="col-sm-12 col-md-6 col-lg-4">
          <h2>Open Research Forum 2019出展のお知らせ</h2>
          <p class="date">2019-09-28</p>
          <div class="eyecatch">
            <a href="https://i.gyazo.com/b4e039ce6c1178b676d2c6a9803b16e8.png" class="image" data-modaal-desc="Screenshots">
              <img src="https://i.gyazo.com/b4e039ce6c1178b676d2c6a9803b16e8.png" alt="">
            </a>
          </div>
          <p class="description">
            Open Research Forum 2019へのブース出展が決定致しました<br>
            ORF2019: <a href="https://orf.sfc.keio.ac.jp/2019/">https://orf.sfc.keio.ac.jp/2019/</a>
            各プロジェクトの詳細は <a href="https://cclab.sfc.keio.ac.jp/orf2019/">こちら</a>
          </p>
        </article>
        <hr>
        <article id="news_1_publish" class="col-sm-12 col-md-6 col-lg-4">
          <h2>Webページを公開しました</h2>
          <p class="date">2019-09-28</p>
          <div class="eyecatch">
            <a href="../img/screenshots.png" class="image" data-modaal-desc="Screenshots">
              <img src="../img/screenshots.png" alt="screenshot">
            </a>
          </div>
          <p class="description">
            この度慶應義塾大学SFC Computational Creativity Lab. 徳井研究室の公式Webページ(本サイト)を公開いたしました。情報発信等に活用してまいりますので，よろしくお願いいたします。
          </p>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- 
<div class="container">
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