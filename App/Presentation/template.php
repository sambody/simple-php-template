<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="<?= strtolower(str_replace(' ', '-', $pageTitle))?>">

<div class="page-wrap page-wrap-header">

    <header class="page-section page-section-header">

        <?php include_once 'page-header.php'; ?>

    </header>

</div>

<div class="page-wrap page-wrap-content">

    <div class="page-section page-section-content">

        <?php include_once $content; ?>

    </div>

</div>


<div class="page-wrap page-wrap-footer">

    <footer class="page-section page-section-footer">

        <?php include_once 'page-footer.php'; ?>

    </footer>

</div>


</body>
</html>