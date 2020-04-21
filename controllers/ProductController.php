<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

/**
 * Class ProductController
 */
class ProductController
{
    /**
     * Loads products list page
     * @param int $categoryId
     * @return bool
     */
    public function actionIndex($categoryId = 1) {
        $categories = Category::getCategories();
        $products = Product::getProducts(10, $categoryId);
        require_once ROOT . '/views/product/index.php';

        return true;
    }

    /**
     * Loads single product page
     * @param $productId
     * @return bool
     */
    public function actionShow($productId) {
        $categories = Category::getCategories();
        $product = Product::getProduct($productId);
        require_once ROOT . '/views/product/show.php';
        return true;
    }
}