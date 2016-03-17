<?php
/**

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sonatine
 */


$contentSpan = '';
$contentSpan = (is_active_sidebar( 'sidebar-1' ) ? 'col-md-8' : 'col-md-12');


get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="container">
			<div class="row">
				<div class="<?php  echo $contentSpan; ?>">

					<?php
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

			endwhile; // End of the loop.
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
</main><!-- #main -->
</div><!-- #primary -->

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="container">
			<div class="row">
				<div class="<?php  echo $contentSpan; ?>">

					<?php
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					/* If comments are open or we have at least one comment, load up the comment template. */
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					endwhile; /* End of the loop. */
					?>
				</div>
				<?php
				get_sidebar();
				?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->


<?php

get_footer();
