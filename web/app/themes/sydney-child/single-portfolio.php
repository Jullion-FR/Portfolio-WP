<?php get_header(); ?>

    <div class="portfolio-container">
        <div class="portfolio-content">
            <h1 class="portfolio-title"><?php the_title(); ?></h1>
            <div class="portfolio-description">
                <?php the_content(); ?>
            </div>

            <?php if ( function_exists( 'SCF::get' ) ) : ?>
                <ul class="portfolio-details">
                    <?php
                    $client = SCF::get( 'client' );
                    if ( !empty( $client ) ) : ?>
                        <li><strong>Client :</strong> <?php echo esc_html( $client ); ?></li>
                    <?php endif; ?>

                    <?php
                    $date_realisation = SCF::get( 'date_de_realisation' );
                    if ( !empty( $date_realisation ) ) : ?>
                        <li><strong>Date de réalisation :</strong> <?php echo esc_html( $date_realisation ); ?></li>
                    <?php endif; ?>

                    <?php
                    $lien_projet = SCF::get( 'lien_du_projet' );
                    if ( !empty( $lien_projet ) ) : ?>
                        <li><strong>Lien du projet :</strong> <a href="<?php echo esc_url( $lien_projet ); ?>" target="_blank"><?php echo esc_url( $lien_projet ); ?></a></li>
                    <?php endif; ?>
                </ul>

                <?php
                $galerie = SCF::get( 'galerie_dimages' );
                if ( !empty( $galerie ) && is_array( $galerie ) ) : ?>
                    <div class="portfolio-gallery">
                        <?php foreach ( $galerie as $image ) : ?>
                            <img src="<?php echo esc_url( wp_get_attachment_url( $image ) ); ?>" alt="Portfolio Image">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>