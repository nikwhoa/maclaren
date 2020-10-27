<?php
/**
 * The template for displaying products pages
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karinaboss-template
 */

get_header();
?>

    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="cmp cmp-h011-hero-image-video aem-GridColumn aem-GridColumn--default--12">
                <section data-component="h011-hero-image-video"
                         class="h011-hero-image-video spacing-default  extra-gradient  " data-scroll-component=""
                         data-youtube="">
                    <div class="background-wrapper">
                        <picture class="responsive-image " data-component="responsive-image">
                            <source media="(max-width: 767px)" class="js-small-image"
                                    srcset="<?php the_post_thumbnail_url(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="New GT"
                                 class="js-normal-image fit-cover ">
                        </picture>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="column column-sm-2 column-md-7">
                                <div class="content-wrapper">
                                    <p class="copy-01 js-reveal-transition-element" style="">Новые правила</p>
                                    <h2 class="heading-01 js-gradient-transition-element" style="">
										<?php the_title(); ?>
                                    </h2>
                                </div>
                            </div>
                            <div class="column column-sm-2 column-md-3 column-lg-2">
                                <button class="play-button js-play-button" type="button">
                                    <span class="icon  " data-component="icon" data-icon="play-filled"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.1 15.4"><path
                                                    d="M12.1 8.6L2 14.8a1 1 0 0 1-1.4-.4 4.3 4.3 0 0 1-.1-.5V1.5a.9.9 0 0 1 1-1H2l10.1 6.4a.9.9 0 0 1 .3 1.3c0 .2-.2.3-.3.4z"
                                                    fill="#fff" stroke="#000" stroke-miterlimit="10"
                                                    fill-rule="evenodd"></path></svg></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <section data-component="m010-video" class="m010-video spacing-default " data-scroll-component=""
                             data-you-tube-id="oCyYeItGz6o" style="pointer-events: none; opacity: 0;">
                        <div class="container">
                            <div class="row">
                                <div class="column column-md-12 column-sm-2">
                                    <div class="video-wrapper js-video-wrapper"
                                         style="visibility: inherit; opacity: 1;">
                                        <div class="player-placeholder-wrapper js-player-placeholder-wrapper">
                                            <iframe class="player-placeholder-element js-player-placeholder-element"
                                                    frameborder="0" allowfullscreen="1"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    title="YouTube video player" width="1411" height="793.6875"
                                                    src="https://www.youtube.com/embed/oCyYeItGz6o?rel=0&amp;playsinline=1&amp;autoplay=false&amp;controls=true&amp;showinfo=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fmclarenautomotive.ru&amp;widgetid=1"
                                                    id="widget2"></iframe>
                                        </div>
                                        <picture class="responsive-image thumbnail-image js-thumbnail-image"
                                                 data-component="responsive-image">
                                            <source media="(max-width: 767px)" class="js-small-image"
                                                    srcset="/content/dam/mclaren-automotive/models/new-mclaren-gt/overview/mobile/New-McLaren-Mobile-Hero.jpg">
                                            <img src="../content/dam/mclaren-automotive/models/new-mclaren-gt/overview/New_McLaren_GT_H011_1920_x_1080.jpg"
                                                 alt="New GT" class="js-normal-image fit-cover ">
                                        </picture>
                                        <button class="play-button js-play-button" type="button">
                                            <span class="icon  " data-component="icon" data-icon="play-filled"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.1 15.4"><path
                                                            d="M12.1 8.6L2 14.8a1 1 0 0 1-1.4-.4 4.3 4.3 0 0 1-.1-.5V1.5a.9.9 0 0 1 1-1H2l10.1 6.4a.9.9 0 0 1 .3 1.3c0 .2-.2.3-.3.4z"
                                                            fill="#fff" stroke="#000" stroke-miterlimit="10"
                                                            fill-rule="evenodd"></path></svg></span>
                                        </button>
                                        <div class="control-wrapper js-control-wrapper">
                                            <button class="play-pause-button js-play-pause-button" type="button">
                                                <span class="icon  play" data-component="icon" data-icon="play"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.1 14.4"><path
                                                                d="M11.6 8.1L1.5 14.3a1 1 0 0 1-1.4-.4 4.3 4.3 0 0 1-.1-.5V1a.9.9 0 0 1 1-1h.5l10.1 6.4a.9.9 0 0 1 .3 1.3c0 .2-.2.3-.3.4zM2 2.8v8.8l7.2-4.4z"
                                                                fill="#fff" fill-rule="evenodd"></path></svg></span>
                                                <span class="icon  pause" data-component="icon" data-icon="pause"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 16"><path
                                                                d="M1 0a.9.9 0 0 1 1 1v14a.9.9 0 0 1-1 1 .9.9 0 0 1-1-1V1a.9.9 0 0 1 1-1zm6 0a.9.9 0 0 1 1 1v14a.9.9 0 0 1-1 1 .9.9 0 0 1-1-1V1a.9.9 0 0 1 1-1z"
                                                                fill="#fff" fill-rule="evenodd"></path></svg></span>
                                            </button>
                                            <div class="timeline js-timeline">
                                                <div class="total-timeline"></div>
                                                <div class="hover-timeline js-hover-timeline"></div>
                                                <div class="progress-timeline js-progress-timeline"></div>
                                            </div>
                                            <button class="mute-button js-mute-button" type="button">
                                                <span class="icon  muted" data-component="icon" data-icon="muted"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.5 16"><path
                                                                d="M15 6.6l1.8-1.8a1 1 0 0 1 1.4 1.4L16.4 8l1.8 1.8a1 1 0 0 1-1.4 1.4L15 9.4l-1.8 1.8a1 1 0 0 1-1.4-1.4L13.6 8l-1.8-1.8a1 1 0 0 1 1.4-1.4zM0 5l9-5v16l-9-5zm2 1.2v3.6l5 2.8V3.4z"
                                                                fill="#fff" fill-rule="evenodd"></path></svg></span>
                                                <span class="icon  unmuted" data-component="icon" data-icon="unmuted"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 16"><path
                                                                d="M0 5l9-5v16l-9-5zm2 1.2v3.6l5 2.8V3.4zm11.4-3.7L14.6 1a8.9 8.9 0 0 1 0 14l-1.2-1.5A7.2 7.2 0 0 0 16 8a7.2 7.2 0 0 0-2.6-5.5zM11 5.9l1-1.8A4.7 4.7 0 0 1 14.5 8a4.7 4.7 0 0 1-2.5 3.9l-1-1.8A2.4 2.4 0 0 0 12.5 8 2.4 2.4 0 0 0 11 5.9z"
                                                                fill="#fff" fill-rule="evenodd"></path></svg></span>
                                            </button>
                                            <button class="full-screen-button js-full-screen-button" type="button">
                                                <span class="icon  full-screen" data-component="icon"
                                                      data-icon="full-screen"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   viewBox="0 0 22 20"><path
                                                                d="M20 15h2v5h-6v-2h4zM16 0h6v5h-2V2h-4zM0 0h6v2H2v3H0zm0 15h2v3h4v2H0z"
                                                                fill="#fff" fill-rule="evenodd"></path></svg></span>
                                                <span class="icon  exit-full-screen" data-component="icon"
                                                      data-icon="exit-full-screen"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path
                                                                d="M14 18h-2v-5h6v2h-4zm4-13h-6V0h2v3h4zM6 5H0V3h4V0h2zm0 13H4v-3H0v-2h6z"
                                                                fill="#fff" fill-rule="evenodd"></path></svg></span>
                                            </button>
                                        </div>
                                        <button class="close-button js-close-button" type="button">
                                            <span class="icon  close" data-component="icon" data-icon="close"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 20"><path
                                                            d="M16.4 10l8.3-8.3a1 1 0 0 0 0-1.4 1 1 0 0 0-1.4 0L14.6 9h-4.2L1.7.3A1 1 0 0 0 .3.3a1 1 0 0 0 0 1.4L8.6 10 .3 18.3a1 1 0 0 0 0 1.4 1 1 0 0 0 1.4 0l8.7-8.7h4.2l8.7 8.7a1 1 0 0 0 1.4 0 1 1 0 0 0 0-1.4z"
                                                            fill="#fff" fill-rule="evenodd"></path></svg></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>

			<?php

			/* displaying link bar under the big picture */
			get_template_part( 'template-parts/links-bar-product' ); ?>

            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="cmp cmp-t020-paragraph-1-2-columns theme-dark aem-GridColumn aem-GridColumn--default--12">
                        <section data-component="t020-paragraph-1-2-colums"
                                 class="t020-paragraph-1-2-colums spacing--2  theme-dark" data-scroll-component="">
                            <div class="container-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="column column-md-6 column-sm-2 js-transition-element" style="">
                                            <h2 class="heading-03">
												<?php the_field( 'title' ); ?>
                                            </h2>
                                        </div>
										<?php
										$main_content = get_field( 'main_content' );
										if ( $main_content ) :
											?>
                                            <div class="column column-md-6 column-sm-2 single-column js-transition-element"
                                                 style="">
                                                <div class="copy-wrapper rich-text para-right">
													<?php echo $main_content; ?>
                                                </div>
                                                <div class="button-wrapper">
                                                </div>
                                            </div>
										<?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
					<?php
					$second_row = get_field( 'is_second_row_exist' );

					if ( $second_row ) :
						?>
                        <div class="cmp cmp-t080-product-tile aem-GridColumn aem-GridColumn--default--12">
                            <section data-component="t080-product-tile" data-id="t080_product_tile-1313130183"
                                     data-scroll-component="" class="t080-product-tile spacing--3 ">
                                <div class="product-tile">
                                    <div class="background-wrapper">
                                        <picture class="responsive-image " data-component="responsive-image"
                                                 style="visibility: hidden; opacity: 0; transform: translate(0%, 10%) matrix(1, 0, 0, 1, 0, 0);">
                                            <source media="(max-width: 767px)" class="js-small-image"
                                                    srcset="<?php the_field( 'image_second_row' ) ?>">
                                            <img src="<?php the_field( 'image_second_row' ) ?>"
                                                 alt="New GT" class="js-normal-image fit-cover ">
                                        </picture>
                                    </div>
                                    <div class="tile-header"><span
                                                class="title"> <?php the_field( 'title_second_row' ); ?> </span>
                                    </div>
                                    <div class="tile-content">
                                        <div class="copy-02">
											<?php the_field( 'main_content_second_row' ); ?>
                                            <a href="<?php the_field( 'link_second_row' ) ?>" class="cta"
                                               target="_self">
                                            <span class="icon  chevron-right" data-component="icon"
                                                  data-icon="chevron-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 316.3 632.4"><path
                                                            d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                                                Узнать
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tile-button button-open js-open">
                                    <span class="icon  " data-component="icon" data-icon="plus"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path
                                                    d="M15 7H9V1a.9.9 0 0 0-1-1 .9.9 0 0 0-1 1v6H1a.9.9 0 0 0-1 1 .9.9 0 0 0 1 1h6v6a.9.9 0 0 0 1 1 .9.9 0 0 0 1-1V9h6a.9.9 0 0 0 1-1 .9.9 0 0 0-1-1"
                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                    </div>
                                    <div class="tile-button button-close js-close">
                                    <span class="icon  " data-component="icon" data-icon="close"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 20"><path
                                                    d="M16.4 10l8.3-8.3a1 1 0 0 0 0-1.4 1 1 0 0 0-1.4 0L14.6 9h-4.2L1.7.3A1 1 0 0 0 .3.3a1 1 0 0 0 0 1.4L8.6 10 .3 18.3a1 1 0 0 0 0 1.4 1 1 0 0 0 1.4 0l8.7-8.7h4.2l8.7 8.7a1 1 0 0 0 1.4 0 1 1 0 0 0 0-1.4z"
                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                    </div>
                                </div>
                                <div class="product-tile">
                                    <div class="background-wrapper">
                                        <picture class="responsive-image " data-component="responsive-image"
                                                 style="visibility: hidden; opacity: 0; transform: translate(0%, 10%) matrix(1, 0, 0, 1, 0, 0);">
                                            <source media="(max-width: 767px)" class="js-small-image"
                                                    srcset="<?php the_field( 'image_second_row_2' ) ?>">
                                            <img src="<?php the_field( 'image_second_row_2' ) ?>"
                                                 alt="New GT" class="js-normal-image fit-cover ">
                                        </picture>
                                    </div>
                                    <div class="tile-header"><span
                                                class="title"> <?php the_field( 'title_second_row_2' ); ?> </span></div>
                                    <div class="tile-content">
                                        <div class="copy-02">
											<?php the_field( 'main_content_second_row_2' ) ?>
                                            <a href="<?php the_field( 'link_second_row_2' ) ?>" class="cta"
                                               target="_self">
                                            <span class="icon  chevron-right" data-component="icon"
                                                  data-icon="chevron-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 316.3 632.4"><path
                                                            d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                                                Узнать
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tile-button button-open js-open">
                                    <span class="icon  " data-component="icon" data-icon="plus"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path
                                                    d="M15 7H9V1a.9.9 0 0 0-1-1 .9.9 0 0 0-1 1v6H1a.9.9 0 0 0-1 1 .9.9 0 0 0 1 1h6v6a.9.9 0 0 0 1 1 .9.9 0 0 0 1-1V9h6a.9.9 0 0 0 1-1 .9.9 0 0 0-1-1"
                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                    </div>
                                    <div class="tile-button button-close js-close">
                                    <span class="icon  " data-component="icon" data-icon="close"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 20"><path
                                                    d="M16.4 10l8.3-8.3a1 1 0 0 0 0-1.4 1 1 0 0 0-1.4 0L14.6 9h-4.2L1.7.3A1 1 0 0 0 .3.3a1 1 0 0 0 0 1.4L8.6 10 .3 18.3a1 1 0 0 0 0 1.4 1 1 0 0 0 1.4 0l8.7-8.7h4.2l8.7 8.7a1 1 0 0 0 1.4 0 1 1 0 0 0 0-1.4z"
                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                    </div>
                                </div>
                            </section>
                        </div>
					<?php endif; ?>
					<?php
					$third_row = get_field( 'is_third_row_exist' );

					if ( $third_row ) :
						?>
                        <div class="cmp cmp-m020-image aem-GridColumn aem-GridColumn--default--12">
                            <section data-component="m020-image" class="m020-image spacing--3 z-index-0 "
                                     data-scroll-component="">
                                <picture class="responsive-image " data-component="responsive-image">
                                    <source media="(max-width: 767px)" class="js-small-image"
                                            srcset="<?php the_field( 'image_third_row' ); ?>">
                                    <img src="<?php the_field( 'image_third_row' ); ?>"
                                         alt="<?php the_title(); ?>" class="js-normal-image fit-cover "
                                         style="visibility: hidden; opacity: 0; transform: translate(0%, 10%) matrix(1, 0, 0, 1, 0, 0);">
                                </picture>
                            </section>
                        </div>
					<?php
					endif;
					?>

					<?php
					$fourth_row = get_field( 'is_fourth_row_exist' );

					if ( $fourth_row ) :
						?>
                        <div class="cmp cmp-t020-paragraph-1-2-columns theme-dark aem-GridColumn aem-GridColumn--default--12">
                            <section data-component="t020-paragraph-1-2-colums"
                                     class="t020-paragraph-1-2-colums spacing--2  theme-dark" data-scroll-component="">
                                <div class="container-wrapper">
                                    <div class="container">
                                        <div class="row">
                                            <div class="column column-md-6 column-sm-2 js-transition-element"
                                                 style="transform: matrix(1, 0, 0, 1, 0, 40); visibility: hidden; opacity: 0;">
                                                <h2 class="heading-03">
													<?php the_field( 'title_fourth_row' ); ?>
                                                </h2>
                                            </div>
                                            <div class="column column-md-6 column-sm-2 single-column js-transition-element"
                                                 style="transform: matrix(1, 0, 0, 1, 0, 40); visibility: hidden; opacity: 0;">
                                                <div class="copy-wrapper rich-text para-right">
													<?php the_field( 'main_content_fourth_row' ); ?>
                                                </div>
                                                <div class="button-wrapper">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
					<?php endif; ?>

					<?php
					$fifth_row = get_field( 'is_fifth_row_exist' );

					if ( $fifth_row ) :
						?>
                        <div class="cmp cmp-t080-product-tile aem-GridColumn aem-GridColumn--default--12">
                            <section data-component="t080-product-tile"
                                     data-id="t080_product_tile_1167476896-1321569369"
                                     data-scroll-component="" class="t080-product-tile spacing-3 ">
                                <div class="product-tile">
                                    <div class="background-wrapper">
                                        <picture class="responsive-image " data-component="responsive-image"
                                                 style="visibility: hidden; opacity: 0; transform: translate(0%, 10%) matrix(1, 0, 0, 1, 0, 0);">
                                            <source media="(max-width: 767px)" class="js-small-image"
                                                    srcset="<?php the_field( 'image_fifth_row' ); ?>">
                                            <img src="<?php the_field( 'image_fifth_row' ); ?>"
                                                 alt="<?php the_title(); ?>" class="js-normal-image fit-cover ">
                                        </picture>
                                    </div>
                                    <div class="tile-header"><span
                                                class="title"><?php the_field( 'title_fifth_row' ); ?></span>
                                    </div>
                                    <div class="tile-content">
                                        <div class="copy-02">
											<?php the_field( 'main_content_fifth_row' ); ?>
                                            <a href="<?php the_field( 'link_fifth_row' ); ?>" class="cta"
                                               target="_self">
                                            <span class="icon  chevron-right" data-component="icon"
                                                  data-icon="chevron-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 316.3 632.4"><path
                                                            d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                                                Узнать
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tile-button button-open js-open">
                                    <span class="icon  " data-component="icon" data-icon="plus"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path
                                                    d="M15 7H9V1a.9.9 0 0 0-1-1 .9.9 0 0 0-1 1v6H1a.9.9 0 0 0-1 1 .9.9 0 0 0 1 1h6v6a.9.9 0 0 0 1 1 .9.9 0 0 0 1-1V9h6a.9.9 0 0 0 1-1 .9.9 0 0 0-1-1"
                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                    </div>
                                    <div class="tile-button button-close js-close">
                                    <span class="icon  " data-component="icon" data-icon="close"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 20"><path
                                                    d="M16.4 10l8.3-8.3a1 1 0 0 0 0-1.4 1 1 0 0 0-1.4 0L14.6 9h-4.2L1.7.3A1 1 0 0 0 .3.3a1 1 0 0 0 0 1.4L8.6 10 .3 18.3a1 1 0 0 0 0 1.4 1 1 0 0 0 1.4 0l8.7-8.7h4.2l8.7 8.7a1 1 0 0 0 1.4 0 1 1 0 0 0 0-1.4z"
                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                    </div>
                                </div>
                                <div class="product-tile">
                                    <div class="background-wrapper">
                                        <picture class="responsive-image " data-component="responsive-image"
                                                 style="visibility: hidden; opacity: 0; transform: translate(0%, 10%) matrix(1, 0, 0, 1, 0, 0);">
                                            <source media="(max-width: 767px)" class="js-small-image"
                                                    srcset="<?php the_field( 'image_fifth_row_2' ); ?>">
                                            <img src="<?php the_field( 'image_fifth_row_2' ); ?>"
                                                 alt="<?php the_title() ?>" class="js-normal-image fit-cover ">
                                        </picture>
                                    </div>
                                    <div class="tile-header"><span
                                                class="title"><?php the_field( 'title_fifth_row_2' ); ?></span></div>
                                    <div class="tile-content">
                                        <div class="copy-02">
											<?php the_field( 'main_content_fifth_row_2' ); ?>
                                            <a href="<?php the_field( 'link_fifth_row_2' ); ?>" class="cta"
                                               target="_self">
                                            <span class="icon  chevron-right" data-component="icon"
                                                  data-icon="chevron-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 316.3 632.4"><path
                                                            d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                                                Узнать
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tile-button button-open js-open">
                                    <span class="icon  " data-component="icon" data-icon="plus"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path
                                                    d="M15 7H9  V1a.9.9 0 0 0-1-1 .9.9 0 0 0-1 1v6H1a.9.9 0 0 0-1 1 .9.9 0 0 0 1 1h6v6a.9.9 0 0 0 1 1 .9.9 0 0 0 1-1V9h6a.9.9 0 0 0 1-1 .9.9 0 0 0-1-1"
                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                    </div>
                                    <div class="tile-button button-close js-close">
                                    <span class="icon  " data-component="icon" data-icon="close"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 20"><path
                                                    d="M16.4 10l8.3-8.3a1 1 0 0 0 0-1.4 1 1 0 0 0-1.4 0L14.6 9h-4.2L1.7.3A1 1 0 0 0 .3.3a1 1 0 0 0 0 1.4L8.6 10 .3 18.3a1 1 0 0 0 0 1.4 1 1 0 0 0 1.4 0l8.7-8.7h4.2l8.7 8.7a1 1 0 0 0 1.4 0 1 1 0 0 0 0-1.4z"
                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                    </div>
                                </div>
                            </section>
                        </div>
					<?php endif; ?>

					<?php
					$related_posts = get_field( 'is_this_product_has_related_posts' );
					if ( $related_posts ) :
						?>

                        <div class="cmp cmp-t100-relevant-content aem-GridColumn aem-GridColumn--default--12">
                            <section data-component="t100-relevant-content"
                                     class="t100-relevant-content spacing-default "
                                     data-scroll-component="">
                                <div class="container-wrapper">
                                    <div class="container">
                                        <div class="row">
                                            <div class="column column-sm-2 column-md-12 column-lg-12">
                                                <h3 class="heading-03">
                                                    Связанный контент</h3>
                                                <div class="carousel-trigger-wrapper">
                                                    <button class="carousel-trigger js-previous inactive">
                                                    <span class="icon  " data-component="icon" data-icon="down-arrow"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path
                                                                    d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                                    </button>
                                                    <button class="carousel-trigger js-next">
                                                    <span class="icon  " data-component="icon" data-icon="down-arrow"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path
                                                                    d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container js-storyline"
                                         style="transform: translate3d(0px, 0px, 0px); touch-action: pan-y; user-select: none;">
                                        <div class="story-row row">



	                                            <?php
	                                            $featured_posts = get_field('jjjj');
	                                            if( $featured_posts ): ?>

			                                            <?php foreach( $featured_posts as $post ):

				                                            // Setup this post for WP functions (variable must be named $post).
				                                            setup_postdata($post); ?>
                                            <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                                                            <a href="<?php the_permalink(); ?>"
                                                               class="story-tile js-cta" target="_self">
                                                                <picture class="responsive-image "
                                                                         data-component="responsive-image">
                                                                    <source media="(max-width: 767px)" class="js-small-image"
                                                                            srcset="<?php the_post_thumbnail_url(); ?>">
                                                                    <img src="<?php the_post_thumbnail_url(); ?>"
                                                                         alt="The rule-breaking Grand Tourer"
                                                                         class="js-normal-image fit-cover ">
                                                                </picture>
                                                                <p class="copy-title"><?php the_title() ?></p>
                                                                <div class="copy-summary">
                                                                    <?php the_field('text_for_related_post'); ?>
                                                                </div>
                                                                <div class="cta-holder">
                                                                    <div class="cta">Узнать больше</div>
                                                                </div>
                                                            </a>
                                            </div>
			                                            <?php endforeach; ?>

		                                            <?php
		                                            // Reset the global post object so that the rest of the page works correctly.
		                                            wp_reset_postdata(); ?>
	                                            <?php endif; ?>





                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
					<?php endif; ?>
                    <div class="cmp cmp-s040-downloadables aem-GridColumn aem-GridColumn--default--12">
                        <section class="s040-downloadables spacing-default " data-component="s040-downloadables"
                                 data-scroll-component="">
                            <div class="container">
                                <div class="row">
                                    <div class="column column-spacer"></div>
                                    <div class="column column-md-12 column-lg-10 column-sm-2">
                                        <div class="downloadable-wrapper">
                                            <div class="left-content">
                                                <p class="copy-03">Новый GT </p>
                                                <p class="copy-02">Брошюра Продукции</p>
                                            </div>
                                            <a class="download-link"
                                               href="../content/dam/mclaren-automotive/models/new-mclaren-gt/brochures/New McLaren GT Product Brochure - EN.pdf"
                                               data-id="s040_downloadables-556886101-New GT "
                                               data-type="application/pdf" data-category="Product Brochure"
                                               data-filename="New McLaren GT Product Brochure - EN.pdf">
                                                <p class="copy-03">4 MB</p>
                                                <p class="cta">Загрузить</p>
                                                <div class="icon-wrapper">
                                                    <span class="icon  download-icon" data-component="icon"
                                                          data-icon="download"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 13.9 20"><path
                                                                    d="M4.6 20L.3 15.7a1 1 0 0 1 0-1.4 1 1 0 0 1 1.4 0L5.4 18H6V1a.9.9 0 0 1 .8-1H7a.9.9 0 0 1 1 .8V18h.6l3.7-3.7a1.1 1.1 0 0 1 1.4.2.9.9 0 0 1 0 1.2L9.4 20z"
                                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                                    <span class="icon  minus-icon" data-component="icon"
                                                          data-icon="minus"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                 viewBox="0 0 16 2"><path
                                                                    d="M1 0h14a.9.9 0 0 1 1 1 .9.9 0 0 1-1 1H1a.9.9 0 0 1-1-1 .9.9 0 0 1 1-1z"
                                                                    fill="#fff" fill-rule="evenodd"></path></svg></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="column column-spacer"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="cmp cmp-s090-car-configurator aem-GridColumn aem-GridColumn--default--12">
                        <section data-component="s090-car-configurator" data-id="s090_car_configurato-937219495"
                                 class="s090-car-configurator spacing-default " data-scroll-component="">
                            <div class="background-wrapper">
                                <picture class="responsive-image js-image-reveal" data-component="responsive-image"
                                         style="transform: matrix(1, 0, 0, 1, 0, 40); visibility: hidden; opacity: 0;">
                                    <source media="(max-width: 767px)" class="js-small-image"
                                            srcset="/content/dam/mclaren-automotive/configurator/hero/New%20GT.png">
                                    <img src="../content/dam/mclaren-automotive/configurator/hero/New GT.png"
                                         alt="New GT Configurator" class="js-normal-image  fit-contain">
                                </picture>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="column column-sm-2 column-md-12 column-lg-12">
                                        <h2 class="heading-03">
                                            пусть он станет вашим</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="column column-sm-2 column-md-12 column-lg-12 primary-button-column">
                                        <div class="primary-button " data-component="primary-button">
                                            <a href="http://configurator.mclaren.com/model/gt"
                                               class="theme-outline-on-light" target="_blank">
                                                конфигурируйте ваш Новый GT
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="cmp cmp-s010-register-interest aem-GridColumn aem-GridColumn--default--12">
                        <section data-component="s010-register-interest-prospect"
                                 data-id="s010_register_intere-1713792030" data-car-model=""
                                 class="s010-register-interest-prospect spacing-default " data-scroll-component="">
                            <div class="container-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="column column-md-7 column-sm-2">
                                            <h3 class="heading-03">
                                                Регистрируйте Заявку
                                            </h3>
                                        </div>
                                        <div class="column column-md-5 column-sm-2">
                                            <div class="copy-wrapper copy-02">
                                                <p>Свяжитесь с розничной компанией или зарегистрируйтесь, чтобы всегда
                                                    оставаться в курсе самых последних новостей от McLaren
                                                    Automotive</p>
                                            </div>
                                            <div class="primary-button js-cta-button" data-component="primary-button">
                                                <a href="https://retailerportal.mclaren.com/leadcaptureform/?campaignid=CMP-01090-J9V8L2"
                                                   class="theme-outline-on-light" target="_blank">
                                                    Регистрируйте Заявку
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="cmp cmp-n014-end-of-page-navigation aem-GridColumn aem-GridColumn--default--12">
                <section data-component="n014-end-of-page-navigation" data-id="n014_end_of_page_nav-1521566000"
                         class="n014-end-of-page-navigation" data-scroll-component="">
                    <a href="new-mclaren-gt/design.html" class="js-next-click">
                        <div class="container">
                            <div class="row">
                                <div class="column column-md-3 column-lg-2 spacer-column"></div>
                                <div class="column column-sm-2 column-md-9 column-lg-10 heading-column">
                                    <h3 class="heading-03">
                                        Особенности конструкции
                                    </h3>
                                </div>
                                <div class="column column-sm-2 column-md-3 column-lg-2 cta-column">
                                    <div class="icon-wrapper">
                                        <span class="icon  " data-component="icon" data-icon="chevron-right"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.3 632.4"><path
                                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                                    </div>
                                    <p class="copy-02">
                                        Следующая глава
                                    </p>
                                </div>
                                <div class="column column-sm-2 column-md-9 column-lg-10 background-column">
                                    <picture class="responsive-image " data-component="responsive-image">
                                        <source media="(max-width: 767px)" class="js-small-image"
                                                srcset="/content/dam/mclaren-automotive/models/new-mclaren-gt/overview/New-McLaren-GT-Overview-1905x600.jpg">
                                        <img src="../content/dam/mclaren-automotive/models/new-mclaren-gt/overview/New-McLaren-GT-Overview-1905x600.jpg"
                                             alt="New GT" class="js-normal-image fit-cover ">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </a>
                </section>
            </div>
        </div>
    </div>

<?php
//get_sidebar();
get_footer();
