<?php
/**
* Template Name: Homepage
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/


get_header( 'home' );

?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content page-home" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header" <?php if ( is_front_page() ) : echo 'style="display:none;"'; endif;?>>
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>
                                
                        <div class="list-post-home col-lg-12">
                                <?php 
                                $the_query = new WP_Query( 'showposts=1' ); 
                                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                                ?>
                                <blockquote class="pull-right">

                                    <p><a href="<?php the_permalink(); ?>" title="<?php _e( 'Read full post', 'chlid-twentythirteen' );?>"><?php the_title(); ?></a></p>
                                    <em>
                                <?php
                                        //get_template_part( 'content', get_post_format() );

                                        the_excerpt();
                                ?>
                                    </em>
                                    <small> <?php _e( 'Latest Post on', 'chlid-twentythirteen' ); ?> <cite title="<?php the_time('jS F Y'); ?>"><?php the_time('jS F Y'); ?></cite></small>
                                </blockquote>
                                <?php    
                                endwhile;
                                ?>
                        </div>
		</div><!-- #content -->
                
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

        