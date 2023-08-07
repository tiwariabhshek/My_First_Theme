<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}

$MyFirstTheme_comment_count = get_comments_number();
?>


<?php
if (have_comments()):
	?>
	<h2 class="comments-title">
		<?php if ('1' === $MyFirstTheme_comment_count): ?>
			<?php esc_html_e('1 comment', 'MyFirstTheme'); ?>
		<?php else: ?>
			<?php
			printf(
				/* translators: %s: Comment count number. */
				esc_html(_nx('%s comment', '%s comments', $MyFirstTheme_comment_count, 'Comments title', 'MyFirstTheme')),
				esc_html(number_format_i18n($MyFirstTheme_comment_count))
			);
			?>
		<?php endif; ?>
	</h2><!-- .comments-title -->

	<ol class="comment-list">
		<?php
		wp_list_comments(
			array(
				'avatar_size' => 60,
				'style' => 'ol',
				'short_ping' => true,
			)
		);
		?>
	</ol><!-- .comment-list -->

	<?php if (!comments_open()): ?>
		<p class="no-comments">
			<?php esc_html_e('Comments are closed.', 'MyFirstTheme'); ?>
		</p>
	<?php endif; ?>
<?php endif; ?>

<?php
comment_form(
	array(
		'title_reply' => esc_html__('Leave a comment', 'MyFirstTheme'),
		'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
		'title_reply_after' => '</h2>',
	)
);
?>

</div><!-- #comments -->