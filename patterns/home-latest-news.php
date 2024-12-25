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

<!-- wp:group {"tagName":"div","templateLock":"all","lock":{"move":true,"remove":true},"metadata":{"name":"Latest News"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"black","layout":{"type":"default"}} -->
<div class="home-latest-news wp-block-group has-black-background-color has-background" style="padding-top:100px;padding-bottom:100px"><!-- wp:heading {"textAlign":"center","className":"zeever-animate zeever-move-up zeever-delay-1","textColor":"white","fontSize":"heading-2"} -->
	<h2 class="wp-block-heading has-text-align-center zeever-animate zeever-move-up zeever-delay-1 has-white-color has-text-color has-heading-2-font-size">Ultime notizie</h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":1,"className":"zeever-animate zeever-move-up zeever-delay-3","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"right":"0px","bottom":"60px"}}},"textColor":"zeever-secondary","fontSize":"tiny"} -->
	<h1 class="wp-block-heading has-text-align-center zeever-animate zeever-move-up zeever-delay-3 has-zeever-secondary-color has-text-color has-tiny-font-size" style="margin-right:0px;margin-bottom:60px;font-style:normal;font-weight:500;line-height:1.2;text-transform:uppercase">Scopri le nostre ultime novità</h1>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":24,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":""} -->
	<div class="home-latest-news__items wp-block-query ">
		<!-- wp:post-template {"className":"zeever-animate zeever-move-up zeever-delay-5","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} /-->

		<div class="home-latest-news__item-content">
		<!-- wp:post-terms {"term":"category"} /-->

		<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} /-->

		<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|zeever-secondary"}}}},"textColor":"zeever-bodytext"} /-->
		</div>

		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
