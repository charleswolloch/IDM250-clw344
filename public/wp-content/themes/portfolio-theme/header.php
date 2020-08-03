<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="container header__content">
    <img class="header__logo header_child" src="http://charleswolloch.com/idm250/images/medres_logo.png">

    <div class="header_child"> 
    <?php wp_nav_menu(['theme_location' => 'primary_menu']);?>
    </div>
  </div>
</header>
