
		</div><!-- /content -->

		<footer class="site-footer">
			<div class="border"></div>
					
				<!-- footer-widgets -->
				<div class="footer-widgets clearfix">
					<div class="content-width">							
						<?php if (is_active_sidebar('footer1')) : ?>				
							<div class="footer-widget-area">
								<?php dynamic_sidebar('footer1'); ?>
							</div>
						<?php endif; ?>
						
						<?php if (is_active_sidebar('footer2')) : ?>
							<div class="footer-widget-area">
								<?php dynamic_sidebar('footer2'); ?>
							</div>
						<?php endif; ?>
						
						<?php if (is_active_sidebar('footer3')) : ?>				
							<div class="footer-widget-area">
								<?php dynamic_sidebar('footer3'); ?>
							</div>
						<?php endif; ?>
						
						<?php if (is_active_sidebar('footer4')) : ?>				
							<div class="footer-widget-area">
								<?php dynamic_sidebar('footer4'); ?>
							</div>
						<?php endif; ?>
					</div>					
				</div><!-- /footer-widgets -->

				<div class="content-width">	
					<nav class="site-nav content-width">
						<?php			
						$args = array(
							'theme_location' => 'footer'
						);			
						?>
						
						<?php wp_nav_menu(  $args ); ?>
					</nav>
				</div><!-- nav -->

				<table class="hrTable">
					<tr>
						<td><hr></td>
						<td class="star">*</td>
						<td><hr></td>
					</tr>
				</table>

				<div class="cc">
					<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
				</div>
			</div>
		</footer>
		</div> <!-- class="qbw_body" -->
		</div><!-- container -->
		<?php wp_footer(); ?>
	</body>
</html>