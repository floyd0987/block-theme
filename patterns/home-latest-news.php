<?php

/**
 * Title: Home Latest News
 * Slug: block-theme/home-latest-news
 * Inserter: no
 * Description: Home Latest News
 * Viewport Width: 1024
 * Categories: featured
 * Keywords:
 * Block Types: core/group
 *
 * @package BlockTheme
 */

?>

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"metadata":{"name":"Latest News"},"className":"home-latest-news","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"black","layout":{"type":"default"}} -->
<div class="wp-block-group home-latest-news has-black-background-color has-background" style="padding-top:100px;padding-bottom:100px"><!-- wp:heading {"textAlign":"center","className":"zeever-animate zeever-move-up zeever-delay-1","textColor":"white","fontSize":"heading-2"} -->
	<h2 class="wp-block-heading has-text-align-center zeever-animate zeever-move-up zeever-delay-1 has-white-color has-text-color has-heading-2-font-size">Ultime notizie</h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"level":1,"className":"wp-block-heading has-text-align-center zeever-animate zeever-move-up zeever-delay-3 has-tiny-font-size","style":{"typography":{"textTransform":"uppercase"}},"textColor":"zeever-secondary"} -->
	<h1 class="wp-block-heading has-text-align-center zeever-animate zeever-move-up zeever-delay-3 has-tiny-font-size has-zeever-secondary-color has-text-color" style="text-transform:uppercase">Scopri le nostre ultime novità</h1>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":24,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"home-latest-news__items"} -->
	<div class="wp-block-query home-latest-news__items"><!-- wp:post-template {"className":"zeever-animate zeever-move-up zeever-delay-5","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} /-->

		<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-terms {"term":"category"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} /-->

			<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":25,"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|zeever-secondary"}}}},"textColor":"zeever-bodytext"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
