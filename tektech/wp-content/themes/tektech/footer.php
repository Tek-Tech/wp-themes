
    </div>
    <div class='container'>
        <footer class="site-footer"  <?php if ( get_header_image() ) : ?> style='background-size:100% 100%;min-height:96vh;background-image:url(<?php header_image() ?>);' <?php endif; ?>>
            <p><?php bloginfo( 'name' ) ?></p>
        </footer>
    </div>
<?php wp_footer() ?>
</body>
</html>