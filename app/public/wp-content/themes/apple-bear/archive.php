<?php get_header(); ?>

    <h2><?php the_archive_title(); ?></h2>
    <p><?php the_archive_description(); ?></p>

    <div>
        <?php 
            while(have_posts()) {
                the_post(); ?>
                <div class="blog-blurb">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('D F d, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
                    <p><?php the_excerpt(); ?></p>
                    <p><a href="<?php the_permalink(); ?>">Read more &raquo;</a></p>
                </div>
        <?php } 
    
            echo paginate_links();
        ?>
    </div>

  <?php get_footer();
?>