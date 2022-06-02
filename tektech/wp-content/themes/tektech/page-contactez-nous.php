<?php
    get_header();
?>
<div class='main-content'>
    <h1>
        Contactez Nous
    </h1>
    <article class='tt-blogpost'>
        <h2>
            Envoyez nous un mail
        </h2>
        <p>
            sur l'adresse <em>tektechlofficiel@gmail.com</em>
        </p>
    </article>
    <article class='tt-blogpost'>
        <h2>
            Vous pouvez aussi nous joindre notre numero sur Whatsapp
        </h2>
        <p>
            c'est le <em>+221 78 426 83 44</em>
        </p>
    </article>
</div>
<div class="sidebar-column"><!-- sidebar-column -->
    <?php wp_nav_menu() ?>
    <?php dynamic_sidebar( 'rightsidebar' ) ?>
</div>
<?php
    get_footer();
?>
