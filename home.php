<?php
/**
 * Template Name: Главная
 */
?>

<?php get_header(); ?>
<main class="main">
    <!--slider-section-->
    <div class="slider-container">
        <!-- Slider main container -->
        <div class="swiper swiperMain">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper-container">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/swiper-img/swiper-slide-img-2.jpg"
                             alt="" class="swiper-container__img">
                        <div class="container">
                            <div class="swiper-block">
                                <h2 class="swiper-block__title">The Divom Advantage in Measurement Systems</h2>
                                <p class="swiper-block__subtitle">Divom is an expert in measurement systems for the oil
                                    and gas industry. We offer a wide range of measurement systems that allow you to
                                    accurately and reliably measure various parameters during the production,
                                    transportation and processing of oil and gas.</p>
                                <p class="swiper-block__subtitle">One of the main advantages of our company is the high
                                    quality of products. All our measurement systems undergo strict quality control at
                                    all stages of production. We are confident in the quality of our products and
                                    provide a guarantee on all our measurement systems.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-container">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/swiper-img/swiper-slide-img-3.jpg"
                             alt="" class="swiper-container__img">
                        <div class="container">
                            <div class="swiper-block">
                                <h2 class="swiper-block__title">The Divom Advantage for Oil and Gas Equipment</h2>
                                <p class="swiper-block__subtitle">Divom is one of the leading manufacturers of oil and
                                    gas equipment, which is characterized by high performance and reliability. Our
                                    company offers a wide range of equipment of various types and models that can be
                                    used for various purposes.</p>
                                <p class="swiper-block__subtitle">One of the main advantages of our company is the high
                                    quality of products. All our equipment is made from high-quality materials and
                                    undergoes strict quality control at all stages of production. We are confident in
                                    the quality of our products and provide a guarantee on all our equipment.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-container">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/swiper-img/swiper-slide-img-1.jpg"
                             alt="" class="swiper-container__img">
                        <div class="container">
                            <div class="swiper-block">
                                <h2 class="swiper-block__title">The Divom Advantage for Oil and Gas Compressors</h2>
                                <p class="swiper-block__subtitle">Divom is one of the leading manufacturers of oil and
                                    gas compressors, which are characterized by high performance and reliability. Our
                                    company offers a wide range of compressors of various types and models that can be
                                    used for various purposes.</p>
                                <p class="swiper-block__subtitle">One of the main advantages of our company is the high
                                    quality of products. All our compressors are made from high quality materials and
                                    undergo strict quality control at all stages of production. We are confident in the
                                    quality of our products and provide a guarantee on all our compressors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <!--production-section-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="production-wrapper">
                    <h2 class="production-wrapper__title">
                        Products and Solutions
                    </h2>
                    <div class="production-grid">
                        <?php $args = array('posts_per_page' => -1, 'category_name' => 'services');
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="production-item">
                                    <div class="img-wrap">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="production-block">
                                        <p class="production-block__title"><?php the_title(); ?></p>
                                        <p class="production-block__link">More</p>
                                    </div>
                                </a>
                            <?php }
                            wp_reset_postdata();
                        } else
                            echo 'There are no entries.'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about-section-->
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-wrapper">
                        <div class="about-block">
                            <h2 class="about-block__title">
                                A little about our company Divom
                            </h2>
                            <p class="about-block__text">Divom is a company specializing in the sale of oil and gas
                                equipment and spare parts. We offer a wide range of products for the oil and gas
                                industry, including pumps, compressors, valves, fittings and more.</p>
                            <p class="about-block__text">In addition, we trade measurement and control systems that help
                                our customers monitor production processes and improve operational efficiency.</p>
                            <p class="about-block__text">Divom also offers computer and electrical accessories, computer
                                systems software and communications equipment. We work with leading manufacturers to
                                provide our customers with the most innovative and reliable solutions.</p>
                            <p class="about-block__text">Divom is a trusted partner for companies in the oil and gas
                                industry and other industrial sectors. We are committed to providing high-quality
                                products and services that help our customers achieve their goals and improve their
                                performance.</p>
                            <a href="<?php echo bloginfo('url'); ?>/about/" class="about-block__link">More about the company</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--advantages-section-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="advantages-wrapper">
                    <h2 class="advantages-wrapper__title">
                        advantages of our company
                    </h2>
                    <div class="advantages-grid">
                        <div class="advantages-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-img/advant-img-1.jpg"
                                 alt=""
                                 class="advantages-item__img">
                            <div class="advantages-block">
                                <p class="advantages-block__title">Wide range of oil and gas equipment and spares
                                    parts</p>
                                <p class="advantages-block__text">We offer customers a large selection of high-quality
                                    equipment and spare parts, which allows them to choose the optimal solution for
                                    their needs.</p>
                            </div>
                        </div>
                        <div class="advantages-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-img/advant-img-2.jpg"
                                 alt=""
                                 class="advantages-item__img">
                            <div class="advantages-block">
                                <p class="advantages-block__title">Professional technical support and consultation</p>
                                <p class="advantages-block__text">Our company has highly qualified specialists who are
                                    always ready to help customers in choosing equipment and solving technical
                                    issues.</p>
                            </div>
                        </div>
                        <div class="advantages-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-img/advant-img-3.jpg"
                                 alt=""
                                 class="advantages-item__img">
                            <div class="advantages-block">
                                <p class="advantages-block__title">Wide selection of computer and electrical
                                    accessories</p>
                                <p class="advantages-block__text">We offer a large selection of accessories for
                                    computers and electronics, which allows our customers to work with equipment
                                    conveniently and efficiently.</p>
                            </div>
                        </div>
                        <div class="advantages-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-img/advant-img-4.jpg"
                                 alt=""
                                 class="advantages-item__img">
                            <div class="advantages-block">
                                <p class="advantages-block__title">Individual approach to each client</p>
                                <p class="advantages-block__text">We try to take into account all the needs and wishes
                                    of our clients in order to offer them the best terms of cooperation and solutions
                                    for their business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--form-section-->
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-wrapper">
                        <div class="form-grid">
                            <div class="form-field">
                        <?php echo do_shortcode( '[contact-form-7 id="76e057c" title="Contact form"]' );?>
                            </div>
                            <div class="form-description">
                                <h2 class="form-wrapper__title">Feedback</h2>
                                <p class="form-description__text">Thank you for your interest in our Divom company and
                                    its
                                    products. If you have any questions, suggestions or comments, please fill out the
                                    feedback form below. We will try to respond to your message as quickly as possible.
                                </p>
                                <p class="form-description__text">Also, if you need advice on choosing the optimal
                                    equipment
                                    or installation, commissioning, repair and maintenance services, please contact us
                                    in
                                    any way convenient for you.</p>
                                <p class="form-description__text">Thank you for your attention and we look forward to
                                    further cooperation!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>



