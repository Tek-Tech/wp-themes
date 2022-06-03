<?php
    get_header();
?>
<article class='main-content'>

</article>
<div class="sidebar-column"><!-- sidebar-column -->
    <?php wp_nav_menu() ?>
    <?php dynamic_sidebar( 'rightsidebar' ) ?>
</div>
<?php
    get_footer();
?>
