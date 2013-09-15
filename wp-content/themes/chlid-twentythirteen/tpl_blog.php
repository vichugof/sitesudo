<?php
/**
*
* Template Name: Blog Posts
*
* @package WordPress
* @subpackage Child_Twenty_Thirteen
 * @since Child Twenty Thirteen 1.0
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

                    <?php if( have_posts() ): ?>
                        <header class="entry-header" <?php if ( is_front_page() ) : echo 'style="display:none;"'; endif;?>>
                            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                            <div class="entry-thumbnail">
                                    <?php the_post_thumbnail(); ?>
                            </div>
                            <?php endif; ?>

                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header><!-- .entry-header -->
                        
                        <?php while( have_posts() ): the_post(); ?>

                            <?php get_template_part( 'content', get_post_format() ); ?>

                        <?php endwhile; ?>

                           <?php twentythirteen_paging_nav(); ?>

                    <?php else: ?>

                           <?php get_template_part( 'content', 'none' ); ?>

                    <?php endif; wp_reset_query(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>