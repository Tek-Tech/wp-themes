<?php
    get_header();
?>
<div class='main-content'>
    <h2><?php
        the_title()
    ?></h2>
    <section class='service-box container'>
        <h1 class='container-title'>
            Titre Box
        </h1>
        <div class='container-content'>
            <ul class='content-proposition'>
                <li>
                    element proposition
                </li>
                <li>
                    element proposition
                </li>
                <li>
                    element proposition
                </li>
                <li>
                    element proposition
                </li>
            </ul>
            <div class='content-description'>
                <p class='content-text'>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt itaque voluptatibus saepe est aliquid voluptatum. Alias adipisci nihil fugiat, ipsum nemo nulla quo beatae sunt corporis nobis, eius vero?
                </p>
                <button class='content-action'>
                    action
                </button>
            </div>
        </div>
    </section>

    <section class='service-box container'>
        <h1 class='container-title'>
            Titre Box
        </h1>
        <div class='container-content'>
            <ul class='content-proposition'>
                <li>
                    element proposition
                </li>
                <li>
                    element proposition
                </li>
                <li>
                    element proposition
                </li>
                <li>
                    element proposition
                </li>
            </ul>
            <div class='content-description'>
                <p class='content-text'>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt itaque voluptatibus saepe est aliquid voluptatum. Alias adipisci nihil fugiat, ipsum nemo nulla quo beatae sunt corporis nobis, eius vero?
                </p>
                <button class='content-action'>
                    action
                </button>
            </div>
        </div>
    </section>

    <section class='service-box container'>
        <h1 class='container-title'>
            Tek-Tech News
        </h1>
        <div class='container-content'>
            <ul class='content-proposition'>
                <li>
                    Soyez informe a temps
                </li>
                <li>
                    Decouvrez pleins d'astuces 
                </li>
                <li>
                    Devenez autonome en informatique
                </li>
                <li>
                    Ayez acces a la vraie actualite tech mondiale
                </li>
                <li>
                    <a href='http://tektech.rf.gd'>Tek-Tech</a> met a votre disposition ce service gratuitement
                </li>
            </ul>
            <div class='content-description' style='background:url("/tektechnews.png");background-size:100% 100%;'>
                <p class='content-text'>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt itaque voluptatibus saepe est aliquid voluptatum. Alias adipisci nihil fugiat, ipsum nemo nulla quo beatae sunt corporis nobis, eius vero?
                </p>
                <button class='content-action'>
                    action
                </button>
            </div>
        </div>
    </section>

    <section class='service-box container'>
        <h1 class='container-title'>
            Titre Box
        </h1>
        <div class='container-content'>
            <ul class='content-proposition'>
                <li>
                    element proposition
                </li>
                <li>
                    element proposition
                </li>
                <li>
                    element proposition
                </li>
                <li>
                    element proposition
                </li>
            </ul>
            <div class='content-description'>
                <p class='content-text'>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt itaque voluptatibus saepe est aliquid voluptatum. Alias adipisci nihil fugiat, ipsum nemo nulla quo beatae sunt corporis nobis, eius vero?
                </p>
                <button class='content-action'>
                    action
                </button>
            </div>
        </div>
    </section>

</div>
<div class="sidebar-column"><!-- sidebar-column -->
    <?php wp_nav_menu() ?>
    <?php dynamic_sidebar( 'rightsidebar' ) ?>
</div>
<?php
    get_footer();
?>
