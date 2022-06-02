<?php
    get_header();
?>
<div class='main-content'>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

            <article class='tt-blogpost'>
                <h2><?php the_title() ?></h2>
                <?php the_post_thumbnail(); ?>
                <?php the_content() ?>
                <p>
                    <a href="<?php the_permalink() ?>"> ...&raquo </a>
                </p>
            
                
            </article>
        <?php endwhile;

    else :
        echo '<p>There are no posts!</p>';
        
    endif;
?>
</div>
<div class="sidebar-column"><!-- sidebar-column -->
    <?php wp_nav_menu() ?>
    <?php dynamic_sidebar( 'rightsidebar' ) ?>
</div>
<?php
    get_footer();
?>
