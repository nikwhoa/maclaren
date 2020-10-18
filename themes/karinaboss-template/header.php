<?php
/*
 * The header for the theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, viewport-fit=cover"/>
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'page basicpage font-en' ); ?>>
<?php wp_body_open(); ?>
<div id="app">
<div data-component="app-root">
<section class="n010-main-navigation" data-component="n010-main-navigation" data-scroll-component>
<div class="main-menu-container container js-container">
    <div class="row">
        <div class="column column-sm-2 column-md-12">
            <div class="navigation-bar">
                <div class="left-navigation-wrapper">
                    <a href="/" class="logo-wrapper js-direct-link">
                        <span class="icon  " data-component="icon" data-icon="mclaren-logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175 26"><path d="M139 10.9c24.1-15.6 56.5-16.1 18.7 9.1l.6-.8c10.7-14.7-11.1-11.4-18.8-8.5zM50.8 22H61v4H49.2c-5 0-7.2-1.5-7.2-5.5v-.9c0-3.4 2-5.6 7-5.6h12v4H50.8a1.8 1.8 0 0 0-1.8 1.8v.5a1.8 1.8 0 0 0 1.8 1.7zM70 12v10h6v4H62V12zm-37.9 1.8A8.1 8.1 0 0 1 37 12h4v14h-8v-7l-7.7 7H18v-7l-8.9 7H0l15.9-12c1.5-1.1 2.5-2 5.1-2h5v7zm67.9 1.5a2.3 2.3 0 0 1 2.5-2.3h9.5v4h-5v9h-7zm46.9-2.3c6 0 8.1 1.3 8.1 5.7V26h-7v-5a3 3 0 0 0-3-3h-3v8h-7V13zm-54.6 0c4.6 0 6.7 1.9 6.7 5.1v3c0 3.7-2.1 4.9-7.2 4.9h-7.9c-2.9 0-5-.3-6.1-1.3a3.6 3.6 0 0 1-.8-2.3v-.5c0-2 1.2-3.9 5-3.9h9c0-.9.1-1-1-1H78v-4zM91 21.5V21h-5.5a.5.5 0 0 0-.5.5.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5zm36.6-8.5c5.3 0 6.4 1.6 6.4 3.8v.5c0 2.4-1.9 3.7-5 3.7h-9c0 .9.9 1 2 1h11v4h-13.7c-4.3 0-6.3-1.8-6.3-5.1v-2.3c0-3.8 2.1-5.6 6.9-5.6zm-1.1 5a.5.5 0 0 0 .5-.5.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0-.5.5v.5z" fill="#fff"></path></svg></span>
                    </a>
                    <div class="model-categories-wrapper js-category-wrapper">
                        <div class="model-categories js-category-dragger">
                            <button type="button" class="model-category-button cta js-model-expand-trigger" data-model-category-id="0" style="">
                                Новый GT
                                <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                            </button>
                            <button type="button" class="model-category-button cta js-model-expand-trigger" data-model-category-id="1" style="">
                                Линейка Sports
                                <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                            </button>
                            <button type="button" class="model-category-button cta js-model-expand-trigger" data-model-category-id="2" style="">
                                Линейка Super
                                <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                            </button>
                            <button type="button" class="model-category-button cta js-model-expand-trigger" data-model-category-id="3" style="">
                                Линейка Ultimate
                                <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                            </button>
                            <button type="button" class="model-category-button cta js-model-expand-trigger" data-model-category-id="4" style="">
                                Достояние
                                <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                            </button>
	                        <?php
/*	                        //	            global $post;

	                        $myposts = get_posts( array(
		                        'posts_per_page' => -1,
		                        'post_type'      => 'models',
//							'meta_key'       => 'ochki',
//							'orderby'        => 'meta_value_num',
		                        'order'          => 'ASC',
		                        'post_parent' => 0,
	                        ) );
	                        if ( $myposts ) {
		                        foreach ( $myposts as $post ) :
			                        setup_postdata( $post );
			                        */?><!--
                                   <button type="button" class="model-category-button cta js-model-expand-trigger" data-model-category-id="0">
                                       <?php /*the_title(); */?>
                                       <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                   </button>
		                        --><?php
/*		                        endforeach;
		                        wp_reset_postdata();
	                        }
	                        */?>


	                       <!-- <?php
