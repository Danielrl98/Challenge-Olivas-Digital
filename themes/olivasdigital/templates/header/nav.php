<section id="header-site">
    <header class="container">
        <div class="row align-items-center items-center" id="header-responsive-row">
            <div class="col">
                <img width="250" src="<?php echo esc_url(get_template_directory_uri() . '/assets/logotipo.svg')  ?>" alt="">
            </div>
            <div class="col row">
                <div class="items-center items-center" id="OD-menu">
                    <li class="d-flex gap-5 mt-3" id="OD-menu-desktop">
                        <a class="lh-lg" href="<?php echo home_url() . '/' ?>">Home</a>
                        <a class="lh-lg"  href="<?php echo home_url() . '/projects' ?>">Todos os projetos</a>
                        <a class="btn btn-principal mt-n2" href="<?php echo home_url() . '/contato' ?>">Contato</a>
                    </li>
                </div>
            </div>
        </div>
    </header>
</section>