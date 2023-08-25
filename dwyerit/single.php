<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dwyerit
 */

get_header();
?>

<section data-page="blog" class="section blog-post wf-section">
	<div class="blog-header">
		<h1 data-blog="title" class="title blog-post"><?php the_title(); ?>
		</h1>
		<p data-blog="post_summary" class="paragraph blog-post-excerpt"><?php the_excerpt(); ?></p>
	</div>
	<div class="container-default blog-post w-container">
		<div class="image-wrapper blog-post">
			<?php the_post_thumbnail(array(1200, 675), ["class" => "image blog-post"]); ?>
		</div>
	</div>
	<div class="container-large">
		<?php the_content(); ?>
	</div>
	<div class="bg blog-post"></div>
</section>

<?php
get_footer();