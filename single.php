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
			<h1 class="post-title"><?php the_title(); ?></h1>
			<div class="post-meta"><?php the_time('l, F jS, Y') ?></div>
		</header>
		<section class="post-excerpt">
			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>
				
		<footer class="post-meta">
				<?php the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>
				<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> | 
				<?php comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
		</footer>

			</div>
		</section>
			
			<?php edit_post_link(__('Edit this entry'),'','.'); ?>
			
		</article>

	<?php comments_template(); ?>

	<?php endwhile; ?>		

	<div class="article-nav">
	<p class="next-article"><?php next_post_link('%link', 'Newer &raquo;'); ?></p>
	<p class="prev-article"><?php previous_post_link('%link', '&laquo; Older'); ?></p>
	</div>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>