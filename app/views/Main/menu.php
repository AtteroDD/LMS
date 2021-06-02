<?php addStyle(APP.'/templates/main/styles/menu.css');?>

<div class="widgets">
	<section class="shedule">
		<?php core\Addon::add('shedule');?>	
	</section>
	<section class="links">
		<?php core\Addon::add('links');?>	
	</section>	
</div>
<section class="menu">
	<?php core\Addon::add('menu');?>	
</section>