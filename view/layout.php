<!DOCTYPE html>
<html>
	<head>
		<title> NEWSPORTAL</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
		<meta charset="utf-8">
	</head>
	<body>
		<!-- HEDAER HEADER HEDAER HEADER HEDAER HEADER HEDAER HEADER HEDAER -->

		<!-- ==================== Раздел меню ==================== -->
		<nav class="one">
			<ul class="topmenu">
				<li class="topmenuli"><a href="index">FILKES</a></li>
				<li class="topmenuli"><a href="index">Главная</a></li>
				<li class="topmenuli"><a href="#">Категории<i class="fa fa-angle-down"></i></a>
					<ul class="submenu">
						<?php
						
								// высов контроллера, для вывода всех категорий
								Controller::AllCategory();
									
						?>
					</ul>
				</li>
				<li class="topmenuli"><a href="iwww">Инфо</a></li>
				<li class="topmenuli"><a href="./">Stardileht</a></li>
				<li class="topmenuli"><a href="registerForm">Register</a></li>
				<li class="topmenuli"><a href="./admin/login">Log in</a></li>
				<!-- -->
				<div class="pull-right">
					<li class="topmenuli">
						<form action="search">
							<input type="text" name="otsi">
							<input type="submit" value="otsi">
						</form>
					</li>
				</div>
			</ul>
		</nav>
		<!-- ==================== Раздел содержания ==================== -->
		<section>
			<div class = 'divBox'>
				<?php
				// выводит контент страницы
				if(isset($content)){
					echo $content;
				}
				else{
					echo '<h1>Content is gone!</h1>';
				}
				?>
			</div>
		</section>
		<!-- FOOTER -->
		<hr>
		<p style="display:block; text-align:center;">JPTVR18 2019 a. &copy</p>
	</body>
</html>




<!--
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootsrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous">
-->