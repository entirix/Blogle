<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
 	<article>
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2><?php _e('Archive for the','html5reset'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','html5reset'); ?></h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2><?php _e('Posts Tagged','html5reset'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2><?php _e('Archive for','html5reset'); ?> <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2><?php _e('Archive for','html5reset'); ?> <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle"><?php _e('Archive for','html5reset'); ?> <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle"><?php _e('Author Archive','html5reset'); ?></h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle"><?php _e('Blog Archives','html5reset'); ?></h2>
			
			<?php } ?>
	<br>		
	</article>

			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?>>
				
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
					<br/>
				</article>

			<?php endwhile; ?>

			<?php post_navigation(); ?>
			
	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>
