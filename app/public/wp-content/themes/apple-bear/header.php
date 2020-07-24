<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?> <!-- Let's wp add css for plugins -->
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa&family=Modak&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5bc89853ef.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!-- <h1>Apple Bear</h1> -->
        
        <nav class="nav-down"><ul>
            <?php  
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                ));
            ?>
        </ul></nav>

