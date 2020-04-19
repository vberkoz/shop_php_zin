<?php

/**
 * Class News
 */
class News
{

    /**
     * Returns single article with specified id
     * @param $id
     * @return mixed
     */
    public static function getNewsItemById($id) {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM news WHERE id=$id");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    /**
     * Returns an array of news items
     * @return array
     */
    public static function getNewsList() {
        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query("SELECT id, title, excerpt, created_at
                                       FROM news
                                       ORDER BY created_at DESC 
                                       LIMIT 10");

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['excerpt'] = $row['excerpt'];
            $newsList[$i]['created_at'] = $row['created_at'];
            $i++;
        }

        return $newsList;
    }

}