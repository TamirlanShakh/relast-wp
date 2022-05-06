		<?php get_header();?>
		<content>
			<div class="single_news_fix">
				<div class="single_news_li">
					<a class="single_news_img" href="<?php echo get_field('картинка');?>" rel="lightbox"><img src="<?php echo get_field('картинка');?>" alt=""></a>
					<div class="single_news_text">
						<div class="single_news_title"><?php echo get_field('заголовок');?></div>
						<div class="single_news_desc"><?php echo get_field('описание');?></div>
					</div>	
				</div>
			</div>
		</content>
		<?php get_footer();?>