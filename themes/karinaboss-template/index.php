<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karinaboss-template
 */

get_header();
?>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="cmp cmp-h010-hero-carousel aem-GridColumn aem-GridColumn--default--12">
                        <section data-component="h010-hero-carousel"  class="h010-hero-carousel round-height spacing--2 z-index-0 extra-gradient"  data-scroll-component="">


                            <!-- display slider posts -->

							<?php global $post;
							$slider_posts = get_posts( array(
								'posts_per_page' => - 1,
								'post_type'      => 'slider',
								'order'          => 'ASC'
							) );
							$number       = 0;
							if ( $slider_posts ) {
								foreach ( $slider_posts as $post ) : setup_postdata( $post ); ?>
                                    <div class="background-slide js-background-slide">
                                        <picture class="responsive-image " data-component="responsive-image">
                                            <source media="(max-width: 767px)" class="js-small-image"
                                                    srcset="<?php the_post_thumbnail_url( 'slider_image' ); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>"
                                                 class="js-normal-image fit-cover ">
                                            <!--                                            --><?php //the_post_thumbnail('slider_image'); ?>
                                        </picture>
                                    </div>
								<?php endforeach;
//								wp_reset_postdata();
							} ?>

                            <!--#display slider posts -->


                            <!-- display sliders text and etc. -->

                            <div class="container">
                                <div class="row">
                                    <div class="column column-sm-2 js-content-column column-md-9">

                                        <!--	                                    --><?php //global $post;
										//	                                    $slider_posts = get_posts( array(
										//		                                    'posts_per_page' => - 1,
										//		                                    'post_type'      => 'slider',
										//		                                    'order'          => 'ASC'
										//	                                    ) );
										//	                                    $number = 0;
										if ( $slider_posts ) {
											foreach ( $slider_posts as $post ) : setup_postdata( $post ); ?>
                                                <a href="<?php the_permalink(); ?>"
                                                   class="content-slide js-content-slide" target="_self">
                                                    <p class="copy-02 js-rfeveal-transition-element" style="">
														<?php the_field( 'text_above_the_title' ); ?>
                                                    </p>
                                                    <h1 class="heading-01 js-gfradient-transition-element"
                                                        style=""><?php the_title(); ?></h1>
                                                    <div class="cta-wrapper">
                                                        <span class="cta"><?php the_field( 'text_under_the_title' ) ?></span>
                                                        <div class="icon-wrapper">
                                                    <span class="icon  arrow" data-component="icon"
                                                          data-icon="big-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     viewBox="0 0 14.9 34.8"><path
                                                                    d="M0 1.4l12.9 12.9v6.2L0 33.4l1.4 1.4 13.4-13.4h.1v-8h-.1L1.4 0z"
                                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                                        </div>
                                                    </div>
                                                </a>
											<?php
											endforeach;
											wp_reset_postdata();
										} ?>

                                    </div>
                                    <!-- #display sliders text and etc. -->
                                    <!-- display quantity of slides (right side of the right slider)  -->
                                    <div class="column column-sm-2 column-md-3">
                                        <div class="carousel-trigger-wrapper">
                                            <?php

                                            if ( $slider_posts ) {
                                            foreach ( $slider_posts as $post )  :  $number++; setup_postdata( $post ); ?>
                                                <button class="carousel-trigger js-carousel-trigger">
                                                    <div class="preview-wrapper">
                                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                                    </div>
                                                    <div class="copy-wrapper">
                                                        <span class="cta"><?php print($number); ?></span>
                                                    </div>
                                                </button>
                                                <div class="title-wrapper js-title-wrapper">
                                                    <span class="cta"><?php the_title(); ?></span>
                                                </div>
                                            <?php
                                            endforeach;
	                                            wp_reset_postdata();
                                            } ?>

                                        </div>
                                    </div>
                                    <!-- #display quantity of slides (right side of the right slider)  -->
                                </div>
                            </div>
                        </section>
                    </div>

                    <?php get_template_part('template-parts/main-page-grid') ?>

                </div>
            </div>
        </div>
    </div>
<?php
//get_sidebar();
get_footer();
