<?php addStyle(__DIR__.'/style.css');?>

<?php
	$replace = str_replace(ROOT, '', __DIR__);
	for ($i=0; $i < 10; $i++) { 
		echo '<div class="link"><img src="app/addons/menu/default/gfx/menu'.rand(1,3).'.png" alt=""></div>';
	}

?>