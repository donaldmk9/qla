<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quicken_Loans_Arena_Transformation
 */

?>
<style type="text/css">
	<?php if("media" == get_post_type()){ ?>
		.post-thumbnail,
		.comments-area,
		.entry-footer,
		.post-navigation{
			display: none;
		}
		.entry-content{
			width: 100%;
		}
		.slick-prev.square-bg{
			left: 15px;
		}
		.slick-next.square-bg{
			right: 15px;
		}
	<?php } ?>
	.post-thumbnail > img{
		width: 100%;
	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if("media" != get_post_type()){ ?>
		<header class="entry-header">
			<?php
			if ( is_singular() ) : ?>
				<div class="full-background">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
			<?php
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					quicken_loans_arena_transformation_posted_on();
					quicken_loans_arena_transformation_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
	<?php } ?>
	<?php quicken_loans_arena_transformation_post_thumbnail(); ?>
	<div class="clear-fix"></div>
	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'quicken-loans-arena-transformation' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'quicken-loans-arena-transformation' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php quicken_loans_arena_transformation_entry_footer(); ?>
	</footer>
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
