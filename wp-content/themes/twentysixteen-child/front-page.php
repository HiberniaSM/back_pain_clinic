<?php
/**
 * This is the twentysixteen child theme front page display
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen 
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <div class="page-header">
            <h1>Welcome to the Back Pain Clinic</h1>
        </div>
        
        <div class="page-content">
            <?php the_content(); ?>
        </div>    

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
