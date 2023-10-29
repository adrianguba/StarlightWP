<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article>
		<h1><?php the_title(); ?></h1>
		<?php 
		get_extended_template_part( 'sample', 'template-part', [
			'content' => 'This is the test, component included in page'
		] );
		?>
		<?php the_content(); ?>
	</article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>