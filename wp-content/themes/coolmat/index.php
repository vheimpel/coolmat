<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Oure hero element todo make it dynamic -->
			<!-- Query -->
			<?php query_posts('posts_per_page=1&category_name=menu&orderby=rand') ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="hero">
				<div class="hero-inner container">
					<h1 class="hero-text lowercase">
						<span class="magenta"><?php bloginfo('name'); ?></span>
						<?php the_title(); ?>
					</h1>
					<p class="hero-description">
						<span class="magenta"><?php bloginfo('name'); ?></span> <?php bloginfo('description'); ?>
					</p>
				</div>
			</div>
			
			<?php
				endwhile;
				endif;
			?>

			<?php query_posts('posts_per_page=1&post_type=intro') ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="intro" id="intro">
					<div class="intro-inner">
						<h2 class="intro-title"><?php the_title()?></h2>
						<div class="intro-description">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

			<?php
				endwhile;
				endif;
			?>

		<div class="section-heading" id="food">
			<?php get_category_description('category_name=menu'); ?>
		</div>

		<div class="grid">
			<?php
			query_posts('posts_per_page=20&category_name=menu');
			if ( have_posts() ) :
				/* Start the Loop */
				$item_number = 1;
				while ( have_posts() ) :
					the_post();
					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					?>
					 <?php get_template_part( 'template-parts/content', get_post_type() );
					$item_number++;
				endwhile;
				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>

		<div class="section-heading" id="locations">
			<?php get_category_description('post_type=location'); ?>
		</div>

		<div class="locations">
			<?php query_posts('post_type=location') ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="location grid">
					<div class="map">
						<div class="map-inner">
							<?php if( get_field('map') ): ?>
								<?php the_field('map'); ?>
							<?php endif; ?>
						</div>	
					</div>
					<div class="location-info">
						<div class="location-description">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			<?php
				endwhile;
				endif;
			?>
		</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();








