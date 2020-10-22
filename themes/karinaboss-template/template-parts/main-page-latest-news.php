<?php /*
 Template for latests news after grid on the main page
 */

?>
<!-- main page latests news -->

<div class="cmp cmp-t100-relevant-content aem-GridColumn aem-GridColumn--default--12">
    <section data-component="t100-relevant-content" class="t100-relevant-content spacing-default " data-scroll-component="">
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="column column-sm-2 column-md-12 column-lg-12">
                        <h3 class="heading-03">
                            Новейшие Истории</h3>
                        <div class="carousel-trigger-wrapper">
                            <button class="carousel-trigger js-previous inactive">
                                <span class="icon  " data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                            </button>
                            <button class="carousel-trigger js-next">
                                <span class="icon  " data-component="icon" data-icon="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M.3.3a1 1 0 0 1 1.4 0L5.4 4h1.2L10.3.3a1 1 0 0 1 1.4 0 1 1 0 0 1 0 1.4L7.4 6H4.6L.3 1.7A.9.9 0 0 1 0 1 .9.9 0 0 1 .3.3z"></path></svg></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container js-storyline" style="transform: translate3d(0px, 0px, 0px); touch-action: pan-y; user-select: none;">
                <div class="story-row row">

	                <?php global $post;
	                $latests_blog_posts = get_posts( array(
		                'posts_per_page' => - 1,
		                'post_type'      => 'blog_posts',
		                'order'          => 'ASC'
	                ) );
	                if ( $latests_blog_posts ) {
		                foreach ( $latests_blog_posts as $post ) : setup_postdata( $post ); ?>
                            <div class="column js-column-override column-story column-sm-2 column-md-4 column-lg-3">
                                <a href="gb-en/latest/taming-hong-kong-s-secret-roads.html" class="story-tile js-cta" target="_self">
                                    <picture class="responsive-image " data-component="responsive-image">
                                        <source media="(max-width: 767px)" class="js-small-image" srcset="<?php the_post_thumbnail_url(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="js-normal-image fit-cover ">
                                    </picture>
                                    <p class="copy-title"><?php the_title(); ?></p>
                                    <div class="copy-summary">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                    <div class="cta-holder">
                                        <div class="cta">Читать дальше </div>
                                    </div>
                                </a>
                            </div>
		                <?php endforeach; wp_reset_postdata(); } ?>
                </div>
            </div>
        </div>
    </section>
</div>