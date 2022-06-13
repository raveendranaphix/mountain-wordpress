<?php

if (have_rows('content')) :

    while (have_rows('content')) : the_row();

        get_template_part('template-parts/flexible/' . get_row_layout());

    endwhile;

endif;
