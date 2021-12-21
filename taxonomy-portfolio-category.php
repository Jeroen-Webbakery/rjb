<?php

get_header();
$term = get_queried_object();
$description = term_description();

?>
<?php if (get_field('logo_kleur') === true) : ?>
    <script>
        $(document).ready(function () {
            $("body").addClass("white");
        });
    </script>
<?php endif; ?>

    <div data-barba="container" data-barba-namespace="header">

        <section id="header" class="portfolio_category">
            <div class="row">
                <div class="col-9 col-lg-6 col_left image"
                     style="background-image:url(<?php echo esc_url(get_field('header_img', $term)); ?>)">
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
                <div class="col-9 col-lg-5 col_right d-flex align-items-end ">
                    <div class="content">
                        <h1><?php echo $term->name; ?></h1>
                        <p><?= $description ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section id="content" class="portfolio_category_items">
            <div class="row portfolio_items">

                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'portfolio-category',
                            'field' => 'slug',
                            'terms' => $term->slug,
                        ),
                    ),
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post(); ?>

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

                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            </div>
        </section>

    </div>
<?php
get_footer();
