<?php

get_header();
?>

<main id="primary" class="site-main">

    <section id="pinned-triger">
        <div class="parallax-video">
            <video autoplay loop muted id="background-video">
                <source
                    src="<?php echo get_stylesheet_directory_uri() . './assets/videos/Studio-Koukaki-video-header-sans-son.mp4'; ?>"
                    type="video/mp4">
            </video>
            <img src="<?php echo get_template_directory_uri() . './assets/images/banner.png'; ?>" alt="Fallback image"
                id="fallback-image" />
            <div id="parallax-image">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>"
                    alt="logo Fleurs d'oranger & chats errants" />
            </div>
        </div>
    </section>

    <section id="story" class="story">
        <h2><span class="dynamic-title">L'histoire</span></h2>
        <article class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <div class="characters">
            <?php get_template_part('template-parts/characters'); ?>
        </div>

        <article id="place">
            <div>
                <h3><span class="dynamic-title">Le Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
        </article>
    </section>

    <section id="studio">
        <h2><span class="dynamic-title">Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue
                des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections
                en activité : le long métrage et le court métrage. Nous développons des films fantastiques,
                principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable
                dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise
                sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats
                errants”.</p>
        </div>
    </section>

    <?php get_template_part('template-parts/oscars-nomination'); ?>

</main>

<?php
get_footer();