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
        <?php while ( have_posts() ) : the_post(); 
            $banner_image = get_field('banner_image');
            $profile_image = get_field('profile_image');
            $accreditation_header = get_field('accreditation_header');
            $accreditation_content = get_field('accreditation_content');
            $size ='full';
        ?>
        
        <div>
            <p class="banner-image"><?php if($banner_image) { 
                echo wp_get_attachment_image($banner_image, $size);
                } ?></p>
        </div>
        
            <div class="page-header">
            
                <h1>Welcome to the Back Pain Clinic</h1>
            </div>        
            <div class="page-content">
				<?php the_content(); ?>
                <p class="profile-image"><?php if($profile_image) { 
                echo wp_get_attachment_image($profile_image, $size);
                } ?></p>
            </div>    
        
            <div class="accreditation-content">
                <h2 class="header-accreditation"><?php echo $accreditation_header; ?></h2>
                <p class="main-accreditation"><?php echo $accreditation_content; ?>
                </p> 
            </div>

    </main><!-- .site-main -->
</div><!-- .content-area -->

		<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
