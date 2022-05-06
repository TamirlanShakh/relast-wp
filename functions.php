<?php  

function trim_title_chars($count, $after) {
	$title = get_the_title();
	if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
	else $after = '';
	echo $title . $after;
}

//глобальные переменные
$GLOBALS['theme_uri'] = get_template_directory_uri();
$GLOBALS['home_url'] = home_url();
?>
<?php 
//меню
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menus([
	 'topmenu' =>'Верхнее меню', 
	 'bottommenu' =>'Нижнее меню', ]);
};
?>
<?php 
function house(){
 ?>
<div class="cat_li">
	<?php $main_photo = get_post_meta(get_the_ID(),'count_room',true); ?>
	<a href="<?php the_permalink(); ?>" class="cat_photo" style="background: url('<?php echo wp_get_attachment_image_url($main_photo, 'full'); ?>')no-repeat center/cover;"></a>
	<div class="cat_desc">
		<?php $f = get_the_category(); foreach($f as $ff){}; if($ff->term_taxonomy_id == 15){ ?>
		<a href="<?php the_permalink(); ?>" class="cat_desc_title">Участок <?php  echo get_post_meta(get_the_ID(),'square',true);?> м².,<?php echo get_post_meta(get_the_ID(),'adress',true);?><?php };?></a>
		<?php if($ff->term_taxonomy_id == 16){ ?>
		<a href="<?php the_permalink(); ?>" class="cat_desc_title">Гараж <?php  echo get_post_meta(get_the_ID(),'square',true);?> м².,<?php echo get_post_meta(get_the_ID(),'adress',true);?><?php };?></a>
		<?php if($ff->term_taxonomy_id == 17){ ?>
		<a href="<?php the_permalink(); ?>" class="cat_desc_title">Помещение <?php  echo get_post_meta(get_the_ID(),'square',true);?> м².,<?php echo get_post_meta(get_the_ID(),'adress',true);?><?php };?></a>
		<?php $ff = $f[1]; if($ff->term_id == 18){ ?>
		<a href="<?php the_permalink(); ?>" class="cat_desc_title"><?php  $a= get_post_meta(get_the_ID(),'rooms',true); print_r($a);?>,<?php echo get_post_meta(get_the_ID(),'adress',true);?><?php };?></a>
		<?php $ff = $f[3]; if($ff->term_id == 5){ ?>
		<a href="<?php the_permalink(); ?>" class="cat_desc_title"><?php  $a= get_post_meta(get_the_ID(),'rooms',true); print_r($a);?>,<?php echo get_post_meta(get_the_ID(),'adress',true);?><?php };?></a>
		<?php $ff = $f[0]; if($ff->term_id == 13){ ?>
		<a href="<?php the_permalink(); ?>" class="cat_desc_title">Коттедж <?php  echo get_post_meta(get_the_ID(),'square',true);?> м².,<?php echo get_post_meta(get_the_ID(),'adress',true);?><?php };?></a>
		<?php $ff = $f[2]; if($ff->term_id == 14){ ?>
		<a href="<?php the_permalink(); ?>" class="cat_desc_title">Таунхаус <?php  echo get_post_meta(get_the_ID(),'square',true);?> м².,<?php echo get_post_meta(get_the_ID(),'adress',true);?><?php };?></a>
		<br><a href="<?php the_permalink(); ?>" class="cat_cost"><?php $f = get_the_category(); $f = $f[1]; if($f->term_id == 18){ ?><?php  echo get_post_meta(get_the_ID(),'cost',true);?> руб. мес.<?php }else{?><?php echo get_post_meta(get_the_ID(),'cost',true);?> руб. <?php }; ?></a>
	</div>
</div>
<?php 
} 
?>
<?php
function sort_cat_single()
{
    $cat_id_array = get_the_category(get_the_ID());
    $i = 0;
    while(true)
    {
        if(!$cat_id_array[$i]->term_id)
        {
            break;
        }
        $new_cat_id_array[$i] = $cat_id_array[$i]->term_id;
        $i++;
    }
    sort($new_cat_id_array);
    foreach($new_cat_id_array as $kay => $cat_id)
    {
        echo '<a href="'.get_category_link($cat_id).'">'.get_the_category_by_ID($cat_id).'</a> / ';
    }
    echo get_the_title();
}
?>
<?php
/*AJAX*/

add_action( 'wp_ajax_load_posts', 'load_posts' );
add_action( 'wp_ajax_nopriv_load_posts', 'load_posts' );

