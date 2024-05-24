<?php
        // Récupérer le titre de la photo
        $photo_titre = get_the_title();
        // Récupérer l'URL du post
        // Récupérer les catégories de la photo
        $url_github = get_field('url');
        $description = get_field('description');
        $image = get_field('screenshot');
        ?>

        <div class="blockPhotoRelative">
            <img src="<?php echo $image['url']; ?>">

            <div class="overlay">

                <!-- Afficher le titre de la photo -->
                <h2><?php echo esc_html($photo_titre); ?></h2>
                <p><?php echo $description; ?></p>

                <!-- Icône pour voir la photo en détail -->
                <div class="eye-icon">
                    <a href="<?php print_r($url_github); ?>">
                        Lien vers le projet sur Github
                    </a>
                </div>
            </div>
        </div>
