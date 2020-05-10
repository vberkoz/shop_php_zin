<?php include_once ROOT . '/views/layouts/admin_header.php'?>

<span>
    <h2>Add Product</h2>

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><p><?php echo $error; ?></p></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="#" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Title" value=""><br>
        <select name="category_id">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
            <?php endforeach; ?>
        </select><br>
        <input type="text" name="product_id" placeholder="Product Id"><br>
        <input type="number" name="price" placeholder="Price"><br>
        <select name="availability">
            <option value="1">Available</option>
            <option value="0">Not Available</option>
        </select><br>
        <input type="text" name="brand" placeholder="Brand"><br>
        <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg"><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <select name="is_new">
            <option value="0">Not New</option>
            <option value="1">New</option>
        </select><br>
        <select name="is_recommended">
            <option value="0">Not Recommended</option>
            <option value="1">Recommended</option>
        </select><br>
        <select name="visibility">
            <option value="1">Visible</option>
            <option value="0">Not Visible</option>
        </select><br>
        <input type="submit" name="submit" value="Add Product">
    </form>
</span>

<?php include_once ROOT . '/views/layouts/admin_footer.php'?>