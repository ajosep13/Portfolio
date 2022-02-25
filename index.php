<?php get_header(); ?>


        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src=" <?php echo get_theme_file_uri().'/images/avatar.png' ?>" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0"><?php bloginfo('name') ?></h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0"><?php bloginfo('description') ?></p>
            </div>
        </header>
<!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
<!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <?php if ( have_posts() ) :
                        $i=0; ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php $i = $i + 1; ?>
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="<?php echo '#portfolioModal'.$i; ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_theme_file_uri().'/images/portfolio/cabin1.jpg'?>" alt="..." />
                            <h4 align="center"><?php echo $post->post_title ?></h4>
                        </div>
                    </div>
                    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                    <?php else : ?>
<?php endif; ?>
                </div>
                </div>
        </section>
        <!-- About Section-->
        <?php $pages = get_pages();
                            foreach ( $pages as $page ) { ?>
        <section class="page-section bg-primary text-white mb-0" id="<?php echo $page->post_title ?>">
            <div class="container">
                <!-- About Section Heading-->
                <a href="<?php the_permalink($page); ?>">
                <h2 class="page-section-heading text-center text-uppercase text-white"><?php echo $page->post_title ?></h2></a>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div><p class="lead" style="line-spacing:60px;"><h5>
                        <?php $content = apply_filters('the_content', $page->post_content);
echo $content;  ?></h5>
                    </p></div>
                </div>
            </div>
        </section>
    <?php } ?>
        <!-- Contact Section-->

<?php get_footer(); ?>
