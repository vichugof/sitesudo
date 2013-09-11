<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title entry-title-searchresults"><?php the_title(); ?></h1>
		<?php else : ?>
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="entry-title-link">
                    <h1 class="entry-title entry-title-searchresults">
                            <!--<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>-->
                        <?php the_title(); ?>
                    </h1>
                </a>
                
		<?php endif; // is_single() ?>
               
                
		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
           
            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="entry-thumbnail">
                           <a href="<?php the_permalink(); ?>" rel="bookmark" class="post-thumbnail-a"> <?php the_post_thumbnail(); ?></a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php else : 
                        the_excerpt(); 
                    endif; 
            ?>
		
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
