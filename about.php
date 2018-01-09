<!DOCTYPE html>
<html>
<head>
	<title>Обо мне — Марат Бакиров</title>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>
	<style type="text/css">
		/*Обо мне*/
		#aboutme {
			display: block;
			width: 620px;
			margin: -200px 0 0 -350px;
			top: 50%;
			left: 50%;
			position: fixed;
		}

		#aboutme img {
			display: block;
			margin: 0;
			padding: 0;
			float: left;
		}

		#aboutme #messages {
			float: right;
			margin: 60px 0 0 0;
		}

		#aboutme #messages .bubles {
			display: none;
			width: 400px;
			padding: 18px 20px 18px 20px;
			margin: 0 0 10px 10px;
			color: white;
			font-size: 14px;
			line-height: 20px;
			border-radius: 5px;
			background-color: #ec2c42;
		}

		#aboutme #messages #one {
			display: block;
		}

		.bubles span {
			display: block;
			position: relative;
			width: 19px;
			height: 10px;
			margin: -10px 0 0 -19px;
			top: -8px;
			right: 11px;
			background-image: url(/site-files/about-buble-first.svg);
		}

		#messages #wait {
			display: block;
			width: 23px; height: 5px;
			background-image: url(/site-files/about-buble-wait.gif);
			background-repeat: no-repeat;
			background-position: top right;
			margin: 0 0 0 10px;
		}

		#messages a {
			border-color: white;
			color: white;
		}

		#messages a:hover {
			color: #aee24c;
		}
		/*EOF Обо мне*/
	</style>
</head>
<body>

	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/menu.html'); ?>

	<script type="text/javascript">
		$(function() {
		  $('#wait').hide();
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 500);		  
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#2').show(400);
		  }, 3000);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 6000);		
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#3').show(400);
		  }, 8000);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 11000);
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#one').hide(400);
		    $('#4').show(400);
		  }, 13000);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 13500);
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#2').hide(400);
		    $('#5').show(400);
		  }, 14000);
		});
	</script>

	<div id="aboutme">
		<img src="/site-files/me-pixel-about.gif">
		<div id="messages">
			<div class="bubles" id="one"><span></span>Привет! Меня зовут Марат Бакиров</div>
			<div class="bubles" id="2">Я занимаюсь графическим дизайном<br>и вёрсткой более 10 лет</div>
			<div class="bubles" id="3">Люблю индизайн и хорошую вёрстку</div>
			<div class="bubles" id="4">Ещё я делаю сайты и всякое такое</div>
			<div class="bubles" id="5">Если что&nbsp;&mdash; пишите на почту <a href="mailto:lcd-swat@yandex.ru">lcd-swat@yandex.ru</a><br>или в <a href="https://t.me/lcdswat">телеграм</a></div>
			<span id="wait"></span>
		</div>
	</div>

</body>
</html>
