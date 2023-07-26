<!DOCTYPE html>
<html>

<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="/resources/css/main.css">
    <script defer src="/resources/js/board.js"></script>
    </script>
</head>

<body>
    <section class="sudoku-board-wrapper">
        <h2>Difficulty: <?= $difficulty ?></h2>
        <table class="sudoku-board">
            <?php
            for ($i = 0; $i < 9; $i++) {
                echo "<tr class='row'>";
                for ($j = 0; $j < 9; $j++) {
                    echo "<td class='cell'>";
                    if ($solution ?? $puzzle[$i][$j] === 0)
                        echo "<input id='i{$i}{$j}' data-row={$i} data-col={$j} class='cell-input-empty' maxlength=1 size=1 autocomplete=off onkeypress='return onlyNumber(e)' />";
                    else
                        echo "<input id='i{$i}{$j}' data-row={$i} data-col={$j} class='cell-input-full' value={$puzzle[$i][$j]} maxlength=1 size=1 autocomplete=off readonly />";
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <button id="show-solution">Show Solution</button>
        <a href="/board">Play again</a>
    </section>
</body>

</html>