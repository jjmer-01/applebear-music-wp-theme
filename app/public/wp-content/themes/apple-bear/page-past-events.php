<?php get_header(); ?>

    <h2>Past Events</h2>
    <p><?php the_archive_description(); ?></p>
    <a href="<?php echo site_url('/events'); ?>">Upcoming Events</a>

    <div>
        <?php 

            $today = date('Ymd');
            $pastEvents = new WP_QUERY(array(
                'paged' => get_query_var('paged', 1),
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '<',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                )
            ));

            while($pastEvents->have_posts()) {
                $pastEvents->the_post(); ?>
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
    
            echo paginate_links(array(
                'total' => $pastEvents->max_num_pages
            ));
        ?>
    </div>

  <?php get_footer();
?>