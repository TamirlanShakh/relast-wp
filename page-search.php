		<?php get_header();?>
		<content>
			<div class="category_fix">
				<div class="category_title"><h1>Результаты по вашему запросу</h1></div>
				<div class="category_list">


					<?php
						$args = [
							'post_type'    => 'post',
							'cat' => $_GET['cat'],
							'meta_query' => [
									'relation' => 'AND',
									]
						] ;

						//////////////// ФИЛЬТРЫ ДЛЯ ПОИСКА
						if($_GET['ps']){
							$args['meta_query'][] = array(
									'key'     => 'recall_content',
									'value'   => $_GET['ps'],
									'compare' => 'LIKE'
								);
							
						}
						////////////////

						//////////////// 
						if($_GET['gorod']){
							$args['meta_query'][] = array(
									'key'     => 'city',
									'value'   => $_GET['gorod'],
									'compare' => '='
								);
							
						}
						////////////////

						//////////////// 
						if($_GET['sdamprodam']){
							$args['meta_query'][] = array(
									'key'     => 'sdam_prodam',
									'value'   => $_GET['sdamprodam'],
									'compare' => '='
								);
							
						}
						////////////////

						////////////////
						if($_GET['countroom']){
							$args['meta_query'][] = array(
									'key'     => 'rooms',
									'value'   => $_GET['countroom'],
									'compare' => '='
									);
								
							
						}
						////////////////

						////////////////
						if($_GET['lengthrent']){
							$args['meta_query'][] = array(
										'key'     => 'length_rent',
										'value'   => $_GET['lengthrent'],
										'compare' => '='
									);
								
							
						}
						////////////////

						////////////////
						if($_GET['plot'] && $_GET['pldo']){
							$args['meta_query'][] = array(
									'key'     => 'ploshad',
									'value'   => array( $_GET['plot'], $_GET['pldo'] ),
									'type'    => 'numeric',
									'compare' => 'BETWEEN'
									);
								
						
						}
						////////////////

						////////////////
						if($_GET['plataot'] && $_GET['platado']){
							$args['meta_query'][] = array(
									'key'     => 'pay_rent',
									'value'   => array( $_GET['plataot'], $_GET['platado'] ),
									'type'    => 'numeric',
									'compare' => 'BETWEEN'
								);
								
							
						}
						////////////////

						////////////////
						if($_GET['etaj']){
							$args['meta_query'][] = array(
										'key'     => 'etaj',
										'value'   => $_GET['etaj'],
										'type'    => 'numeric',
										'compare' => '='
									);
								
							
						}
						////////////////

						////////////////
						if($_GET['levels_house']){
							$args['meta_query'][] = array(
										'key'     => 'levels',
										'value'   => $_GET['levels_house'],
										'type'    => 'numeric',
										'compare' => '='
									);
								
							
						}
						////////////////

						////////////////
						if($_GET['typehouse']){
							$args['meta_query'][] = array(
									'key'     => 'type_house',
									'value'   => $_GET['typehouse'],
									'compare' => '='
								);	
								
							
						}
						////////////////

						
					?>

					<?php $query = new WP_Query( $args ); ?>
					<?php if( $query->have_posts()):?>
					<?php while( $query->have_posts()): $query->the_post();?>
					<div class="category_li">
					<?php house(); ?>
					</div>
					<?php endwhile; ?>
					<?php else: ?>
					<p>Пока ничего нет</p>	
					<?php endif; $query = NULL; wp_reset_postdata();?>
 				</div>
			</div>
		</content>
		<?php get_footer();?>