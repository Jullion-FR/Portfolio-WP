<?php
get_header();

if (have_posts()) :
    echo get_field("client");
    echo get_field("client");
    echo get_field("client");
    echo get_field("client");


else :
    echo '<p>Aucune réalisation trouvée.</p>';
endif;

get_footer();
?>
