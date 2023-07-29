<div class="login">
    <form method="POST">
        <label for="toggle-sign-in-up" aria-hidden="true">Login</label>
        <div class="input-wrapper">
            <input type="email" name="lemail" placeholder="Email" value="<?= $_POST['lemail'] ?? '' ?>" />
            <small class="validation-alerts">
                <?= $alerts['lemail'] ?? '' ?>
            </small>
        </div>
        <div class="input-wrapper">
            <input type="password" name="lpassword" placeholder="Password" value="<?= $_POST['lpassword'] ?? '' ?>" />
            <small class="validation-alerts">
                <?= $alerts['lpassword'] ?? '' ?>
            </small>
        </div>
        <button>Login</button>
    </form>
</div>