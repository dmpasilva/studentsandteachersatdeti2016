<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  <?php if (is_front_page() ) { bloginfo('name'); }
        elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
        elseif (is_page() ) { single_post_title(); }
        else { wp_title('',true); } ?>
  </title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <?php wp_head(); ?>
</head>

<header>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Mostrar/ocultar navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Home page !-->

      <a class="navbar-brand" href="#" 
        title="<?php if(is_front_page()) bloginfo('name'); else single_post_title(); ?>" rel="home">
        <?php 
          if(is_front_page()) bloginfo('name');
          else single_post_title();
        ?>
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-main">
      <ul class="nav navbar-nav navbar-right">
      <!-- Navigation menus !-->
        <?php wp_nav_menu(
            array(
                'menu' => 'cabecalho',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => '',
                'menu_id' => 'cabecalho'            
            )
        );?>
      </ul>
    </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>


  <!-- Header -->
  <a name="about"></a>
  <div class="intro-header" style="background:url(<?php header_image(); ?>) no-repeat center center; background-size: cover; max-height: 500px;">
      <div class="container">

          <div class="row">

              <div class="col-lg-12">
                  <div class="intro-message">

                    <?php
                      // load specific page logo
                      $base = get_stylesheet_directory_uri();

                      if(is_page('studentsatdeti')) {
                        echo '<img src="' . $base . '/img/studentslogo.jpg">';
                      }
                      
                      else if(is_page('teachersatdeti')) { 
                        echo '<img src="' . $base . '/img/teacherslogo.jpg">';
                      }

                      else { 
                        echo '<img src="' . $base . '/img/logo.jpg">';
                      }

                    ?>
                    
                  </div>
              </div>
          </div>

      </div>
      <!-- /.container -->

  </div>
  <!-- /.intro-header -->

</header>

<body <?php body_class(); ?>>

