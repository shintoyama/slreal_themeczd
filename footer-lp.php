<div class="clearfix"></div>
	<!--フッター-->
	<footer role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
		<div id="footer-widget-area" class="footer_style1"></div>
		<div class="footersen"></div>
		
		
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

<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<?php if( is_font_style() == 'nts-style' ): ?>
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<?php elseif( is_font_style() == 'rm-style' ): ?>
<link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
<?php else: ?>
<?php endif; ?>
<?php if( ! get_option('kaereba_design') == null ) : ?>
<link href="<?php echo get_template_directory_uri() . '/css/kaereba.css' ?>" rel="stylesheet" />
<?php endif; ?>