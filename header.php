<!doctype html>
<html class="no-js" lang="it">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('| ', true, 'right'); bloginfo('name')?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css" />
    <script type="text/javascript" src="//use.typekit.net/rqo1yfa.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  </head>
  <body>
    <div class="off-canvas-wrap">
      <div class="inner-wrap">          
          <header class="hero">
            <div class="hero__inner">
              <h1 class="hero__title">
                <a href="<?php bloginfo('url'); ?>">
                  <img src="<?php bloginfo('template_directory'); ?>/images/salvatori_logo.svg" alt="Salvatori" class="hero__logo">
                </a>
              </h1>
            </div>
            <nav class="navigation">
              <div class="row">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'depth' => 0,
                        'items_wrap' => '<ul class="navigation__list">%3$s</ul>',
                        'walker'  => new salvatoriWalker()
                    ) );
                ?>  
              </div>
            </nav>
          </header>

        <main class="container row">