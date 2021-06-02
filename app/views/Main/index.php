<?php addStyle(APP.'/templates/light/styles/auth.css');?>

<form class='auth-bg form' action="/" method="post">
	<img src="resources/gfx/logo.png" alt="logo">

    <input type="email" name="auth_email" placeholder="email" required>
    <input type="password" name="auth_pass" placeholder="password" required>

    <p>Неправильный логин или пароль. Попробуйте снова!</p>

    <button type="submit" name="auth_submit">Войти</button>
</form>
<div class="auth-bg help">
	<p>Нужна помощь?</p>
	<a href="/faq">Часто задаваемые вопросы</a>
	<a href="/help">Связаться с техподдержкой</a>
</div>