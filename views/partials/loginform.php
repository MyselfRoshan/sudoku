<div class="login">
    <form method="POST">
        <label for="toggle-sign-in-up" aria-hidden="true">Login</label>
        <div class="input-wrapper">
            <input type="text" name="email" placeholder="Email" />
            <small class="validation-alerts">
                <?= $alerts['email'] ?? '' ?>
            </small>
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Password" />
            <small class="validation-alerts">
                <?= $alerts['password'] ?? '' ?>
            </small>
        </div>
        <button>Login</button>
    </form>
</div>