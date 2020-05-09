<?php include_once ROOT . '/views/layouts/admin_header.php'?>

    <div>
        <h2>Categories</h2>
        <a href="/admin/category/create">Add Category</a>
        <?php if ($categories): ?>
            <table style="margin-top: 20px;">
                <tr><th>Id</th><th>Title</th><th>Sort Order</th><th>Visibility</th><th></th></tr>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['title']; ?></td>
                        <td><?php echo $category['sort_order']; ?></td>
                        <td><?php echo $category['visibility']; ?></td>
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>">Edit</a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>">Remove</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>There are no categories yet</p>
        <?php endif; ?>
    </div>

<?php include_once ROOT . '/views/layouts/admin_footer.php'?>