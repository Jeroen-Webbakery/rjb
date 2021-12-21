<?php

get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>


    <div data-barba="container" data-barba-namespace="header" data-barba-prevent="all">
        <?php get_template_part('partials/header-options', 'content'); ?>

        <section id="header" class="single_portfolio">
            <div class="row">
                <div class="col-9 col-lg-8 col_left image"
                     style="background-image:url(<?= $featured_img_url ?>)">

                </div>
                <div class="col-9 col-lg-4 col_right text d-flex align-items-end ">
                    <div class="content">
                        <a class="back_to d-block d-md-none" href="javascript:history.back()"><i
                                    class="far fa-long-arrow-left"></i> Terug</a>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-3 col-lg-1 scroll d-flex d-lg-none align-items-end justify-content-center">
                    <div class="scroll_block">
                        <a href="#content">
                            <div class="scroll_icon"></div>
                            <span class="mb-5">Scroll</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="content" class="single_portfolio">
            <div class="row">
                <div class="col-sm-12 col-lg-8 col_left">

                    <div class="row portfolio_images">
                        <?php if (have_rows('afbeeldingen')) : ?>
                            <?php while (have_rows('afbeeldingen')) :
                                the_row();
                                $afbeelding = get_sub_field('afbeelding');
                                ?>

                                <?php if (get_sub_field('grootte') === true) : ?>
                                <div class="col-sm-12 portfolio_image full_image">
                                    <a class="image-popup-vertical-fit"
                                       href="<?php echo esc_url($afbeelding['url']); ?>">
                                        <?= !empty($img = get_sub_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>
                                    </a>
                                </div>

                            <?php else: ?>
                                <div class="col-sm-12 col-lg-6 portfolio_image half_image">
                                    <a class="image-popup-vertical-fit"
                                       href="<?php echo esc_url($afbeelding['url']); ?>">
                                        <?= !empty($img = get_sub_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col_right"></div>
            </div>
        </section>
    </div>


<?php
get_footer();
