
    </div>
    <div class='container'>
        <footer class="site-footer"  <?php if ( get_header_image() ) : ?> style='background-size:100% 100%;min-height:100vh;background-image:url(<?php header_image() ?>);' <?php endif; ?>>
            <nav class="navigation-menu">
                <?php wp_nav_menu() ?>
            </nav>
        </footer>
    </div>
<?php wp_footer() ?>
</body>
</html>