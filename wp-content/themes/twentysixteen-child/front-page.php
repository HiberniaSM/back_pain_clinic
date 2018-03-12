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

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); 
            $banner_image = get_field('banner_image');
            $profile_image = get_field('profile_image');
            $services_header = get_field('services_header');
            $services_content = get_field('services_content');
            $accreditation_header = get_field('accreditation_header');
            $accreditation_content = get_field('accreditation_content');
            $size ='full';
        ?>
        
        <div class="banner-image">
            <p><?php if($banner_image) { 
                echo wp_get_attachment_image($banner_image, $size);
                } ?></p>
            <h2>The Back Pain Clinic</h2>
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
            
            <div class="services-header">
                <h2 class="services-header"><?php echo $services_header; ?>
                </h2>
                <p class="services-content"><?php echo $services_content; ?>
                </p>
            </div>
        
            <div class="accreditation-content">
                <h2 class="header-accreditation"><?php echo $accreditation_header; ?></h2>
                <p class="main-accreditation"><?php echo $accreditation_content; ?>
                </p> 
            </div>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
		<?php endwhile; // end of the loop. ?>

