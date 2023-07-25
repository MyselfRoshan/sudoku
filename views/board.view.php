<!DOCTYPE html>
<html>

<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="/resources/css/main.css">
    <script defer type="module" src="/resources/js/api.js"></script>
    <script defer type="module" src="/resources/js/board.js"></script>
</head>

<body>
    <section class="sudoku-board-wrapper">
        <table class="sudoku-board">
            <?php
            for ($i = 0; $i < 9; $i++) {
                echo "<tr class='row'>";
                for ($j = 0; $j < 9; $j++) {
                    echo "<td class='cell' id='c{$j}{$i}'>";
                    echo "<input class='number' value={$i} maxlength=1 size=1 />";
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </section>
    <!-- dgdrhdf -->
    <div STYLE="position:relative;">
        <table id="puzzle_grid" CELLSPACING=0 CELLPADDING=0 CLASS=t>
            <tr>
                <td CLASS=g0 ID=c00>
                    <INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f311 READONLY VALUE="5" ID=f00>
                </td>
                <td CLASS=f0 ID=c10>
                    <INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f321 MAXLENGTH=1 onBlur="j8(this)" ID=f10>
                </td>
                <td CLASS=f0 ID=c20><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f331 MAXLENGTH=1 onBlur="j8(this)" ID=f20></td>
                <td CLASS=g0 ID=c30><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f341 MAXLENGTH=1 onBlur="j8(this)" ID=f30></td>
                <td CLASS=f0 ID=c40><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f351 READONLY VALUE="3" ID=f40></td>
                <td CLASS=f0 ID=c50><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f361 MAXLENGTH=1 onBlur="j8(this)" ID=f50></td>
                <td CLASS=g0 ID=c60><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f371 MAXLENGTH=1 onBlur="j8(this)" ID=f60></td>
                <td CLASS=f0 ID=c70><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f381 READONLY VALUE="6" ID=f70></td>
                <td CLASS=f0 ID=c80><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f391 MAXLENGTH=1 onBlur="j8(this)" ID=f80></td>
            </tr>
            <tr>
                <td CLASS=e0 ID=c01><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f312 READONLY VALUE="2" ID=f01></td>
                <td CLASS=c0 ID=c11><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f322 MAXLENGTH=1 onBlur="j8(this)" ID=f11></td>
                <td CLASS=c0 ID=c21><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f332 MAXLENGTH=1 onBlur="j8(this)" ID=f21></td>
                <td CLASS=e0 ID=c31><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f342 READONLY VALUE="9" ID=f31></td>
                <td CLASS=c0 ID=c41><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f352 MAXLENGTH=1 onBlur="j8(this)" ID=f41></td>
                <td CLASS=c0 ID=c51><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f362 READONLY VALUE="8" ID=f51></td>
                <td CLASS=e0 ID=c61><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f372 MAXLENGTH=1 onBlur="j8(this)" ID=f61></td>
                <td CLASS=c0 ID=c71><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f382 READONLY VALUE="1" ID=f71></td>
                <td CLASS=c0 ID=c81><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f392 MAXLENGTH=1 onBlur="j8(this)" ID=f81></td>
            </tr>
            <tr>
                <td CLASS=e0 ID=c02><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f313 MAXLENGTH=1 onBlur="j8(this)" ID=f02></td>
                <td CLASS=c0 ID=c12><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f323 READONLY VALUE="3" ID=f12></td>
                <td CLASS=c0 ID=c22><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f333 MAXLENGTH=1 onBlur="j8(this)" ID=f22></td>
                <td CLASS=e0 ID=c32><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f343 MAXLENGTH=1 onBlur="j8(this)" ID=f32></td>
                <td CLASS=c0 ID=c42><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f353 READONLY VALUE="7" ID=f42></td>
                <td CLASS=c0 ID=c52><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f363 MAXLENGTH=1 onBlur="j8(this)" ID=f52></td>
                <td CLASS=e0 ID=c62><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f373 READONLY VALUE="4" ID=f62></td>
                <td CLASS=c0 ID=c72><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f383 MAXLENGTH=1 onBlur="j8(this)" ID=f72></td>
                <td CLASS=c0 ID=c82><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f393 MAXLENGTH=1 onBlur="j8(this)" ID=f82></td>
            </tr>
            <tr>
                <td CLASS=g0 ID=c03><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f314 READONLY VALUE="6" ID=f03></td>
                <td CLASS=f0 ID=c13><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f324 MAXLENGTH=1 onBlur="j8(this)" ID=f13></td>
                <td CLASS=f0 ID=c23><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f334 READONLY VALUE="5" ID=f23></td>
                <td CLASS=g0 ID=c33><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f344 READONLY VALUE="7" ID=f33></td>
                <td CLASS=f0 ID=c43><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f354 MAXLENGTH=1 onBlur="j8(this)" ID=f43></td>
                <td CLASS=f0 ID=c53><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f364 MAXLENGTH=1 onBlur="j8(this)" ID=f53></td>
                <td CLASS=g0 ID=c63><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f374 READONLY VALUE="2" ID=f63></td>
                <td CLASS=f0 ID=c73><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f384 READONLY VALUE="3" ID=f73></td>
                <td CLASS=f0 ID=c83><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f394 READONLY VALUE="1" ID=f83></td>
            </tr>
            <tr>
                <td CLASS=e0 ID=c04><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f315 MAXLENGTH=1 onBlur="j8(this)" ID=f04></td>
                <td CLASS=c0 ID=c14><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f325 MAXLENGTH=1 onBlur="j8(this)" ID=f14></td>
                <td CLASS=c0 ID=c24><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f335 MAXLENGTH=1 onBlur="j8(this)" ID=f24></td>
                <td CLASS=e0 ID=c34><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f345 READONLY VALUE="1" ID=f34></td>
                <td CLASS=c0 ID=c44><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f355 READONLY VALUE="5" ID=f44></td>
                <td CLASS=c0 ID=c54><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f365 READONLY VALUE="6" ID=f54></td>
                <td CLASS=e0 ID=c64><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f375 MAXLENGTH=1 onBlur="j8(this)" ID=f64></td>
                <td CLASS=c0 ID=c74><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f385 MAXLENGTH=1 onBlur="j8(this)" ID=f74></td>
                <td CLASS=c0 ID=c84><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f395 MAXLENGTH=1 onBlur="j8(this)" ID=f84></td>
            </tr>
            <tr>
                <td CLASS=e0 ID=c05><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f316 READONLY VALUE="7" ID=f05></td>
                <td CLASS=c0 ID=c15><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f326 READONLY VALUE="8" ID=f15></td>
                <td CLASS=c0 ID=c25><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f336 READONLY VALUE="1" ID=f25></td>
                <td CLASS=e0 ID=c35><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f346 MAXLENGTH=1 onBlur="j8(this)" ID=f35></td>
                <td CLASS=c0 ID=c45><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f356 MAXLENGTH=1 onBlur="j8(this)" ID=f45></td>
                <td CLASS=c0 ID=c55><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f366 READONLY VALUE="9" ID=f55></td>
                <td CLASS=e0 ID=c65><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f376 READONLY VALUE="6" ID=f65></td>
                <td CLASS=c0 ID=c75><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f386 MAXLENGTH=1 onBlur="j8(this)" ID=f75></td>
                <td CLASS=c0 ID=c85><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f396 READONLY VALUE="4" ID=f85></td>
            </tr>
            <tr>
                <td CLASS=g0 ID=c06><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f317 MAXLENGTH=1 onBlur="j8(this)" ID=f06></td>
                <td CLASS=f0 ID=c16><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f327 MAXLENGTH=1 onBlur="j8(this)" ID=f16></td>
                <td CLASS=f0 ID=c26><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f337 READONLY VALUE="3" ID=f26></td>
                <td CLASS=g0 ID=c36><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f347 MAXLENGTH=1 onBlur="j8(this)" ID=f36></td>
                <td CLASS=f0 ID=c46><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f357 READONLY VALUE="4" ID=f46></td>
                <td CLASS=f0 ID=c56><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f367 MAXLENGTH=1 onBlur="j8(this)" ID=f56></td>
                <td CLASS=g0 ID=c66><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f377 MAXLENGTH=1 onBlur="j8(this)" ID=f66></td>
                <td CLASS=f0 ID=c76><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f387 READONLY VALUE="8" ID=f76></td>
                <td CLASS=f0 ID=c86><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f397 MAXLENGTH=1 onBlur="j8(this)" ID=f86></td>
            </tr>
            <tr>
                <td CLASS=e0 ID=c07><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f318 MAXLENGTH=1 onBlur="j8(this)" ID=f07></td>
                <td CLASS=c0 ID=c17><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f328 READONLY VALUE="5" ID=f17></td>
                <td CLASS=c0 ID=c27><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f338 MAXLENGTH=1 onBlur="j8(this)" ID=f27></td>
                <td CLASS=e0 ID=c37><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f348 READONLY VALUE="8" ID=f37></td>
                <td CLASS=c0 ID=c47><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f358 MAXLENGTH=1 onBlur="j8(this)" ID=f47></td>
                <td CLASS=c0 ID=c57><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f368 READONLY VALUE="3" ID=f57></td>
                <td CLASS=e0 ID=c67><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f378 MAXLENGTH=1 onBlur="j8(this)" ID=f67></td>
                <td CLASS=c0 ID=c77><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f388 MAXLENGTH=1 onBlur="j8(this)" ID=f77></td>
                <td CLASS=c0 ID=c87><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f398 READONLY VALUE="6" ID=f87></td>
            </tr>
            <tr>
                <td CLASS=i0 ID=c08><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f319 MAXLENGTH=1 onBlur="j8(this)" ID=f08></td>
                <td CLASS=h0 ID=c18><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f329 READONLY VALUE="2" ID=f18></td>
                <td CLASS=h0 ID=c28><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f339 MAXLENGTH=1 onBlur="j8(this)" ID=f28></td>
                <td CLASS=i0 ID=c38><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f349 MAXLENGTH=1 onBlur="j8(this)" ID=f38></td>
                <td CLASS=h0 ID=c48><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f359 READONLY VALUE="1" ID=f48></td>
                <td CLASS=h0 ID=c58><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f369 MAXLENGTH=1 onBlur="j8(this)" ID=f58></td>
                <td CLASS=i0 ID=c68><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f379 MAXLENGTH=1 onBlur="j8(this)" ID=f68></td>
                <td CLASS=h0 ID=c78><INPUT CLASS=d0 SIZE=2 AUTOCOMPLETE=off NAME=b80f389 MAXLENGTH=1 onBlur="j8(this)" ID=f78></td>
                <td CLASS=h0 ID=c88><INPUT CLASS=s0 SIZE=2 AUTOCOMPLETE=off NAME=sb80f399 READONLY VALUE="7" ID=f88></td>
            </tr>
        </table>
    </div>
    <INPUT NAME=prefix ID="prefix" TYPE=hidden VALUE="b80f3">
    <!-- dgdrhdf -->
</body>

</html>