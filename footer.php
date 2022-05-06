<footer>
			<a href="#header" class="footer_logo"><img src="<?php echo $GLOBALS['theme_uri'];?>/images/footer_logo.png" alt=""></a>
			<div class="footer_info">
				<div class="footer_info_fix">
					<div class="footer_info_company"><?php echo get_field('дата_и_название',7);?></div>
					<div class="footer_info_number"><?php echo get_field('номер',7);?></div>
				</div>
			</div>
			<nav class="footer_menu">
				<div class="footer_menu_fix">
					<div class="footer_menu_list">
						<div class="footer_cat">
							
							<a href="<?php echo get_category_link(2); ?>" class="footer_cat_title">Недвижимость</a>
							<?php $menu = wp_get_nav_menu_items(22);?>
							<ul>
								<?php foreach ($menu as $menu_li):?>
								<?php if($menu_li->menu_item_parent == 378): ?>	
								<li><a href="<?php echo $menu_li->url;?>"><?php echo $menu_li->title;?></a></li>
								<?php endif; ?>
								<?php endforeach;?>
							</ul>
						</div>
						<div class="footer_services">
							<a href="<?php the_permalink(46);?>" class="footer_services_title">Услуги</a>
							<?php $menu = wp_get_nav_menu_items(22);?>
							<ul>
								<?php foreach ($menu as $menu_li):?>
								<?php if($menu_li->menu_item_parent == 385): ?>
								<li><a href="<?php echo $menu_li->url;?>"><?php echo $menu_li->title;?></a></li>
								<?php endif; ?>
								<?php endforeach;?>
							</ul>
						</div>
						<div class="footer_all_services">
							<a href="<?php the_permalink(48);?>" class="footer_all_services_title">Все услуги</a>
							<?php $menu = wp_get_nav_menu_items(22);?>
							<ul>
								<?php foreach ($menu as $menu_li):?>
								<?php if($menu_li->menu_item_parent == 394): ?>
								<li><a href="<?php echo $menu_li->url;?>"><?php echo $menu_li->title;?></a></li>
								<?php endif; ?>
								<?php endforeach;?>
							</ul>
							<div class="footer_author">
								<div class="footer_users"><img src="<?php echo $GLOBALS['theme_uri'];?>/images/footer_users.png" alt=""></div>
								<a href="" class="footer_author_link">Создание сайтов в Махачкале<br><span>tronium</span></a>
							</div>
						</div>
						<div class="footer_about">
							<a href="<?php the_permalink(48);?>" class="footer_about_title">О компании</a>
							<?php $menu = wp_get_nav_menu_items(22);?>
							<ul>
								<?php foreach ($menu as $menu_li):?>
								<?php if($menu_li->menu_item_parent == 398): ?>
								<li><a href="<?php echo $menu_li->url;?>"><?php echo $menu_li->title;?></a></li>
								<?php endif; ?>
								<?php endforeach;?>
							</ul>
							<a href="<?php the_permalink(405);?>" class="footer_locations">Наши офисы</a>
						</div>
					</div> 
				</div>
			</nav>
		</footer>
	</main>
	<?php wp_footer(); ?>
</body>
</html>