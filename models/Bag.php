<?php

class Bag
{
    /**
     * Adds product to bag and saves it into session
     * @param $id
     * @return int
     */
    public static function addProduct($id) {
        $id = intval($id);
        $bag = [];

        if (isset($_SESSION['products'])) $bag = $_SESSION['products'];

        if (array_key_exists($id, $bag)) {
            $bag[$id] ++;
        } else {
            $bag[$id] = 1;
        }

        $_SESSION['products'] = $bag;

        return self::countItems();
    }

    /**
     * Calculates products number in bag
     * @return int
     */
    public static function countItems() {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count += $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    /**
     * Gets products from bag
     * @return bool
     */
    public static function getProducts() {
        if (isset($_SESSION['products'])) return $_SESSION['products'];
        return false;
    }

    /**
     * Calculates products total price in bag
     * @param $products
     * @return float|int
     */
    public static function calculateTotalPrice($products) {
        $bag = self::getProducts();

        $total = 0;

        if ($bag) {
            foreach ($products as $item) {
                $total += $item['price'] * $bag[$item['id']];
            }
        }

        return $total;
    }
}