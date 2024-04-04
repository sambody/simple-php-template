<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ($pageTitle ?? 'SiteName'); ?></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body class="<?php echo (isset($pageTitle) ? slugify($pageTitle) : '') ?>">
