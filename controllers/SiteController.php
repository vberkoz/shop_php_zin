<?php

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