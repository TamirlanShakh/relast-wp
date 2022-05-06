<?php get_header(); ?>
	<content>
		<div class="page_fix">
			
			<div class="page_title"><h1>Результаты по: <?php echo $_GET['s']; ?></h1></div>
			<div class="category_list">
			<?php
				$sc=0;
				$args = [
							'post_type'    => 'post',
							's' => $_GET['s'],
						] ;
						query_posts($args);
						
			 ?>

			<?php if(have_posts()):?>
			<?php while(have_posts()): the_post();?>	
			<div class="category_li">
			<?php $sc++; house();?>
			</div>
			<?php endwhile;?>
			<?php endif; wp_reset_query();?>
			<?php $args = [
							'post_type'    => 'post',
					];
					$args['meta_query'][] = array(
						'key'     => 'recall_content',
						'value'   => $_GET['s'],
						'compare' => 'LIKE'
					);
				
		
			query_posts($args);?>

			<?php if(have_posts()):?>
			<?php while(have_posts()): the_post();?>	
			<div class="category_li">
			<?php $sc++; house();?>
			</div>
			<?php endwhile;?>
			<?php endif; wp_reset_query();?>

			<?php if($sc==0):?>
				<p class="category_not_list" id="noposts">Ничего не найдено</p>
			<?php endif; ?>
			<div class="navigation">
				<?php 
				/*$args = array (
					'prev_text' =>__('<'),
					'next_text' =>__('>'),
				);
				the_posts_pagination($args);*/
				?>	
			</div>
			</div>
		</div>
		
	</content>
<?php get_footer()?>