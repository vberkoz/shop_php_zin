<?php

class AdminProductController extends AdminBase
{
    /**
     * Products list
     * @return bool
     */
    public function actionIndex() {
        self::checkAdmin();
        $products = Product::getProductsForAdmin();
        require_once ROOT . '/views/admin_product/index.php';
        return true;
    }

    /**
     * Remove product confirm page
     * @param $id
     * @return bool
     */
    public function actionDelete($id) {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Product::deleteProduct($id);
            header("Location: /admin/product");
        }
        require_once ROOT . '/views/admin_product/delete.php';
        return true;
    }
}