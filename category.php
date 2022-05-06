		<?php get_header();?>
		<content>
			<div class="category_fix">
				<div class="category_title"><h1><?php single_cat_title();?></h1></div>
				<div class="category_list">
					<?php if( have_posts()):?>
					<?php while( have_posts()): the_post();?>
					<div class="category_li">
					<?php house(); ?>
					</div>
					<?php endwhile; ?>
					<?php else: ?>
					<p>Пока ничего нет</p>	
					<?php endif; $query = NULL; wp_reset_postdata();?>
 				</div>
 				<div class="navigation">
				<?php 
				$args = array (
					'prev_text' =>__('<'),
					'next_text' =>__('>'),
				);
				the_posts_pagination($args);
				?>	
			</div>
			</div>
		</content>
		<?php get_footer();?>