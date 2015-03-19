<?php
/**
 * The default template for displaying content on pages
 *
 *
 * @package blm_basic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	
</article><!-- #post-## -->