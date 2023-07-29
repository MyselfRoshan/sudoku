<!DOCTYPE html>
<html>

<?php require_view("partials/head.php", ['scripts' => $scripts]) ?>

<body>
    <?php require_view("/partials/header.php") ?>
    <section class="sudoku-board-wrapper">
        <div>
            <span class="welcome-text">
                Welcome
                <span>
                    <?= $_SESSION['user']['username'] ?>
                </span>
            </span>
            <span class="difficulty-text">
                <span>Difficulty:</span>
                <?= $difficulty ?>
            </span>
        </div>
        <table class="sudoku-board">
            <?php
            for ($i = 0; $i < 9; $i++) {
                echo "<tr class='row'>";
                for ($j = 0; $j < 9; $j++) {
                    echo "<td class='cell'>";
                    if ($solution ?? $puzzle[$i][$j] === 0)
                        echo "<input id='i{$i}{$j}' data-row={$i} data-col={$j} class='cell-input-empty' maxlength=1 size=1 autocomplete=off onkeypress='return onlyNumber(event)' />";
                    else
                        echo "<input id='i{$i}{$j}' data-row={$i} data-col={$j} class='cell-input-full' value={$puzzle[$i][$j]} maxlength=1 size=1 autocomplete=off readonly />";
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <div class="buttons">
            <button class="btn-outline">
                <a href="/board?solution=true">Show solution</a>
            </button>
            <button class="btn" id="show-solution">
                <a href="/board">Play Again</a>
            </button>
        </div>
    </section>
</body>

</html>