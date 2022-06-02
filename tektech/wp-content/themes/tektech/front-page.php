<?php
    get_header();
?>
<div class='main-content'>

</div>
<div class="sidebar-column"><!-- sidebar-column -->
    <?php wp_nav_menu() ?>
    <?php dynamic_sidebar( 'rightsidebar' ) ?>
</div>
<?php
    get_footer();
?>
