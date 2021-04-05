<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<--styles-->
	<?php \core\Document::addStyle(__DIR__.'/styles/main.css');?>
	<?php \core\Document::addScript(__DIR__.'/scripts/main.js'); ?>
</head>
<body>
	<div class="content">
		<aside>
			<a href="/" class="logo"><?php \core\Document::addImage(GFX.'/logo.png');?></a>
			<section class="links">
				<a href="/">Главная</a>
				<a href="/news">Новости</a>
			</section>
		</aside>
		<main>
			<header>
				<a href="/profile">
					<p>Иванов Иван Иванович</p>
					<?php \core\Document::addImage(GFX.'/interface/profile.png');?>
				</a>
			</header>