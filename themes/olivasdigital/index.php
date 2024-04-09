<?php

get_header();
?>
<section>
    <main class="container">
        <?php

        $projects = new WP_Query(array(
            'post_type' => 'projects',
            'post_per_page' => -1,
        ));

        if ($projects->have_posts()) :
        ?>
            <h1 class="text-center"> <?php echo __('Meus projetos ') ?></h1>
            <p class="text-center p-3"><?php echo __('Olá seja bem vindo ao meu portifólio, abaixo estarei listando meus projetos mais recentes de websites.') ?></p>
            <div class="row row-cols-4" id="responsive-row">
               <?php 
                set_query_var('projects', $projects);
                echo get_template_part('templates/projects/card'); 
               ?>
            </div>
        <?php
            wp_reset_postdata();
        endif;
        ?>
    </main>
</section>

<?php

get_footer();
