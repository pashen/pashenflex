<?php
/*
*/
get_header();
?>
<div id="container">

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php// get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div>
<ul>
<?php
$args=array(
  'orderby' => 'name',
  'order' => 'ASC'
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
    echo '<p> Description:'. $category->description . '</p>';
    echo '<p> Post Count: '. $category->count . '</p>';  } 
?>
</ul>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>