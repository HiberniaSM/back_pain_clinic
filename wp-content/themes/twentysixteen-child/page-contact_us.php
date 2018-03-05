<?php
/**
 * Template for: The About custom page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>
<div id="primary">
    <div class="main-content" role="main">
        <?php while ( have_posts() ) : the_post(); 
            $banner_text = get_field('banner_text');
            $header_one = get_field('header_one');        
            $header_two = get_field('header_two');
            $header_three = get_field('header_three');
            $header_four = get_field('header_four');
            $content_one = get_field('content_one');
            $content_two = get_field('content_two');
            $content_three = get_field('content_three');
            $content_four = get_field('content_four');
            $image_one = get_field('image_one');
            $image_two = get_field('image_two');
            $image_three = get_field('image_three');
            $image_four = get_field('image_four');
            $contact_text = get_field('contact_text');
            $size = 'full';
        ?>
        
        <div class="the_banner">
        <h3><?php echo $banner_text; ?></h3>        
        </div>
        <body>
        <div class="the_content">
            <?php the_content(); ?>
        
        </div>
        
        
    <article class="examples">
        
        <div class="section one">
            <h2 class="header_r"><?php echo $header_one; ?></h2>
            <p class="description_r"><?php echo $content_one; ?></p> 
            <p class="img_l"><?php if($image_one) { 
            echo wp_get_attachment_image($image_one, $size);
            } ?></p>
        
        </div>
              
        <div class="section two">
            <h2 class="header_l"><?php echo $header_two; ?></h2>
            <p class="description_l"><?php echo $content_two; ?></p>
            <p class="img_r"><?php if($image_two){
            echo wp_get_attachment_image ($image_two, $size);
            } ?></p>
        
        </div>
        
        <div class="section three">
            <h2 class="header_r"><?php echo $header_three; ?></h2>
            <p class="description_r"><?php echo $content_three; ?></p>
            <p class="img_l"><?php if($image_three){
            echo wp_get_attachment_image ($image_three, $size);
            } ?></p>
        
        </div>
        
        <div class="section four">
            <h2 class="header_l"><?php echo $header_four; ?></h2>
            <p class="description_l"><?php echo $content_four; ?></p>
            <p class="img_r"><?php if($image_four){
            echo wp_get_attachment_image ($image_four, $size);
            } ?></p>
        </div>
    </article>
    </body>
		<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
    </div><!-- #primary -->
    <div id="contact">
        <h3><?php echo $contact_text; ?></h3>
        <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
    </div>
<?php get_footer(); ?>
