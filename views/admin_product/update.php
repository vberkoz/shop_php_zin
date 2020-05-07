<?php include_once ROOT . '/views/layouts/admin_header.php'?>

<span>
    <h2>Edit Product</h2>

    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><p><?php echo $error; ?></p></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="#" method="post" style="width: 291px;" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Title" value="<?php echo $product['title']; ?>"><br>
        <select name="category_id">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>"
                        <?php if ($category['id'] == $product['category_id']) echo " selected='selected'"; ?>>
                    <?php echo $category['name']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <input type="text" name="product_id" placeholder="Product Id" value="<?php echo $product['product_id']; ?>"><br>
        <input type="number" name="price" placeholder="Price" value="<?php echo $product['price']; ?>"><br>
        <select name="availability">
            <option value="1" <?php if ($product['availability'] == 1) echo " selected='selected'"; ?>>Available</option>
            <option value="0" <?php if ($product['availability'] == 0) echo " selected='selected'"; ?>>Not Available</option>
        </select><br>
        <input type="text" name="brand" placeholder="Brand" value="<?php echo $product['brand']; ?>"><br>
        <img src="<?php echo $image; ?>" alt="<?php echo $image; ?>" style="width: 291px;">
        <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg"><br>
        <textarea name="description" placeholder="Description"><?php echo $product['description']; ?></textarea><br>
        <select name="is_new">
            <option value="0" <?php if ($product['is_new'] == 0) echo " selected='selected'"; ?>>Not New</option>
            <option value="1" <?php if ($product['is_new'] == 1) echo " selected='selected'"; ?>>New</option>
        </select><br>
        <select name="is_recommended">
            <option value="0" <?php if ($product['is_recommended'] == 0) echo " selected='selected'"; ?>>Not Recommended</option>
            <option value="1" <?php if ($product['is_recommended'] == 1) echo " selected='selected'"; ?>>Recommended</option>
        </select><br>
        <select name="visibility">
            <option value="1" <?php if ($product['visibility'] == 1) echo " selected='selected'"; ?>>Visible</option>
            <option value="0" <?php if ($product['visibility'] == 0) echo " selected='selected'"; ?>>Not Visible</option>
        </select><br>
        <input type="submit" name="submit" value="Save">
    </form>
</span>

<?php include_once ROOT . '/views/layouts/admin_footer.php'?>