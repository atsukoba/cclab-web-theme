<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Computational Creativity Lab.</title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=B612+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ress.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/curtains.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
  <?php wp_head(); ?>
  <meta name="google-site-verification" content="ZO5mo2UN2d6wmbINYr9K9W8dP-fCMpmVeS7lK4jXGis" />
</head>

<body>
  <header class="header">
    <a href="/" class="header__logo">
      <h1>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_h.svg" alt="">
      </h1>
    </a>
    <div class="nav__button inactive">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="pc">
      <ul>
        <li>
          <a href="<?php echo esc_url(home_url('/#about')); ?>" class="disabled">About</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="">Contact</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/members/')); ?>" class="">Members</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/works/')); ?>" class="disabled">Works</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/news/')); ?>" class="">News</a>
        </li>
      </ul>
    </nav>
  </header>
  <nav class="sp inactive">
    <ul>
      <li>
        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="disabled">
          <i class="fas fa-angle-right"></i>
          About
        </a>
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="">
          <i class="fas fa-angle-right"></i>
          Contact
        </a>
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('/members/')); ?>" class="">
          <i class="fas fa-angle-right"></i>
          Members
        </a>
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('/works/')); ?>" class="disabled">
          <i class="fas fa-angle-right"></i>
          Works
        </a>
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="">
          <i class="fas fa-angle-right"></i>
          News
        </a>
      </li>
    </ul>
    <div class="pos" id="posBg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_t_pos.svg" alt="" class="menu_img">
    </div>
    <div class="neg" id="negBg">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_t_neg.svg" alt="" class="menu_img">
    </div>
    <hr>
    <p><a href="https://www.sfc.keio.ac.jp/">慶應義塾大学 湘南藤沢キャンパス</a></p>
    <p>環境情報学部 政策・メディア研究科 徳井直生研究室</p>
    <hr>
    <p>© <?php echo date("Y"); ?> Computational Creativity Lab.</p>
  </nav>