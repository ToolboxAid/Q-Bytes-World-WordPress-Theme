<!-- side-column -->
<div class="side-column">
	
	<?php if (is_active_sidebar('sidebar1')) : ?>
	<div>	
		<div id="animated-div">
		<hr/>
		<p> animated-div </p>
		<hr/>
		<div>
		<?php dynamic_sidebar('sidebar1'); ?>
	</div>
	
	<?php endif; ?>
	
</div><!-- /side-column -->