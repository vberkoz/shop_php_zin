<?php include_once ROOT . '/views/layouts/admin_header.php'?>

    <div>
        <h2>Products</h2>
        <a href="/admin/product/create">Add Product</a>
        <?php if ($products): ?>
            <table>
                <tr><th>Id</th><th>Article</th><th>Title</th><th>Price per unit</th><th></th></tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['product_id']; ?></td>
                        <td><?php echo $product['title']; ?></td>
                        <td>£<?php echo $product['price']; ?></td>
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>">Edit</a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>">Remove</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>There are no products yet</p>
        <?php endif; ?>
    </div>

<?php include_once ROOT . '/views/layouts/admin_footer.php'?>