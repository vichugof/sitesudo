<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>


<header class="alert alert-warning">
	<h1 class="page-title"><strong><?php _e( 'Nothing Found', 'twentythirteen' ); ?></strong></h1>
</header>

<div class="page-content">
    <div class="row">
        <div class="col-lg-12">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <blockquote>
                <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentythirteen' ), admin_url( 'post-new.php' ) ); ?></p>
            </blockquote>

	<?php elseif ( is_search() ) : ?>
            <blockquote>
                <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'twentythirteen' ); ?></p>
            </blockquote>
            <?php get_search_form(); ?>

	<?php else : ?>

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentythirteen' ); ?></p>
	<?php get_search_form(); ?>

	<?php endif; ?>
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .page-content -->
