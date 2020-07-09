<?php 

    get_header();

    while(have_posts()) {
       the_post(); ?>
       <div>
        <h2><?php the_title(); ?></h2>
        <p><a href="<?php echo site_url('/events'); ?>">Back to Events</a></p>
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('D F d, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
        <div>
            <?php the_content(); ?>
        </div>
       </div>
   <?php } 

   get_footer();
?>