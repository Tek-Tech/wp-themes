<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

        <div class='main-content'>
            <article class='tt-blogpost'>
                <h2><?php the_title() ?></h2>
                <?php the_post_thumbnail(); ?>
                <p>
                    <?php echo get_the_excerpt() ?>
                    <a href="<?php the_permalink() ?>">voir plus &raquo</a>
                </p>
            
                
            </article>
        </div>
        <div class="sidebar-column"><!-- sidebar-column -->
			<?php dynamic_sidebar( 'rightsidebar' ) ?>
        </div>
	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

get_footer();
?>
