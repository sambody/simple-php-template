<h1>Login</h1>
<?php if (! empty($error)) : ?>
    <p class="message-error"><?= $error ?></p>
<?php endif; ?>
<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <label>Email: <input type="text" name="email" id="form-email" required></label>
    <label>Paswoord: <input type="password" name="paswoord" id="form-paswoord" required></label>
    <input type="hidden" name="action" value="login">
    <input type="submit" value="Go">
</form>
