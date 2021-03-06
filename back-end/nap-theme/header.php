<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow">
  <meta name="description" content="<?php bloginfo('name'); ?> -  <?php bloginfo('description'); ?>" />
  <meta name="keywords" content="psicologia, avaliação psicológica, fortaleza, Centro de Serviço COGMED, Atendimento Clínico, Testoteca"/>

  <!-- Icons Tags -->
  <meta property="og:title"              content="<?php bloginfo('name'); ?>" />
  <meta property="og:description"        content="<?php bloginfo('description'); ?>" />
  <meta property="og:image"              content="<?php bloginfo('template_url'); ?>/tile-wide.png" />
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">


  <title><?php bloginfo('name'); ?> <?php if(!is_home()) { ?> - <?php the_title(); }; ?></title>

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/master.css">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-91766112-1', 'auto');
  ga('send', 'pageview');
  </script>
</head>
<body id="Top" data-spy="scroll" data-target="#navbar" class="<?php if (is_user_logged_in()) { echo "logged"; } ?>">
  <div id="Main">
