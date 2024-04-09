<?php

get_header();
?>
<?php

$result = [];

if (isset($_GET['categoria'])) {
    $result =  [array(
        'taxonomy' => 'tipos',
        'field'    => 'slug',
        'terms'    => $_GET['categoria'],
    )];
}

$projects = new WP_Query(array(
    'post_type' => 'projects',
    'post_per_page' => -1,
    'tax_query' => $result
));

?>
<div class="clearfix" style="padding:80px"> </div>
<section class="container ">
    <div class="d-flex" id="OD-responsive-tipos">
        <div id="OD-column1">
            <h2 class="mb-5">Selecione uma categoria:</h2>

            <?php $terms = get_terms(array(
                'taxonomy'   => 'tipos',
                'hide_empty' => false,
            )); ?>

            <?php

            foreach ($terms as $term) {
            ?>
                <form method="get">
                    <input name='categoria' type='hidden' value='<?php echo esc_html($term->slug) ?>'>
                    <button class='btn btn-outline-secondary mt-2' type='submit' class='fs-5'><?php echo esc_html($term->slug) ?></button>
                </form>
            <?php
            }
            if (isset($_GET['categoria'])) {
            ?>
                <form action="" >
                    <button class="btn btn-outline-danger mt-2 mb-5"><i class="fa fa-times"></i> Limpar resultados</button>
                </form>
            <?php
            }
            ?>
        </div>
        <div id="OD-column2">
            <main class="container ">
                <?php
                if ($projects->have_posts()) {
                ?>
                    <?php
                    if (!isset($_GET['categoria'])) {
                    ?>
                        <h2 class="text-left mb-5"> <?php echo __('Resultados:') ?></h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="text-left mb-5"> <?php echo __('Resultados para: ' . $_GET['categoria']); ?></h2>
                    <?php
                    }
                    ?>

                    <div class="row row-cols-3" id="responsive-row">
                        <?php
                        set_query_var('projects', $projects);
                        echo get_template_part('templates/projects/card');
                        ?>
                    </div>
                <?php
                    wp_reset_postdata();
                } else {
                    ?>
                    <p>Nenhum resultado encontrado</p>
                    <?php
                  
                }

                ?>
            </main>
        </div>
    </div>

</section>

<?php

get_footer();
