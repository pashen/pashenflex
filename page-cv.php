<?php
/*
*/
get_header();
?>
<div id="container">
	<div class = "content">
			<?php	$args=array(
				  'orderby' => 'name',
				  'order' => 'ASC'
				  );
				$categories=get_categories($args);
				foreach($categories as $category) 
				{ ?>
				<div id="employment" class="block">

                    <h2><?php echo $category->name ; ?></h2>

                    <div class="block-content">
					<?php query_posts('category_name='.$category->name) ?>
						<?php while(have_posts()) : the_post(); ?>
                        <div class="text-field date">
                            <div class="text-field-left">From<br>Apr<br>2013<br>to<br>Now</div>
                            <div class="text-field-right">
                                  <div class="title"><?php the_title(); ?></div>
                                  <div class="meta without-icon"><span class="tag">Themeforest</span></div>
                                <div class="text">
								<p>
								  <?php the_content(); ?>
								</p>
								</div>
                            </div>
                        </div>
						<?php endwhile ?>
                    </div>

                  </div>
				<?php
					//echo '<p> Description:'. $category->description . '</p>';
					//echo '<p> Post Count: '. $category->count . '</p>';  
				} 
			    ?>
			<?php while ( have_posts()) : the_post(); ?>
				<?php// get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	
</div>