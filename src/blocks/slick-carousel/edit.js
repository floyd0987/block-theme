/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

import { useSelect } from "@wordpress/data";
import { Button, PanelBody, PanelRow } from "@wordpress/components";

export default function Edit({ attributes, setAttributes }) {
	const { selectedPosts = [] } = attributes; // Default to an empty array if undefined.

	// Fetch posts of the "progetti" post type
	const posts = useSelect((select) =>
		select("core").getEntityRecords("postType", "progetti", {
			per_page: -1,
			_embed: true,
		}),
	);

	const onSelectPost = (postId) => {
		if (!selectedPosts.includes(postId)) {
			setAttributes({ selectedPosts: [...selectedPosts, postId] });
		}
	};

	const onRemovePost = (postId) => {
		setAttributes({
			selectedPosts: selectedPosts.filter((id) => id !== postId),
		});
	};

	return (
		<>
			<InspectorControls>
				<PanelBody title={__("Select Posts", "custom-carousel")}>
					{posts && posts.length > 0 ? (
						posts.map((post) => (
							<PanelRow key={post.id}>
								<Button
									isSecondary
									isPressed={selectedPosts.includes(post.id)}
									onClick={() =>
										selectedPosts.includes(post.id)
											? onRemovePost(post.id)
											: onSelectPost(post.id)
									}
								>
									{selectedPosts.includes(post.id)
										? __("Remove", "custom-carousel")
										: __("Add", "custom-carousel")}{" "}
									{post.title.rendered}
								</Button>
							</PanelRow>
						))
					) : (
						<p>{__("No posts available.", "custom-carousel")}</p>
					)}
				</PanelBody>
			</InspectorControls>

			<div className="carousel-block">
				{selectedPosts.map((postId) => {
					const post = posts?.find((p) => p.id === postId);
					if (!post) return null;

					const featuredImageUrl =
						post._embedded?.["wp:featuredmedia"]?.[0]?.media_details.sizes
							.thumbnail.source_url;

					return (
						<div key={post.id} className="carousel-item">
							<img src={featuredImageUrl} alt={post.title.rendered} />
							<h4>{post.title.rendered}</h4>
						</div>
					);
				})}
			</div>
		</>
	);
}
