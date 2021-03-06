<?php
/*
Template Name: １カラム【幅広】
Template Post Type: page
*/
?>
<?php get_header(); ?>
	
	<div id="contents">

		<!--メインコンテンツ-->
		<main id="onecolumn" class="main-contents <?php echo is_article_design(); ?> <?php is_animation_style(); ?>" itemprop="mainContentOfPage">
			<section class="cps-post-box hentry">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="cps-post">
						<header class="cps-post-header">
							<h1 class="cps-post-title entry-title" itemprop="headline"><?php esc_html(the_title()); ?></h1>
							<span class="writer fn" itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php the_author(); ?></span></span>
						</header>
						
						<div class="cps-post-main-box">
							<div class="cps-post-main <?php if( ! get_option('hl_custom_check')){is_h2_style();echo " "; is_h3_style();echo " "; is_h4_style(); }else{echo "hl-custom";} ?> entry-content <?php echo esc_html(get_option('font_size'));?> <?php echo esc_html(get_option('font_size_sp'));?>" itemprop="articleBody">

								<?php the_content(); ?>
								

							</div>
						</div>
					</article>
				<?php endwhile; ?>
				<?php else : ?>
					<article class="cps-post">
						<h1 class="post-title">記事が見つかりませんでした。</h1>
					</article>
				<?php endif; ?>
    		</section>
			
			<?php if( is_bread_display() == "exist") :?>
			<?php if( is_mobile() ): ?>
			<?php breadcrumbs(); ?>
			<?php endif; ?>
			<?php endif; ?>
		</main>
		
	</div>
	<?php get_footer(); ?>