<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>" alt="Furniture Design">
  
  <?php wp_head(); ?>
</head>
<body>
<!-- header -->
  <header id="header" class="wrapper">
    <div class="site-title">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>">
      </a>
    </div>
    
    
    <nav id="header-nav">
      <ul class="header-list">
        <li><a href="<?php echo esc_url(home_url('/category/products/')); ?>">PRODUCTS</a></li>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
        <li><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY</a></li>
        <li><a href="mailto:xxxxx@xxx.xxx.com?subject=お問い合わせ">CONTACT</a></li>
      </ul>
    </nav>

    <div class="header-btn">
      <span></span>
      <span></span>
    </div>
    <div id="mask"></div>
  </header>