<?php
/**
 * The template for displaying Search Results pages.
 *
 *
 * @package WordPress
 * @subpackage Child_Twenty_Thirteen
 * @since Child Twenty Thirteen 1.0
 */


get_header();
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header alert alert-success">
                            <h1 class="page-title"><strong><?php printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() ); ?></strong></h1>
			</header>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>