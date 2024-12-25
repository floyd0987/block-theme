<?php

$args = array(
	'post_type'      => 'servizi',
	'posts_per_page' => 6,
	'orderby'        => 'date',
	'order'          => 'ASC',
);
$servizi_query = new WP_Query($args);







if ($servizi_query->have_posts()) {
?>

	<div class="wp-block-home-servizi wp-block-group zeever-animate zeever-move-up zeever-delay-3 has-global-padding is-layout-constrained wp-container-core-group-is-layout-10 wp-block-group-is-layout-constrained" style="padding-top:40px">

			<?php
			echo '<div class="wp-block-group home-servizi">';
			$counter = 0; // Initialize counter

			while ($servizi_query->have_posts()) {
				$servizi_query->the_post();

				// Start a new row if counter is 0
				if ($counter % 3 === 0) {
					if ($counter > 0) {
						echo '</div>'; // Close the previous row
					}
					echo '<div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-4 wp-block-columns-is-layout-flex">';
				}

				echo '<div class="home-servizi__item wp-block-column is-style-customborderbottomhover zeever-animate zeever-move-up zeever-delay-1 has-background">';
				if (has_post_thumbnail()) {
					echo '<figure class="wp-block-image size-full is-resized">';
					the_post_thumbnail('thumbnail', array('style' => 'width: 50px; height: 50px;'));
					echo '</figure>';
				}
				echo '<h2 style="margin-top: 30px; margin-bottom: 20px;">' . get_the_title() . '</h2>';
				echo '<p>' . get_the_excerpt() . '</p>';
				echo '</div>';

				$counter++;
			}

			// Close the last row if it's incomplete
			if ($counter % 3 !== 0) {
				echo '</div>';
			}

			echo '</div>'; // Close the main group
			wp_reset_postdata();
			?>
		</div>

	</div>

<?php
}
?>