function load_posts() {

?>
<?php 
	$metka_val = $_POST['metka_val'];
	$offset_val = $_POST['offset_val'];
	$id_val = $_POST['id_val'];

	$query = new WP_Query(
		$args = array (
			'posts_per_page' => 4,
			'cat'=> $id_val,
			'offset' => $offset_val,
			'meta_query' => array(
					'key' => $metka_val,
					'value' => 1,
					'compare' => '='
				
			)

		)

	)


	?>
	<?php if( $query->have_posts()):?>
	<?php while( $query->have_posts()): $query->the_post();?>
	<?php house();?>
	<?php endwhile; ?>
	<?php else:?>
	<p id="noposts" noposts="noposts">Тут пока ничего нет</p>
	<?php endif;?>




<?php
wp_die();
 } 

 function news(){
 ?>
<div class="news_li">
	<a href="<?php the_permalink(); ?>" class="news_photo" style="background: url('<?php echo get_field('картинка');?>')no-repeat center/cover"></a>
	<div class="news_desc">
		<a href="<?php the_permalink(); ?>" class="news_desc_title"><?php echo get_field('заголовок');?></a>
		<a href="<?php the_permalink(); ?>" class="news_desc_text"><p><?php $string = get_field('описание');echo mb_strimwidth($string, 0, 36) . '...';?></p></a>
	</div>
</div>
 <?php	
 }
 ?>
<?php function search_form(){ ?>
<div class="search_house">
	<div class="search_house_fix">
		<form action="<?php the_permalink(247); ?>" method="GET">
			<img src="<?php echo $GLOBALS['theme_uri'];?>/images/click_search.png" alt="">
			<?php 
			$categories = get_categories( [
				'taxonomy'     => 'category',
				'parent'       => '2',
				// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
			] );
			?>
			<select name="cat" id="">
				<option value="2">Все разделы</option>
				<?php foreach($categories as $cat){ ?>
				<option value="<?php echo $cat->term_id;?>"><?php echo $cat->name;?></option>	
				<?php } ?>
			</select>
			<input type="text" placeholder="Поиск по объявлениям" name="ps" value="<?php echo $_GET['ps'];?>">
			<input type="text" placeholder="Город" name="gorod" value="<?php echo $_GET['gorod'];?>">
			<input type="text" placeholder="Район" name="rayon" value="<?php echo $_GET['rayon'];?>">
			<input type="submit" value="НАЙТИ">
		
		<div class="search_house_tags">
		<div class="search_house_tags_block">
			<select name="sdamprodam">
				<option value="">Тип объявления</option>
				<option>Сдам</option>
				<option>Продам</option>
				</select>
			<select name="countroom">
				<option value="">Количество комнат</option>
				<?php $i=1; while($i<=5): ?>
				<option id="<?php echo $i ?>-к квартира"><?php echo $i ?>-к квартира</option>
				<?php $i++; endwhile; ?>
			</select>	
			<select name="lengthrent">
				<option value="">Срок аренды</option>
				<option>Короткий</option>
				<option>Длительный</option>
				</select>
				<select name="plot">
					<option value="">Площадь,м²,от</option>
				<?php $i=10; while($i<=100): ?>
				<option value="<?php echo $i ?>"><?php echo $i ?>м²</option>
				<?php $i = $i + 10; endwhile; ?>
				</select>
				<select name="plataot">
				<option value="">Арендная плата, от</option>
				<?php $i=5000; while($i<=50000): ?>
				<option value="<?php echo $i ?>"><?php echo $i ?> тыс.руб</option>
				<?php $i = $i + 5000; endwhile; ?>
				</select>
				<select name="etaj">
				<option value="">Этаж</option>
				<?php $i=1; while($i<=20): ?>
				<option value="<?php echo $i ?>"><?php echo $i ?></option>
				<?php $i++; endwhile; ?>
				</select>
				<select name="levels_house">
				<option value="">Этажей в доме</option>
				<?php $i=1; while($i<=20): ?>
				<option value="<?php echo $i ?>"><?php echo $i ?></option>
				<?php $i++; endwhile; ?>
				</select>
				<select name="typehouse">
				<option value="">Тип дома</option>
				<option>Новостройка</option>
				<option>Вторичное жилье</option>
				</select>
				<select name="pldo">
				<option value="">Площадь,м²,до</option>
				<?php $i=100; while($i<=200): ?>
				<option value="<?php echo $i ?>"><?php echo $i ?>м²</option>
				<?php $i = $i + 10; endwhile; ?>
				</select>
				<select name="platado">
				<option value="">Арендная плата, до</option>
				<?php $i=50000; while($i<=100000): ?>
				<option value="<?php echo $i ?>"><?php echo $i ?> тыс.руб</option>
				<?php $i = $i + 5000; endwhile; ?>
				</select>
		</div>	
		</div>
		</form>
	</div>
</div>

<?php	
}


function internoetics_mb_strimwidth($string, $start = 0, $width = 120, $trimmarker = '...') {
  $len = strlen(trim($string));
  $newstring = ( ($len > 120) && ($len != 0) ) ? rtrim(mb_strimwidth($string, $start, $width - strlen($trimmarker))) . $trimmarker : $string;
 return $newstring;
}


?>	