/*	                        $posts = get_children( array(
		                        'post_type'      => 'models',
		                        'post_parent' => $post->ID,
		                        'order'          => 'ASC'
	                        ) );
	                        if ( $posts ) {
		                        foreach ( $posts as $post ) :
			                        setup_postdata( $post );
			                        */?>
                                    <h1 style="color: white"> <?php /*the_title(); */?></h1>
		                        --><?php
/*		                        endforeach;
		                        wp_reset_postdata();
	                        }
	                        */?>

                        </div>
                    </div>
                </div>
                <button type="button" class="model-categories-button cta js-categories-expand-trigger">
                    Модель
                    <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                </button>
                <div class="navigation-items">
                    <a href="http://www.retailers.mclaren.com/" class="retailer-link cta js-direct-link" target="_blank">ПРОДАВЕЦ</a>
                    <button class="side-menu-toggler js-side-menu-toggler">
                        <span class="icon  hamburger-icon" data-component="icon" data-icon="hamburger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 16"><path d="M13.8.4a1.1 1.1 0 0 1-.2 1.4l-12 8-.6.2a1.2 1.2 0 0 1-.8-.4 1.1 1.1 0 0 1 .2-1.4l12-8a1.1 1.1 0 0 1 1.4.2zm5 3a1.1 1.1 0 0 1-.2 1.4l-12 8-.6.2a1.2 1.2 0 0 1-.8-.4 1.1 1.1 0 0 1 .2-1.4l12-8a1.1 1.1 0 0 1 1.4.2zm5 3a1.1 1.1 0 0 1-.2 1.4l-12 8-.6.2a1.2 1.2 0 0 1-.8-.4 1.1 1.1 0 0 1 .2-1.4l12-8a1.1 1.1 0 0 1 1.4.2z" fill="#fff" fill-rule="evenodd"></path></svg></span>
                        <span class="icon  close-icon" data-component="icon" data-icon="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 20"><path d="M16.4 10l8.3-8.3a1 1 0 0 0 0-1.4 1 1 0 0 0-1.4 0L14.6 9h-4.2L1.7.3A1 1 0 0 0 .3.3a1 1 0 0 0 0 1.4L8.6 10 .3 18.3a1 1 0 0 0 0 1.4 1 1 0 0 0 1.4 0l8.7-8.7h4.2l8.7 8.7a1 1 0 0 0 1.4 0 1 1 0 0 0 0-1.4z" fill="#fff" fill-rule="evenodd"></path></svg></span>
                        <div class="menu-tooltip cta">Меню</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="background-overlay js-background-overlay" style="visibility: hidden;opacity: 0;"></div>
    <div data-component="n011-expanded-menu" class="n011-expanded-menu" style="transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
        <div class="container">
            <div class="row">
                <div class="column column-md-3 column-lg-6 column-xl-7 column-spacer">
                </div>
                <div class="column column-sm-2 column-md-9 column-lg-6 column-xl-5">
                    <div class="side-menu-wrapper">
                        <div class="side-menu-inner">
                            <div class="categories">
                                <div class="category">
                                    <button class="category-button copy-01 js-cta-button js-category-collapse-button">
                                        ПЕРСОНАЛИЗАЦИЯ
                                        <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                    </button>
                                    <div class="sub-categories js-sub-categories" style="height: 0px;">
                                        <a href="gb-en/mso.html" class="sub-category cta js-track-cta" target="_self">Общее представление</a>
                                        <a href="gb-en/mso/defined.html" class="sub-category cta js-track-cta" target="_self">Отдел Defined</a>
                                        <a href="gb-en/mso/bespoke.html" class="sub-category cta js-track-cta" target="_self">Отдел Bespoke</a>
                                        <a href="gb-en/mso/heritage.html" class="sub-category cta js-track-cta" target="_self">Наследие</a>
                                    </div>
                                </div>
                                <div class="category">
                                    <button class="category-button copy-01 js-cta-button js-category-collapse-button">
                                        ПРАКТИЧЕСКИЕ НАВЫКИ
                                        <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                    </button>
                                    <div class="sub-categories js-sub-categories" style="height: 0px;">
                                        <a href="gb-en/experiences.html" class="sub-category cta js-track-cta" target="_self">Общее представление</a>
                                        <a href="gb-en/experiences/pure-mclaren.html" class="sub-category cta js-track-cta" target="_self">Практические навыки на Треке</a>
                                        <a href="gb-en/experiences/lifestyle.html" class="sub-category cta js-track-cta" target="_self">Стиль жизни</a>
                                        <a href="gb-en/experiences/gt-series.html" class="sub-category cta js-track-cta" target="_self">Гонки для линейки GT</a>
                                        <a href="gb-en/experiences/factory-handovers.html" class="sub-category cta js-track-cta" target="_self">Опция Factory Handovers</a>
                                    </div>
                                </div>
                                <div class="category">
                                    <button class="category-button copy-01 js-cta-button js-category-collapse-button">
                                        ПРАВО СОБСТВЕННОСТИ
                                        <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                    </button>
                                    <div class="sub-categories js-sub-categories" style="height: 0px;">
                                        <a href="gb-en/ownership.html" class="sub-category cta js-track-cta" target="_self">Владение</a>
                                        <a href="gb-en/ownership/mclaren-genuine-parts.html" class="sub-category cta js-track-cta" target="_self">Оригинальные Детали</a>
                                        <a href="gb-en/ownership/mclaren-genuine-accessories.html" class="sub-category cta js-track-cta" target="_self">Оригинальные Аксессуары</a>
                                        <a href="gb-en/ownership/service-and-maintenance.html" class="sub-category cta js-track-cta" target="_self">Обслуживание и Уход</a>
                                        <a href="gb-en/ownership/extended-warranty.html" class="sub-category cta js-track-cta" target="_self">Продлённая Гарантия </a>
                                        <a href="gb-en/ownership/mclaren-track-telemetry.html" class="sub-category cta js-track-cta" target="_self">Телеметрия на Треке</a>
                                        <a href="gb-en/ownership/mclaren-recalls.html" class="sub-category cta js-track-cta" target="_self">Отзывные акции <span>McLAREN</span></a>
                                    </div>
                                </div>
                                <div class="category">
                                    <button class="category-button copy-01 js-cta-button js-category-collapse-button">
                                        О НАС
                                        <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                    </button>
                                    <div class="sub-categories js-sub-categories" style="height: 0px;">
                                        <a href="gb-en/about.html" class="sub-category cta js-track-cta" target="_self">Общее представление</a>
                                        <a href="gb-en/about/-design-philosophy.html" class="sub-category cta js-track-cta" target="_self">Философия Проектирования</a>
                                        <a href="gb-en/about/Innovation.html" class="sub-category cta js-track-cta" target="_self">Инновационные разработки</a>
                                        <a href="gb-en/about/from-the-beginning.html" class="sub-category cta js-track-cta" target="_self">С самого начала</a>
                                        <a href="gb-en/about/our-home.html" class="sub-category cta js-track-cta" target="_self">Наш Дом</a>
                                        <a href="gb-en/about/partners.html" class="sub-category cta js-track-cta" target="_self">Партнёры</a>
                                        <a href="gb-en/about/collaborations.html" class="sub-category cta js-track-cta" target="_self">Сотрудничество</a>
                                    </div>
                                </div>
                                <div class="category">
                                    <button class="category-button copy-01 js-cta-button js-category-collapse-button">
                                        ГОНКИ ДЛЯ КЛИЕНТА
                                        <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                    </button>
                                    <div class="sub-categories js-sub-categories" style="height: 0px;">
                                        <a href="gb-en/customer-racing.html" class="sub-category cta js-track-cta" target="_self">Гонки для клиента</a>
                                        <a href="gb-en/customer-racing/models.html" class="sub-category cta js-track-cta" target="_self">Модели</a>
                                    </div>
                                </div>
                                <div class="category">
                                    <a href="gb-en/latest.html" class="category-button copy-01 js-cta-button js-track-cta" target="_self">ПОСЛЕДНИЕ НОВОСТИ</a>
                                </div>
                            </div>
                            <div class="general">
                                <div class="general-links">
                                    <a href="http://www.preowned.mclaren.com" class="general-link copy-01 js-cta-button js-track-cta" target="_blank">АВТОМОБИЛИ С ПРОБЕГОМ
                                        <span class="icon  arrow-link-icon" data-component="icon" data-icon="arrow-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.7 11.7"><path d="M8.3 0H2.2a1 1 0 1 0 0 2h5.3l.4.4L0 10.3l1.4 1.4 7.9-7.9.4.4v5.3a1.1 1.1 0 0 0 1 1 1 1 0 0 0 1-1V3.4z"></path></svg></span>
                                    </a>
                                    <a href="https://retailerportal.mclaren.com/leadcaptureform/?campaignid=CMP-01086-M1P5R4" class="general-link copy-01 js-cta-button js-track-cta" target="_blank">РЕГИСТРИРУЙТЕ ЗАЯВКУ
                                        <span class="icon  arrow-link-icon" data-component="icon" data-icon="arrow-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.7 11.7"><path d="M8.3 0H2.2a1 1 0 1 0 0 2h5.3l.4.4L0 10.3l1.4 1.4 7.9-7.9.4.4v5.3a1.1 1.1 0 0 0 1 1 1 1 0 0 0 1-1V3.4z"></path></svg></span>
                                    </a>
                                </div>

                                <div class="n030-language-switch" data-component="n030-language-switch">
                                    <div class="language-wrapper">
                                        <button class="current-language js-dropdown-toggler">
                                            <div class="cta">
                                                <img src="" class="flag" alt="United Kingdom">UK
                                            </div>
                                            <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                        </button>
                                        <div class="language-switchers js-language-list" style="opacity: 0; height: 0px;">
                                            <a href="en.html" class="language-link js-language-link cta" data-locale="en">
                                                <img src="" class="flag" alt="Global">
                                                Все региона мира</a>
                                            <a href="gb-en.html" class="language-link js-language-link cta" data-locale="en">
                                                <img src="" class="flag" alt="United Kingdom">
                                                UK</a>
                                            <a href="us-en.html" class="language-link js-language-link cta" data-locale="en">
                                                <img src="" class="flag" alt="United States">
                                                US</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="model-category-wrapper">
        <div data-component="n012-model-navigator" data-model-category-id="0" data-model-category-title="New GT" class="n012-model-navigator js-model-navigator" style="transform: translate(0%, -100%) matrix(1, 0, 0, 1, 0, 0);">
            <div class="container js-carousel-container">
                <div class="row js-carousel-row">
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/new-mclaren-gt.html" data-model-title="New GT">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="New GT">
                            </div>
                            <span class="cta">Новый GT</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/new-mclaren-gt.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                                <div class="primary-button " data-component="primary-button">
                                    <a href="http://configurator.mclaren.com/model/gt" class="theme-outline-on-dark" target="_blank">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-component="n012-model-navigator" data-model-category-id="1" data-model-category-title="Sports Series" class="n012-model-navigator js-model-navigator" style="transform: translate(0%, -100%) matrix(1, 0, 0, 1, 0, 0);">
            <div class="container js-carousel-container">
                <div class="row js-carousel-row">
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/sports-series/600lt-spider.html" data-model-title="600LT Spider">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="600LT Spider">
                            </div>
                            <span class="cta">600LT Spider</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/sports-series/600lt-spider.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                                <div class="primary-button " data-component="primary-button">
                                    <a href="http://configurator.mclaren.com/model/600lt-spider" class="theme-outline-on-dark" target="_blank">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/sports-series/600lt.html" data-model-title="600LT">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="600LT">
                            </div>
                            <span class="cta">600LT</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/sports-series/600lt.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                                <div class="primary-button " data-component="primary-button">
                                    <a href="http://configurator.mclaren.com/model/coupe600lt" class="theme-outline-on-dark" target="_blank">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/sports-series/570s-spider.html" data-model-title="570S Spider">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="570S Spider">
                            </div>
                            <span class="cta">570S Spider</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/sports-series/570s-spider.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                                <div class="primary-button " data-component="primary-button">
                                    <a href="http://configurator.mclaren.com/model/spider570s" class="theme-outline-on-dark" target="_blank">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/sports-series/570s.html" data-model-title="570S ">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="570S ">
                            </div>
                            <span class="cta">570S </span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/sports-series/570s.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                                <div class="primary-button " data-component="primary-button">
                                    <a href="http://configure.mclaren.com/570s" class="theme-outline-on-dark" target="_blank">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/sports-series/570gt.html" data-model-title="570GT">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="570GT">
                            </div>
                            <span class="cta">570GT</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/sports-series/570gt.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                                <div class="primary-button " data-component="primary-button">
                                    <a href="http://configurator.mclaren.com/model/570gt" class="theme-outline-on-dark" target="_blank">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/sports-series/540c.html" data-model-title="540C">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="540C">
                            </div>
                            <span class="cta">540C</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/sports-series/540c.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                                <div class="primary-button " data-component="primary-button">
                                    <a href="http://configure.mclaren.com/540c" class="theme-outline-on-dark" target="_blank">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-component="n012-model-navigator" data-model-category-id="2" data-model-category-title="Super Series" class="n012-model-navigator js-model-navigator" style="transform: translate(0%, -100%) matrix(1, 0, 0, 1, 0, 0);">
            <div class="container js-carousel-container">
                <div class="row js-carousel-row">
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/super-series/720s-spider.html" data-model-title="720S Spider">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="720S Spider">
                            </div>
                            <span class="cta">720S Spider</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/super-series/720s-spider.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                                <div class="primary-button " data-component="primary-button">
                                    <a href="http://configurator.mclaren.com/model/720S-Spider" class="theme-outline-on-dark" target="_blank">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/super-series/720s.html" data-model-title="720S">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="720S">
                            </div>
                            <span class="cta">720S</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/super-series/720s.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                                <div class="primary-button " data-component="primary-button">
                                    <a href="http://configurator.mclaren.com/model/coupe720s" class="theme-outline-on-dark" target="_blank">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-component="n012-model-navigator" data-model-category-id="3" data-model-category-title="Ultimate series" class="n012-model-navigator js-model-navigator" style="transform: translate(0%, -100%) matrix(1, 0, 0, 1, 0, 0);">
            <div class="container js-carousel-container">
                <div class="row js-carousel-row">
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/ultimate-series/mclaren-speedtail.html" data-model-title="Speedtail">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="Speedtail">
                            </div>
                            <span class="cta">Speedtail</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/ultimate-series/mclaren-speedtail.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/ultimate-series/mclaren-senna.html" data-model-title="McLaren Senna">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="McLaren Senna">
                            </div>
                            <span class="cta"><span>McLAREN</span> Senna</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/ultimate-series/mclaren-senna.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/ultimate-series/mclaren-senna-gtr.html" data-model-title="McLaren Senna GTR">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="McLaren Senna GTR">
                            </div>
                            <span class="cta"><span>McLAREN</span> Senna GTR</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/ultimate-series/mclaren-senna-gtr.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-component="n012-model-navigator" data-model-category-id="4" data-model-category-title="Legacy" class="n012-model-navigator js-model-navigator" style="transform: translate(0%, -100%) matrix(1, 0, 0, 1, 0, 0);">
            <div class="container js-carousel-container">
                <div class="row js-carousel-row">
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/legacy/675lt-spider.html" data-model-title="675LT Spider">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="675LT Spider">
                            </div>
                            <span class="cta">675LT Spider</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/legacy/675lt-spider.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/legacy/675lt.html" data-model-title="675LT">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="675LT">
                            </div>
                            <span class="cta">675LT</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/legacy/675lt.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/legacy/mclaren-p1-gtr.html" data-model-title="P1™ GTR">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="P1™ GTR">
                            </div>
                            <span class="cta">P1™ GTR</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/legacy/mclaren-p1-gtr.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/legacy/mclaren-p1.html" data-model-title="P1™">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="P1™">
                            </div>
                            <span class="cta">P1™</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/legacy/mclaren-p1.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/legacy/12c-spider.html" data-model-title="12C Spider">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="12C Spider">
                            </div>
                            <span class="cta">12C Spider</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/legacy/12c-spider.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/legacy/12c.html" data-model-title="12C">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="12C">
                            </div>
                            <span class="cta">12C</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/legacy/12c.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/legacy/mclaren-f1.html" data-model-title="McLaren F1">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="McLaren F1">
                            </div>
                            <span class="cta"><span>McLAREN</span> F1</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/legacy/mclaren-f1.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-md-3">
                        <div class="model-wrapper js-link-wrapper" data-discover-url="/gb-en/legacy/m6gt.html" data-model-title="M6GT">
                            <div class="image-wrapper round-height">
                                <img src="" class="model-image" alt="M6GT">
                            </div>
                            <span class="cta">M6GT</span>
                            <div class="cta-wrapper">
                                <div class="primary-button " data-component="primary-button">
                                    <a href="gb-en/legacy/m6gt.html" class="theme-outline-on-dark" target="_self">
                                        Узнать
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



