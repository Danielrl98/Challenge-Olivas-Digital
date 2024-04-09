<?php

get_header();

?>
    <section>
        <div class="container">
                <h1 class="text-center"> <?php echo the_title(); ?></h1>
                <?php echo the_content(); ?>
        </div>
    </section>
<?php


get_footer();