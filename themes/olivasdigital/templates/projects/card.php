<?php
$projects = get_query_var('projects');

while ($projects->have_posts()) :
    $projects->the_post();
?>
    <?php
    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
    if ($thumbnail_url) {
    ?>
        <a href="<?php echo esc_url(get_permalink()); ?>" class="pointer text-decoration-none">
            <div class="col">
                <div class="card">
                    <div class="OD-container-image">
                        <?php
                        $post_id = get_the_ID();
                        $taxonomies = get_object_taxonomies(get_post($post_id));
                        ?>
                        <p class="OD-container-tax pointer text-decoration-none" >
                            <?php
                            if ($taxonomies) : ?>
                                <?php foreach ($taxonomies as $taxonomy) : ?>
                                    <?php $terms = get_the_terms($post_id, $taxonomy); ?>
                                    <?php
                                    foreach ($terms as $term) {
                                        $slug = $term -> slug;
                                    ?>
                                        <b class="OD-tax" slug="<?php echo $slug; ?>" home_url="<?php echo home_url(); ?>">
                                            <?php echo esc_html($term->name); ?>
                                        </b>
                                    <?php

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
                    </div>
                </div>
            </div>
        </a>
<?php
    }
endwhile;
?>