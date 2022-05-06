		<?php get_header();?>
		<content>
			<div class="single_fix">
				<div class="single_search"><?php search_form(); ?></div>
				<div class="single_way">
					<div class="single_way_way"><?php sort_cat_single();?></div>
					<div class="single_way_cat_next">
						<?php $link = get_the_category();foreach($link as $lin){}?>
						<a href="<?php echo get_category_link($lin->term_id);?>" class="single_way_cat">В каталог</a>
						<p class="single_next"><?php next_post_link('%link', 'Следующее→', true); ?></p>
					</div>
				</div>
				<?php if( have_posts()):?>
				<?php while( have_posts()): the_post();?>
				<div class="single_prod">
				<?php $id = get_the_ID(); ?>
				    <div class="single_prod_gallery">
				    	<?php $main_photo = get_post_meta($id,'count_room',true);
						?>
				        <div class="single_prod_img"><a href="<?php echo wp_get_attachment_image_url($main_photo, 'full'); ?>" rel="lightbox"><img src="<?php echo wp_get_attachment_image_url($main_photo, 'full'); ?>" alt=""></a></div>

				        <div class="single_prod_imges">
				        	<?php $dop_photo = get_post_meta($id,'dop_photo',true);
							 if($dop_photo)
				 			?>
				 			<?php $i=0;while ($i<=2):?>
					        <div class="single_prod_imges_img"><a href="<?php echo wp_get_attachment_image_url($dop_photo[$i],'full'); ?>" rel="lightbox"><img src="<?php echo wp_get_attachment_image_url($dop_photo[$i],'full'); ?>"></a></div>
					    	<?php $i++; endwhile; ?>
					    </div>    
				    </div> 
				    <?php  $o = $link[3]; if($o->term_id == 5): ?>   
				    <div class="single_prod_desc">
				    	<div class="single_prod_desc_count"><?php  $a= get_post_meta($id,'rooms',true); echo $a;?>, <?php  echo get_post_meta($id,'square',true);?>м², <?php  echo get_post_meta($id,'etaj',true);?>/<?php echo get_post_meta($id,'levels',true);?> эт.</div>
				    	<div class="single_prod_desc_date">Размещено <?php echo the_date();?> в <?php echo the_time();?></div>
				    	<div class="single_prod_desc_cost">Цена 	<span><?php  echo get_post_meta($id,'cost',true);?> руб.</span></div>
				    	<div class="single_prod_desc_contact">Контактное лицо	<span><?php  echo get_post_meta($id,'name',true);?></span></div>
				    	<div class="single_prod_desc_number">Номер телефона	<span><?php  echo get_post_meta($id,'number',true);?></span></div>
				    	<div class="single_prod_desc_city">Город	<span><?php  echo get_post_meta($id,'city',true);?></span></div>
				    	<div class="single_prod_desc_adress">Адрес	<span><?php  echo get_post_meta($id,'adress',true);?></span></div>
				    	<div class="single_prod_desc_more">
				    		<div class="single_prod_desc_more_title"><?php echo the_title();?></div>
				    		<div class="single_prod_desc_more_text"><p><?php echo get_post_meta($id,'recall_content',true);?></p></div>
				    		<div class="single_prod_desc_more_number_post">Номер объявления: <span><?php  echo $id?></span><div class="editor_post"><?php $id = get_the_ID(); $edit = get_the_permalink(63)."/?rcl-post-edit=".$id; ?>
							<a href="<?php echo $edit; ?>" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/editor.png')no-repeat center/contain"></a></div></div>
				    	</div>
				    </div>
					<?php endif; ?>
					<?php $o = $link[1]; if($o->term_id == 18): ?>
					<div class="single_prod_desc">
				    	<div class="single_prod_desc_count"><?php  $a= get_post_meta($id,'rooms',true); echo $a;?>, <?php  echo get_post_meta($id,'square',true);?>м², <?php  echo get_post_meta($id,'etaj',true);?>/<?php echo get_post_meta($id,'levels',true);?> эт.</div>
				    	<div class="single_prod_desc_date">Размещено <?php echo the_date();?> в <?php echo the_time();?></div>
				    	<div class="single_prod_desc_cost">Цена 	<span><?php  echo get_post_meta($id,'cost',true);?> руб. мес.</span></div>
				    	<div class="single_prod_desc_contact">Контактное лицо	<span><?php  echo get_post_meta($id,'name',true);?></span></div>
				    	<div class="single_prod_desc_number">Номер телефона	<span><?php  echo get_post_meta($id,'number',true);?></span></div>
				    	<div class="single_prod_desc_city">Город	<span><?php  echo get_post_meta($id,'city',true);?></span></div>
				    	<div class="single_prod_desc_adress">Адрес	<span><?php  echo get_post_meta($id,'adress',true);?></span></div>
				    	<div class="single_prod_desc_more">
				    		<div class="single_prod_desc_more_title"><?php echo the_title();?></div>
				    		<div class="single_prod_desc_more_text"><p><?php echo get_post_meta($id,'recall_content',true);?></p></div>
				    		<div class="single_prod_desc_more_number_post">Номер объявления: <span><?php  echo $id?></span><div class="editor_post"><?php $id = get_the_ID(); $edit = get_the_permalink(63)."/?rcl-post-edit=".$id; ?>
							<a href="<?php echo $edit; ?>" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/editor.png')no-repeat center/contain"></a></div></div>
				    	</div>
				    </div>
					<?php endif; ?>
					<?php if($lin->term_taxonomy_id == 15): ?>
					<div class="single_prod_desc">
				    	<div class="single_prod_desc_count">Площадь <?php  echo get_post_meta($id,'square_land',true);?> сот.</div>
				    	<div class="single_prod_desc_date">Размещено <?php echo the_date();?> в <?php echo the_time();?></div>
				    	<div class="single_prod_desc_cost">Цена 	<span><?php  echo get_post_meta($id,'cost',true);?> руб.</span></div>
				    	<div class="single_prod_desc_contact">Контактное лицо	<span><?php  echo get_post_meta($id,'name',true);?></span></div>
				    	<div class="single_prod_desc_number">Номер телефона	<span><?php  echo get_post_meta($id,'number',true);?></span></div>
				    	<div class="single_prod_desc_city">Город	<span><?php  echo get_post_meta($id,'city',true);?></span></div>
				    	<div class="single_prod_desc_adress">Адрес	<span><?php  echo get_post_meta($id,'adress',true);?></span></div>
				    	<div class="single_prod_desc_more">
				    		<div class="single_prod_desc_more_title"><?php echo the_title();?></div>
				    		<div class="single_prod_desc_more_text"><p><?php echo get_post_meta($id,'recall_content',true);?></p></div>
				    		<div class="single_prod_desc_more_number_post">Номер объявления: <span><?php  echo $id?></span><div class="editor_post"><?php $id = get_the_ID(); $edit = get_the_permalink(63)."/?rcl-post-edit=".$id; ?>
							<a href="<?php echo $edit; ?>" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/editor.png')no-repeat center/contain"></a></div></div>
				    	</div>
				    </div>
					<?php endif; ?>
					<?php if($lin->term_taxonomy_id == 17 or $lin->term_taxonomy_id == 16): ?>
					<div class="single_prod_desc">
				    	<div class="single_prod_desc_count">Площадь <?php  echo get_post_meta($id,'square',true);?> м².</div>
				    	<div class="single_prod_desc_date">Размещено <?php echo the_date();?> в <?php echo the_time();?></div>
				    	<div class="single_prod_desc_cost">Цена 	<span><?php  echo get_post_meta($id,'cost',true);?> руб.</span></div>
				    	<div class="single_prod_desc_contact">Контактное лицо	<span><?php  echo get_post_meta($id,'name',true);?></span></div>
				    	<div class="single_prod_desc_number">Номер телефона	<span><?php  echo get_post_meta($id,'number',true);?></span></div>
				    	<div class="single_prod_desc_city">Город	<span><?php  echo get_post_meta($id,'city',true);?></span></div>
				    	<div class="single_prod_desc_adress">Адрес	<span><?php  echo get_post_meta($id,'adress',true);?></span></div>
				    	<div class="single_prod_desc_more">
				    		<div class="single_prod_desc_more_title"><?php echo the_title();?></div>
				    		<div class="single_prod_desc_more_text"><p><?php echo get_post_meta($id,'recall_content',true);?></p></div>
				    		<div class="single_prod_desc_more_number_post">Номер объявления: <span><?php  echo $id?></span><div class="editor_post"><?php $id = get_the_ID(); $edit = get_the_permalink(63)."/?rcl-post-edit=".$id; ?>
							<a href="<?php echo $edit; ?>" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/editor.png')no-repeat center/contain"></a></div></div>
				    	</div>
				    </div>
					<?php endif; ?>
					<?php $lin = $link[0]; if($lin->term_id == 13): ?>
					<div class="single_prod_desc">
				    	<div class="single_prod_desc_count">Площадь <?php  echo get_post_meta($id,'square',true);?> м².</div>
				    	<div class="single_prod_desc_date">Размещено <?php echo the_date();?> в <?php echo the_time();?></div>
				    	<div class="single_prod_desc_cost">Цена 	<span><?php  echo get_post_meta($id,'cost',true);?> руб.</span></div>
				    	<div class="single_prod_desc_contact">Контактное лицо	<span><?php  echo get_post_meta($id,'name',true);?></span></div>
				    	<div class="single_prod_desc_number">Номер телефона	<span><?php  echo get_post_meta($id,'number',true);?></span></div>
				    	<div class="single_prod_desc_city">Город	<span><?php  echo get_post_meta($id,'city',true);?></span></div>
				    	<div class="single_prod_desc_adress">Адрес	<span><?php  echo get_post_meta($id,'adress',true);?></span></div>
				    	<div class="single_prod_desc_more">
				    		<div class="single_prod_desc_more_title"><?php echo the_title();?></div>
				    		<div class="single_prod_desc_more_text"><p><?php echo get_post_meta($id,'recall_content',true);?></p></div>
				    		<div class="single_prod_desc_more_number_post">Номер объявления: <span><?php  echo $id?></span><div class="editor_post"><?php $id = get_the_ID(); $edit = get_the_permalink(63)."/?rcl-post-edit=".$id; ?>
							<a href="<?php echo $edit; ?>" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/editor.png')no-repeat center/contain"></a></div></div>
				    	</div>
				    </div>
					<?php endif; ?>
					<?php $lin = $link[2]; if($lin->term_id == 14): ?>
					<div class="single_prod_desc">
				    	<div class="single_prod_desc_count">Площадь <?php  echo get_post_meta($id,'square',true);?> м².</div>
				    	<div class="single_prod_desc_date">Размещено <?php echo the_date();?> в <?php echo the_time();?></div>
				    	<div class="single_prod_desc_cost">Цена 	<span><?php  echo get_post_meta($id,'cost',true);?> руб.</span></div>
				    	<div class="single_prod_desc_contact">Контактное лицо	<span><?php  echo get_post_meta($id,'name',true);?></span></div>
				    	<div class="single_prod_desc_number">Номер телефона	<span><?php  echo get_post_meta($id,'number',true);?></span></div>
				    	<div class="single_prod_desc_city">Город	<span><?php  echo get_post_meta($id,'city',true);?></span></div>
				    	<div class="single_prod_desc_adress">Адрес	<span><?php  echo get_post_meta($id,'adress',true);?></span></div>
				    	<div class="single_prod_desc_more">
				    		<div class="single_prod_desc_more_title"><?php echo the_title();?></div>
				    		<div class="single_prod_desc_more_text"><p><?php echo get_post_meta($id,'recall_content',true);?></p></div>
				    		<div class="single_prod_desc_more_number_post">Номер объявления: <span><?php  echo $id?></span><div class="editor_post"><?php $id = get_the_ID(); $edit = get_the_permalink(63)."/?rcl-post-edit=".$id; ?>
							<a href="<?php echo $edit; ?>" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/editor.png')no-repeat center/contain"></a></div></div>
				    	</div>
				    </div>
					<?php endif; ?>
				</div>
				<?php endwhile; ?>
				<?php else:?>
				<p>Материалов пока нет</p>
				<?php endif; ?>
				<div class="single_map"><?php echo yam_get_map($id);?></div>
				<div class="content_contact">
				<div class="content_contact_fix">
					<div class="content_contact_img"><img src="<?php echo $GLOBALS['theme_uri'];?>/images/content_contact.png" alt=""></div>
					<div class="content_contact_desc"><?php echo get_field('верхний_текст',7) ?></div>
                    <div class="content_contact_number"><?php echo get_field('нижний_текст',7) ?></div>
				</div>
			</div>
			</div>
		</content>
		<?php get_footer();?>