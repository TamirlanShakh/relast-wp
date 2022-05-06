		<?php get_header();?>
		<content>
			<div class="category_news_fix">
				<div class="category_news_title"><h1><?php single_cat_title();?></h1></div>
				<div class="category_news_list">
					<?php $args = array( 'post_type' => 'news', 'posts_per_page' => 12);?>
						<?php $the_query = new WP_Query( $args );?>
						<?php if( $the_query->have_posts()):?>
						<?php while( $the_query->have_posts()): $the_query->the_post();?>
						<div class="category_news_li">
						<?php news(); ?>
						</div>
						<?php endwhile; ?>
						<?php else: ?>
						<p>Пока ничего нет</p>	
						<?php endif; $the_query = NULL; wp_reset_postdata();?>
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