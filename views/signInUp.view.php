<!DOCTYPE html>
<html>

<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="/resources/css/main.css">
</head>

<body>
	<section class="sign-in-up">
		<div class="card">
			<!-- If checked login shows up in not signup shows up -->
			<input type="checkbox" id="toggle-sign-in-up" aria-hidden="true" <?= $isSignUp ? "" : "checked" ?>>
			<?php require_view("partials/signup.php") ?>
			<?php require_view("partials/login.php") ?>
		</div>

	</section>
</body>

</html>