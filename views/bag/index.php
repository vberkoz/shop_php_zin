<?php include_once ROOT . '/views/layouts/header.php'?>

<div style="margin: 0 auto;">
    <?php if ($bag): ?>
        <table>
            <tr><th>Id</th><th>Title</th><th>Number</th><th>Price per unit</th><th>Price total</th></tr>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['product_id']; ?></td>
                <td>
                    <a href="/product/<?php echo $product['id']; ?>/<?php echo $product['category_id']; ?>">
                        <?php echo $product['title']; ?>
                    </a>
                </td>
                <td><?php echo $bag[$product['id']]; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['price'] * $bag[$product['id']]; ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4"><b>Bag cost</b></td>
                <td><b><?php echo $totalPrice; ?></b></td>
            </tr>
        </table>
    <?php else: ?>
        <p>Bag is empty</p>
    <?php endif; ?>
</div>

<?php include_once ROOT . '/views/layouts/footer.php'?>