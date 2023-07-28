<!DOCTYPE html>
<html>

<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="/resources/css/main.css">
	<script defer src="/resources/js/ajaxRedirect.js"></script>
</head>

<body>
	<section class="sign-in-up">
		<div class="card">
			<!-- If checked login shows up in not signup shows up -->
			<input type="checkbox" id="toggle-sign-in-up" aria-hidden="true">
			<?php require_view("partials/signupform.php", ['alerts' => $alerts ?? []]) ?>
			<?php require_view("partials/loginform.php", ['alerts' => $alerts ?? []]) ?>
		</div>

	</section>
</body>

</html>