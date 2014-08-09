<!DOCTYPE html>
<html lang="es" <?php language_attributes(); ?>>
  <head>
    <title>&mdash; <?php if ( is_category() ) {
    echo 'Archivo de la categoría &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
  } elseif ( is_tag() ) {
    echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
  } elseif ( is_archive() ) {
    wp_title(''); echo ' Archive | '; bloginfo( 'name' );
  } elseif ( is_search() ) {
    echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
  } elseif ( is_home() ) {
    bloginfo( 'name' ); echo ' &sect; '; bloginfo( 'description' );
  }  elseif ( is_404() ) {
    echo 'Error 404 Not Found | '; bloginfo( 'name' );
  } elseif ( is_single() ) {
    wp_title('');
  } else {
    echo wp_title(''); echo ' | '; bloginfo( 'name' );
  } ?> &mdash;</title>
  <meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />  
  <meta name="viewport" content="width=device-width; initial-scale=1"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- <link href="/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?ver=1.1" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <div  class="container">
    <div id="main-header" class="row contenedor">
  <body  class="colorb">
  <header>
    <div id="header " class="col-md main-logo">
      <div class="row">
  	<div class="col-xs-5">
          <img id="" src="http://cti.actualizandome.com/wp-content/uploads/2014/04/cti.actualizandome383x60.png">
  			</div>
  			<!-- <div class="col-xs-9"> -->
        <div class="col-xs-7">
          <?php

            $defaults = array(
              'theme_location'  => '',
              'menu'            => '',
              'container'       => 'div',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'nav nav-pills hidden-xs',
              'menu_id'         => 'main-menu',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="dropdown-menu" role="menu" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => ''
            );

            wp_nav_menu( $defaults );
          ?>
          <a href="#" id="mobile-menu-button" class="btn btn-default visible-xs">
<span class="glyphicon glyphicon-th-list"></span>
</a>
        </div>
          

  				<!-- <ul id="main-menu" class="nav nav-pills">
  					<li class="active"><a href="#">Home</a></li>
  					<li><a href="#">Help</a></li>
  					<li class="dropdown">
  						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown<span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul> -->
  			<!-- </div> -->
  		
    <?php wp_head(); ?>
    </div>
    </div>
    </header>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<!-- <body <?php body_class(); ?>> -->
