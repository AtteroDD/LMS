<?php addStyle(APP.'/templates/main/styles/menu.css');?>

<div class="widgets">
	<section class="shedule widget">
		<?php core\Addon::add('shedule');?>	
	</section>
	<section class="info">
		<?php core\Addon::add('info');?>	
	</section>	
</div>
<section class="menu widget">
	<?php core\Addon::add('menu');?>	
</section>