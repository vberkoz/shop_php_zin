<?php

/**
 * Class Category
 */
class Category
{
    /**
     * Get categories list
     * @return array
     */
    public static function getCategories() {
        $db = Db::getConnection();

        $categories = [];

        $result = $db->query("SELECT id, name
                                       FROM categories
                                       ORDER BY sort_order ASC");

        $i = 0;
        while ($row = $result->fetch()) {
            $categories[$i]['id'] = $row['id'];
            $categories[$i]['name'] = $row['name'];
            $i++;
        }

        return $categories;
    }
}