<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Girl
 * @since Girl 1.0
 */ ?><!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og:http://ogp.me/ns#" class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php do_action( 'chym_meta' );?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head();?>
</head>
<body class="trangfox <?php chym_class();?>" chymbody >
<div class="container chym-body">
<header id="chym-header" chymheader ><?php do_action( 'chym_header' );?></header>
<main id="chym-main" class="main-set container">