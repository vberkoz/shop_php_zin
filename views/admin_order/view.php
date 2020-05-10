<?php include_once ROOT . '/views/layouts/admin_header.php'?>

    <div>
        <h2>Order #<?php echo $order['id']; ?></h2>
        <form action="#" method="post">
            <table style="margin-top: 20px;">
                <tr><td>Order number</td><td><?php echo $order['id']; ?></td></tr>
                <tr><td>Client name</td><td><?php echo $order['user_name']; ?></td></tr>
                <tr><td>Client phone</td><td><?php echo $order['user_phone']; ?></td></tr>
                <tr><td>Client comment</td><td><?php echo $order['user_comment']; ?></td></tr>
                <tr><td>Client ID</td><td><?php echo $order['user_id']; ?></td></tr>
                <tr>
                    <td><strong>Order status</strong></td>
                    <td>
                        <select name="order_status">
                            <?php foreach (Order::STATUS_CAPTIONS as $key => $value): ?>
                                <option value="<?php echo $key; ?>"
                                    <?php if ($key == $order['order_status']) echo ' selected="selected"'; ?>>
                                    <?php echo $value; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr><td><strong>Order date</strong></td><td><?php echo $order['created_at']; ?></td></tr>
            </table>
            <h3>Order products</h3>
            <table>
                <tr><th>ID</th><th>Product ID</th><th>Title</th><th>Price</th><th>Count</th></tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['product_id']; ?></td>
                        <td><?php echo $product['title']; ?></td>
                        <td>£<?php echo $product['price']; ?></td>
                        <td><?php echo $productsCount[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <input type="submit" name="submit" value="Save">
        </form>
    </div>

<?php include_once ROOT . '/views/layouts/admin_footer.php'?>