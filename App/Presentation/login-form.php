<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
        label {
            display: block;
            padding: 5px 0;
        }
    </style>
</head>
<body>
<h1>Login</h1>
<?php if ($error) : ?>
    <p class="message-error"><?= $error ?></p>
<?php endif; ?>
<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <label>Email: <input type="text" name="email" id="form-email" required></label>
    <label>Paswoord: <input type="password" name="paswoord" id="form-paswoord" required></label>
    <input type="hidden" name="action" value="login">
    <input type="submit" value="Go">
</form>



<!-- Debug -->
<br>
<br>
    Session login:
    <pre><?php var_dump($sessionLogin); ?></pre>

<?php if (isset($alleGebruikers)): ?>
    <pre><?php print_r($alleGebruikers); ?></pre>
<?php endif; ?>



</body>
</html>