<?php include_once 'partials/header-html.php'; ?>
<?php include_once 'partials/header.php'; ?>

<?php
if (isset($content)) {
    include_once $content;
} else {
    echo '<h1>Sorry, content not found...</h1>';
}
?>

<?php include_once 'partials/footer.php'; ?>
<?php include_once 'partials/footer-html.php'; ?>
