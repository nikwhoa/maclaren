<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karinaboss-template
 */

?>
<section data-component="n020-footer" class="n020-footer" data-scroll-component="">
    <div class="container">
        <div class="row">
            <div class="column column-sm-2 column-md-7 column-lg-8">
                <div class="content-wrapper">
                    <div class="link-block-wrapper">
                        <p class="title"><span>McLAREN</span> КАК КОРПОРАТИВНЫЙ СУБЪЕКТ</p>
                        <div class="link-list">
                            <style>
                                .link-list li a {
                                    text-decoration: none;
                                    list-style-type: none;
                                }
                                .link-list li {

                                    list-style-type: none;
                                }
                            </style>
                            <?php
                            /* displaying footer menu */
                            wp_nav_menu( array(
                                    'items_wrap' => '%3$s',
                                    'theme_location'    => "footer-menu",
                                    'container' => false
                            ) );
                            ?>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="logo-wrapper">
                            <span class="icon  " data-component="icon" data-icon="mclaren-logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175 26"><path d="M139 10.9c24.1-15.6 56.5-16.1 18.7 9.1l.6-.8c10.7-14.7-11.1-11.4-18.8-8.5zM50.8 22H61v4H49.2c-5 0-7.2-1.5-7.2-5.5v-.9c0-3.4 2-5.6 7-5.6h12v4H50.8a1.8 1.8 0 0 0-1.8 1.8v.5a1.8 1.8 0 0 0 1.8 1.7zM70 12v10h6v4H62V12zm-37.9 1.8A8.1 8.1 0 0 1 37 12h4v14h-8v-7l-7.7 7H18v-7l-8.9 7H0l15.9-12c1.5-1.1 2.5-2 5.1-2h5v7zm67.9 1.5a2.3 2.3 0 0 1 2.5-2.3h9.5v4h-5v9h-7zm46.9-2.3c6 0 8.1 1.3 8.1 5.7V26h-7v-5a3 3 0 0 0-3-3h-3v8h-7V13zm-54.6 0c4.6 0 6.7 1.9 6.7 5.1v3c0 3.7-2.1 4.9-7.2 4.9h-7.9c-2.9 0-5-.3-6.1-1.3a3.6 3.6 0 0 1-.8-2.3v-.5c0-2 1.2-3.9 5-3.9h9c0-.9.1-1-1-1H78v-4zM91 21.5V21h-5.5a.5.5 0 0 0-.5.5.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5zm36.6-8.5c5.3 0 6.4 1.6 6.4 3.8v.5c0 2.4-1.9 3.7-5 3.7h-9c0 .9.9 1 2 1h11v4h-13.7c-4.3 0-6.3-1.8-6.3-5.1v-2.3c0-3.8 2.1-5.6 6.9-5.6zm-1.1 5a.5.5 0 0 0 .5-.5.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0-.5.5v.5z" fill="#fff"></path></svg></span>
                        </div>
                        <div class="footer-links">

                            <style>
                                .footer-links li a {
                                    text-decoration: none;
                                    list-style-type: none;
                                }
                                .footer-links li {

                                    list-style-type: none;
                                }
                            </style>
	                        <?php
	                        /* displaying footer menu */
	                        wp_nav_menu( array(
		                        'items_wrap' => '%3$s',
		                        'theme_location'    => "footer-menu-bottom",
		                        'container' => false
	                        ) );
	                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column column-sm-2 column-md-5 column-lg-4 has-gradient">
                <div class="content-wrapper">
                    <div class="contact-block">
                        <p class="title">КОНТАКТЫ</p>
                        <div class="contact-links">
                            <style>
                                .contact-links li a {
                                    text-decoration: none;
                                    list-style-type: none;
                                }
                                .contact-links li {

                                    list-style-type: none;
                                }
                            </style>
	                        <?php
	                        /* displaying footer menu */
	                        wp_nav_menu( array(
		                        'items_wrap' => '%3$s',
		                        'theme_location'    => "footer-menu-contacts",
		                        'container' => false
	                        ) );
	                        ?>

                        </div>
                    </div>
                    <div class="social-block">
                        <p class="title">СЛЕДИТЕ ЗА НАМИ</p>
                        <div class="social-links">

                            <style>
                                .social-links li a {
                                    text-decoration: none;
                                    list-style-type: none;
                                }
                                .social-links li {

                                    list-style-type: none;
                                }
                                .social-links > .menu-item {
                                    padding: 5px 50px 0 0;
                                }
                                #menu-item-72 {
                                    padding-left: 8px;
                                }

                            </style>
	                        <?php
	                        /* displaying footer menu */
	                        wp_nav_menu( array(
		                        'items_wrap' => '%3$s',
		                        'theme_location'    => "footer-menu-social",
		                        'container' => false
	                        ) );
	                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="image-overlay js-image-overlay">
    <div class="custom-cursor js-image-overlay-cursor" data-component="custom-cursor">
        <div class="cursor-wrapper js-cursor-wrapper" style="opacity: 0; transform: translate(-50%, -50%) matrix(0.6, 0, 0, 0.6, 0, 0);">
            <span class="icon  js-image-overlay-cursor" data-component="icon" data-icon="minus"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 2"><path d="M1 0h14a.9.9 0 0 1 1 1 .9.9 0 0 1-1 1H1a.9.9 0 0 1-1-1 .9.9 0 0 1 1-1z" fill="#fff" fill-rule="evenodd"></path></svg></span>
        </div>
    </div>
    <picture class="responsive-image js-responsive-image" data-component="responsive-image">
        <source media="(max-width: 767px)" class="js-small-image">
        <img class="js-normal-image  fit-contain">
    </picture>
</div>
</div><!-- #app-root-->
</div><!-- #app-->
<?php wp_footer(); ?>

</body>
</html>
