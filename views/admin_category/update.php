<?php include_once ROOT . '/views/layouts/admin_header.php'?>

<span>
    <h2>Edit Category</h2>

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><p><?php echo $error; ?></p></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="#" method="post" style="width: 291px;" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Title" value="<?php echo $category['title']; ?>"><br>
        <select name="visibility">
            <option value="1" <?php if ($category['visibility'] == 1) echo " selected='selected'"; ?>>Visible</option>
            <option value="0" <?php if ($category['visibility'] == 0) echo " selected='selected'"; ?>>Not Visible</option>
        </select><br>
        <input type="number" name="sort_order" placeholder="Sort Order" value="<?php echo $category['sort_order']; ?>"><br>
        <input type="submit" name="submit" value="Save">
    </form>
</span>

<?php include_once ROOT . '/views/layouts/admin_footer.php'?>