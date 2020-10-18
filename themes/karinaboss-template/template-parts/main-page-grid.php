<?php /*
 Template for grid after slider on the main page
 */

?>
<!-- main page grid -->

<div class="cmp cmp-t081-redirect-tile aem-GridColumn aem-GridColumn--default--12">
    <section data-scroll-component=""
             class="t081-redirect-tile spacing--3 z-index-0 "
             data-id="t081_redirect_tile-1416783995">
        <div class="redirect-tile-wrapper">

			<?php
            global $post;

			$slider_posts = array(
				'post_type' => 'mclaren_posts',
				'order'     => 'ASC',
				'meta_query' => array(
					array(
						'key'     => 'my_meta_key',
						'value'   => '1',
					)
				)
			);
			$number       = 0;
			$custom_query = new WP_Query( $slider_posts );
				if ( $custom_query->have_posts() ) : while ($number < 2) : $number++; $custom_query->the_post(); ?>
<!--                    --><?php //foreach ( $slider_posts as $post )  :  setup_postdata( $post );  ?>
                        <a href="<?php the_permalink(); ?>" class="redirect-tile" target="_self">
                            <div class="background-wrapper">
                                <picture class="responsive-image " data-component="responsive-image">
                                    <source media="(max-width: 767px)" class="js-small-image"
                                            srcset="<?php the_post_thumbnail_url(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>"
                                         alt="McLaren Experiences" class="js-normal-image fit-cover ">
                                </picture>
                            </div>
                            <div class="redirect-tile-content">
                                <h3 class="heading-03"><?php the_field( 'title_for_the_main_page' ) ?></h3>
                                <div class="cta">
						<span class="icon  chevron-right" data-component="icon"
                              data-icon="chevron-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                                    Узнать
                                </div>
                            </div>
                        </a>
					<?php

                endwhile;
			 ?>

				<?php endif; ?>
        </div>
    </section>
</div>


<!--<div class="cmp cmp-t081-redirect-tile aem-GridColumn aem-GridColumn--default--12">
    <section data-component="t081-redirect-tile" data-scroll-component=""
             class="t081-redirect-tile spacing--3 z-index-0 "
             data-id="t081_redirect_tile_1279618979-627684611">
        <div class="redirect-tile-wrapper">
            <a href="gb-en/customer-racing.html" class="redirect-tile" target="_self">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image"
                             style="visibility: inherit; opacity: 1;">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="/content/dam/mclaren-automotive/homepage/homepage-tiles/Homepage-customer-racing-tile-1200x1200.jpg">
                        <img src="content/dam/mclaren-automotive/homepage/homepage-tiles/Homepage-customer-racing-tile-1200x1200.jpg"
                             alt="Customer Racing" class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03">Гонки для Клиента</h3>
                    <div class="cta">
						<span class="icon  chevron-right" data-component="icon"
                              data-icon="chevron-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
            <a href="gb-en/about.html" class="redirect-tile" target="_self">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image"
                             style="visibility: inherit; opacity: 1;">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="/content/dam/mclaren-automotive/about-/home-page/Our%20home.jpg">
                        <img src="content/dam/mclaren-automotive/about-/home-page/Our home.jpg"
                             alt="About" class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03">О <span>McLAREN</span></h3>
                    <div class="cta">
						<span class="icon  chevron-right" data-component="icon"
                              data-icon="chevron-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
        </div>
    </section>
