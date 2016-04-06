<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phones
 */

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,200,900' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.12.2.min.js" integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk=" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="top_social">
		<div class="container">
			<div id="social_icon">
				<a href="#" id="twitter" class="social_icon">Twitter</a>
				<a href="#" id="pinintrest" class="social_icon">PinInterest</a>
				<a href="#" id="google" class="social_icon">Google</a>
				<a href="#" id="linkedin" class="social_icon">LinkedIn</a>
			</div>
		</div>
	</div>
	<header id="home">
		<div class="container">
			<!-- Navigation -->
			<nav id="main-menu" class="navbar navbar-default navbar-fixed-top" >
			    <div class="container">
			        <!-- Brand and toggle get grouped for better mobile display -->
			        <div class="navbar-header page-scroll">
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			            <?php get_phones_logo(); ?>
			        </div>

			        <!-- Collect the nav links, forms, and other content for toggling -->
			        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			             <form id="search-form" class="navbar-form navbar-right hidden-sm hidden-lg hidden-md" role="search">
			                <div class="form-group">
			                    <input type="text" class="form-control" placeholder="Search">
			                </div>
			                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
			            </form>
						<?php get_phones_menu(); ?>

			           <!--  <ul class="nav navbar-nav navbar-right">
			                <li class="hidden">
			                    <a href="#page-top"></a>
			                </li>
			                <li>
			                    <a class="active" href="#page-top">Home</a>
			                </li>
			                <li>
			                    <a href="#services">About</a>
			                </li>
			                <li>
			                    <a href="#features">Portfolio</a>
			                </li>
			                <li>
			                    <a href="#portfolio">Blog</a>
			                </li>
			                <li>
			                    <a href="#whyUs">Contact</a>
			                </li>
			                <li class="hidden-xs">
			                    <a id="search" href="#"><span class="glyphicon glyphicon-search"></span></a>
			                </li>
			            </ul> -->
			           
			        </div>
			        <!-- /.navbar-collapse -->
			    </div>
			    <!-- /.container-fluid -->
			</nav>
		</div>
	</header>
