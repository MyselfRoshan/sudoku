<!DOCTYPE html>
<html>

<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="/resources/css/main.css">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet"> -->
</head>

<body>
	<section class="sign-in-up">
		<div class="card">
			<input type="checkbox" id="toggle-sign-in-up" aria-hidden="true">
			<?php require_view("partials/signup.php") ?>
			<?php require_view("partials/login.php") ?>
		</div>

	</section>
</body>

</html>