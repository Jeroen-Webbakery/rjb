<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>


    <div data-barba="container" data-barba-namespace="header">
        <?php get_template_part('partials/header-options', 'content'); ?>

        <section id="header" class="home">

            <div class="row">
                <div class="col-9 col-lg-5 col_left text d-flex align-items-center">
                    <div class="content animate-this">
                        <?php if ($header_tekst = get_field('header_tekst')) : ?>
                            <?php echo $header_tekst; ?>
                        <?php endif; ?>

                        <?php
                        $link = get_field('button_link');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn btn_black" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>"><?php the_field('button_tekst'); ?></a>
                        <?php endif; ?>


                    </div>
                </div>
                <div class="col-3 col-lg-1 pl-0 d-flex align-items-end justify-content-center">
                    <div class="scroll_block">
                        <a href="#content">
                            <div class="scroll_icon"></div>
                            <span class="mb-0 mb-lg-5">Scroll</span>
                        </a>
                    </div>
                </div>
                <div class="col-9 col-lg-6 image col_right px-0">
                    <?php if (have_rows('header_slider')) : ?>
                        <div class="header_slider">
                            <?php while (have_rows('header_slider')) :
                                the_row(); ?>
                                <div class="slide"
                                     style="background-image:url(<?php echo esc_url(get_sub_field('slide')); ?>);">

                                </div>

                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="content" class="portfolio home">
            <div class="row">
                <div class="col-sm-12 col-lg-5 col_left">
                    <div class="content">
                        <?php if ($portfolio_content = get_field('portfolio_content')) : ?>
                            <?php echo $portfolio_content; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7 px-lg-0 col_right">
                    <?php if (have_rows('portfolio_items')) : ?>
                    <div class="portfolio_items portfolio_slider">
                        <?php while (have_rows('portfolio_items')) :
                            the_row();
                            $link = get_sub_field('link');
                            ?>
                            <div class="item">
                                <a class="button" href="<?php echo esc_url($link); ?>">
                                    <?= !empty($img = get_sub_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'large', false, ['class' => 'portfolio_img']) : '' ?>
                                    <p class="title"><?php the_sub_field('titel'); ?></p>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="arrows d-flex align-items-center d-lg-none">
                        <a class="prev_portfolio_item"><i class="far fa-long-arrow-left"></i></a>
                        <a class="next_portfolio_item"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>


    </div>


<?php
get_footer();


