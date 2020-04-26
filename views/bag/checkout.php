<?php include_once ROOT . '/views/layouts/header.php'?>

    <div style="width: 300px;">
        <h2>Your bag</h2>
        <?php if ($result): ?>
            <p>Your order has been processed. We will contact you shortly. Thank you!</p>
        <?php else: ?>
            <p>Selected items <?php echo $totalNumber; ?> totaling £<?php echo $totalPrice; ?>.</p>
            <?php if (!$result): ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><p><?php echo $error; ?></p></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <p>To process order complete form. Our manager will contact you shortly.</p>

                <form action="#" method="post">
                    <input type="text" name="userName" placeholder="Name" value="<?php echo $userName; ?>" style="width: 300px;"><br>
                    <input type="number" name="userPhone" placeholder="Phone" value="<?php echo $userPhone; ?>" style="width: 300px;"><br>
                    <textarea name="userComment" placeholder="Comment" value="<?php echo $userComment; ?>"></textarea><br>
                    <input type="submit" name="submit" value="Process">
                </form>
            <?php endif; ?>
        <?php endif; ?>
    </div>

<?php include_once ROOT . '/views/layouts/footer.php'?>