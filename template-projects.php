<?php
/**
 * Template Name: Projects Template
 */
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php
  global $paged;

  if( get_query_var( 'paged' ) )
  	$my_page = get_query_var( 'paged' );
  else {
  	if( get_query_var( 'page' ) )
  		$my_page = get_query_var( 'page' );
  	else
  		$my_page = 1;
  		set_query_var( 'paged', $my_page );
  		$paged = $my_page;
  }

  $args = array( 'posts_per_page' => '3','post_type' => 'issue', 'paged' => $my_page );
?>

<div class="row">
	<?php
		$wp_query = new WP_Query( $args );
		while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

  <article <?php post_class(); ?>>
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </article>

	<?php endwhile; ?>
</div>

<div class="pagination">
	<div class="border"></div>
	<?php	 wp_pagenavi( array( 'query' => $wp_query ) ); wp_reset_query(); ?>
	<div class="border"></div>
</div>
