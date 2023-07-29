<!DOCTYPE html>
<html lang="en">

<?php require_view("partials/head.php") ?>

<body>
    <main>
        <?php require_view("/partials/header.php") ?>

        <section class="hero">
            <h1>Challange Yourself!</h1>
            <p>Play Sudoku with random difficulty. Signup and play for free</p>
            <?php if ($_SESSION['user'] ?? false) : ?>
                <button class="btn">
                    <a href="/board">Play Now</a>
                </button>
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
        </section>
        <section class="tips">
            <h2>Some tips for solving Sudoku:</h2>
            <ul>
                <li class="tip">Avoid trial and error &ndash; find a logical reason for entering each number.</li>
                <li class="tip">Look for rows, columns and 3&times;3 boxes with just a few blanks remaining.</li>
                <li class="tip">Try adding numbers which already appear often in the Sudoku puzzle.</li>
                <li class="tip">After entering a number, check to see where else it has to go.</li>
                <li class="tip">For trickier puzzles, click Options to turn on pencil marks.</li>
            </ul>
        </section>
    </main>
</body>

</html>