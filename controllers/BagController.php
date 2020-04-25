<?php

class BagController
{
    /**
     * Bag page action
     * @return bool
     */
    public function actionIndex() {
        $bag = false;
        $bag = Bag::getProducts();

        if ($bag) {
            $productsIds = array_keys($bag);
            $products = Product::getProductsByIds($productsIds);
            $totalPrice = Bag::calculateTotalPrice($products);
        }

        require_once ROOT . '/views/bag/index.php';
        return true;
    }

    /**
     * Adds product to bag
     * @param $id
     */
    public function actionAdd($id) {
        Bag::addProduct($id);
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    /**
     * Adds product to bag using ajax
     * @param $id
     * @return bool
     */
    public function actionAddajax($id) {
        echo Bag::addProduct($id);
        return true;
    }
}