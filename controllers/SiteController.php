<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

/**
 * Class SiteController
 */
class SiteController
{
    /**
     * Loads main page
     * @return bool
     */
    public function actionIndex() {
        $categories = Category::getCategories();
        $products = Product::getProducts(4);
        require_once ROOT . '/views/site/index.php';

        return true;
    }
}