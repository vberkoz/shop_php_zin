<?php include_once ROOT . '/views/layouts/header.php'?>

<div>
    <h2>Edit user data</h2>
    <h3>You are signed in as <?php echo $username; ?>!</h3>

    <?php if (isset($result) && $result): ?>
        <p>User <b><?php echo $username; ?></b> with email <b><?php echo $user['email']; ?></b>
            is successfully updated.</p>
    <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><p><?php echo $error; ?></p></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="#" method="post">
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>"><br>
            <input type="password" name="secret" placeholder="Password" value="<?php echo $secret; ?>"><br>
            <input type="password" name="secret2" placeholder="Password again" value="<?php echo $secret2; ?>"><br>
            <input type="submit" name="submit" value="Save">
        </form>
    <?php endif; ?>
</div>

<?php include_once ROOT . '/views/layouts/footer.php'?>