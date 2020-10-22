<?php /*
 Template for grid after slider on the main page
 */

?>
<!-- main page grid -->

<?php global $post;

/* set up for the first grid on the main page */

$grid_post_1_1   = array(
	'post_type'   => 'mclaren_posts',
	'order'       => 'ASC',
	'numberposts' => 1,
	'meta_query'  => array(
		array(
			'key'   => 'my_meta_key',
			'value' => 'main_1-1',
		)
	)
);


$grid_post_1_2 = array(
	'post_type'   => 'mclaren_posts',
	'order'       => 'ASC',
	'numberposts' => 1,
	'meta_query'  => array(
		array(
			'key'   => 'my_meta_key',
			'value' => 'main_1-2',
		)
	)
);

/* set up for the second grid on the main page */

$grid_post_2_1   = array(
	'post_type'   => 'mclaren_posts',
	'order'       => 'ASC',
	'numberposts' => 1,
	'meta_query'  => array(
		array(
			'key'   => 'my_meta_key',
			'value' => 'main_2-1',
		)
	)
);
$grid_post_2_2 = array(
	'post_type'   => 'mclaren_posts',
	'order'       => 'ASC',
	'numberposts' => 1,
	'meta_query'  => array(
		array(
			'key'   => 'my_meta_key',
			'value' => 'main_2-2',
		)
	)
);

/* set up for the second grid on the main page */

$grid_post_3_1   = array(
	'post_type'   => 'mclaren_posts',
	'order'       => 'ASC',
	'numberposts' => 1,
	'meta_query'  => array(
		array(
			'key'   => 'my_meta_key',
			'value' => 'main_3-1',
		)
	)
);
$grid_post_3_2 = array(
	'post_type'   => 'mclaren_posts',
	'order'       => 'ASC',
	'numberposts' => 1,
	'meta_query'  => array(
		array(
			'key'   => 'my_meta_key',
			'value' => 'main_3-2',
		)
	)
);

/* custom query posts for displaying first row of the grid */
$custom_query_1_1   = new WP_Query( $grid_post_1_1 );
$custom_query_1_2 = new WP_Query( $grid_post_1_2 );
/* custom query posts for displaying second row of the grid */
$custom_query_2_1   = new WP_Query( $grid_post_2_1 );
$custom_query_2_2 = new WP_Query( $grid_post_2_2 );
/* custom query posts for displaying third row of the grid */
$custom_query_3_1   = new WP_Query( $grid_post_3_1 );
$custom_query_3_2 = new WP_Query( $grid_post_3_2 );

/* displaying first row */

if ( $grid_post_1_1 ) : if ( $custom_query_1_1->have_posts() ) : while ( $custom_query_1_1->have_posts() ) :
$custom_query_1_1->the_post(); ?>

<div class="cmp cmp-t081-redirect-tile aem-GridColumn aem-GridColumn--default--12">
    <section data-scroll-component="" class="t081-redirect-tile spacing--3 z-index-0">
        <div class="redirect-tile-wrapper">
            <a href="<?php the_permalink(); ?>" class="redirect-tile" target="_self">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="<?php the_post_thumbnail_url(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                             class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03"><?php the_field( 'title_for_the_main_page' ) ?></h3>
                    <div class="cta">
                        <span class="icon  chevron-right" data-component="icon" data-icon="chevron-right"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php endif; ?>


			<?php if ( $grid_post_1_2 ) : if ( $custom_query_1_2->have_posts() ) : while ( $custom_query_1_2->have_posts() ) :
			$custom_query_1_2->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="redirect-tile" target="_self">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="<?php the_post_thumbnail_url(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                             class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03"><?php the_field( 'title_for_the_main_page' ) ?></h3>
                    <div class="cta">
                        <span class="icon  chevron-right" data-component="icon" data-icon="chevron-right"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
        </div>
    </section>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php endif; ?>



<?php

/* displaying second grid */

if ( $grid_post_2_1 ) : if ( $custom_query_2_1->have_posts() ) : while ( $custom_query_2_1->have_posts() ) :
$custom_query_2_1->the_post(); ?>

<div class="cmp cmp-t081-redirect-tile aem-GridColumn aem-GridColumn--default--12">
    <section data-scroll-component="" class="t081-redirect-tile spacing--3 z-index-0">
        <div class="redirect-tile-wrapper">
            <a href="<?php the_permalink(); ?>" class="redirect-tile" target="_self">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="<?php the_post_thumbnail_url(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                             class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03"><?php the_field( 'title_for_the_main_page' ) ?></h3>
                    <div class="cta">
                        <span class="icon  chevron-right" data-component="icon" data-icon="chevron-right"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php endif; ?>


			<?php if ( $grid_post_2_2 ) : if ( $custom_query_2_2->have_posts() ) : while ( $custom_query_2_2->have_posts() ) :
			$custom_query_2_2->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="redirect-tile" target="_self">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="<?php the_post_thumbnail_url(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                             class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03"><?php the_field( 'title_for_the_main_page' ) ?></h3>
                    <div class="cta">
                        <span class="icon  chevron-right" data-component="icon" data-icon="chevron-right"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
        </div>
    </section>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php endif; ?>

<?php
/* displaying third grid */

if ( $grid_post_3_1 ) : if ( $custom_query_3_1->have_posts() ) : while ( $custom_query_3_1->have_posts() ) :
$custom_query_3_1->the_post(); ?>

<div class="cmp cmp-t081-redirect-tile aem-GridColumn aem-GridColumn--default--12">
    <section data-scroll-component="" class="t081-redirect-tile spacing--3 z-index-0">
        <div class="redirect-tile-wrapper">
            <a href="<?php the_permalink(); ?>" class="redirect-tile" target="_self">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="<?php the_post_thumbnail_url(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                             class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03"><?php the_field( 'title_for_the_main_page' ) ?></h3>
                    <div class="cta">
                        <span class="icon  chevron-right" data-component="icon" data-icon="chevron-right"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php endif; ?>


			<?php if ( $grid_post_3_2 ) : if ( $custom_query_3_2->have_posts() ) : while ( $custom_query_3_2->have_posts() ) :
			$custom_query_3_2->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="redirect-tile" target="_self">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="<?php the_post_thumbnail_url(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                             class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03"><?php the_field( 'title_for_the_main_page' ) ?></h3>
                    <div class="cta">
                        <span class="icon  chevron-right" data-component="icon" data-icon="chevron-right"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
        </div>
    </section>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php endif; ?>
<?php
// Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata(); ?>


