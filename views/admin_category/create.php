<?php include_once ROOT . '/views/layouts/admin_header.php'?>

<span>
    <h2>Add Category</h2>

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><p><?php echo $error; ?></p></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="#" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Title"><br>
        <select name="visibility">
            <option value="1">Visible</option>
            <option value="0">Not Visible</option>
        </select><br>
        <input type="number" name="sort_order" placeholder="Sort Order"><br>
        <input type="submit" name="submit" value="Add Category">
    </form>
</span>

<?php include_once ROOT . '/views/layouts/admin_footer.php'?>