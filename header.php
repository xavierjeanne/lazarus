<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php
    // ENQUEUE your css and js in inc/enqueues.php
    wp_head();
    ?>
</head>
<body <?php echo body_class(); ?>>
<div class="text-center">
<header id="header" role="banner">
<nav class="navbar navbar-dark bg-dark mb-5">
  <a class="navbar-brand" href="<?php echo home_url();?>">Lazarus</a>
  <span class="pull-right"><a href="<?php echo site_url();?>/wp-admin">Gestion des titres</a></span>
</nav>
</header>
