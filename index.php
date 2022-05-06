		<?php get_header();?>
		<content>
			<div class="cats_types">
				<div class="cats_types_fix">
					<div class="cats_types_list">
						<div class="cats_type" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/cat_type1.png')no-repeat center/cover;">
							<a href="<?php echo get_category_link(7);?>" class="cats_type_name"><?php echo get_cat_name(7); ?></a>
							<div class="cats_type_count"><?php echo count(get_posts( array('category'=> 7,17, 'posts_per_page' => -1))); ?></div>
						</div>
						<div class="cats_type" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/cat_type2.png')no-repeat center/cover;">
							<a href="<?php echo get_category_link(6);?>" class="cats_type_name"><?php echo get_cat_name(6); ?></a>
							<div class="cats_type_count"><?php echo count(get_posts( array('category'=> 6, 'posts_per_page' => -1))); ?></div>
						</div>
						<div class="cats_type" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/cat_type3.png')no-repeat center/cover;">
							<a href="<?php echo get_category_link(18);?>" class="cats_type_name"><?php echo get_cat_name(18); ?></a>
							<div class="cats_type_count"><?php echo count(get_posts( array('category'=> 18, 'posts_per_page' => -1))); ?></div>
						</div>
						<div class="cats_type" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/cat_type4.png')no-repeat center/cover;">
							<a href="<?php echo get_category_link(8);?>" class="cats_type_name"><?php echo get_cat_name(8); ?></a>
							<div class="cats_type_count"><?php echo count(get_posts( array('category'=> 8, 'posts_per_page' => -1))); ?></div>
						</div>
						<div class="cats_type" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/cat_type5.png')no-repeat center/cover;">
							<a href="<?php echo get_category_link(9);?>" class="cats_type_name"><?php echo get_cat_name(9); ?></a>
							<div class="cats_type_count"><?php echo count(get_posts( array('category'=> 9, 'posts_per_page' => -1))); ?></div>
						</div>
					</div>		
				</div>
			</div>
			<?php search_form(); ?>
			<div class="special_sentence cat_post">
				<div class="special_sentence_fix cat_post_fix">
					<a href="" class="special_sentence_title cats_title"><img src="<?php echo $GLOBALS['theme_uri'];?>/images/behind_cats.png" alt="">Специальные предложения</a>
					<div class="special_sentence_list">
						<div class="special_sentence_li">
							<a href="" class="special_sentence_photo" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/special_sentence_photo.png')no-repeat center/cover"></a>
							<div class="special_sentence_desc">
								<a href="" class="special_sentence_desc_title">Заголовок картинки</a>
								<a href="" class="special_sentence_desc_text">Некоторое описание по теме заголовка картинки..</a>
							</div>
						</div>
						<div class="special_sentence_li">
							<a href="" class="special_sentence_photo" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/special_sentence_photo.png')no-repeat center/cover"></a>
							<div class="special_sentence_desc">
								<a href="" class="special_sentence_desc_title">Заголовок картинки</a>
								<a href="" class="special_sentence_desc_text">Некоторое описание по теме заголовка картинки..</a>
							</div>
						</div>
						<div class="special_sentence_li">
							<a href="" class="special_sentence_photo" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/special_sentence_photo.png')no-repeat center/cover"></a>
							<div class="special_sentence_desc">
								<a href="" class="special_sentence_desc_title">Заголовок картинки</a>
								<a href="" class="special_sentence_desc_text">Некоторое описание по теме заголовка картинки..</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cat_rent cat">
				<div class="cat_rent_fix cat_fix">
					<a href="<?php echo get_category_link(18);?>" class="cats_title"><img src="<?php echo $GLOBALS['theme_uri'];?>/images/behind_cats.png" alt="">Аренда квартир</a>
					<div class="cat_nav">
						<div class="cat_nav_rent_next cat_next" metka="аренда" id="18" offset="4">></div>
						<div class="cat_nav_rent_prev cat_prev" metka="аренда" id="18" offset="-4"><</div>
					</div>
					<div class="cat_list" metka="аренда">
						<?php $query = new WP_Query(
									$args = array (
										'posts_per_page' => 4,
										'cat'=> 18,
										'meta_query' => array(
												'key' => 'аренда',
												'value' => 1,
												'compare' => '='
											)
										

									)

								);?>
						<?php if( $query->have_posts()):?>
						<?php while( $query->have_posts()): $query->the_post();?>
						<?php house(); ?>
						<?php endwhile; ?>
						<?php else: ?>
						<p>Пока ничего нет</p>	
						<?php endif; $query = NULL; wp_reset_postdata();?>
					</div>
				</div>
			</div>
			<div class="cat_apartments cat">
				<div class="cat_apartments_fix cat_fix">
					<a href="<?php echo get_category_link(5);?>" class="cats_title"><img src="<?php echo $GLOBALS['theme_uri'];?>/images/behind_cats.png" alt="">Квартиры (Новостройки), Каркасы</a>
					<div class="cat_nav">
						<div class="cat_nav_apartments_next cat_next" metka="продажа" id="5" offset="4">></div>
						<div class="cat_nav_apartments_prev cat_prev" metka="продажа" id="5" offset="-4"><</div>
					</div>
					<div class="cat_list" metka="продажа">
						<?php $query = new WP_Query(
							$args = array (
										'posts_per_page' => 4,
										'cat'=> 5,
										'meta_query' => array(
												'key' => 'продажа',
												'value' => 1,
												'compare' => '='
											)
										

									)
						);?>
						<?php if( $query->have_posts()):?>
						<?php while( $query->have_posts()): $query->the_post();?>
						<?php house(); ?>
						<?php endwhile; ?>
						<?php else: ?>
						<p>Пока ничего нет</p>	
						<?php endif; $query = NULL; wp_reset_postdata();?>
					</div>
				</div>
			</div>
			<div class="cat_land cat">
				<div class="cat_land_fix cat_fix">
					<a href="<?php echo get_category_link(6);?>" class="cats_title"><img src="<?php echo $GLOBALS['theme_uri'];?>/images/behind_cats.png" alt="">Дома, Земельные участки</a>
					<div class="cat_nav">
						<div class="cat_nav_land_next cat_next" metka="дом" id="6" offset="4">></div>
						<div class="cat_nav_land_prev cat_prev" metka="дом" id="6" offset="-4"><</div>
					</div>
					<div class="cat_list" metka="дом">
						<?php $query = new WP_Query(
							$args = array (
										'posts_per_page' => 4,
										'cat'=> 6,
										'meta_query' => array(
												'key' => 'дом',
												'value' => 1,
												'compare' => '='
											)
										

									)
						);?>
						<?php if( $query->have_posts()):?>
						<?php while( $query->have_posts()): $query->the_post();?>
						<?php house(); ?>
						<?php endwhile; ?>
						<?php else: ?>
						<p>Пока ничего нет</p>	
						<?php endif; $query = NULL; wp_reset_postdata();?>
					</div>
				</div>
			</div>
			<div class="content_contact">
				<div class="content_contact_fix">
					<div class="content_contact_img"><img src="<?php echo $GLOBALS['theme_uri'];?>/images/content_contact.png" alt=""></div>
					<div class="content_contact_desc"><?php echo get_field('верхний_текст',7) ?></div>
                    <div class="content_contact_number"><?php echo get_field('нижний_текст',7) ?></div>
				</div>
			</div>
			<div class="news cat_post">
				<div class="news_fix cat_post_fix">
					<?php $term_link = get_term_link(21, 'news_cat'); ?>
					<a href="<?php echo $term_link;?>" class="special_sentence_title cats_title"><img src="<?php echo $GLOBALS['theme_uri'];?>/images/behind_cats.png" alt="">Новости</a>
					<div class="news_list">
						<?php $args = array( 'post_type' => 'news', 'posts_per_page' => 3);?>
						<?php $the_query = new WP_Query( $args );?>
						<?php if( $the_query->have_posts()):?>
						<?php while( $the_query->have_posts()): $the_query->the_post();?>
						<?php news(); ?>
						<?php endwhile; ?>
						<?php else: ?>
						<p>Пока ничего нет</p>	
						<?php endif; $the_query = NULL; wp_reset_postdata();?>
					</div>
				</div>
			</div>
		</content>
		<?php get_footer();?>