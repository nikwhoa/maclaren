<?php
/* this is template for links under the video on a product page and child page */
?>
<div class="cmp cmp-n013-sub-navigation aem-GridColumn aem-GridColumn--default--12">
                <section data-component="n013-sub-navigation" class="n013-sub-navigation" data-id="n013_sub_navigation-1123884807" data-scroll-component="" style="transform: matrix(1, 0, 0, 1, 0, 0); height: auto;">
                    <div class="container">
                        <div class="row">
                            <div class="column column-sm-2 column-md-12">
                                <button class="dropdown-trigger js-dropdown-trigger cta">
                                    <span class="icon  arrow-icon" data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                                    <span><?php  ?></span></button>
                                <div class="sub-menu-links">

	                                <?php
	                                $links = get_field('articles_for_a_product');
	                                if( $links ): ?>

			                                <?php foreach( $links as $post ):

				                                // Setup this post for WP functions (variable must be named $post).
				                                setup_postdata($post); ?>
				                                <a href="<?php the_permalink(); ?>" class="sub-menu-link js-sub-menu-link cta " data-category="" data-subcategory=""><?php echo the_field('text_for_links_bar'); ?></a>
			                                <?php endforeach; ?>

		                                <?php
		                                // Reset the global post object so that the rest of the page works correctly.
		                                wp_reset_postdata(); ?>
	                                <?php endif; ?>



                                </div>
                                <div class="primary-button configure-button" data-component="primary-button">
                                    <a href="http://configurator.mclaren.com/model/gt" class="theme-outline-on-dark" target="_blank">
                                        <span class="icon  " data-component="icon" data-icon="setting"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path d="M9 15a6 6 0 1 1 6-6 6 6 0 0 1-6 6m7.9-7a7.5 7.5 0 0 0-1.5-3.8l.3-.3a1.2 1.2 0 0 0 0-1.6 1.2 1.2 0 0 0-1.6 0l-.3.3A7.5 7.5 0 0 0 10 1.1.9.9 0 0 0 9 0a.9.9 0 0 0-1 1 7.5 7.5 0 0 0-3.8 1.6l-.3-.3a1.2 1.2 0 0 0-1.6 0 1.2 1.2 0 0 0 0 1.6l.3.3A7.5 7.5 0 0 0 1.1 8H1a.9.9 0 0 0-1 1 .9.9 0 0 0 1 1h.1a7.5 7.5 0 0 0 1.5 3.8l-.3.3a1.2 1.2 0 0 0 0 1.6 1.2 1.2 0 0 0 1.6 0l.3-.3A7.5 7.5 0 0 0 8 16.9a.9.9 0 0 0 1 1 .9.9 0 0 0 1-1 7.5 7.5 0 0 0 3.8-1.5l.3.3a1.1 1.1 0 0 0 1.6-1.6l-.3-.3a7.5 7.5 0 0 0 1.5-3.8h.1a.9.9 0 0 0 1-1 .9.9 0 0 0-1-1z" fill="#9da8ae" fill-rule="evenodd"></path></svg></span>
                                        Оформить
                                    </a>
                                </div>
                                <div class="primary-button register-button" data-component="primary-button">
                                    <a href="https://retailerportal.mclaren.com/leadcaptureform/?campaignid=CMP-01090-J9V8L2" class="theme-outline-on-dark" target="_blank">
                                        Регистрируйте
                                        <span class="affix">&nbsp;Заявку</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
