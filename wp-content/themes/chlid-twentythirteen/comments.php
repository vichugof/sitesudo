<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentythirteen' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>
        <?php 
            $commenter = wp_get_current_commenter();
            $req = get_option( 'require_name_email' );
            $aria_req = ( $req ? " aria-required='true'" : '' );
            $required_text = "*";

            $args = array(
              'id_form'           => 'commentform',
              'id_submit'         => 'submit',
              'title_reply'       => '<strong>'.__( 'Leave a Reply' ).'</strong>',
              'title_reply_to'    => __( 'Leave a Reply to %s' ),
              'cancel_reply_link' => __( 'Cancel Reply' ),
              'label_submit'      => __( 'Post Comment' ),

              'comment_field' =>  '
                <div class="form-group">
                    <label for="comment" class="col-md-2 col-lg-2 control-label">' . _x( 'Comment', 'noun' ) .'</label>
                    <div class="col-md-9 col-lg-9">
                        <textarea id="comment" name="comment" rows="8" aria-required="true" class="form-control">' .'</textarea>
                    </div>
                </div>',

              'must_log_in' => '<div class="form-group"><p class="must-log-in">' .
                sprintf(
                  __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                  wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                ) . '</p></div>',

              'logged_in_as' => '<p class="logged-in-as">' .
                sprintf(
                __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
                  admin_url( 'profile.php' ),
                  $user_identity,
                  wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                ) . '</p>',

              'comment_notes_before' => '
                <div class="form-group">
                    <div class="col-md-12 col-lg-12"> 
                        <p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .'</p>
                    </div>
                </div>',

              'comment_notes_after' => '
                    <div class="form-group">
                        <div class="col-md-12 col-lg-12"> 
                            <p class="form-allowed-tags">' .
                            sprintf(
                              __( 'You may use these <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> tags and attributes: %s' ),
                              ' <pre><code class="html">' . allowed_tags() . '</code></pre>'
                            ) . '
                            </p>
                        </div>
                    </div>',

              'fields' => apply_filters( 'comment_form_default_fields', array(

                    'author' =>
                      '<div class="form-group">' .
                      '     <label for="author" class="col-lg-2 control-label">' . __( 'Name', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) .'</label> ' .
                      
                      '     <div class="col-md-9 col-lg-9"> 
                                <input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' class="form-control" />
                            </div>
                        </div>',

                    'email' =>
                      '<div class="form-group">
                          <label for="email" class="col-lg-2 control-label">' . __( 'Email', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) .'</label> ' .
                      
                      '     <div class="col-md-9 col-lg-9"> 
                                <input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                      '" size="30"' . $aria_req . ' class="form-control"/>
                            </div>
                        </div>',

                    'url' =>
                      '<div class="form-group">
                            <label for="url" class="col-lg-2 control-label">' . __( 'Website', 'domainreference' ) . '</label>' .
                      '     <div class="col-md-9 col-lg-9"> 
                                <input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" class="form-control"/>
                            </div>
                        </div>'
                )
              ),
            );
        ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php comment_form($args); ?>
            </div>
        </div>

</div><!-- #comments -->