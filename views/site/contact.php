<?php include_once ROOT . '/views/layouts/header.php'?>

<span>
    <h2>Send message</h2>

    <?php if (isset($result) && $result): ?>
        <p>Your message has been sent successfully. We will contact you shortly. Thank you!</p>
    <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
            <?php foreach ($errors as $error): ?>
                <li><p><?php echo $error; ?></p></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <form action="#" method="post">
            <input type="email" name="email" placeholder="E-mail" value="<?php echo $userEmail; ?>" style="width: 300px;"><br>
            <textarea name="message" placeholder="Message" value="<?php echo $userText; ?>"></textarea><br>
            <input type="submit" name="submit" value="Send">
        </form>
    <?php endif; ?>
</span>

<?php include_once ROOT . '/views/layouts/footer.php'?>