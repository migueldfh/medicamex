<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Medicamex
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<?php wp_head(); ?>
	<style media="screen">
    body, h1,h2,h3,h4,h5,h6{font-family: 'Montserrat', sans-serif;}
    .navbar-default {background-color: #fff;border-color: #fff;}
    .nav {padding-top: 10px;font-weight: 700;}
    .nav>li>a{color: #000; font-size: 0.7em;}
    .navbar{min-height: 60px;}
    .skinny {padding: 0; margin: 0}
    img{pointer-events: none}
    p{font-size: 0.6em}
    h1:not(.site-title):before, h2:before{content: "";height: 0}
		.nav-tabs>li.active>a{border-bottom: 2px solid #00785b; border-left: 0; border-top: 0; border-right: 0;}
		.nav-tabs>li>a{padding: 10px 60px;}
		.site-footer{background-color: #3a3a3a;color: #fff}
  </style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="http://localhost:8080/medicamex/wp-content/uploads/2019/04/logo.png" class="img-responsive" style="width: 50%"></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav nav-pills navbar-right">
          <li><a href="/">INICIO</a></li>
          <li><a href="#">NOSOTROS</a></li>
          <li><a href="#">PRODUCTOS</a></li>
          <li><a href="#">CONTACTO</a></li>
          <li><a href="/eventos">EVENTOS</a></li>
        </ul>
      </div>
    </div>
  </nav>

	<div id="content" class="site-content">
