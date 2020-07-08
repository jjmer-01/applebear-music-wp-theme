<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?> <!-- Let's wp add css for plugins -->
    </head>
    <body>
        
        <h1>Apple Bear</h1>
        
        <nav class="head-nav"><ul>
            <?php  
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                ));
            ?>
        </ul></nav>

