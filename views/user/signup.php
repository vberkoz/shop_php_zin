<?php include_once ROOT . '/views/layouts/header.php'?>

<span>
    <h2>Sign Up user</h2>

    <?php if (isset($result) && $result): ?>
        <p>User <b><?php echo $name; ?></b> with email <b><?php echo $email; ?></b>
            is successfully registered. Thank you!</p>
    <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><p><?php echo $error; ?></p></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="#" method="post">
            <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"><br>
            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"><br>
            <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"><br>
            <input type="submit" name="submit" value="Sign Up">
        </form>
    <?php endif; ?>
</span>

<?php include_once ROOT . '/views/layouts/footer.php'?>