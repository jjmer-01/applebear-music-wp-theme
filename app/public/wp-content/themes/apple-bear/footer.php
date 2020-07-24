    <div id="footer">
     <a class="a-icon homepage-links-icons" href="#"><i class="fab fa-instagram"></i></a>
     <a class="a-icon homepage-links-icons" href="#"><i class="fab fa-youtube"></i></a>
     <a class="a-icon homepage-links-icons" href="#"><i class="fab fa-bandcamp"></i></a>
    </div>

    <?php wp_footer(); ?>
    </body>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
            let didScroll;
            let lastScrollTop = 0;
            let delta = 5;
            let navbarHeight = $('nav').outerHeight;

            $(window).scroll(function(event) {
                didScroll = true;
            })

            setInterval(function() {
                if(didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250)

            function hasScrolled() {
                let st = $(this).scrollTop();
                if (Math.abs(lastScrollTop - st) <= delta)
                    return;
                if (st > lastScrollTop && st > navbarHeight) {
                    $('nav').removeClass('nav-down').addClass('nav-up');
                } else {
                    if (st + $(winddow).height() < $(document).height()) {
                        $('nav').removeClass('nav-up').addClass('nav-down');
                    }
                }
                lastScrollTop = st;
            }
        </script>
</html>