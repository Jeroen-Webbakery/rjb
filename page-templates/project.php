<?php
/**
 * Template Name: Project development
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

        <section id="header" class="project_development">
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

        <section id="content" class="project_development">
            <div class="row portfolio_items">
                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => -1, // Aantal posts
                    'order' => 'DESC',

                );
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post();
                    if (get_field('project_development') === true) :


                        get_template_part('partials/portfolio-item', 'content');


                    endif; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            </div>
        </section>
    </div>


<?php
get_footer();


