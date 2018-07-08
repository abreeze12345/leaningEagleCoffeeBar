<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>

<?php get_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

    <div class="<?php echo esc_attr($container); ?>">

        <div class="row">

            <div class="col-md-12 text-center">

                <footer class="site-footer" id="colophon">

                    <div class="site-info">

                        <a href="#map-row"><p>11525 Snider Rd, Cincinnati, OH 45249</p></a>
                        <a href="tel:513-247-0900"><p>513.247.0900</p></a>
                        <p>&copy;Leaning Eagle Coffee Bar</p>


                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<!-- Google Map Import -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY4JRUZlVSe_C_cBF3H3F9qA-aCEXG29Q&callback=initMap"
        async defer></script>

</body>

</html>

