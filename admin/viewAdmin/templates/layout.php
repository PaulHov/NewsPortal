<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<!--
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	-->

	<link href="public/css/bootstrap.css" rel="stylesheet">
	<link href="public/css/mystyle.css" rel="stylesheet">
	<link rel="stylesheet" href="public/css/font-awesome.min.css">

	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/js/ajaxupload.3.5.js"></script>

</head>
<body>
	<div class="container">
		<!-- -- >
			<?php
			if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"]))
			{
			?>
			<!-- -- >
		<div class="header clearfix">
		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- -- >
				<?php
				echo '<ul class="nav nav-pills pull-right">
				<li role="button">'.$_SESSION["name"].
				'<a href="logout" style="display: inline;">Exit <i class="fa fa-sign-out"></i>
				</a></li></ul>';

				if(isset($_SESSION["status"]) && $_SESSION["status"]=="admin"){

				echo '<h4><a href="../" target=_blank>Web site News Portal</a>';
				echo '	&#187 <a href="./" >Start admin</a>';
				echo '	&#187 <a href="categoryAdmin">Categories </a>';
				echo '	&#187 <a href="newsAdmin">NewsList </a>';

				echo ' </h4>';
				}else{
					echo '<h4>Acces denied!</h4>';
				}
				?>
			<!-- -- >
		</div>
		</nav>
		</div>
			<!-- -- >
			<?php
			}
			?>
			<!-- -- >
		<div id="content" style="padding-top:20px; ">
			
				<?php echo $content; ?>

		</div>
		<!-- FOOTER -->
	<footer class="footer">	
		<p>&copy; 2019 Design Admin dashboard<i class="fa fa-child"></i></p>
	</footer>
	</div> <!-- /container -->	
</body>
</html>



<!--
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootsrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous">
-->