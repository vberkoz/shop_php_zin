<?php include_once ROOT . '/views/layouts/admin_header.php'?>

    <div>
        <h2>Orders</h2>
        <a href="/admin/order/create">Add Order</a>
        <?php if ($orders): ?>
            <table style="margin-top: 20px;">
                <tr>
                    <th>Id</th>
                    <th>User name</th>
                    <th>User phone</th>
                    <th>Process date</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['created_at']; ?></td>
                        <td><?php echo Order::STATUS_CAPTIONS[$order['order_status']]; ?></td>
                        <td><a href="/admin/order/view/<?php echo $order['id']; ?>">View</a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>">Remove</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>There are no orders yet</p>
        <?php endif; ?>
    </div>

<?php include_once ROOT . '/views/layouts/admin_footer.php'?>