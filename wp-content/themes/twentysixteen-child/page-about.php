<?php /* Template Name: page-about.php */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); 
        ?>
    
    <div class="page-header">
        <h1><?php the_title(); ?></h1>
    </div>
          
    <div class="page-content">
    
        <?php the_content(); ?>
    
    </div>
    
        
	</main><!-- .site-main -->


</div><!-- .content-area -->



<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>