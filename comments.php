<?php
/**
 * Meritorious (comments.php)
 *
 * @package     Meritorious
 * @copyright   Copyright (C) 2018. Benjamin Lu
 * @license     GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://getbenonit.com)
 */

?>

<?php
if ( post_password_required() ) {
	return;
}
?>

<?php if ( comments_open() ) { ?>
	<section id="comments-area" class="comments-area">
		<?php if ( have_comments() ) { ?>
			<h2 class="comments-title">
				<?php $count = get_comments_number(); ?>
				<?php
				if ( '1' === $count ) {
					printf( esc_html_x( 'One Comment', 'comments title', 'meritorious' ) );
				} else {
					// Translators: 1 = counts.
					printf( _nx( '%1$s Comment', '%1$s Comments', absint( $count ), 'comments title', 'meritorious' ), absint( number_format_i18n( $count ) ) ); // WPCS XSS OK.
				}
				?>
			</h2>
		<?php } ?>
		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 70,
					)
				);
			?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
			<nav id="comment-nav-below" class="comment-navigation" role="navigation">
				<div class="comment-previous"><?php previous_comments_link( '<i class="fa fa-arrow-circle-o-left"></i> ' . esc_html__( 'Older Comments', 'meritorious' ) ); ?></div>
				<div class="comment-next"><?php next_comments_link( '<i class="fa fa-arrow-circle-o-right"></i> ' . esc_html__( 'Newer Comments', 'meritorious' ) ); ?></div>
			</nav>
		<?php } ?>
		<?php comment_form(); ?>
	</section>
<?php } ?>
