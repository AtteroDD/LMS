<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Document</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<--styles-->
	<?php addStyle(__DIR__.'/styles/base.css');?>
	<?php addStyle(ROOT.'/resources/fonts/roboto/roboto.css');?>

</head>
<body>
	<header>
		<section class="container">
			<a href="/" class="logo">
				<img src="resources/gfx/logo.png" alt="logo">
			</a>
			<div class="profile">
				<p>Иванов Иван Иванович</p>
				<a href="/">Exit</a>
			</div>
		</section>
	</header>
	<main class="container">