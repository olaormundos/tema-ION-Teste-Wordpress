<footer>
				<section class="footer-widgets">
					<div class="container">
					<img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-cima"/>
                	<img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-baixo"/>
						<div class="row">
							 <?php if( is_active_sidebar( 'fancelab-sidebar-footer-1' )): ?>
							 	<div class="col-md-3 col-12">
							 		<?php dynamic_sidebar( 'fancelab-sidebar-footer-1' ); ?>
							 	</div>
							 <?php endif; ?>
							 <?php if( is_active_sidebar( 'fancelab-sidebar-footer-2' )): ?>
							 	<div class="col-md-3 col-12">
							 		<?php dynamic_sidebar( 'fancelab-sidebar-footer-2' ); ?>
							 	</div>
							 <?php endif; ?>
							 <?php if( is_active_sidebar( 'fancelab-sidebar-footer-3' )): ?>
							 	<div class="col-md-3 col-12">
							 		<?php dynamic_sidebar( 'fancelab-sidebar-footer-3' ); ?>
							 	</div>
							 <?php endif; ?>
							 <?php if( is_active_sidebar( 'fancelab-sidebar-footer-4' )): ?>
							 	<div class="col-md-3 col-12">
							 		<?php dynamic_sidebar( 'fancelab-sidebar-footer-4' ); ?>
							 	</div>
							 <?php endif; ?>	
						</div>
					</div>	
				</section>
				<section class="copyright">
					<div class="container">
						<div class="row">
							<div class="copyright-text col-md-6">
								<p><?php echo get_theme_mod( 'set_copyright' ); ?></p>
							</div>
							<div class="col-md-6">
								<div class="sociais">
									<a href="#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/midia/images/Logo-insta.png" /></a>
									<a href="#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/midia/images/Logo-telegran.png" /></a>
									<a href="#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/midia/images/Logo-twitter.png" /></a>
								</div>
							</div>
						</div>
					</div>		
				</section>
			</footer>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>