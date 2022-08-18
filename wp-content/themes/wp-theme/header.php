<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header-nav">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="no-img" width="100px">
    </a>
    <div class="header-content flex">
      <div class="header-about">
        <ul>
          <li>
            <a href="<?php echo get_category_link(9); ?>">HTML</a>
          </li>
          <li>
            <a href="<?php echo get_category_link(8); ?>">CSS</a>
          </li>
          <li>
            <a href="<?php echo get_category_link(7); ?>">JavaScript</a>
          </li>
          <li>
            <a href="<?php echo get_category_link(5); ?>">PHP</a>
          </li>
          <li>
            <a href="<?php echo get_category_link(4); ?>">MySQL</a>
          </li>
        </ul>
      </div>
    </div>
  </header>