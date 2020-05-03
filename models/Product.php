<?php

class Product
{
    const SHOW_BY_DEFAULT = 8;

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
        $offset = ($page - 1) * $count;

        $categorySQL = '';
        if ($categoryId > 1) {
            $categorySQL = "AND category_id = $categoryId ";
        }

        $db = Db::getConnection();

        $products = [];

        $result = $db->query("SELECT id, title, category_id, product_id, price, image, is_new 
                                       FROM products
                                       WHERE visibility = 1 $categorySQL
                                       ORDER BY id DESC
                                       LIMIT $count
                                       OFFSET $offset");

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['category_id'] = $row['category_id'];
            $products[$i]['product_id'] = $row['product_id'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['image'] = $row['image'];
            $products[$i]['is_new'] = $row['is_new'];
            $i ++;
        }

        return $products;
    }

    /**
     * Gets products list for admin panel
     * @return array
     */
    public static function getProductsForAdmin() {
        $db = Db::getConnection();

        $products = [];

        $result = $db->query("SELECT id, title, category_id, product_id, price, image, is_new 
                                       FROM products
                                       ORDER BY id DESC");

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['category_id'] = $row['category_id'];
            $products[$i]['product_id'] = $row['product_id'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['image'] = $row['image'];
            $products[$i]['is_new'] = $row['is_new'];
            $i ++;
        }

        return $products;
    }

    /**
     * Gets all recommended products
     * @return array
     */
    public static function getFeaturedProducts() {$db = Db::getConnection();

        $products = [];

        $result = $db->query("SELECT id, title, category_id, price, image, is_new 
                                       FROM products
                                       WHERE visibility = 1 AND is_recomended = 1
                                       ORDER BY id DESC");

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['category_id'] = $row['category_id'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['image'] = $row['image'];
            $products[$i]['is_new'] = $row['is_new'];
            $i ++;
        }

        return $products;
    }

    /**
     * Gets products list by ids
     * Gets single product by id
     * @param $productId
     * @return mixed
     */
    public static function getProduct($productId) {
        $productId = intval($productId);

        if ($productId) {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM products WHERE id = $productId");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }

        return false;
    }

    /**
     *
     * @param $idsArray
     * @return array
     */
    public static function getProductsByIds($idsArray) {
        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT id, product_id, title, category_id, price 
                FROM products 
                WHERE availability = 1 AND id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        $products = [];
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['product_id'] = $row['product_id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['category_id'] = $row['category_id'];
            $products[$i]['price'] = $row['price'];
            $i ++;
        }

        return $products;
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

    public static function deleteProduct($id) {
        $id = intval($id);

        $db = Db::getConnection();

        $sql = 'DELETE FROM products WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }
}