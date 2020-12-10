<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Justicia Ahora</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
<div class="container-fluid fixed-top navbar-dark bg-primary">
  <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h6 class="display-4 encabezado-titulo">Justicia Ahora</h6></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

<?php wp_nav_menu(array(
    'theme_location' => 'superior',
    'container' =>'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'navbarNavAltMarkup',
    'items_wrap'=> '<div class="navbar-nav ms-auto">%3$s></div>',
    'menu_class' => 'nav-item'
)); ?>

</nav>
</div>

<div class="header-img" >
</div>
