<?php
	$menu_name = 'pickup-contents';
	$locations = get_nav_menu_locations();
	if(isset($locations[ $menu_name ])){
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	}
	if(isset($menu->term_id)){
		$menu_items = wp_get_nav_menu_items($menu->term_id);
	}
	if(isset($menu_items)):
?>
<div class="pickup-contents-box-post-type <?php is_animation_style(); ?>">
	<div class="swiper-container">
		<ul class="pickup-contents swiper-wrapper">
		<?php 
			foreach ($menu_items as $menu): 
				$page_id = $menu->object_id;
				$menu_name = $menu->title;
				$thumbnail_id = get_post_thumbnail_id($page_id);
				$image_attributes = wp_get_attachment_image_src($thumbnail_id,'small_size'); 
				$content = get_page($page_id);
			
			// カテゴリー情報を取得
			if( ! empty(get_the_category($page_id)) ){
				$category = get_the_category($page_id);
				$cat_id   = $category[0]->cat_ID;
				$cat_name = $category[0]->cat_name;
				$cat_slug = $category[0]->category_nicename;
				$cat_link = get_category_link($cat_id);
				
				$cat_data=get_option(intval($cat_id));
				$cat_color=esc_html($cat_data['cps_meta_category_color']);
			}
		
		?>
			<li class="swiper-slide">
				<a href="<?php echo get_permalink($page_id); ?>">
					<div class="pickup-image">
					<?php if ( $image_attributes ): ?>
						<img src="<?php echo $image_attributes[0]; ?>" alt="" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
					<?php else: ?>
						<img src="<?php bloginfo('template_url'); ?>/img/noimg480.png" width="480" height="270" alt="no image" />
					<?php endif; ?>
						<?php if( isset( $cat_name ) ): ?>
						<span class="cps-post-cat pickup-cat category-<?php echo $cat_slug; ?>" style="background-color:<?php if($cat_color){echo $cat_color;} ?>!important;" itemprop="keywords"><?php echo $cat_name ?></span>
						<?php endif; ?>
					</div>
					<div class="pickup-title"><?php if(mb_strlen($menu_name)>28) { $posttitle= mb_substr($menu_name,0,28) ; echo $posttitle.'...' ;
		} else {echo $menu_name;}?></div>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
		
		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</div>
<?php endif; ?>