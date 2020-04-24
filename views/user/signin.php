<?php include_once ROOT . '/views/layouts/header.php'?>

<span>
    <h2>Sign In user</h2>

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><p><?php echo $error; ?></p></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="#" method="post">
        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"><br>
        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"><br>
        <input type="submit" name="submit" value="Sign In">
    </form>
</span>

<?php include_once ROOT . '/views/layouts/footer.php'?>