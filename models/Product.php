<?php

/**
 * Class Product
 */
class Product
{
    const SHOW_BY_DEFAULT = 10;

    /**
     * Gets products list by category
     * @param int $count
     * @param int $categoryId
     * @return array
     */
    public static function getProducts($count = self::SHOW_BY_DEFAULT, $categoryId = 1) {
        $count = intval($count);
        $categoryId = intval($categoryId);

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
                                       LIMIT $count");

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
}