<?php

/**
 * Class NewsController
 */
class NewsController
{
    /**
     * Displays news list
     * @return bool
     */
    public function actionIndex() {
        $newsList = News::getNewsList();
        require_once ROOT . '/views/news/index.php';
        return true;
    }

    /**
     * Displays single article
     * @param $id
     * @return bool
     */
    public function actionView($id) {
        if ($id) {
            $newsItem = News::getNewsItemByID($id);
            require_once ROOT . '/views/news/single.php';
        }
        return true;
    }

}