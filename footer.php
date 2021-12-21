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
</footer>


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
                <?php if ($privacy_policy = get_field('privacy_policy', 'options')) : ?>
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
                <?php if ($disclaimer = get_field('disclaimer', 'options')) : ?>
                    <?php echo $disclaimer; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>




<?php wp_footer(); ?>
</div>
</body>

</html>

