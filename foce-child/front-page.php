<?php
get_header();
?>

    <main id="primary" class="site-main">
        <section id="bannerid" class="banner">
            <!-- banner fallback -->
            <img class="banner__background" src="<?php echo get_theme_file_uri() . '/assets/images/banner.png' ?>"
                 alt="Studio Koukaki">
            <!-- vidéo -->
            <video class="banner__video" width="1440" autoplay="autoplay" muted="" loop="infinite" __idm_id__="368641">
                <source src="<?php echo get_theme_file_uri() . '/assets/video/Studio_Koukaki_video_header.mp4'; ?>"
                        type="video/mp4">
            </video>


            <img class="banner__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> "
                 alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story">
            <h2><span id="titleH2up">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
        </section>
        <section id="characters">
            <?php
                $args = array(
                    'post_type' => 'characters',
                    'posts_per_page' => -1,
                    'meta_key' => '_main_char_field',
                    'orderby' => 'meta_value_num',
                );
                $characters_query = new WP_Query($args);
            ?>
            <div>
                <h3>Les personnages</h3>
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php
                        while ($characters_query->have_posts()) {
                            $characters_query->the_post();
                            echo '<div class="swiper-slide">';
                            echo '<figure>';
                            echo get_the_post_thumbnail(get_the_ID(), 'full');
                            echo '<figcaption>';
                            the_title();
                            echo '</figcaption>';
                            echo '</figure>';
                            echo '</div>';
                        };
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="story">
            <article id="place">
            <div>
                <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <img class="bigCloud" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png' ?>" alt="grand nuage">
                    <img class="littleCloud" src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png' ?>" alt="petit nuage">
            </div>
            </article>
        </section>
        <section id="studio">
            <h2><span id="titleH2up1">Studio </span> <span id="titleH2up2">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et
                    distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons
                    deux sections en activité : le long métrage et le court métrage. Nous développons des films
                    fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                    commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur
                    incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables
                    succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs
                    d’oranger et chats errants”.</p>
            </div>
        </section>

        <!-- LIGNE(S) AJOUTEE(S) -->
        <section id="nomination" class="nomination">
            <div class="nomination__title">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/orange_nomination_bg.png'; ?> "
                     alt="fond du titre des nominations">
                <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
            </div>
            <img class="nomination__logo"
                 src="<?php echo get_template_directory_uri() . '/assets/images/oscars-2021.png'; ?> "
                 alt="Nomination aux Oscars 2022">
        </section>
    </main><!-- #main -->

<?php
get_footer();
