<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(''); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="container header__content">
  <img class="header__logo header_child" src="<?php echo get_field('logo-nav', 'option')["url"]; ?>" alt="<?php echo get_field('logo-nav', 'option')["alt"]; ?>">

    <div class="header_child"> 
    <?php wp_nav_menu(['theme_location' => 'primary_menu']);?>
    </div>
  </div>
</header>
