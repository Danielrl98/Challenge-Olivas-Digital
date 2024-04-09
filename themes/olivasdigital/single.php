<?php
get_header();
?>
<section>
    <div class="container">
        <?php

        $id = get_the_ID();

        $query = new WP_Query(array(
            'post_type' => 'projects',
            'p' =>  $id
        ));
        ?>
        <div>
            <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <div>
                        <?php

                        $thumbnail_url = get_the_post_thumbnail_url($id, 'thumbnail');
                        if ($thumbnail_url) {
                        ?>
                            <div>
                                <div class="p-5 lazy-load" id="OD-image-single" data-src="<?php echo $thumbnail_url; ?>"></div>
                            </div>
                            <div>
                                <div>
                                    <?php
                                    $post_id = get_the_ID();
                                    $taxonomies = get_object_taxonomies(get_post($post_id));
                                    ?>
                                    <div class="row mt-2 p-3" id="OD-flex-single">
                                        <p class="p-1 col-3"> <b>Data:</b> <?php echo the_date(); ?></p>
                                        <?php
                                        if ($taxonomies) : ?>
                                            <?php foreach ($taxonomies as $taxonomy) : ?>
                                                <?php $terms = get_the_terms($post_id, $taxonomy); ?>
                                                <?php
                                                foreach ($terms as $term) {
                                                    $slug = $term->slug;
                                                ?>
                                                    <p class="OD-tax col" slug="<?php echo $slug; ?>" home_url="<?php echo home_url(); ?>">
                                                        <b>Categoria:</b> <?php echo esc_html($term->name); ?>
                                                    </p>
                                        <?php
                                                }
                                            endforeach;
                                        endif; ?>
                                    </div>
                                </div>

                                <h1 class="mb-3 mt-3"><?php the_title(); ?></h1>
                                <p class="mb-3"><?php the_content(); ?></p>
                                <?php
                                    $link = get_post_meta( $id, 'link' );
                                ?>

                                <a target="__blank "href="<?php echo $link[0] ?>">Site do projeto</a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <p class="text-center">Cadastre uma imagem</p>
                        <?php
                        }

                        ?>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="clearfix" style="padding:40px"> </div> <!-- space header/main -->
        <div>
            <h2 class="mt-3 mb-3">Projetos relacionados: </h2>
            <?php

            $result =  [array(
                'taxonomy' => 'tipos',
                'field'    => 'slug',
                'terms'    => $slug,
            )];

            $projects = new WP_Query(array(
                'post_type' => 'projects',
                'post_per_page' => -1,
                'post__not_in' => array($id),
                'tax_query' => $result
            ));

            if ($projects->have_posts()) {
            ?>
                <div class="row row-cols-4" id="responsive-row">
                    <?php
                        echo get_template_part('templates/projects/card', '', array($projects));
                    ?>
                </div>
            <?php
            } else {
            ?>
                <p class="p-3">Não existe posts relacionados</p>
            <?php
            }


            ?>
        </div>
    </div>
</section>

<?php

get_footer();
