<?php

/**
 * Class Product
 */
class Product
{
    const SHOW_BY_DEFAULT = 4;

    /**
     * Gets products list by category
     * @param int $count
     * @param int $page
     * @param int $categoryId
     * @return array
     */
    public static function getProducts($count = self::SHOW_BY_DEFAULT, $page = 1, $categoryId = 1) {
        $count = intval($count);
        $categoryId = intval($categoryId);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $categorySQL = '';
        if ($categoryId > 1) {
            $categorySQL = "AND category_id = $categoryId ";
        }

        $db = Db::getConnection();

        $products = [];

        $result = $db->query("SELECT id, title, price, image, is_new 
                                       FROM products
                                       WHERE visibility = 1 $categorySQL
                                       ORDER BY id DESC
                                       LIMIT $count
                                       OFFSET $offset");

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['image'] = $row['image'];
            $products[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $products;
    }

    /**
     * Gets single product by id
     * @param $productId
     * @return mixed
     */
    public static function getProduct($productId) {
        $productId = intval($productId);

        if ($productId) {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM products WHERE id=$productId");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    /**
     * Gets products number in category
     * @param $categoryId
     * @return mixed
     */
    public static function getProductsNumber($categoryId) {
        $categoryId = intval($categoryId);

        $db = Db::getConnection();

        $categorySQL = '';
        if ($categoryId > 1) {
            $categorySQL = "AND category_id = $categoryId ";
        }

        $result = $db->query("SELECT count(id) AS count 
                                       FROM products 
                                       WHERE availability = 1 $categorySQL");

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        return $row['count'];
    }
}