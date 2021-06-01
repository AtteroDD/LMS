<?php addStyle(APP.'/templates/main/styles/auth_form.css');?>

<form class='auth' action="/menu" method="post">
	<h1>Вход в систему</h1>

    <input type="email" name="auth_email" placeholder="student" required>
    <input type="password" name="auth_pass" placeholder="password" required>
    
    <button type="submit" name="auth_submit">Войти</button>
</form>
<div class="help">
	<p>Нужна помощь?</p>
	<a href="/faq">Часто задаваемые вопросы</a>
	<a href="/help">Связаться с техподдержкой</a>
</div>
