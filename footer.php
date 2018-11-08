<div class="clearfix"></div>
	<!--フッター-->
	<?php if( is_bread_display() == "exist") :?>
	<?php if( ! is_mobile() ): ?>
	<?php breadcrumbs(); ?>
	<?php endif; ?>
	<?php endif; ?>
	<footer role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
	
		<!--ここからフッターウィジェット-->
		
		<?php if ( ! wp_isset_widets( 'footer-menu-left',true ) && ! wp_isset_widets( 'footer-menu-center',true ) && ! wp_isset_widets( 'footer-menu-right',true ) ) : ?>
		
		<?php else : ?>
			<?php if( is_footer_design() == "footer_style1" ) :?>
			<div id="footer-widget-area" class="footer_style1">
				<div id="footer-widget-box">
					<div id="footer-widget-left">
						<?php dynamic_sidebar( 'footer-menu-left' ); ?>
					</div>
					<div id="footer-widget-center-box">
						<div id="footer-widget-center1">
							<?php dynamic_sidebar( 'footer-menu-center1' ); ?>
						</div>
						<div id="footer-widget-center2">
							<?php dynamic_sidebar( 'footer-menu-center2' ); ?>
						</div>
					</div>
					<div id="footer-widget-right">
						<?php dynamic_sidebar( 'footer-menu-right' ); ?>
					</div>
				</div>
			</div>
			<?php elseif( is_footer_design() == "footer_style2" ) : ?>
			<div id="footer-widget-area" class="footer_style2">
				<div id="footer-widget-box">
					<div id="footer-widget-left">
						<?php dynamic_sidebar( 'footer-menu-left' ); ?>
					</div>
					<div id="footer-widget-center">
						<?php dynamic_sidebar( 'footer-menu-center' ); ?>
					</div>
					<div id="footer-widget-right">
						<?php dynamic_sidebar( 'footer-menu-right' ); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div class="footersen"></div>
		<?php endif; ?>
		
		
		<div class="clearfix"></div>
		
		<!--ここまでフッターウィジェット-->
	
		<?php if ( footer_choice() == 'both' ) : ?>
			<div id="footer-box">
				<div class="footer-inner">
					<span id="privacy"><a href="<?php is_footer_link_left(); ?>"><?php is_footer_text_left(); ?></a></span>
					<span id="law"><a href="<?php is_footer_link_right(); ?>"><?php is_footer_text_right(); ?></a></span>
					<span id="copyright" itemprop="copyrightHolder"><i class="far fa-copyright" aria-hidden="true"></i>&nbsp;<?php echo get_copyright_date(); ?>&nbsp;&nbsp;<?php bloginfo('name'); ?></span>
				</div>
			</div>
		<?php elseif ( footer_choice() == 'onlycopy' ) : ?>
			<div id="footer-box">
				<div class="footer-inner">
					<span id="copyright-center" itemprop="copyrightHolder"><i class="far fa-copyright" aria-hidden="true"></i>&nbsp;<?php echo get_copyright_date(); ?>&nbsp;&nbsp;<?php bloginfo('name'); ?></span>
				</div>
			</div>
		<?php endif; ?>
		<div class="clearfix"></div>
	</footer>
	
	
	
	<?php if ( is_mobile() ) : ?>
	<!--ここからフッターメニュー-->
		<?php if( has_nav_menu('sp-footer-menu') ) : ?>
			<div id="sp-footer-box">
				<?php wp_nav_menu( array(
					'theme_location' =>'sp-footer-menu',
					'container'      =>'sp-nav',
					'container_class'=>'sp-fixed-content',
					'items_wrap'     =>'<ul class="footer-menu-sp">%3$s</ul>') );
				?>
			</div>
		<?php endif; ?>
	<!--ここまでフッターメニュー-->
	<?php endif; ?>
	
	</div><!--scroll-content-->
	
</div><!--wrapper-->

<?php wp_footer(); ?>

<script>
	var mySwiper = new Swiper ('.swiper-container', {
		// Optional parameters
		loop: true,
		slidesPerView: 5,
		spaceBetween: 15,
		autoplay: {
			delay: 2700,
		},
		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// And if we need scrollbar
		scrollbar: {
			el: '.swiper-scrollbar',
		},
		breakpoints: {
              1024: {
				slidesPerView: 4,
				spaceBetween: 15,
			},
              767: {
				slidesPerView: 2,
				spaceBetween: 10,
				centeredSlides : true,
				autoplay: {
					delay: 4200,
				},
			}
        }
	});
	
	var mySwiper2 = new Swiper ('.swiper-container2', {
	// Optional parameters
		loop: true,
		slidesPerView: 3,
		spaceBetween: 17,
		centeredSlides : true,
		autoplay: {
			delay: 4000,
		},

		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// And if we need scrollbar
		scrollbar: {
			el: '.swiper-scrollbar',
		},

		breakpoints: {
			767: {
				slidesPerView: 2,
				spaceBetween: 10,
				centeredSlides : true,
				autoplay: {
					delay: 4200,
				},
			}
		}
	});

</script>
<?php if( is_totop_display() == "exist") :?>
<div id="page-top">
	<a class="totop"><i class="fas fa-chevron-up"></i></a>
</div>
<?php endif; ?>
<?php if( ! get_option('space_body') == null ) : ?>
<?php echo get_option('space_body'); ?>
<?php endif; ?>

</body>
</html>