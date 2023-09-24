<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/common.css">
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="logo">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo get_theme_file_uri(); ?>/img/logo-css.png" alt="Suzuki Corporation">
      </a>
    </div>
  </header>