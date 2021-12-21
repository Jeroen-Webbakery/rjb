<?php
/**
 * Template Name: Contact
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
        <?php if (get_field('logo_kleur') === true) : ?>
            <script>
                $(document).ready(function () {
                    $("body").addClass("white");
                });
            </script>
        <?php endif; ?>
        <section id="header" class="contact">
            <div class="row">
                <div class="col-9 col-lg-8 image col_left image"
                     style="background-image:url(<?php echo esc_url(get_field('header_img')); ?>)">
                    <div class="gradient"></div>
                </div>
                <div class="col-9 col-lg-4 text col_right d-flex align-items-center">
                    <div class="content">
                        <?php if ($header_tekst = get_field('header_content')) : ?>
                            <?php echo $header_tekst; ?>
                        <?php endif; ?>
                        <?php if ($telefoonnummer = get_field('telefoonnummer')) : ?>
                            <a class="icon" href="tel:<?php echo esc_html($telefoonnummer); ?>"><i
                                        class="fas fa-phone-alt mr-2"></i> <?php echo esc_html($telefoonnummer); ?></a>
                        <?php endif; ?>

                        <?php if ($emailadres = get_field('emailadres')) : ?>
                            <a class="icon" href="mailto:<?php echo $emailadres; ?>"><i
                                        class="fas fa-envelope mr-2"></i> <?php echo $emailadres; ?></a>
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
            </div>
        </section>
    </div>

<?php
get_footer();


