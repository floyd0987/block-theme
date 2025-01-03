<?php

/**
 * Title: Archive Hero Title
 * Slug: block-theme/hero-title-archive
 * Description: Hero
 * Inserter: no
 * Viewport Width: 1024
 * Categories: featured
 * Keywords:
 * Block Types: core/group
 *
 * @package BlockTheme
 */


$name = !empty(get_queried_object()->name) ? get_queried_object()->name : "default";
$image = get_stylesheet_directory_uri() . '/assets/images/'. $name . '.jpg';
?>


<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group">
	<!-- wp:cover {"url":"<?php echo $image; ?>","id":139,"dimRatio":70,"overlayColor":"black","focalPoint":{"x":"0.50","y":0.57},"minHeight":460,"contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"140px"}}}} -->
	<div class="wp-block-cover" style="padding-bottom:140px;min-height:460px">
		<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span>
		<img class="wp-block-cover__image-background wp-image-139" alt="" src="<?php echo $image; ?>" style="object-position:50% 57%" data-object-fit="cover" data-object-position="50% 57%" />
		<div class="wp-block-cover__inner-container">
			<!-- wp:template-part {"slug":"header","area":"header"} /-->


			<!-- wp:group {"style":{"spacing":{"padding":{"top":"160px"}}},"layout":{"wideSize":"1170px","contentSize":"1170px"}} -->
			<div class="wp-block-group" style="padding-top:160px"><!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:query-title {"type":"archive","textAlign":"center","fontSize":"heading-2"} /--></div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:separator {"backgroundColor":"zeever-secondary"} -->
				<hr class="wp-block-separator has-text-color has-zeever-secondary-color has-alpha-channel-opacity has-zeever-secondary-background-color has-background" />
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
