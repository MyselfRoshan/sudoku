<head>
    <title>Sudoku</title>
    <link rel="stylesheet" type="text/css" href="/resources/css/main.css" />
    <?php if (isset($scripts) && count($scripts) > 0) : ?>
        <?php foreach ($scripts as $script) : ?>
            <script defer src="<?= $script ?>"></script>
        <?php endforeach ?>
    <?php endif ?>
</head>