</div>
<div class="cmp cmp-t081-redirect-tile aem-GridColumn aem-GridColumn--default--12">
    <section data-component="t081-redirect-tile" data-scroll-component=""
             class="t081-redirect-tile spacing-2  "
             data-id="t081_redirect_tile_1143598030-450370810">
        <div class="redirect-tile-wrapper">
            <a href="http://www.preowned.mclaren.com/" class="redirect-tile" target="_blank">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image"
                             style="visibility: inherit; opacity: 1;">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="/content/dam/mclaren-automotive/homepage/homepage-tiles/Homepage-qualified-tile-1200x1200.jpg">
                        <img src="content/dam/mclaren-automotive/homepage/homepage-tiles/Homepage-qualified-tile-1200x1200.jpg"
                             alt="McLaren Qualified" class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03"><span>McLAREN</span>, прошедшие квалификационный отбор
                    </h3>
                    <div class="cta">
						<span class="icon  chevron-right" data-component="icon"
                              data-icon="chevron-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
            <a href="gb-en/ownership.html" class="redirect-tile" target="_self">
                <div class="background-wrapper">
                    <picture class="responsive-image " data-component="responsive-image"
                             style="visibility: inherit; opacity: 1;">
                        <source media="(max-width: 767px)" class="js-small-image"
                                srcset="/content/dam/mclaren-automotive/homepage/homepage-tiles/Homepage-ownership-tile-1200x1200px.jpg">
                        <img src="content/dam/mclaren-automotive/homepage/homepage-tiles/Homepage-ownership-tile-1200x1200px.jpg"
                             alt="McLaren Ownership" class="js-normal-image fit-cover ">
                    </picture>
                </div>
                <div class="redirect-tile-content">
                    <h3 class="heading-03">Право Собственности <span>McLAREN</span></h3>
                    <div class="cta">
						<span class="icon  chevron-right" data-component="icon"
                              data-icon="chevron-right"><svg xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 316.3 632.4"><path
                                        d="M15.6 542.3Q35 522.8 210.5 347.4v-63.2Q35 108.9 15.6 89.3a52.6 52.6 0 0 1 0-73.7 52.6 52.6 0 0 1 73.7 0l226.5 226.5v147.4L89.3 616a47 47 0 0 1-36.9 15.8A46.9 46.9 0 0 1 15.6 616a52.6 52.6 0 0 1 0-73.7z"></path></svg></span>
                        Узнать
                    </div>
                </div>
            </a>
        </div>
    </section>
