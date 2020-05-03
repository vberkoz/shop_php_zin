<?php include_once ROOT . '/views/layouts/admin_header.php'?>

    <div>
        <h2>Delete product #<?php echo $id; ?></h2>

        <p>Are you sure you want delete the product?</p>

        <form method="POST">
            <input type="submit" name="submit" value="Delete">
        </form>
    </div>

<?php include_once ROOT . '/views/layouts/admin_footer.php'?>