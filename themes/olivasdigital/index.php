<?php

get_header();
?>
<section>
    <main class="container pt-5">

        <?php

        $projects = new WP_Query(array(
            'post_type' => 'projects',
            'post_per_page' => -1,
            'terms' => 'tipo'
        ));

        if ($projects->have_posts()) :
        ?>
            <h1 class="text-center pt-5 mt-5"> <?php echo __('Meus projetos ') ?></h1>
            <p class="text-center p-3"><?php echo __('Olá seja bem vindo ao meu portifólio, abaixo estarei listando meus projetos mais recentes de websites.') ?></p>
            <div class="row row-cols-4" id="responsive-row">
                <?php
                while ($projects->have_posts()) :
                    $projects->the_post();
                ?>
                    <?php
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                    if ($thumbnail_url) {
                    ?>
                        <div class="col">
                            <div class="card">
                                <div class="OD-container-image">
                                    <?php
                                    $post_id = get_the_ID();
                                    $taxonomies = get_object_taxonomies(get_post($post_id)); 
                                    ?>
                                    <p class="OD-container-tax"> 
                                        <?php
                                        if ($taxonomies) : ?>
                                            <?php foreach ($taxonomies as $taxonomy) : ?>
                                                <?php $terms = get_the_terms($post_id, $taxonomy); ?>
                                                <?php
                                                foreach ($terms as $term) {
                                                    echo '<b class="OD-tax">#' . esc_html($term->name) . '</b>';
                                                }
                                                ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </p>
                                    <div class="rounded-top" id="OD-image" style="background-image:url(<?php echo $thumbnail_url; ?>)"></div>
                                </div>
                                <div class="p-3">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="text-center mt-5">
                                        <a class="btn btn-primary text-center btn-principal" href="<?php echo esc_url(get_permalink()); ?>">Mais detalhes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                endwhile;
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
