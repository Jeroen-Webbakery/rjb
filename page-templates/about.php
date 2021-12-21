<?php
/**
 * Template Name: About us
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
        <section id="header" class="about">
            <div class="row">
                <div class="col-9 col-lg-7 image col_left"
                     style="background-image:url(<?php echo esc_url(get_field('header_img')); ?>)">
                    <?php if (get_field('logo_kleur') === true) : ?>
                        <div class="gradient"></div>
                    <?php endif; ?>
                </div>
                <div class="col-3 col-lg-1 scroll d-flex align-items-end justify-content-center">
                    <div class="scroll_block">
                        <a href="#content">
                            <div class="scroll_icon"></div>
                            <span class="mb-5">Scroll</span>
                        </a>
                    </div>
                </div>
                <div class="col-9 col-lg-4 text col_right d-flex align-items-end ">
                    <div class="content">
                        <?php if ($header_content = get_field('header_content')) : ?>
                            <?php echo $header_content; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="content" class="about">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col_left d-flex align-items-center">
                    <div class="content">
                        <?php if ($content = get_field('content')) : ?>
                            <?php echo $content; ?>
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
                <div class="col-sm-12 col-lg-6 col_right"
                     style="background-image:url(<?php echo esc_url(get_field('afbeelding')); ?>)">

                </div>
            </div>
        </section>
    </div>


<?php
get_footer();


