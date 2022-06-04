
    </div>
    <div class='container'>
        <footer class="site-footer <?php if ( get_header_image() ) : ?> has-footer-background"  style='--footerbgurl:url(<?php header_image() ?>)' <?php endif; ?>>
            <div class='navigation-menu'>
                <?php wp_nav_menu() ?>
            </nav>
        </footer>
    </div>
<?php wp_footer() ?>
</body>
</html>