</div>
<div class="cmp cmp-t100-relevant-content aem-GridColumn aem-GridColumn--default--12">
    <section data-component="t100-relevant-content" class="t100-relevant-content spacing-default "
             data-scroll-component="">
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="column column-sm-2 column-md-12 column-lg-12">
                        <h3 class="heading-03">
                            Новейшие Истории</h3>
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
                    <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                        <a href="gb-en/latest/taming-hong-kong-s-secret-roads.html"
                           class="story-tile js-cta" target="_self">
                            <picture class="responsive-image " data-component="responsive-image">
                                <source media="(max-width: 767px)" class="js-small-image"
                                        srcset="/content/dam/mclaren-automotive/latest-articles1/taming-hong-kong-s-secret-roads/K4A1673_700x400.png">
                                <img src="content/dam/mclaren-automotive/latest-articles1/taming-hong-kong-s-secret-roads/K4A1673_700x400.png"
                                     alt="Taming Hong Kong’s secret roads"
                                     class="js-normal-image fit-cover ">
                            </picture>
                            <p class="copy-title">Укрощение загадочных дорог Гонконга</p>
                            <div class="copy-summary">
                                <p>Гонконг, как может показаться, явно не является тем местом, где
                                    можно наслаждаться управлением суперкаром. Но владелец модели
                                    600LT Кёрк Лаи знает, что это не так</p>
                            </div>
                            <div class="cta-holder">
                                <div class="cta">Читать дальше</div>
                            </div>
                        </a>
                    </div>
                    <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                        <a href="gb-en/latest/steel-city-becomes-carbon-capital.html"
                           class="story-tile js-cta" target="_self">
                            <picture class="responsive-image " data-component="responsive-image">
                                <source media="(max-width: 767px)" class="js-small-image"
                                        srcset="/content/dam/mclaren-automotive/latest-articles1/steel-city/mclaren-sheffield-700x400.jpg">
                                <img src="content/dam/mclaren-automotive/latest-articles1/steel-city/mclaren-sheffield-700x400.jpg"
                                     alt="Steel City becomes carbon capital"
                                     class="js-normal-image fit-cover ">
                            </picture>
                            <p class="copy-title">Стальной город становится карбоновой столицей</p>
                            <div class="copy-summary">
                                <p>Не случайно город Шеффилд был выбран в качестве местоположения
                                    для нового Центра Композитных Технологий McLaren, ведь этот
                                    город насыщен культурным смыслом</p>
                            </div>
                            <div class="cta-holder">
                                <div class="cta">Читать дальше</div>
                            </div>
                        </a>
                    </div>
                    <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                        <a href="gb-en/latest/a-grand-tour-of-goodwood.html"
                           class="story-tile js-cta" target="_self">
                            <picture class="responsive-image " data-component="responsive-image">
                                <source media="(max-width: 767px)" class="js-small-image"
                                        srcset="/content/dam/mclaren-automotive/latest-articles1/a-grand-tour-of-goodwood/McL-GFOS-2019-725.jpg">
                                <img src="content/dam/mclaren-automotive/latest-articles1/a-grand-tour-of-goodwood/McL-GFOS-2019-725.jpg"
                                     alt="A ‘Grand Tour’ of Goodwood"
                                     class="js-normal-image fit-cover ">
                            </picture>
                            <p class="copy-title">Гранд Туризмо на маршруте Гудвуда</p>
                            <div class="copy-summary">
                                <p>Фестиваль Скорости этого года принял у себя автомобили McLaren,
                                    признанных звёзд, а так же устроил мировой дебют динамических
                                    характеристик нашего нового GT</p>
                            </div>
                            <div class="cta-holder">
                                <div class="cta">Читать дальше</div>
                            </div>
                        </a>
                    </div>
                    <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                        <a href="gb-en/latest/richard-griot-mclaren-collector-extraordinaire.html"
                           class="story-tile js-cta" target="_self">
                            <picture class="responsive-image " data-component="responsive-image">
                                <source media="(max-width: 767px)" class="js-small-image"
                                        srcset="/content/dam/mclaren-automotive/latest-articles1/richard%20griot%20mclaren%20collector%20extraordinaire/700x400/2017-0315-JHP-Groit-McLaren-04731.jpg">
                                <img src="content/dam/mclaren-automotive/latest-articles1/richard griot mclaren collector extraordinaire/700x400/2017-0315-JHP-Groit-McLaren-04731.jpg"
                                     alt="Richard Griot: McLaren collector extraordinaire"
                                     class="js-normal-image fit-cover ">
                            </picture>
                            <p class="copy-title">Ричард Гриот: экстраординарный коллекционер
                                McLaren</p>
                            <div class="copy-summary">
                                <p>Предприниматель и владелец одного из самых завидных гаражей в
                                    мире; знаменитый коллекционер автомобилей Ричард Гриот
                                    рассказывает нам о своей любви к машинам, и к McLaren.</p>
                            </div>
                            <div class="cta-holder">
                                <div class="cta">Читать дальше</div>
                            </div>
                        </a>
                    </div>
                    <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                        <a href="gb-en/latest/pirelli-winter-tyres-more-than-meets-the-eye.html"
                           class="story-tile js-cta" target="_self">
                            <picture class="responsive-image " data-component="responsive-image">
                                <source media="(max-width: 767px)" class="js-small-image"
                                        srcset="/content/dam/mclaren-automotive/latest-articles1/pirelli%20winter%20tyres/700x400/Winter_tyres_2x2.jpg">
                                <img src="content/dam/mclaren-automotive/latest-articles1/pirelli winter tyres/700x400/Winter_tyres_2x2.jpg"
                                     alt="Pirelli winter tyres: more than meets the eye"
                                     class="js-normal-image fit-cover ">
                            </picture>
                            <p class="copy-title">Зимние шины Пирелли: это нечто большее, чем
                                кажется на первый взгляд</p>
                            <div class="copy-summary">
                                <p>Наши наборы зимних дисков и шин дают вам возможность выжать всё
                                    из вашего McLaren линейки Sports или Super, независимо от
                                    погоды</p>
                            </div>
                            <div class="cta-holder">
                                <div class="cta">Читать дальше</div>
                            </div>
                        </a>
                    </div>
                    <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                        <a href="gb-en/latest/return-to-spa-our-golden-anniversary.html"
                           class="story-tile js-cta" target="_self">
                            <picture class="responsive-image " data-component="responsive-image">
                                <source media="(max-width: 767px)" class="js-small-image"
                                        srcset="/content/dam/mclaren-automotive/latest-articles1/return%20to%20spa%20our%20golden%20anniversary/700x400/Spa68_header.jpg">
                                <img src="content/dam/mclaren-automotive/latest-articles1/return to spa our golden anniversary/700x400/Spa68_header.jpg"
                                     alt="Return to Spa: our golden anniversary"
                                     class="js-normal-image fit-cover ">
                            </picture>
                            <p class="copy-title">Возвращение на СПА: наш золотой юбилей</p>
                            <div class="copy-summary">
                                <p>В то время, как Формула 1™ направляется в СПА для проведения Гран
                                    При Бельгии, мы предпринимает особенное путешествие к маршруту,
                                    которые принёс нам самую первую за наше существование победу</p>
                            </div>
                            <div class="cta-holder">
                                <div class="cta">Читать дальше</div>
                            </div>
                        </a>
                    </div>
                    <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                        <a href="gb-en/latest/mclaren-roars-back-to-mulsanne.html"
                           class="story-tile js-cta" target="_self">
                            <picture class="responsive-image " data-component="responsive-image">
                                <source media="(max-width: 767px)" class="js-small-image"
                                        srcset="/content/dam/mclaren-automotive/latest-articles1/mclaren%20roars%20back%20to%20mulsanne/700x400/LMC2018_PLO3746-2A2.jpg">
                                <img src="content/dam/mclaren-automotive/latest-articles1/mclaren roars back to mulsanne/700x400/LMC2018_PLO3746-2A2.jpg"
                                     alt="McLaren roars back to Mulsanne"
                                     class="js-normal-image fit-cover ">
                            </picture>
                            <p class="copy-title">Рёв моторов McLaren возвращается на Мульсан</p>
                            <div class="copy-summary">
                                <p>Наши иконы автоспорта прошедшего и сегодняшнего дня поучаствовали
                                    в тусовке и привлекли огромные толпы фанатов на фестивале
                                    Классики в Ле Мане этого лета, памятном праздновании уже почти
                                    столетней истории гонок на выносливость</p>
                            </div>
                            <div class="cta-holder">
                                <div class="cta">Читать дальше</div>
                            </div>
                        </a>
                    </div>
                    <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                        <a href="gb-en/latest/powersliding-the-fastest-racecars-in-the-world.html"
                           class="story-tile js-cta" target="_self">
                            <picture class="responsive-image " data-component="responsive-image">
                                <source media="(max-width: 767px)" class="js-small-image"
                                        srcset="/content/dam/mclaren-automotive/latest-articles1/powersliding%20the%20fastest%20racecars%20in%20the%20world/700x400/Johnny%20Rutherford%20McLaren_Grid_2x1.jpg">
                                <img src="content/dam/mclaren-automotive/latest-articles1/powersliding the fastest racecars in the world/700x400/Johnny Rutherford McLaren_Grid_2x1.jpg"
                                     alt="Powersliding the fastest racecars in the world"
                                     class="js-normal-image fit-cover ">
                            </picture>
                            <p class="copy-title">Управлять заносами в самом быстром гоночном авто в
                                мире</p>
                            <div class="copy-summary">
                                <p>Джонни Разерфорд – золотой призёр двух побед из трёх имеющихся в
                                    копилке McLaren на соревновании Инди 500, он рассказывает о
                                    малоизвестной странице нашей истории</p>
                            </div>
                            <div class="cta-holder">
                                <div class="cta">Читать дальше</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="cmp cmp-s010-register-interest aem-GridColumn aem-GridColumn--default--12">
    <section data-component="s010-register-interest-prospect"
             data-id="s010_register_intere-1614289270" data-car-model=""
             class="s010-register-interest-prospect spacing-default " data-scroll-component="">
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="column column-md-7 column-sm-2">
                        <h3 class="heading-03">
                            РЕГИСТРИРУЙТЕ ЗАЯВКУ
                        </h3>
                    </div>
                    <div class="column column-md-5 column-sm-2">
                        <div class="copy-wrapper copy-02">
                            <p>Свяжитесь с розничной компанией или зарегистрируйтесь, чтобы всегда
                                оставаться в курсе самых последних новостей от McLaren
                                Automotive</p>
                        </div>
                        <div class="primary-button js-cta-button" data-component="primary-button">
                            <a href="https://retailerportal.mclaren.com/leadcaptureform/?campaignid=CMP-01086-M1P5R4"
                               class="theme-outline-on-light" target="_blank">
                                РЕГИСТРИРУЙТЕ ЗАЯВКУ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>-->
<!--#main page grid -->

