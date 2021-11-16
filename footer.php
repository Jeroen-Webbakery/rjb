<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webtheme
 */

?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-1 d-lg-flex align-items-center column_left">
                <?= !empty($img = get_field('logo')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'footer_logo']) : '' ?>
                <p><?php the_field('content');?></p>
            </div>
            <div class="col-sm-12 col-lg-5 column_right d-lg-flex align-items-center justify-content-lg-end">
                <a class="privacy_modal_link">Privacy</a>
                <a class="disclaimer_modal_link">Disclaimer</a>
        </div>
    </div>
</footer>

<div class="bottom_bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 mb-3 mb-lg-0 d-lg-flex align-items-center">
                <p class="mb-0">© All rights reserved The Bridge/ Caransa b.v. <?php echo date('Y'); ?></p>
            </div>
            <div class="col-sm-12 col-lg-6 text-center text-lg-right d-lg-flex align-items-center justify-content-lg-end">
                <a href="https://www.fpw.nl">Design by FPW</a>
            </div>
        </div>
    </div>
</div>


<div class="modal privacy_modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Privacy Policy</h4>
                <a class="close">
                    X
                </a>
            </div>
            <div class="modal-body">
                <?php if ( $privacy_policy = get_field( 'privacy_policy', 'options' ) ) : ?>
                    <?php echo $privacy_policy; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<div class="modal disclaimer_modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Disclaimer</h4>
                <a class="close">
                    X
                </a>
            </div>
            <div class="modal-body">
                <?php if ( $disclaimer = get_field( 'disclaimer', 'options' ) ) : ?>
                    <?php echo $disclaimer; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>

