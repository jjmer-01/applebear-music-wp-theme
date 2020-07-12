<?php get_header(); ?>

    <h2>Upcoming Events</h2>
    <p><?php the_archive_description(); ?></p>
    <a href="<?php echo site_url('/past-events'); ?>">Past Events</a>

    <div>
        <?php 
            while(have_posts()) {
                the_post(); ?>
                <div class="event-display">
                    <div class="event-date">
                        <div class="event-month"><?php 
                            $eventDate = new DateTime(get_field('event_date')); 
                            echo $eventDate->format('M');
                        ?></div>
                        <div class="event-day"><?php 
                            echo $eventDate->format('d');
                        ?></div>
                    </div>
                    <div class="event-detail">
                        <div class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="event-location"><?php the_field('event_venue'); ?></div>
                        <div class="event-description"><?php if (has_excerpt()) {
                                echo get_the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 18);
                            } ?></div>
                        <a href="<?php the_permalink(); ?>">...More Details</a>
                    </div>
                </div>
        <?php } 
    
            echo paginate_links();
        ?>
    </div>

  <?php get_footer();
?>