<?php include_once ROOT . '/views/layouts/header.php'?>

<span style="margin-left: 30px;">
    <h2 style="margin-left: 10px;">Register user</h2>

    <?php if (isset($result) && $result): ?>
        <p style="margin-left: 10px;">User <b><?php echo $name; ?></b> with email <b><?php echo $email; ?></b>
            is successfully registered. Thank you!</p>
    <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="#" method="post">
            <input type="text"
                   name="name"
                   placeholder="Name"
                   value="<?php echo $name; ?>"
                   style="padding: 5px; margin: 5px;"><br>

            <input type="email"
                   name="email"
                   placeholder="E-mail"
                   value="<?php echo $email; ?>"
                   style="padding: 5px; margin: 5px;"><br>

            <input type="password"
                   name="password"
                   placeholder="Password"
                   value="<?php echo $password; ?>"
                   style="padding: 5px; margin: 5px;"><br>

            <input type="submit"
                   name="submit"
                   style="padding: 5px; margin: 5px;"
                   value="Register">
        </form>
    <?php endif; ?>
</span>

<?php include_once ROOT . '/views/layouts/footer.php'?>