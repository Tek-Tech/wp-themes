<?php
    get_header();
?>
<div class='main-content'>
    <h2><?php
        the_title()
    ?></h2>
    <article class='service-box container'>
        <h1 class='container-title'>
            Tek-Tech Sites
        </h1>
        <div class='container-content'>
            <ul class='content-proposition'>
                <li>
                    NOTRE EQUIPE EST QUALIFIEE ET EXPERIMENTEE
                </li>
                <li>
                    NOS PRIX SONT IMBATTABLES
                </li>
                <li>
                    VOTRE SITE WEB PRET EN DEUX SEMAINES MAX !
                </li>
                <li>
                    QU'ATTENDEZ VOUS POUR COMMANDER ?
                </li>
            </ul>
            <div  class='content-description' style='background:url("/tektechsites.png");background-size:100% 100%;'>
                <div class='content'>
                    <p class='content-text'>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt itaque voluptatibus saepe est aliquid voluptatum. Alias adipisci nihil fugiat, ipsum nemo nulla quo beatae sunt corporis nobis, eius vero?
                    </p>
                    <button class='content-action' onClick="event.target.querySelector('a').click()">
                        <a href="http://sites-tektech.rf.gd/index.php/commander?p=commander#commander" target="_blank" rel="noopener noreferrer">
                            action
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </article>

    <article class='service-box container'>
        <h1 class='container-title'>
            Tek-Tech News
        </h1>
        <div class='container-content'>
            <ul class='content-proposition'>
                <li>
                    SOYEZ INFORME A TEMPS
                </li>
                <li>
                    DECOUVREZ PLEINS D'ASTUCES 
                </li>
                <li>
                    DEVENEZ AUTONOMES EN INFORMATIQUE
                </li>
                <li>
                    AYEZ ACCES A LA VRAIE ACTUALITE TECH MONDIALE
                </li>
                <li>
                    <a href='http://tektech.rf.gd'>TEK TECH </a>MET A VOTRE DISPOSITION CE SERVICE GRATUITEMENT
                </li>
            </ul>
            <div class='content-description' style='background:url("/tektechnews.png");background-size:100% 100%;'>
                <div class='content'>
                    <p class='content-text'>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt itaque voluptatibus saepe est aliquid voluptatum. Alias adipisci nihil fugiat, ipsum nemo nulla quo beatae sunt corporis nobis, eius vero?
                    </p>
                    <button  class='content-action' onClick="event.target.querySelector('a').click()">
                        <a href="http://news-tektech.rf.gd" target="_blank" rel="noopener noreferrer">
                            action
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </article>

</div>
<div class="sidebar-column"><!-- sidebar-column -->
    <?php wp_nav_menu() ?>
    <?php dynamic_sidebar( 'rightsidebar' ) ?>
</div>
<?php
    get_footer();
?>
