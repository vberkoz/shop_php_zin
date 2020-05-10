<?php

class AdminOrderController extends AdminBase
{
    /**
     * Show orders list
     * @return bool
     */
    public function actionIndex()
    {
        self::checkAdmin();
        $orders = Order::getOrders();
        require_once ROOT . '/views/admin_order/index.php';
        return true;
    }

    /**
     * Show single order
     * @param $id
     * @return bool
     */
    public function actionView($id)
    {
        self::checkAdmin();
        $order = Order::getOrder($id);
        $productsCount = json_decode($order['bag'], true);
        $productsIds = array_keys($productsCount);
        $products = Product::getProductsByIds($productsIds);

        if (isset($_POST['submit'])) {
            Order::update($id, $_POST['order_status']);
            header("Location: /admin/order");
        }

        require_once ROOT . '/views/admin_order/view.php';
        return true;
    }

    /**
     * Delete order
     * @param $id
     * @return bool
     */
    public function actionDelete($id) {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Order::delete($id);
            header("Location: /admin/order");
        }
        require_once ROOT . '/views/admin_order/delete.php';
        return true;
    }
}