<?php get_header(); ?>

    <h2>Apple Bear Blog</h2>

    <div>
        <?php 
            while(have_posts()) {
                the_post(); ?>
                <div class="blog-blurb">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('D F d, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
                    <p><?php if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo wp_trim_words(get_the_content(), 30);
                    } ?></p>
                    <p><a href="<?php the_permalink(); ?>">Read more &raquo;</a></p>
                </div>
        <?php } 
    
            echo paginate_links();
        ?>
    </div>

  <?php get_footer();
?>