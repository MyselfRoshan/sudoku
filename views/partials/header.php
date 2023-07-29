<header>
    <nav>
        <span class="logo">
            <a href=" /">Sudoku</a>
        </span>
        <?php if ($_SESSION['user'] ?? false) : ?>
            <form action="/login" method="POST">
                <input type="hidden" name="_request_method" value="DELETE">
                <button class="btn">
                    Log out
                </button>
            </form>
        <?php else : ?>
            <div>
                <button class="btn-outline">
                    <a href="/signup">Sign Up</a>
                </button>
                <button class="btn">
                    <a href="/login">Login</a>
                </button>
            </div>
        <?php endif ?>
    </nav>
</header>