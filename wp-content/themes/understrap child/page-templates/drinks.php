<?php
/* Template Name: Drinks */

get_header(); ?>

    <div class="container" id="sticky-navbar-content">

        <div class="menu-background">

            <div class="row row-padding-sm text-center">
                <div class="col-12">
                    <h2>Drinks</h2>
                    <hr class="separator">
                </div>
            </div>


            <?php
            $drinks = get_posts(array(
                'category' => 4
            ));

            if (count($drinks) > 0): ?>

            <?php foreach ($drinks as $drink):
                $name = $drink->post_title;
                $id = $drink->ID;
                $imageurl = get_the_post_thumbnail_url($id);
                $link = get_permalink($id);
                ?>
                <div class="row text-center menu-row">

                    <div class="col-4">
                        <div class="middle">
                            <img src="<?php echo $imageurl; ?>" class="img-fluid menu-img">
                        </div>
                    </div>

                    <div class="col-8">
                        <div class="middle">
                            <a href="<?php echo $link ?>"><h2><?php echo $name; ?></h2></a>
                        </div>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <?php endif; ?>

    </div>


<?php get_footer(); ?>