<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>projectYulia</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<script type="text/javascript" src="js/scriptC.js" defer> </script>
</head>
<body>
	<?php require "header.php" ?>
	<div class="contact">
		<h2>Контакты</h2>
	<h3><span>Наш номер:</span> +34675432345</h3>
	<h3><span>Email: </span> gggg@gamil.com</h3>
	</div>
	<h2 id="comment_">Оставьте заявку и мы вам перезвоним!</h2>
	<form action="" class="form" method="post" name="contf">
	<p><input type="text" name="name" class="feedback-input" placeholder="Name" id="namef"></p>
	<p><input type="email" name="email" class="feedback-input" placeholder="Email" id="emailf"></p>
	<p><textarea name="text" id="comment"  class="feedback-input"  placeholder="Message"></textarea></p>
	<button type="summit" class="button-submit" id="sub">Отправить</button>
</form> 

	<?php require "footer.php" ?>
</body>
</html>

