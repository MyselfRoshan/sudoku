<!DOCTYPE html>
<html>

<?php require_view("partials/head.php", ['scripts' => $scripts]) ?>

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