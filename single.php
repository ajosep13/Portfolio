<html lang="en">
    <head>
        <?php wp_head(); ?>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php bloginfo('name') ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    </head>
     <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="<?php echo get_home_url().'/index.php#page-top'; ?>"><?php bloginfo('name') ?></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo get_home_url().'/index.php#portfolio'; ?>">Portfolio</a></li>
                       <?php $pages = get_pages(); 
                            foreach ( $pages as $page ) {
                                $option = '<li class="nav-item mx-0 mx-lg-1">';
                                $option .='<a class="nav-link py-3 px-0 px-lg-3 rounded" href="'.get_home_url().'/index.php#'.$page->post_title.'">';
                                $option .=$page->post_title;
                                $option .='</a></li>';
                                echo $option;
                            }
                       ?> 
                    </ul>
                </div>
            </div>
        </nav>