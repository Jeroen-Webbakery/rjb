<?php
$terms = wp_get_post_terms(get_the_id(), 'portfolio_category');
foreach ($terms as $term) : ?>
                    <div class="portfolio_item">
                            <a href="<?php get_the_permalink(); ?>">
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