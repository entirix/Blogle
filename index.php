<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<header>
			<h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<div class="post-meta"><?php the_time('l, F jS, Y') ?></div>
			</header>

			<section class="post-excerpt">
			<div class="entry">
				<?php the_excerpt(); ?> 
			</div>
			</section>

			<h3 class="readmore"><a href="<?php the_permalink() ?>">Read More »</a></h3>

			<!--<footer class="postmetadata">
				/*<?php the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>*/
				/*<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> | */
				/*<?php comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>*/
			</footer>-->

			<br/>
		</article>

	<?php endwhile; ?>
	
		<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>
