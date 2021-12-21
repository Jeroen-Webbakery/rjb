<?php
/**
 * Template Name: Portfolio
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

        <section id="header" class="portfolio">
            <div class="row">
                <div class="col-9 col-lg-6 col_left image"
                     style="background-image:url(<?php echo esc_url(get_field('header_afbeelding')); ?>)">
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
                <div class="col-9 col-lg-5 text col_right d-flex align-items-end ">
                    <div class="content">
                        <?php if ($header_content = get_field('header_content')) : ?>
                            <?php echo $header_content; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="content" class="portfolio_overview">
            <div class="row portfolio_items">
                <?php
                $args = array(
                    'post_type' => 'portfolio',

                );
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post();
                    $terms = wp_get_post_terms(get_the_id(), 'portfolio-category');
                    foreach ($terms as $term) :
                        $term_link = get_term_link($term); ?>

                        <div class="portfolio_item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="block">
                                    <div class="img_block">
                                        <?php echo get_the_post_thumbnail(get_the_id(), 'post_thumbnail', array('class' => 'portfolio_img')) ?>
                                        <span class="category"><?php echo $term->name ?></span>
                                    </div>
                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <div class="content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            </div>
        </section>
    </div>


<?php
get_footer();


