<div class="portfolio_item">
    <a href="<?php get_the_permalink(); ?>">
        <div class="block">
            <div class="img_block">
                <?php echo get_the_post_thumbnail(get_the_id(), 'full', array('class' => 'portfolio_img')) ?>
                <div class="categorys">
                    <?php
                    $terms = wp_get_post_terms(get_the_id(), 'portfolio_category');
                    foreach ($terms as $term) :
                        $term_link = get_term_link($term); ?>
                        <a href="<?= $term_link ?>" class="category"><?php echo $term->name ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <h2 class="title"><?php the_title(); ?></h2>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </a>
</div>

