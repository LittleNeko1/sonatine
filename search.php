<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sonatine
 */



$contentSpan = '';
$contentSpan = (is_active_sidebar( 'sidebar-1' ) ? 'col-md-8' : 'col-md-12');
get_header();
?>

	<section id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<div class="container">
				<div class="row">

					<div class="<?php  echo $contentSpan; ?>">

						<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'sonatine' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</div><!-- col md -->
				</div><!-- container -->
			</div><!-- row -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_sidebar();
get_footer();
