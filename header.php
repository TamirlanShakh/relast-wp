<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Relast</title>
	<link rel="stylesheet" href="<?php echo $GLOBALS['theme_uri'];?>/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Open+Sans:wght@400;700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['theme_uri'];?>/js/scripts.js"></script>
	<script type="text/javascript">
	    var ajaxurl = '<?php echo get_home_url();?>/wp-admin/admin-ajax.php';
	</script>
	<?php wp_head();?>
</head>
<body>
	<main>
		<header>
			<div class="modal">
				<div class="modal_window ">
					<div class="close_modal">x</div>
					<div class="modal_title">ОСТАВИТЬ ЗАЯВКУ</div>
					<div class="modal_form">
						<?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?>
					</div>
				</div>
			</div>
			<nav class="header_menu">
				<div class="header_menu_fix" id="header">
					<div class="header_menu_top">
					    <a href="<?php echo $GLOBALS['home_url'];?>" class="header_logo" ><img src="<?php echo get_field('верхнее_лого',7);?>" alt=""></a>
					    <div class="header_call">Оставить заявку</div>
					    <div class="header_contacts">
						    <a href="tel: <?php echo get_field('телефон1',7);?>" class="header_contact"><?php echo get_field('телефон1',7);?></a>
						    <a href="tel: <?php echo get_field('телефон2',7);?><" class="header_contact"><?php echo get_field('телефон2',7);?></a>
					    </div>
	                    <div class="header_login">Личный кабинет</div>
	                    <div class="header_login_child">
	                    	<?php if(is_user_logged_in()): ?>
	                    	<a href="<?php echo home_url()?>/account/?user=<?php echo  get_current_user_id()?>&tab=postform" class="header_login_reg">Создать объявление</a>
	                   		<a href="<?php echo home_url()?>/account/?user=<?php echo  get_current_user_id()?>" class="rcl-login header_login_in">Мой аккаунт</a>
	                    	<a href="<?php echo esc_url( wp_logout_url( '/' ));?>" class="rcl-register header_login_reg">Выйти</a>
	                    	<?php else: ?>
	                    	<a href="<?php echo wp_login_url();?>" class="rcl-login header_login_in">Войти</a>
	                    	<a href="<?php echo wp_registration_url(); ?>" class="rcl-register header_login_reg">Регистрация</a>
	                    	<?php endif; ?>
	                	</div>
	                </div>
	                <div class="header_menu_bottom">
	                    <div class="header_menu_list">
	                    	<?php $menu = wp_get_nav_menu_items(3);?>
	                	    <ul>
	                	    	<?php foreach ($menu as $menu_li):?>
	                		    <li><a href="<?php echo $menu_li->url;?>"><?php echo $menu_li->title;?></a></li>
	                		    <?php endforeach;?>
	                		</ul>    
	                    </div>
	                    <div class="header_search" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/search_line.png')no-repeat top 44px left;">
	                    	<form action="<?php echo $GLOBALS['home_url'];?>" method="GET">
	                    		<input type="text" placeholder="Поиск.." name="s" value="<?php echo $_GET['s'];?>">
	                    		<input type="submit" value="">
	                    	</form>
	                    </div>
	                </div>
				</div>
			</nav>
		</header>