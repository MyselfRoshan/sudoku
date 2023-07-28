<div class="signup">
    <form method="POST">
        <label for="toggle-sign-in-up" aria-hidden="true">Sign up</label>
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Username" />
            <small class="validation-alerts">
                <?= $alerts['username'] ?? '' ?>
            </small>
        </div>
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
        <button type="submit">Sign up</button>
    </form>
</div>