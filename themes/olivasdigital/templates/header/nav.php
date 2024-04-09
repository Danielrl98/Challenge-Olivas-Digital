<section id="header-site">
    <header class="container">
        <div class="row align-items-center items-center" id="header-responsive-row">
            <div class="col">
               <a class="pointer" href="<?php echo home_url(); ?>"><img width="250" src="<?php echo esc_url(get_template_directory_uri() . '/assets/logotipo.svg')  ?>" alt=""></a>
            </div>
            <div class="col row">
                <div class="align-items-center d-flex gap-4" id="OD-menu">
                    <li class="d-flex gap-5 mt-3" id="OD-menu-desktop">
                        <?php echo get_template_part('/templates/header/menu'); ?>
                    </li>
                    <?php echo get_template_part('/templates/header/dropdown'); ?>
                </div>
            </div>
        </div>
    </header>
</section>